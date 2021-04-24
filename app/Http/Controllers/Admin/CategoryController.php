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
            ->selectRaw('c.*');

        $pageCount = config('global.pagination_count');

        $query = $query->paginate($pageCount);
        $categories = $query->appends(request()->query());

        return view('admin.pages.category.index', compact('categories'));
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
     * @param School $school
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(School $school)
    {
        $school->delete();
        $arr = _sessionmessage(null, null, null, true);
        return response($arr);
    }

    protected function getWhereArray()
    {

        $filter = [];
        if (request('region_id')) $filter[] = ['rayon_id', request('region_id')];
        if (request('located_region_id')) $filter[] = ['yerleshdiyi_rayon', request('located_region_id')];
        if (request('name')) $filter[] = ['adi', 'like', '%' . request('name') . '%'];
        if (!is_null(request('status'))) $filter[] = ['status', '=', request('status')];

        if (Auth::user()->hasRole('Rayonlar') || Auth::user()->hasRole('Rayonlar_direktor')) {
            $filter[] = ['rayon_id', Auth::user()->region_id];
        }

        return array_filter($filter);
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new SchoolExportMapping(), 'schools.xlsx');
    }
}
