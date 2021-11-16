<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CmsPagesRequest;
use App\Models\CmsPages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CmsPagesController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('permission:cms-pages-list|cms-pages-create|cms-pages-edit|cms-pages-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:cms-pages-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:cms-pages-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:cms-pages-delete', ['only' => ['destroy']]);
        $this->middleware('permission:cms-pages-export', ['only' => ['export']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB::table('cms_pages')
            ->selectRaw('cms_pages.*');

        $pageCount = config('global.pagination_count');

        if(request('title')) {
            $query->whereRaw('title LIKE "%'.request('title').'%"');
        }

        if(request('status') && in_array(request('status'),[1,2])) {
            $filterStatus = intval(request('status'));

            if($filterStatus > 0)
                $query->whereRaw('status = '.$filterStatus);
        }

        $query = $query->paginate($pageCount);
        $cmsPages = $query->appends(request()->query());

        $status = config('global.status');

        return view('admin.pages.cms_pages.index', compact('cmsPages','status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.cms_pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CmsPagesRequest $request)
    {

        $cmsPageData = [
            'title' => $request->title,
            'slug' => $request->slug,
            'content_en' => $request->content_en,
            'content_az' => $request->content_az,
            'content_ru' => $request->content_ru,
            'content_es' => $request->content_es,
        ];

        CmsPages::create($cmsPageData);

        return redirect()->route($this->module_name.'.cms_pages.index')->with(_sessionmessage());
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
     * @param CmsPages $cmsPage
     * @return \Illuminate\Http\Response
     */
    public function edit(CmsPages $cmsPage)
    {
        return view('admin.pages.cms_pages.edit', compact('cmsPage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CmsPagesRequest $request, $id)
    {
        $cmsPage = CmsPages::find($id);

        $cmsPageData = [
            'title' => $request->title,
            'slug' => $request->slug,
            'content_en' => $request->content_en,
            'content_az' => $request->content_az,
            'content_ru' => $request->content_ru,
            'content_es' => $request->content_es,
        ];

        $cmsPage->update($cmsPageData);

        return redirect()->route($this->module_name.'.cms_pages.index')->with(_sessionmessage());
    }

    public function statusMultipleCmsPage(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('ids') && $request->has('status')) {
            $status = intval($request->status);
            $ids = $request->ids;
            $explodeIds = explode(",",$ids);

            if ($status > 0 && count($explodeIds) > 0) {
                DB::table("cms_pages")->whereIn('id',$explodeIds)
                    ->update(['status' => $status]);

                $response = ['status' => 'OK', 'status_type' => $status];
            }
        }

        return response()->json(['response' => $response]);
    }

    public function changeCmsPageStatus(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('status') && $request->has('cms_page_id')) {
            $status = intval($request->status);
            $cmsPageId = intval($request->cms_page_id);

            if ($status > 0 && $cmsPageId > 0) {
                $cmsPage = CmsPages::find($cmsPageId);

                $cmsPageData = [
                    'status' => $status,
                ];

                $cmsPage->update($cmsPageData);

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
