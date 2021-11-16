<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
use Validator;

class AdminAuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function getLogin(Request $request)
    {
        $adminLoginName = $request->route()->getName();
        return view('auth.admin.login',compact('adminLoginName'));
    }

    /**
     * Show the application loginprocess.
     *
     * @return \Illuminate\Http\Response
     */
//    public function postLogin(Request $request)
//    {
//        echo $request->route()->getName(); exit;
//        $this->validate($request, [
//            'email' => 'required|string|email',
//            'password' => 'required|string|min:6',
//            'captcha'   => 'required|captcha',
//        ]);
//
//        $query = DB::table('cms_users AS cu')
//            ->selectRaw('cu.id, r.guard_name')
//            ->join('model_has_roles AS mhr','mhr.model_id','=','cu.id')
//            ->join('roles AS r','r.id','=','mhr.role_id')
//            ->whereRaw('cu.email = "'.$request->input('email').'"')
//            ->first();
//
//        if($query->guard_name == 'admin')
//        {
//            if (auth()->guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
//            {
//                $user = auth()->guard('admin')->user();
//
//                \Session::put('success','You are Login successfully!!');
//                return redirect()->route('admin.dashboard');
//
//            } else {
//                return back()->with(['message' => __('admin.login_failed'), 'type' => 'danger']);
//            }
//        } else {
//            return back()->with(['message' => __('admin.login_failed'), 'type' => 'danger']);
//        }
//
//    }

    /**
     * Show the application loginprocess.
     *
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        $adminLoginName = $request->route()->getName();

        $this->validate($request, [
            'email' => 'required|string|email',
            'password' => 'required|string|min:6',
            'captcha'   => 'required|captcha',
        ]);

        $query = DB::table('cms_users AS cu')
            ->selectRaw('cu.id as user_id, r.guard_name')
            ->join('model_has_roles AS mhr','mhr.model_id','=','cu.id')
            ->join('roles AS r','r.id','=','mhr.role_id')
            ->whereRaw('cu.email = "'.$request->input('email').'"');

        if($adminLoginName == 'adminLoginPost') {
            $query->whereRaw('r.name = "Super Admin"');
            $redirectName = 'admin';
        } elseif($adminLoginName == 'subadminLoginPost') {
            $query->whereRaw('r.name = "Subadmin"');
            $redirectName = 'subadmin';
        } elseif($adminLoginName == 'cmsLoginPost') {
            $query->whereRaw('r.name = "Store users"');
            $redirectName = 'cms';
        }

        if($query->count() > 0)
        {
            if (auth()->guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
            {
                $user = auth()->guard('admin')->user();

                \Session::put('success','You are Login successfully!!');
                return redirect()->route($redirectName.'.dashboard');

            } else {
                return back()->with(['message' => __('admin.login_failed'), 'type' => 'danger']);
            }
        } else {
            return back()->with(['message' => __('admin.login_failed'), 'type' => 'danger']);
        }

    }

    /**
     * Show the application logout.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        auth()->guard('admin')->logout();
        \Session::flush();
        return redirect()->route('adminLogin')->with(['message' => 'You are logout successfully', 'type' => 'success']);
    }
}
