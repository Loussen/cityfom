<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReportTypeRequest;
use App\Models\ReportType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportTypeController extends Controller
{
    public function __construct()
    {
//        $this->middleware('permission:school-list|school-create|school-edit|school-delete', ['only' => ['index', 'store']]);
//        $this->middleware('permission:school-create', ['only' => ['create', 'store']]);
//        $this->middleware('permission:school-edit', ['only' => ['edit', 'update']]);
//        $this->middleware('permission:school-delete', ['only' => ['destroy']]);
//        $this->middleware('permission:school-export', ['only' => ['export']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB::table('report_type AS rt')
            ->selectRaw('rt.*, sum((case when rs.type_id is not null AND rs.status = 1 then 1 else 0 end)) AS not_reviewed, sum((case when rs.type_id is not null AND rs.status = 2 then 1 else 0 end)) AS under_review, sum((case when rs.type_id is not null AND rs.status = 3 then 1 else 0 end)) AS closed, sum((case when rs.type_id is not null then 1 else 0 end)) AS total')
            ->leftJoin('report_store as rs', 'rs.type_id','=','rt.id')
            ->groupByRaw('rt.id');

        $pageCount = config('global.pagination_count');

        if(request('name')) {
            $query->whereRaw('name_en LIKE "%'.request('name').'%" or name_az LIKE "%'.request('name').'%" or name_ru LIKE "%'.request('name').'%" or name_es LIKE "%'.request('name').'%"');
        }

        if(request('status') && in_array(request('status'),[1,2])) {
            $filterStatus = intval(request('status'));

            if($filterStatus > 0)
                $query->whereRaw('status = '.$filterStatus);
        }

        $query = $query->paginate($pageCount);
        $reportTypes = $query->appends(request()->query());

        $status = config('global.status');

        return view('admin.pages.report_type.index', compact('reportTypes','status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.report_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ReportTypeRequest $request)
    {
        $reportTypeData = [
            'name_en' => $request->name_en,
            'name_az' => $request->name_az,
            'name_ru' => $request->name_ru,
            'name_es' => $request->name_es,
            'reorder' => $request->reorder ?? 0,
        ];

        ReportType::create($reportTypeData);

        return redirect()->route('admin.report_type.index')->with(_sessionmessage());
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
     * @param ReportType $reportType
     * @return \Illuminate\Http\Response
     */
    public function edit(ReportType $reportType)
    {
        return view('admin.pages.report_type.edit', compact('reportType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ReportTypeRequest $request, $id)
    {
        $reportType = ReportType::find($id);

        $reportTypeData = [
            'name_en' => $request->name_en,
            'name_az' => $request->name_az,
            'name_ru' => $request->name_ru,
            'name_es' => $request->name_es,
            'reorder'    => $request->reorder ?? 0
        ];

        $reportType->update($reportTypeData);

        return redirect()->route('admin.report_type.index')->with(_sessionmessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ReportType $reportType
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(ReportType $reportType)
    {
        $reportType->delete();
        $arr = _sessionmessage(null, null, null, true);
        return response($arr);
    }

    public function destroyMultipleReportType(Request $request)
    {
        $ids = $request->ids;
        $explodeIds = explode(",",$ids);

        DB::table("report_type")->whereIn('id',$explodeIds)->delete();
        $response = ['status' => 'OK'];
        return response()->json(['response' => $response]);
    }

    public function statusMultipleReportType(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('ids') && $request->has('status')) {
            $status = intval($request->status);
            $ids = $request->ids;
            $explodeIds = explode(",",$ids);

            if ($status > 0 && count($explodeIds) > 0) {
                DB::table("report_type")->whereIn('id',$explodeIds)
                    ->update(['status' => $status]);

                $response = ['status' => 'OK', 'status_type' => $status];
            }
        }

        return response()->json(['response' => $response]);
    }

    public function changeReportTypeStatus(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('status') && $request->has('report_type_id')) {
            $status = intval($request->status);
            $reportTypeId = intval($request->report_type_id);

            if ($status > 0 && $reportTypeId > 0) {
                $reportType = ReportType::find($reportTypeId);

                $reportTypeData = [
                    'status' => $status,
                ];

                $reportType->update($reportTypeData);

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
