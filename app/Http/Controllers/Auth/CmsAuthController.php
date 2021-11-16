<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\CmsUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Validator;

class CmsAuthController extends Controller
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
    protected $redirectTo = '/cms/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:cms', ['except' => 'logout']);
    }

    public function getLogin()
    {
        return view('auth.cms.login');
    }

    /**
     * Show the application loginprocess.
     *
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email',
            'password' => 'required|string|min:6',
            'captcha'   => 'required|captcha',
        ]);

        $query = DB::table('cms_users AS cu')
            ->selectRaw('cu.id, r.guard_name')
            ->join('model_has_roles AS mhr','mhr.model_id','=','cu.id')
            ->join('roles AS r','r.id','=','mhr.role_id')
            ->whereRaw('cu.email = "'.$request->input('email').'"')
            ->first();

        if($query->guard_name == 'cms')
        {
            if (auth()->guard('cms')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
            {
                $user = auth()->guard('cms')->user();

                \Session::put('success','You are Login successfully!!');
                return redirect()->route('cms.dashboard');
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
        auth()->guard('cms')->logout();
        \Session::flush();
        return redirect()->route('cmsLogin')->with(['message' => 'You are logout successfully', 'type' => 'success']);
    }
}
