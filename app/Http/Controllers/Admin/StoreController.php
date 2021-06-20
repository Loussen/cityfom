<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\StoreRequest;
use App\Models\Categories;
use App\Models\StoreImages;
use App\Models\Stores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
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
        $query = DB::table('stores AS s')
            ->selectRaw('s.*, (SELECT COUNT(f.id) FROM favourites AS f WHERE f.store_id = s.id GROUP BY s.id) AS fav_count, GROUP_CONCAT(DISTINCT si.image ORDER BY si.image SEPARATOR "&&&") AS store_images, GROUP_CONCAT(DISTINCT c.name_en ORDER BY c.name_en SEPARATOR "&&&") AS store_category')
            ->leftJoin('store_images as si', 'si.store_id','=','s.id')
            ->leftJoin('store_category as sc', 'sc.store_id','=','s.id')
            ->leftJoin('categories as c', 'c.id','=','sc.category_id')
            ->groupByRaw('s.id')
            ->orderBy('s.id','DESC');

        $pageCount = config('global.pagination_count');

        if(request('id')) {
            $query->whereRaw('s.id = '.intval(request('id')));
        }

        if(request('name')) {
            $query->whereRaw('s.name LIKE "%'.request('name').'%"');
        }

        if(request('type')) {
            $query->whereRaw('name LIKE "%'.request('name').'%"');

            $storeType = intval(request('type'));

            if($storeType == 1) {
                $query->whereRaw('cms_store_id = 0');
            } else {
                $query->whereRaw('cms_store_id > 0');
            }
        }

        if(request('status') && in_array(request('status'),[1,2])) {
            $filterStatus = intval(request('status'));

            if($filterStatus > 0)
                $query->whereRaw('s.status = '.$filterStatus);
        }

        if(request('partner_type') && in_array(request('partner_type'),[1,2])) {
            $partnerType = intval(request('partner_type'));

            if($partnerType > 0)
                $query->whereRaw('type = '.$partnerType);
        }

        if(request('category_id')) {
            $categoryId = intval(request('category_id'));
            $categoryExists = Categories::find($categoryId);

            if($categoryId > 0 && $categoryExists)
                $query->whereRaw('sc.category_id = '.$categoryId);
        }

        $query = $query->paginate($pageCount);
        $stores = $query->appends(request()->query());

        $status = config('global.status');
        $partnerTypes = config('global.partner_type');
        $storeTypes = config('global.store_type');
        $storeVerifications = config('global.store_verification');

        $categories = Categories::all();

        return view('admin.pages.store.index', compact('stores','status','partnerTypes','storeTypes','categories','storeVerifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        $partnerTypes = config('global.partner_type');
        return view('admin.pages.store.create',compact('categories','partnerTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreRequest $request)
    {
//        $iconName = null;
//        if($request->hasFile('icon') && $request->icon != '') {
//            $icon = $request->file('icon');
//            $iconName = time()."_".$icon->getClientOriginalName();
//
//            $iconType = explode(".",$iconName);
//            $iconType = end($iconType);
//
//            if(in_array(strtolower($iconType),['jpg','jpeg','png', 'ico']))
//            {
//                $icon->move(public_path().'/uploads/categories/',$iconName);
//            }
//            else
//            {
//                return redirect()->route('admin.category.create')->with(_sessionmessage(null, "Must be this type (jpg,jpeg,png,ico)", 'warning', true));
//            }
//        }
//
//        $categoryData = [
//            'name_en' => $request->name_en,
//            'name_az' => $request->name_az,
//            'name_ru' => $request->name_ru,
//            'name_es' => $request->name_es,
//            'icon' => $iconName,
//        ];
//
//        Categories::create($categoryData);

        return redirect()->route('admin.store.index')->with(_sessionmessage());
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
     * @param Categories $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $category)
    {
        return view('admin.pages.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CategoryRequest $request, $id)
    {
        $category = Categories::find($id);

        $iconName = $category->icon;
        if($request->hasFile('icon') && $request->icon != '') {
            $icon = $request->file('icon');
            $iconName = time()."_".$icon->getClientOriginalName();

            $iconType = explode(".",$iconName);
            $iconType = end($iconType);

            if(in_array(strtolower($iconType),['jpg','jpeg','png', 'ico']))
            {
                $icon->move(public_path().'/uploads/categories/',$iconName);

                delete_old_files(public_path().'/uploads/categories/'.$category->icon);
            }
            else
            {
                return redirect()->route('admin.category.edit', [$id])->with(_sessionmessage(null, "Must be this type (jpg,jpeg,png,ico)", 'warning', true));
            }
        }

        $categoryData = [
            'name_en' => $request->name_en,
            'name_az' => $request->name_az,
            'name_ru' => $request->name_ru,
            'name_es' => $request->name_es,
            'icon'    => $iconName
        ];

        $category->update($categoryData);

        return redirect()->route('admin.category.index')->with(_sessionmessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Stores $store
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Stores $store)
    {
        $images = StoreImages::where('store_id',$store->id)->get();

        foreach ($images as $image)
        {
            delete_old_files(public_path().'/uploads/stores/'.$image['image']);
        }

        DB::table("stores")->where('id',$store->id)->delete();
        DB::table("store_images")->where('store_id',$store->id)->delete();
        $arr = _sessionmessage(null, null, null, true);
        return response($arr);
    }

    public function destroyMultipleStore(Request $request)
    {
        $ids = $request->ids;
        $explodeIds = explode(",",$ids);

        foreach ($explodeIds as $id)
        {
            $images = StoreImages::where('store_id',$id)->get();

            foreach ($images as $image)
            {
                delete_old_files(public_path().'/uploads/stores/'.$image['image']);
            }
        }

        DB::table("store_images")->whereIn('store_id',$explodeIds)->delete();
        DB::table("stores")->whereIn('id',$explodeIds)->delete();
        $response = ['status' => 'OK'];
        return response()->json(['response' => $response]);
    }

    public function typeMultipleStore(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('ids') && $request->has('partner_type')) {
            $partnerType = intval($request->partner_type);
            $ids = $request->ids;
            $explodeIds = explode(",",$ids);

            if ($partnerType > 0 && count($explodeIds) > 0) {
                DB::table("stores")->whereIn('id',$explodeIds)
                    ->update(['type' => $partnerType]);

                $response = ['status' => 'OK', 'partner_type' => $partnerType];
            }
        }

        return response()->json(['response' => $response]);
    }

    public function statusMultipleStore(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('ids') && $request->has('status')) {
            $status = intval($request->status);
            $ids = $request->ids;
            $explodeIds = explode(",",$ids);

            if ($status > 0 && count($explodeIds) > 0) {
                DB::table("stores")->whereIn('id',$explodeIds)
                    ->update(['status' => $status]);

                $response = ['status' => 'OK', 'status_type' => $status];
            }
        }

        return response()->json(['response' => $response]);
    }

    public function changeStoreStatus(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('status') && $request->has('store_id')) {
            $status = intval($request->status);
            $storeId = intval($request->store_id);

            if ($status > 0 && $storeId > 0) {
                $store = Stores::find($storeId);

                $storeData = [
                    'status' => $status,
                ];

                $store->update($storeData);

                $response = ['status' => 'OK', 'status_type' => $status];
            }
        }

        return response()->json(['response' => $response]);
    }

    public function changeStorePartnerType(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('partner_type') && $request->has('store_id')) {
            $partnerType = intval($request->partner_type);
            $storeId = intval($request->store_id);

            if ($partnerType > 0 && $storeId > 0) {
                $store = Stores::find($storeId);

                $storeData = [
                    'type' => $partnerType,
                ];

                $store->update($storeData);

                $response = ['status' => 'OK', 'partner_type' => $partnerType];
            }
        }

        return response()->json(['response' => $response]);
    }

    public function changeStoreVerification(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('verification') && $request->has('store_id')) {
            $verification = intval($request->verification);
            $storeId = intval($request->store_id);

            if ($verification > 0 && $storeId > 0) {
                $store = Stores::find($storeId);

                $storeData = [
                    'verified' => $verification,
                ];

                $store->update($storeData);

                $response = ['status' => 'OK', 'verification_type' => $verification];
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
