<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\AppUsers;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppUsersController extends Controller
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
        $query = DB::table('app_users AS ap')
            ->selectRaw('ap.*');

        $pageCount = config('global.pagination_count');

        if(request('id')) {
            $filterId = intval(request('id'));

            if($filterId > 0)
                $query->whereRaw('ap.id = '.request('id'));
        }

        if(request('social_auth')) {

            if(request('social_auth') == 1) {
                $query->whereRaw('ap.facebook_id != ""');
            } elseif(request('social_auth') == 2) {
                $query->whereRaw('ap.twitter_id != ""');
            } elseif(request('social_auth') == 3) {
                $query->whereRaw('ap.apple_id != ""');
            } elseif(request('social_auth') == 4) {
                $query->whereRaw('ap.facebook_id IS NULL AND ap.twitter_id IS NULL AND ap.apple_id = "" AND ap.email != ""');
            }
        }

        if(request('last_login')) {

            if(request('last_login') == 1) {
                $query->whereRaw('UNIX_TIMESTAMP(ap.last_login) >= '.strtotime(date('Y-m-d H:i:s', strtotime('-1 days'))));
            } elseif(request('last_login') == 2) {
                $query->whereRaw('UNIX_TIMESTAMP(ap.last_login) <= '.strtotime(date('Y-m-d', strtotime('-1 days'))));
                $query->whereRaw('UNIX_TIMESTAMP(ap.last_login) >= '.strtotime(date('Y-m-d', strtotime('-1 week'))));
            } elseif(request('last_login') == 3) {
                $query->whereRaw('UNIX_TIMESTAMP(ap.last_login) <= '.strtotime(date('Y-m-d', strtotime('-1 week'))));
                $query->whereRaw('UNIX_TIMESTAMP(ap.last_login) >= '.strtotime(date('Y-m-d', strtotime('-1 months'))));
            } elseif(request('last_login') == 4) {
                $query->whereRaw('UNIX_TIMESTAMP(ap.last_login) <= '.strtotime(date('Y-m-d', strtotime('-1 month'))));
                $query->whereRaw('UNIX_TIMESTAMP(ap.last_login) >= '.strtotime(date('Y-m-d', strtotime('-3 months'))));
            } elseif(request('last_login') == 5) {
                $query->whereRaw('UNIX_TIMESTAMP(ap.last_login) <= '.strtotime(date('Y-m-d', strtotime('-3 months'))));
            }
        }

        if(request('user_search')) {
            $query->whereRaw('(ap.username LIKE "%'.request('user_search').'%" or ap.firstname LIKE "%'.request('user_search').'%" or ap.lastname LIKE "%'.request('user_search').'%" or ap.email LIKE "%'.request('user_search').'%")');
        }

        $query->orderBy('ap.last_login','DESC');

        $query = $query->paginate($pageCount);
        $users = $query->appends(request()->query());

        $socialAuth = [1 => 'Facebook', 2 => 'Twitter', 3 => 'Apple', 4 => 'Email'];
        $lastLogin = [1 => '< 1d', 2 => '1d - 1w', 3 => '1w - 1m', 4 => '1m  - 3m', 5 => '> 3m'];

        $status = config('global.status');

        return view('admin.pages.app_users.index', compact('users','socialAuth','lastLogin','status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('admin.category.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CategoryRequest $request)
    {
        return redirect()->route('admin.category.index');
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
