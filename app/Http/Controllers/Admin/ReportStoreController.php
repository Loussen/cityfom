<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AppUsers;
use App\Models\ReportStore;
use App\Models\ReportType;
use App\Models\Stores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportStoreController extends Controller
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
        $query = DB::table('report_store AS rs')
            ->selectRaw('rs.*, au.firstname, au.lastname, au.email, s.name AS store_name, rt.name_en, rt.name_en AS type_name')
            ->leftJoin('app_users as au', 'au.id','=','rs.user_id')
            ->leftJoin('report_type as rt', 'rt.id','=','rs.type_id')
            ->join('stores AS s','s.id','=','rs.store_id');

        $pageCount = config('global.pagination_count');

        if(request('store_id')) {
            $storeId = intval(request('store_id'));

            if($storeId > 0)
            {
                $storeExists = Stores::find($storeId);

                if($storeExists)
                    $query->whereRaw('rs.store_id = '.$storeId);
            }
        }

        if(request('user_id')) {
            $userId = intval(request('user_id'));

            if($userId > 0)
            {
                $userExists = AppUsers::find($userId);

                if($userExists)
                    $query->whereRaw('rs.user_id = '.$userId);
            }
        }

        if(request('type_id')) {
            $typeId = intval(request('type_id'));

            if($typeId > 0)
            {
                $typeExists = ReportType::find($typeId);

                if($typeExists)
                    $query->whereRaw('rs.type_id = '.$typeId);
            }
        }

        if(request('status') && in_array(request('status'),[1,2,3])) {
            $status = intval(request('status'));

            if($status > 0)
                $query->whereRaw('rs.status = '.request('status'));
        }

        $query->orderBy('rs.created_at','DESC');

        $query = $query->paginate($pageCount);
        $reports = $query->appends(request()->query());

        $stores = Stores::all();
        $appUsers = AppUsers::all();
        $types = ReportType::all();
        $status = config('global.report_status');

        return view('admin.pages.report_store.index', compact('reports','stores','appUsers','types','status'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ReportStore $reportStore
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(ReportStore $reportStore)
    {
        DB::table("report_store")->where('id',$reportStore->id)->delete();
        $arr = _sessionmessage(null, null, null, true);
        return response($arr);
    }

    public function destroyMultipleReportStore(Request $request)
    {
        $ids = $request->ids;
        $explodeIds = explode(",",$ids);

        DB::table("report_store")->whereIn('id',$explodeIds)->delete();
        $response = ['status' => 'OK'];
        return response()->json(['response' => $response]);
    }

    public function statusMultipleReportStore(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('ids') && $request->has('status')) {
            $status = intval($request->status);
            $ids = $request->ids;
            $explodeIds = explode(",",$ids);

            if ($status > 0 && count($explodeIds) > 0) {
                DB::table("report_store")->whereIn('id',$explodeIds)
                    ->update(['status' => $status]);

                $response = ['status' => 'OK', 'status_type' => $status];
            }
        }

        return response()->json(['response' => $response]);
    }

    public function changeReportStoreStatus(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('status') && $request->has('report_id')) {
            $status = intval($request->status);
            $reportId = intval($request->report_id);

            if ($status > 0 && $reportId > 0) {
                $reportStore = ReportStore::find($reportId);

                $reportStoreData = [
                    'status' => $status,
                ];

                $reportStore->update($reportStoreData);

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
