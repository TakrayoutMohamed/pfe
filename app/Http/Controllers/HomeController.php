<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request,$id)
    {
        $usershome=User::find($id);
        $allusers=User::all();

        if(Auth::user()->id == $id)
        {
            return view('home')->with('usershome',$usershome)->with('allusers',$allusers);
        }
        else
        {
            return redirect('/home/'.Auth::user()->id);
        }
    }
}
