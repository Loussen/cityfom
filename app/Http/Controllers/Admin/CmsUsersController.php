<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CmsUserRequest;
use App\Models\AppUsers;
use App\Models\Categories;
use App\Models\CmsUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class CmsUsersController extends Controller
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
        $query = CmsUsers::query();

        $pageCount = config('global.pagination_count');

        if(request('username')) {
            $query->whereRaw('firstname LIKE "%'.request('username').'%" or lastname LIKE "%'.request('username'));
        }

        if(request('email')) {
            $query->whereRaw('email LIKE "%'.request('email'));
        }

        if(request('status') && in_array(request('status'),[1,2])) {
            $filterStatus = intval(request('status'));

            if($filterStatus > 0)
                $query->whereRaw('status = '.$filterStatus);
        }

        if(request('role_id')) {
            $roleId = request('role_id');
            $query = $query->join('model_has_roles', 'model_has_roles.model_id', '=', 'cms_users.id')->where('role_id','=',$roleId);
        }

        $query->orderBy('last_login','DESC');

        $query = $query->paginate($pageCount);
        $users = $query->appends(request()->query());

        $roles = Role::all();
        $status = config('global.status');

        return view('admin.pages.cms_users.index', compact('users','roles','status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();

        return view('admin.pages.cms_users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CmsUserRequest $request)
    {
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

//        dd($request->input('roles'));

        $user = CmsUsers::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('admin.cms_users.index')->with(_sessionmessage());
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
     * @param AppUsers $appUsers
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $appUsers = AppUsers::find($id);
        delete_old_files(public_path().'/uploads/app_users/'.$appUsers->photo);
        $appUsers->delete();
        $arr = _sessionmessage(null, null, null, true);
        return response($arr);
    }

    public function destroyMultipleAppUser(Request $request)
    {
        $ids = $request->ids;
        $explodeIds = explode(",",$ids);

        foreach ($explodeIds as $id)
        {
            $user = AppUsers::find($id);
            delete_old_files(public_path().'/uploads/app_users/'.$user->photo);
        }

        DB::table("app_users")->whereIn('id',$explodeIds)->delete();
        $response = ['status' => 'OK'];
        return response()->json(['response' => $response]);
    }

    public function statusMultipleAppUser(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('ids') && $request->has('status')) {
            $status = intval($request->status);
            $ids = $request->ids;
            $explodeIds = explode(",",$ids);

            if ($status > 0 && count($explodeIds) > 0) {
                DB::table("app_users")->whereIn('id',$explodeIds)
                    ->update(['status' => $status]);

                $response = ['status' => 'OK', 'status_type' => $status];
            }
        }

        return response()->json(['response' => $response]);
    }

    public function changeAppUserStatus(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('status') && $request->has('user_id')) {
            $status = intval($request->status);
            $userId = intval($request->user_id);

            if ($status > 0 && $userId > 0) {
                $user = AppUsers::find($userId);

                $userData = [
                    'status' => $status,
                ];

                $user->update($userData);

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
