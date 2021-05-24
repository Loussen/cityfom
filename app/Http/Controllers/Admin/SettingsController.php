<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\ConfigsRequest;
use App\Http\Requests\PasswordRequest;
use App\Http\Requests\ProfileRequest;
use App\Models\Categories;
use App\Models\CmsUsers;
use App\Models\Configs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Mockery\Generator\StringManipulation\Pass\Pass;

class SettingsController extends Controller
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
                $query->whereRaw('c.id = '.request('id'));
        }

        if(request('name')) {
            $query->whereRaw('name_en LIKE "%'.request('name').'%" or name_az LIKE "%'.request('name').'%" or name_ru LIKE "%'.request('name').'%" or name_es LIKE "%'.request('name').'%"');
        }

        if(request('status') && in_array(request('status'),[1,2])) {
            $filterStatus = intval(request('status'));

            if($filterStatus > 0)
                $query->whereRaw('status = '.$filterStatus);
        }

        if(request('filter_type') && in_array(request('filter_type'),[1,2])) {
            $filterType = intval(request('filter_type'));

            if($filterType > 0)
                $query->whereRaw('filter = '.$filterType);
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
    public function configs()
    {
        $configs = Configs::all();

        return view('admin.pages.settings.config',compact('configs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function configStore(ConfigsRequest $request)
    {
        $allParameters = $request->request->all();

        foreach ($allParameters as $keyParameter => $valueParameter) {
            $configs = Configs::where("slug",$keyParameter);

            $configData = [
                'value' => $valueParameter,
            ];

            $configs->update($configData);
        }

        return redirect()->route('admin.configs.configs')->with(_sessionmessage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function password()
    {
        return view('admin.pages.settings.password');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function passwordStore(PasswordRequest $request)
    {
        CmsUsers::find(auth()->guard('admin')->user()->id)->update(['password'=> Hash::make($request->newpassword)]);

        return redirect()->route('admin.password.password')->with(_sessionmessage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('admin.pages.settings.profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function profileStore(ProfileRequest $request)
    {
        $user = CmsUsers::find(auth()->guard('admin')->user()->id);

        $imageName = $user->photo;
        if($request->hasFile('image') && $request->image != '') {
            $image = $request->file('image');
            $imageName = time()."_".$image->getClientOriginalName();

            $imageType = explode(".",$imageName);
            $imageType = end($imageType);

            if(in_array(strtolower($imageType),['jpg','jpeg','png']))
            {
                $image->move(public_path().'/uploads/profile_admin/',$imageName);

                delete_old_files(public_path().'/uploads/profile_admin/'.$user->image);
            }
            else
            {
                return redirect()->route('admin.profile.profile', [$user->id])->with(_sessionmessage(null, "Must be this type (jpg,jpeg,png)", 'warning', true));
            }
        }

        $userData = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'photo' => $imageName,
        ];

        $user->update($userData);

        return redirect()->route('admin.profile.profile')->with(_sessionmessage());
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new SchoolExportMapping(), 'schools.xlsx');
    }
}
