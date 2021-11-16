<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmailTemplatesRequest;
use App\Models\EmailTemplates;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmailTemplatesController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('permission:email-templates-list|email-templates-create|email-templates-edit|email-templates-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:email-templates-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:email-templates-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:email-templates-delete', ['only' => ['destroy']]);
        $this->middleware('permission:email-templates-export', ['only' => ['export']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB::table('email_templates')
            ->selectRaw('email_templates.*');

        $pageCount = config('global.pagination_count');

        if(request('title')) {
            $query->whereRaw('title LIKE "%'.request('title').'%"');
        }

        if(request('slug')) {
            $query->whereRaw('slug LIKE "%'.request('slug').'%"');
        }

        if(request('status') && in_array(request('status'),[1,2])) {
            $filterStatus = intval(request('status'));

            if($filterStatus > 0)
                $query->whereRaw('status = '.$filterStatus);
        }

        $query = $query->paginate($pageCount);
        $emailTemplates = $query->appends(request()->query());

        $status = config('global.status');

        return view('admin.pages.email_templates.index', compact('emailTemplates','status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.email_templates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(EmailTemplatesRequest $request)
    {

        $emailTemplateData = [
            'title' => $request->title,
            'slug'  => slugGenerator($request->title,'_'),
            'subject_en' => $request->subject_en,
            'subject_az' => $request->subject_az,
            'subject_ru' => $request->subject_ru,
            'subject_es' => $request->subject_es,
            'content_en' => $request->content_en,
            'content_az' => $request->content_az,
            'content_ru' => $request->content_ru,
            'content_es' => $request->content_es,
        ];

        EmailTemplates::create($emailTemplateData);

        return redirect()->route($this->module_name.'.email_templates.index')->with(_sessionmessage());
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param EmailTemplates $emailTemplate
     * @return \Illuminate\Http\Response
     */
    public function edit(EmailTemplates $emailTemplate)
    {
        return view('admin.pages.email_templates.edit', compact('emailTemplate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(EmailTemplatesRequest $request, $id)
    {
        $emailTemplate = EmailTemplates::find($id);

        $emailTemplateData = [
            'title' => $request->title,
            'slug'  => slugGenerator($request->title,'_'),
            'subject_en' => $request->subject_en,
            'subject_az' => $request->subject_az,
            'subject_ru' => $request->subject_ru,
            'subject_es' => $request->subject_es,
            'content_en' => $request->content_en,
            'content_az' => $request->content_az,
            'content_ru' => $request->content_ru,
            'content_es' => $request->content_es,
        ];

        $emailTemplate->update($emailTemplateData);

        return redirect()->route($this->module_name.'.email_templates.index')->with(_sessionmessage());
    }

    public function statusMultipleEmailTemplate(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('ids') && $request->has('status')) {
            $status = intval($request->status);
            $ids = $request->ids;
            $explodeIds = explode(",",$ids);

            if ($status > 0 && count($explodeIds) > 0) {
                DB::table("email_templates")->whereIn('id',$explodeIds)
                    ->update(['status' => $status]);

                $response = ['status' => 'OK', 'status_type' => $status];
            }
        }

        return response()->json(['response' => $response]);
    }

    public function changeEmailTemplateStatus(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('status') && $request->has('email_template_id')) {
            $status = intval($request->status);
            $emailTemplateId = intval($request->email_template_id);

            if ($status > 0 && $emailTemplateId > 0) {
                $emailTemplate = EmailTemplates::find($emailTemplateId);

                $emailTemplateData = [
                    'status' => $status,
                ];

                $emailTemplate->update($emailTemplateData);

                $response = ['status' => 'OK', 'status_type' => $status];
            }
        }

        return response()->json(['response' => $response]);
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new SchoolExportMapping(), 'schools.xlsx');
    }
}
