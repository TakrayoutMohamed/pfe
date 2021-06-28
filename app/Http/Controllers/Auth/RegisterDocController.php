<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterDocController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $Countad=User::all();
        $i=0;
        foreach ($Countad as $count) {
            if($count->email=='admin@gmailfpopfe.com')
            {
                $i=1;
            }
        }
        if($i==0)
        {
            $admin =new User;
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validatordoc(array $data)
    {

        return Validator::make($data, [
            'FirstName' => ['required', 'string', 'max:255'],
            'LastName' => ['required', 'string', 'max:255'],
            'email' => ['required','email', 'max:255', 'unique:users'],
            'Number' => ['required', 'numeric','min:9'],
            'Feliere' => ['required', 'string'],
            'Gender' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function createdoc(array $data)
    {
        return User::create([
            'FirstName' => $data['FirstName'],
            'LastName' => $data['LastName'],
            'email' => $data['email'],
            'Number' => $data['Number'],
            'Feliere' => $data['Feliere'],
            'Gender' => $data['Gender'],
            'usertype'=>'doctor',
            'password' => Hash::make($data['password']),
        ]);
    }
}
 