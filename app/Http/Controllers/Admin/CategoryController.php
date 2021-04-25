<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
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
        $query = DB::table('categories AS c')
            ->selectRaw('c.*, sum((case when sc.category_id is not null then 1 else 0 end)) AS store_count')
            ->leftJoin('store_category as sc', 'sc.category_id','=','c.id')
            ->groupByRaw('c.id');

        $pageCount = config('global.pagination_count');

        if(request('id')) {
            $filterId = intval(request('id'));

            if($filterId > 0)
                $query->whereRaw('id = '.request('id'));
        }

        if(request('name')) {
            $query->whereRaw('name_en LIKE "%'.request('name').'%" or name_az LIKE "%'.request('name').'%" or name_ru LIKE "%'.request('name').'%" or name_es LIKE "%'.request('name').'%"');
        }

        if(request('status') && in_array(request('status'),[1,2])) {
            $filterStatus = intval(request('status'));

            if($filterStatus > 0)
                $query->whereRaw('status = '.request('status'));
        }

        if(request('filter_type') && in_array(request('filter_type'),[1,2])) {
            $filterType = intval(request('filter_type'));

            if($filterType > 0)
                $query->whereRaw('filter = '.request('filter_type'));
        }

        $storeCount = 'ASC';
        if(request('store_count') && in_array(request('store_count'),['ASC','DESC'])) {
            $query->orderBy('store_count',request('store_count'));

            $storeCount = request('store_count');
        }

        $query = $query->paginate($pageCount);
        $categories = $query->appends(request()->query());

        $status = config('global.status');
        $filterType = config('global.filter_type');

        return view('admin.pages.category.index', compact('categories','storeCount','status','filterType'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CategoryRequest $request)
    {
        $category = new Categories();

        $iconName = null;
        if($request->hasFile('icon') && $request->icon != '') {
            $icon = $request->file('icon');
            $iconName = time()."_".$icon->getClientOriginalName();

            $iconType = explode(".",$iconName);
            $iconType = end($iconType);

            if(in_array(strtolower($iconType),['jpg','jpeg','png', 'ico']))
            {
                $icon->move(public_path().'/uploads/categories/',$iconName);
            }
            else
            {
                return redirect()->route('admin.category.create')->with(_sessionmessage(null, "Yalnız şəkil formatı (jpg,jpeg,png)", 'warning', true));
            }
        }

        $categoryData = [
            'name_en' => $request->name_en,
            'name_az' => $request->name_az,
            'name_ru' => $request->name_ru,
            'name_es' => $request->name_es,
            'icon' => $iconName,
        ];

        Categories::create($categoryData);

        return redirect()->route('admin.category.index')->with(_sessionmessage());
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
                return redirect()->route('admin.category.edit', [$id])->with(_sessionmessage(null, "Yalnız şəkil formatı (jpg,jpeg,png)", 'warning', true));
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
     * @param Categories $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Categories $category)
    {
        delete_old_files(public_path().'/uploads/categories/'.$category->icon);
        $category->delete();
        $arr = _sessionmessage(null, null, null, true);
        return response($arr);
    }

    public function destroyMultipleCategory(Request $request)
    {
        $ids = $request->ids;
        $explodeIds = explode(",",$ids);

        foreach ($explodeIds as $id)
        {
            $category = Categories::find($id);
            delete_old_files(public_path().'/uploads/categories/'.$category->icon);
        }

        DB::table("categories")->whereIn('id',$explodeIds)->delete();
        $response = ['status' => 'OK'];
        return response()->json(['response' => $response]);
    }

    public function filterMultipleCategory(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('ids') && $request->has('filter_type')) {
            $filterType = intval($request->filter_type);
            $ids = $request->ids;
            $explodeIds = explode(",",$ids);

            if ($filterType > 0 && count($explodeIds) > 0) {
                DB::table("categories")->whereIn('id',$explodeIds)
                    ->update(['filter' => $filterType]);

                $response = ['status' => 'OK', 'filter_type' => $filterType];
            }
        }

        return response()->json(['response' => $response]);
    }

    public function statusMultipleCategory(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('ids') && $request->has('status')) {
            $status = intval($request->status);
            $ids = $request->ids;
            $explodeIds = explode(",",$ids);

            if ($status > 0 && count($explodeIds) > 0) {
                DB::table("categories")->whereIn('id',$explodeIds)
                    ->update(['status' => $status]);

                $response = ['status' => 'OK', 'status_type' => $status];
            }
        }

        return response()->json(['response' => $response]);
    }

    public function changeCategoryStatus(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('status') && $request->has('category_id')) {
            $status = intval($request->status);
            $categoryId = intval($request->category_id);

            if ($status > 0 && $categoryId > 0) {
                $category = Categories::find($categoryId);

                $categoryData = [
                    'status' => $status,
                ];

                $category->update($categoryData);

                $response = ['status' => 'OK', 'status_type' => $status];
            }
        }

        return response()->json(['response' => $response]);
    }

    public function changeCategoryFilterType(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('filter_type') && $request->has('category_id')) {
            $filterType = intval($request->filter_type);
            $categoryId = intval($request->category_id);

            if ($filterType > 0 && $categoryId > 0) {
                $category = Categories::find($categoryId);

                $categoryData = [
                    'filter' => $filterType,
                ];

                $category->update($categoryData);

                $response = ['status' => 'OK', 'filter_type' => $filterType];
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
