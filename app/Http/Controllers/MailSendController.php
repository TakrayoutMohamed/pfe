<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use App\User;
use Auth;

use Mail;

class MailSendController extends Controller
{
    public function mailsend(Request $request,$id)
    {
        $mailusers =User::find($id);
        \Mail::to($request->input('emailInvite'))->send(new SendMail());
        return redirect('/AddProfessor/'.Auth::user()->id)->with('status','your invetation send successfuly');

    }
}
