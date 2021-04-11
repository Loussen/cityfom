<?php

namespace App\Http\Controllers\Admin;

use App\Exports\SchoolExportMapping;
use App\Http\Controllers\Controller;
use App\Http\Requests\SchoolRequest;
use App\Models\MKadrKendler as Village;
use App\Models\MKadrMektebler as School;
use App\Models\MKadrPochtlar as Post;
use App\Models\MKadrRayonlar as Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

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
    public function store(SchoolRequest $request)
    {
        $input = $request->all();

        $school_data = [
            'adi' => $input['name'],
            'rayon_id' => $input['region_id'],
            'unvan' => $input['address'],
            'n_phone' => $input['phone'],
            'yerleshdiyi_rayon' => $input['located_region_id'],
            'pocth_id' => $input['post_id'],
            'kend_id' => $input['village_id'],
//            'lat'                       => $input['latitude'],
//            'lng'                       => $input['longitude'],
            'mesafe' => $input['distance'],
//            'dislokasiya'               => $input['dislocation'],
            'n_motivation' => $input['motivation'],
            'status' => $input['status']
        ];

        $school = School::create($school_data);

//        if($school)
//        {
//            $schoolClass = new School();
//            $log_data = [
//                'log_name'              => 'create',
//                'description'           => 'Yeni məktəb yaradıldı',
//                'subject_id'            => $school->id,
//                'subject_type'          => $schoolClass->tablePath,
//                'user_id'               => Auth::user()->id,
//                'attributes'            => ''
//            ];
//
//            ActivityLog::create($log_data);
//        }

        return redirect()->route('admin.school.index')->with(_sessionmessage());
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
     * @param School $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        if (Auth::user()->hasRole('Rayonlar') || Auth::user()->hasRole('Rayonlar_direktor')) {
            if (Auth::user()->region_id != $school->rayon_id) {
                abort(403, 'Access forbidden.');
            }
        }

        $queryRegions = Region::query();
        $queryPosts = Post::query();
        $queryVillages = Village::query();

        if (Auth::user()->hasRole('Rayon mərkəzləri')) {
            $region_data = Region::where('id', Auth::user()->region_center_id)->get();
            $regions_array = [];
            foreach ($region_data as $region) {
                $regions_array[] = $region->id;
            }
            if (!in_array($school->rayon_id, $regions_array)) {
                abort(403, 'Access forbidden.');
            }
        }

        if (Auth::user()->hasRole('Admin Peşə')) {
            $queryRegions->where('id', 67);
            $queryPosts->where('rayon_id', 67);
            $queryVillages->where('rayon_id', 67);
        }

//        $posts = Post::all();
//        $villages = Village::all();
//        $regions = Region::all();

        $regions = $queryRegions->orderBy('adi', 'ASC')->get();
        $posts = $queryPosts->get();
        $villages = $queryVillages->get();

        return view('admin.pages.school.edit', compact('school', 'posts', 'villages', 'regions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(SchoolRequest $request, $id)
    {
        $input = $request->all();
        $school = School::find($id);

//        $oldData = $school;

        $school_data = [
            'adi' => $input['name'],
            'rayon_id' => $input['region_id'],
            'unvan' => $input['address'],
            'n_phone' => $input['phone'],
            'yerleshdiyi_rayon' => $input['located_region_id'],
            'pocht_id' => $input['post_id'],
            'kend_id' => $input['village_id'],
//            'lat'                       => $input['latitude'],
//            'lng'                       => $input['longitude'],
            'mesafe' => $input['distance'],
//            'dislokasiya'               => $input['dislocation'],
            'n_motivation' => $input['motivation'],
            'status' => $input['status']
        ];
        $school->update($school_data);

//        if($school)
//        {
//            $attributes = [];
//
//            foreach ($school_data as $dataKey => $dataVal)
//            {
//                echo $oldData[$dataKey]." - ".$dataVal."<br />";
//                if($oldData[$dataKey] != $dataVal)
//                {
//                    $attributes[$dataKey]['old'] = $oldData[$dataKey];
//                    $attributes[$dataKey]['new'] = $dataVal;
//                }
//            }
//
//            echo $attributesJson = json_encode($attributes); exit;
//
//            $schoolClass = new School();
//            $log_data = [
//                'log_name'              => 'update',
//                'description'           => 'Məktəb dəyişildi',
//                'subject_id'            => $school->id,
//                'subject_type'          => $schoolClass->tablePath,
//                'user_id'               => Auth::user()->id,
//                'attributes'            => ''
//            ];
//
//            ActivityLog::create($log_data);
//        }

        return redirect()->route('admin.school.index')->with(_sessionmessage());
//        return redirect($input['redirect_page'])->with(_sessionmessage());
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
