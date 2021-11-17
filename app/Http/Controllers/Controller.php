<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $module_name;

    public function __construct()
    {
        $this->module_name = Request()->route()->getPrefix();
        $this->module_name = str_replace("/","",$this->module_name);

        if($this->module_name != 'apiv1')
        {
            View::share('module_name', $this->module_name);

            $this->middleware(function ($request, $next) {

                $request = Request();
                $prefix = $request->route()->getName();

                $prefix = explode(".",$prefix);

                $prefixDB = 'admin';

                if(Auth::user()->hasRole('Store users')) {
                    $prefixDB = 'cms';
                } elseif(Auth::user()->hasRole('Subadmin')) {
                    $prefixDB = 'subadmin';
                }

                if($prefix[0] != $prefixDB) {
                    abort(404);
                    die();
                }

                return $next($request);
            });
        }

    }
}
