<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\StoreRequest;
use App\Models\Categories;
use App\Models\StoreCategory;
use App\Models\StoreImages;
use App\Models\Stores;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('permission:stores-list|stores-create|stores-edit|stores-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:stores-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:stores-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:stores-delete', ['only' => ['destroy']]);
        $this->middleware('permission:stores-export', ['only' => ['export']]);
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
        $weekdays = config('global.weekdays');
        return view('admin.pages.store.create',compact('categories','partnerTypes','weekdays'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        // Opening hours
        $openingHoursArr = $openingHoursArrEnd = [];
        if($request->has('weekday')) {
            $weekdays = $request->weekday;
            $from = $request->from;
            $to = $request->to;

            foreach ($weekdays as $keyWeekday => $valueWeekday) {

                if($to[$keyWeekday] == '00:00') {
                    $to[$keyWeekday] = '23:59';
                }

                if(isset($openingHoursArr[$valueWeekday])) {
                    $openingHoursArr[$valueWeekday] .= ";".$from[$keyWeekday]."-".$to[$keyWeekday];
                } else {
                    $openingHoursArr[$valueWeekday] = $from[$keyWeekday]."-".$to[$keyWeekday];
                }

            }

            $openingHoursArrEnd = [];
            foreach ($openingHoursArr as $keyHour => $valueHour) {
                $openingHoursArrEnd[$keyHour-1] = $valueHour;
            }

            for($i = 0; $i <= 6; $i++) {
                if(!isset($openingHoursArrEnd[$i])) {
                    $openingHoursArrEnd[$i] = '-';
                }
            }
        }
        $openingHoursArr = serialize($openingHoursArrEnd);

        // Special days
        $specialDaysHourArrEnd = [];
        if($request->has('special_date')) {
            $specialDates = $request->special_date;
            $fromSpecialHour = $request->from_special_hour;
            $toSpecialHour = $request->to_special_hour;

            $specialDaysHourArr = [];
            foreach ($specialDates as $keySpecialday => $valueSpecialday) {

                if($toSpecialHour[$keySpecialday] == '00:00') {
                    $to[$keySpecialday] = '23:59';
                }

                if(isset($specialDaysHourArr[$valueSpecialday])) {
                    $specialDaysHourArr[$valueSpecialday] .= ";".$fromSpecialHour[$keySpecialday]."-".$toSpecialHour[$keySpecialday];
                } else {
                    $specialDaysHourArr[$valueSpecialday] = $fromSpecialHour[$keySpecialday]."-".$toSpecialHour[$keySpecialday];
                }
            }

            $specialDaysHourArrEnd = [];
            foreach ($specialDaysHourArr as $keySpecial => $valueSpecial) {
                $specialDaysHourArrEnd[] = $valueSpecial." --- ".$keySpecial;
            }
        }
        $specialDaysHourArrEnd = serialize($specialDaysHourArrEnd);

        $storeData = [
            'name' => $request->name,
            'description' => $request->description,
            'tags' => implode(",",$request->tags),
            'address' => $request->address,
            'country' => $request->country,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'email' => $request->email,
            'phone' => $request->phone,
            'website' => $request->website,
            'facebook' => $request->facebook_url,
            'twitter' => $request->twitter_url,
            'instagram' => $request->instagram_url,
            'type' => $request->partner_type,
            'hours' => $openingHoursArr,
            'special_days' => $specialDaysHourArrEnd
        ];

        $store = Stores::create($storeData);

        foreach ($request->category_id as $category) {
            $categoryData = [
                'store_id' => $store->id,
                'category_id' => $category
            ];

            StoreCategory::create($categoryData);
        }

        $allowedfileExtension = ['jpeg','jpg','png'];

        if($request->hasfile('image'))
        {
            foreach ($request->file('image') as $file) {

                $extension = $file->getClientOriginalExtension();

                $check = in_array($extension,$allowedfileExtension);

                if($check) {

                    $imageName = mt_rand() . "_" .$file->getClientOriginalName();
                    $file->move(public_path('uploads/stores'), $imageName);

                    $ratingReviewImage = new StoreImages();
                    $ratingReviewImage->image = $imageName;
                    $ratingReviewImage->store_id = $store->id;
                    $ratingReviewImage->save();

                } else {
                    return redirect()->route($this->module_name.'.store.create')->with(_sessionmessage(null, "Must be this type (jpg,jpeg,png)", 'warning', true));
                }
            }
        }

        return redirect()->route($this->module_name.'.store.index')->with(_sessionmessage());
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
     * @param Stores $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Stores $store)
    {
        $categories = Categories::all();
        $partnerTypes = config('global.partner_type');

        $categoriesStore = DB::table('store_category')->select('category_id')->where('store_id',$store->id)->get();

        $categoryArr = [];

        foreach ($categoriesStore as $category) {
            $categoryArr[] = $category->category_id;
        }

        $storeImages = StoreImages::where('store_id',$store->id)->get();

        $storeOpeningHours = unserialize($store->hours);
        $storeSpecialDays = unserialize($store->special_days);

        $weekdays = config('global.weekdays');

        return view('admin.pages.store.edit', compact('store','categories','partnerTypes','categoryArr', 'storeImages','storeOpeningHours','storeSpecialDays','weekdays'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(StoreRequest $request, $id)
    {
        $store = Stores::find($id);

        // Opening hours
        $openingHoursArr = $openingHoursArrEnd = [];
        if($request->has('weekday')) {
            $weekdays = $request->weekday;
            $from = $request->from;
            $to = $request->to;


            foreach ($weekdays as $keyWeekday => $valueWeekday) {

                if($to[$keyWeekday] == '00:00') {
                    $to[$keyWeekday] = '23:59';
                }

                if(isset($openingHoursArr[$valueWeekday])) {
                    $openingHoursArr[$valueWeekday] .= ";".$from[$keyWeekday]."-".$to[$keyWeekday];
                } else {
                    $openingHoursArr[$valueWeekday] = $from[$keyWeekday]."-".$to[$keyWeekday];
                }

            }

            $openingHoursArrEnd = [];
            foreach ($openingHoursArr as $keyHour => $valueHour) {
                $openingHoursArrEnd[$keyHour-1] = $valueHour;
            }

            for($i = 0; $i <= 6; $i++) {
                if(!isset($openingHoursArrEnd[$i])) {
                    $openingHoursArrEnd[$i] = '-';
                }
            }
        }
        $openingHoursArr = serialize($openingHoursArrEnd);

        // Special days
        $specialDaysHourArrEnd = [];
        if($request->has('special_date')) {
            $specialDates = $request->special_date;
            $fromSpecialHour = $request->from_special_hour;
            $toSpecialHour = $request->to_special_hour;

            $specialDaysHourArr = [];
            foreach ($specialDates as $keySpecialday => $valueSpecialday) {

                if($toSpecialHour[$keySpecialday] == '00:00') {
                    $toSpecialHour[$keySpecialday] = '23:59';
                }

                if(isset($specialDaysHourArr[$valueSpecialday])) {
                    $specialDaysHourArr[$valueSpecialday] .= ";".$fromSpecialHour[$keySpecialday]."-".$toSpecialHour[$keySpecialday];
                } else {
                    $specialDaysHourArr[$valueSpecialday] = $fromSpecialHour[$keySpecialday]."-".$toSpecialHour[$keySpecialday];
                }
            }

            $specialDaysHourArrEnd = [];
            foreach ($specialDaysHourArr as $keySpecial => $valueSpecial) {
                $specialDaysHourArrEnd[] = $valueSpecial." --- ".$keySpecial;
            }
        }
        $specialDaysHourArrEnd = serialize($specialDaysHourArrEnd);

        $storeData = [
            'name' => $request->name,
            'description' => $request->description,
            'tags' => implode(",",$request->tags),
            'address' => $request->address,
            'country' => $request->country,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'email' => $request->email,
            'phone' => $request->phone,
            'website' => $request->website,
            'facebook' => $request->facebook_url,
            'twitter' => $request->twitter_url,
            'instagram' => $request->instagram_url,
            'type' => $request->partner_type,
            'hours' => $openingHoursArr,
            'special_days' => $specialDaysHourArrEnd
        ];

        $store->update($storeData);

        StoreCategory::where('store_id',$store->id)->delete();
        foreach ($request->category_id as $category) {
            $categoryData = [
                'store_id' => $store->id,
                'category_id' => $category
            ];

            StoreCategory::create($categoryData);
        }

        $allowedfileExtension = ['jpeg','jpg','png'];

        if($request->hasfile('image'))
        {
            foreach ($request->file('image') as $file) {

                $extension = $file->getClientOriginalExtension();

                $check = in_array($extension,$allowedfileExtension);

                if($check) {

                    $imageName = mt_rand() . "_" .$file->getClientOriginalName();
                    $file->move(public_path('uploads/stores'), $imageName);

                    $ratingReviewImage = new StoreImages();
                    $ratingReviewImage->image = $imageName;
                    $ratingReviewImage->store_id = $store->id;
                    $ratingReviewImage->save();

                } else {
                    return redirect()->route($this->module_name.'.store.create')->with(_sessionmessage(null, "Must be this type (jpg,jpeg,png)", 'warning', true));
                }
            }
        }

        return redirect()->route($this->module_name.'.store.index')->with(_sessionmessage());
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

    public function destroyStoreImage(Request $request)
    {
        $imageId = $request->image_id;

        $image = StoreImages::where('id',$imageId)->first();

        delete_old_files(public_path().'/uploads/stores/'.$image->image);

        $image->delete();
        $response = ['status' => 'OK'];
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
