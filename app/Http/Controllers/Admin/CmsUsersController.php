<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CmsUserRequest;
use App\Models\AppUsers;
use App\Models\Categories;
use App\Models\CmsUsers;
use App\Models\Stores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

class CmsUsersController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('permission:cms-users-list|cms-users-create|cms-users-edit|cms-users-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:cms-users-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:cms-users-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:cms-users-delete', ['only' => ['destroy']]);
        $this->middleware('permission:cms-users-export', ['only' => ['export']]);
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
        $stores = Stores::all();

        return view('admin.pages.cms_users.create', compact('roles','stores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CmsUserRequest $request)
    {
        $request->validate([
            'password'              => 'required|string|min:6',
            'confirm_password'      => 'required|same:password',
        ]);

        $imageName = null;
        if($request->hasFile('image') && $request->image != '') {
            $image = $request->file('image');
            $imageName = time()."_".$image->getClientOriginalName();

            $imageType = explode(".",$imageName);
            $imageType = end($imageType);

            if(in_array(strtolower($imageType),['jpg','jpeg','png']))
            {
                $image->move(public_path().'/uploads/cms_users/',$imageName);
            }
            else
            {
                return redirect()->route($this->module_name.'.cms_users.create')->with(_sessionmessage(null, "Must be this type (jpg,jpeg,png)", 'warning', true));
            }
        }

        if($request->has('never_expire')) {
            $expireDate = NULL;
        } else {
            $expireDate = date("Y-m-d H:i:s",strtotime($request->expire_date));
        }

        $storeIds = NULL;
        if($request->has('store_ids')) {
            $storeIds = implode(",",$request->store_ids);
        }

        $cmsUserData = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'photo' => $imageName,
            'password' => Hash::make($request->password),
            'expiration_date' => $expireDate,
            'store_ids' => $storeIds,
        ];

        $user = CmsUsers::create($cmsUserData);
        $user->assignRole($request->input('role_id'));

        return redirect()->route($this->module_name.'.cms_users.index')->with(_sessionmessage());
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(CmsUsers $cms_user)
    {
        dd($cms_user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CmsUsers $cmsUsers
     * @return \Illuminate\Http\Response
     */
    public function edit(CmsUsers $cms_user)
    {
        $userRole = $cms_user->roles->pluck('id','name')->first();
        $roles = Role::all();
        $stores = Stores::all();

        $cmsUsers = $cms_user;

        return view('admin.pages.cms_users.edit', compact('cmsUsers','userRole','roles','stores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CmsUserRequest $request, $id)
    {
        $cmsUser = CmsUsers::find($id);

        $imageName = $cmsUser->photo;
        if($request->hasFile('image') && $request->image != '') {
            $image = $request->file('image');
            $imageName = time()."_".$image->getClientOriginalName();

            $imageType = explode(".",$imageName);
            $imageType = end($imageType);

            if(in_array(strtolower($imageType),['jpg','jpeg','png', 'ico']))
            {
                $image->move(public_path().'/uploads/cms_users/',$imageName);

                delete_old_files(public_path().'/uploads/cms_users/'.$cmsUser->photo);
            }
            else
            {
                return redirect()->route($this->module_name.'.cms_users.edit', [$id])->with(_sessionmessage(null, "Must be this type (jpg,jpeg,png,ico)", 'warning', true));
            }
        }

        if($request->has('never_expire')) {
            $expireDate = NULL;
        } else {
            $expireDate = date("Y-m-d H:i:s",strtotime($request->expire_date));
        }

        $storeIds = NULL;
        if($request->has('store_ids')) {
            $storeIds = implode(",",$request->store_ids);
        }

        $cmsUserData = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'photo' => $imageName,
            'expiration_date' => $expireDate,
            'store_ids' => $storeIds,
        ];

        $cmsUser->update($cmsUserData);

        if ($request->get('password')){
            $request->validate([
                'password'              => 'required|string|min:6',
                'confirm_password'      => 'required|same:password',
            ]);

            $cmsUser->update(['password' => Hash::make($request->get('password'))]);
        }

        DB::table('model_has_roles')->where('model_id', $id)->delete();
        $cmsUser->assignRole($request->input('role_id'));

        return redirect()->route($this->module_name.'.cms_users.index')->with(_sessionmessage());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param CmsUsers $cmsUsers
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $cmsUsers = CmsUsers::find($id);
        delete_old_files(public_path().'/uploads/cms_users/'.$cmsUsers->photo);
        $cmsUsers->delete();
        $arr = _sessionmessage(null, null, null, true);
        return response($arr);
    }

    public function destroyMultipleCmsUser(Request $request)
    {
        $ids = $request->ids;
        $explodeIds = explode(",",$ids);

        foreach ($explodeIds as $id)
        {
            $user = CmsUsers::find($id);
            delete_old_files(public_path().'/uploads/cms_users/'.$user->photo);
        }

        DB::table("cms_users")->whereIn('id',$explodeIds)->delete();
        $response = ['status' => 'OK'];
        return response()->json(['response' => $response]);
    }

    public function statusMultipleCmsUser(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('ids') && $request->has('status')) {
            $status = intval($request->status);
            $ids = $request->ids;
            $explodeIds = explode(",",$ids);

            if ($status > 0 && count($explodeIds) > 0) {
                DB::table("cms_users")->whereIn('id',$explodeIds)
                    ->update(['status' => $status]);

                $response = ['status' => 'OK', 'status_type' => $status];
            }
        }

        return response()->json(['response' => $response]);
    }

    public function changeCmsUserStatus(Request $request)
    {
        $response = ['status' => 'Fail'];

        if ($request->has('status') && $request->has('user_id')) {
            $status = intval($request->status);
            $userId = intval($request->user_id);

            if ($status > 0 && $userId > 0) {
                $user = CmsUsers::find($userId);

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
