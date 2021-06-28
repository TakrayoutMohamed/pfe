<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
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
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo()
    {
        if(Auth::user()->usertype == 'admin')
        {
            return 'Students-admin';
        }
        else 
        // if(Auth::user()->usertype == 'doctor')
        // {
        //     // return 'doctor-data-profile/'.Auth::user()->id;
        //     return 'home/'.Auth::user()->id;
        // }
        // else if(Auth::user()->usertype == 'student')
        // {
        //     // return 'student-data/'.Auth::user()->id;
        //     return 'home/'.Auth::user()->id;
        // }
        // else
        {
            return 'home/'.Auth::user()->id;
        }
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $admin =new User;
        $Countad=User::all();
        $i=0;
        foreach ($Countad as $count) {
            if($count->email=='admin@gmailfpopfe.com')
            $i=1;
        }
        if($i==0)
        {
            $admin->FirstName='alva';
            $admin->LastName='res';
            $admin->email='admin@gmailfpopfe.com';
            $admin->Number='1234567891011';
            $admin->Feliere='non';
            $admin->usertype='admin';
            $admin->Gender='not matter';
            $admin->email_verified_at=time();
            $admin->password=Hash::make('123456789');
            $admin->save();
        }
        $this->middleware('guest')->except('logout');
    }
}
