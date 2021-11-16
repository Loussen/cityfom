<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoyaltyPointRequest;
use App\Models\AppUsers;
use App\Models\LoyaltyPoints;
use App\Models\Stores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoyaltyPointController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('permission:loyalty-point-list|loyalty-point-create|loyalty-point-edit|loyalty-point-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:loyalty-point-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:loyalty-point-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:loyalty-point-delete', ['only' => ['destroy']]);
        $this->middleware('permission:loyalty-point-export', ['only' => ['export']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB::table('loyalty_points AS lp')
            ->selectRaw('lp.*, au.firstname, au.lastname, au.email, s.name AS store_name')
            ->join('stores AS s','s.id','=','lp.store_id')
            ->join('app_users AS au','au.id','=','lp.user_id')
            ->whereRaw('lp.id = (SELECT MAX(lp2.id) FROM loyalty_points lp2 WHERE lp2.store_id = lp.store_id)')
            ->orderBy('lp.id','DESC')
            ->groupBy('lp.store_id')
            ;

        $pageCount = config('global.pagination_count');

        if(request('store_id')) {
            $storeId = intval(request('store_id'));

            if($storeId > 0)
            {
                $storeExists = Stores::find($storeId);

                if($storeExists)
                    $query->whereRaw('lp.store_id = '.$storeId);
            }
        }

        if(request('user_id')) {
            $userId = intval(request('user_id'));

            if($userId > 0)
            {
                $userExists = AppUsers::find($userId);

                if($userExists)
                    $query->whereRaw('lp.user_id = '.$userId);
            }
        }

        $query = $query->paginate($pageCount);
        $loyaltyPoints = $query->appends(request()->query());

        $stores = Stores::all();
        $users = AppUsers::all();

        return view('admin.pages.loyalty_point.index', compact('loyaltyPoints','stores','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stores = Stores::all();

        return view('admin.pages.loyalty_point.create', compact('stores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoyaltyPointRequest $request)
    {
        $userLoyaltyPointDesc = DB::table('loyalty_points AS lp')
            ->selectRaw('lp.*')
            ->join('stores AS s','s.id','=','lp.store_id')
            ->join('app_users AS au','au.id','=','lp.user_id')
            ->whereRaw('lp.id = (SELECT MAX(lp2.id) FROM loyalty_points lp2 WHERE lp2.store_id = lp.store_id) AND user_id = '.intval($request->user_id).' AND store_id = '.intval($request->store_id))->groupBy('lp.store_id')->first()
        ;

        $loyaltyPointData = [
            'user_id' => $request->user_id,
            'store_id'  => $request->store_id,
            'previous' => $userLoyaltyPointDesc->current,
            'current' => $request->save == 1 ? $userLoyaltyPointDesc->current + $request->points : $userLoyaltyPointDesc->current - $request->points,
        ];

        LoyaltyPoints::create($loyaltyPointData);

        return redirect()->route($this->module_name.'.loyalty_point.index')->with(_sessionmessage());
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
     * @param LoyaltyPoints $loyaltyPoint
     * @return \Illuminate\Http\Response
     */
    public function edit(LoyaltyPoints $loyaltyPoint)
    {
        return redirect()->route($this->module_name.'.loyalty_point.index')->with(_sessionmessage());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        return redirect()->route($this->module_name.'.loyalty_point.index')->with(_sessionmessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param LoyaltyPoints $loyaltyPoint
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(LoyaltyPoints $loyaltyPoint)
    {
        LoyaltyPoints::where('user_id',$loyaltyPoint->user_id)->where('store_id',$loyaltyPoint->store_id)->delete();
        $arr = _sessionmessage(null, null, null, true);
        return response($arr);
    }

    public function destroyMultipleLoyaltyPoint(Request $request)
    {
        $ids = $request->ids;
        $explodeIds = explode(",", $ids);

        foreach ($explodeIds as $id) {
            $loyaltyPoint = LoyaltyPoints::find($id);

            DB::table("loyalty_points")->where('user_id', $loyaltyPoint->user_id)->where('store_id', $loyaltyPoint->store_id)->delete();
        }

        $response = ['status' => 'OK'];
        return response()->json(['response' => $response]);

    }

    public function pointHistory(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('point_id')) {
            $pointId = intval($request->point_id);

            if ($pointId > 0) {
                $pointExists = LoyaltyPoints::find($pointId);

                if($pointExists) {
                    $pointHistory = DB::table('loyalty_points AS lp')
                        ->selectRaw('lp.*, s.name AS store_name, au.firstname, au.lastname, au.email')
                        ->join('stores AS s', 's.id', '=', 'lp.store_id')
                        ->join('app_users AS au', 'au.id', '=', 'lp.user_id')
                        ->where('lp.user_id', '=', $pointExists->user_id)
                        ->where('lp.store_id', '=', $pointExists->store_id)
                        ->orderBy('lp.id','DESC')
                        ->get();

                    $response = ['status' => 'OK', 'data' => $pointHistory];
                }
            } else {
                $response = ['status' => 'Not found'];
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
