<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AppUsers;
use App\Models\Stores;
use Illuminate\Support\Facades\DB;

class ReportNotificationController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('permission:report-notifications-list|report-notifications-create|report-notifications-edit|report-notifications-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:report-notifications-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:report-notifications-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:report-notifications-delete', ['only' => ['destroy']]);
        $this->middleware('permission:report-notifications-export', ['only' => ['export']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB::table('report_notifications AS rn')
            ->selectRaw('rn.*, au.firstname, au.lastname, au.email, s.name AS store_name')
            ->leftJoin('app_users as au', 'au.id','=','rn.user_id')
            ->join('push_notifications as pu', 'pu.id','=','rn.notification_id')
            ->leftJoin('stores as s', 's.id','=','pu.store_id')
        ;

        $pageCount = config('global.pagination_count');

        if(request('store_id')) {
            $storeId = intval(request('store_id'));

            if($storeId > 0)
            {
                $storeExists = Stores::find($storeId);

                if($storeExists)
                    $query->whereRaw('s.id = '.$storeId);
            }
        }

        if(request('user_id')) {
            $userId = intval(request('user_id'));

            if($userId > 0)
            {
                $userExists = AppUsers::find($userId);

                if($userExists)
                    $query->whereRaw('rn.user_id = '.$userId);
            }
        }

        $query->orderBy('rn.created_at','DESC');

        $query = $query->paginate($pageCount);
        $reports = $query->appends(request()->query());

        $stores = Stores::all();
        $appUsers = AppUsers::all();

        return view('admin.pages.report_notification.index', compact('reports','stores','appUsers'));
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new SchoolExportMapping(), 'schools.xlsx');
    }
}
