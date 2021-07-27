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
}
