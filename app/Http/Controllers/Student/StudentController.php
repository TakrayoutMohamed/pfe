<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Comment;
use Auth;

class StudentController extends Controller
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
    public function studentData(Request $request,$id)
    {
        $users =User::find($id);
        $oldComment=Comment::all();

        if (User::where('id','=',$id)->exists()) {
            if(Auth::user()->usertype=='student' && $users->usertype=='doctor' && Auth::user()->Feliere==$users->Feliere)
            {
                return view('student.student-data')
                ->with('users',$users)
                ->with('oldComment',$oldComment);
            }
            else
            {
                return redirect('/home/'.Auth::user()->id)/* ->with('status','you can not login to :'.$id) */;
            }
        }
        else
        {
            return redirect('/home/'.Auth::user()->id)/* ->with('status','no doctor with id :'.$id) */;
        }

    }

    public function studentEdit(Request $request,$id)
    {
        $usersEdit =User::find($id);
        if(Auth::user()->id== $id)
        {
            return view('/student.student-data-edit')->with('usersedit',$usersEdit);
        }
        else
        {
            return redirect('/student-data-edit/'.Auth::user()->id)->with('status','you can not login to :'.$id);
        }

    }

    public function studentUpdate(Request $request,$id)
    {
        $usersUpdate=User::find($id);

        $usersUpdate->FirstName=$request->input('First_name');
        $usersUpdate->LastName=$request->input('Last_name');
        $usersUpdate->email=$request->input('Email');
        $usersUpdate->Number=$request->input('Phone_Number');
        $usersUpdate->Gender=$request->input('gender');
        $usersUpdate->CNE=$request->input('CNE');
        $usersUpdate->CNI=$request->input('CNI');
        $usersUpdate->Feliere=$request->input('Field');
        $usersUpdate->Semester=$request->input('Semester');

        $usersUpdate->update();

        return redirect('/student-data-edit/'.Auth::user()->id)->with('status','your data is Updated');
    }

    public function studentUpdateSemester(Request $request,$id)
    {
        $usersUpdate=User::find($id);
        $usersUpdateSemester=User::find(Auth::user()->id);

        $usersUpdateSemester->Semester=$request->input('Semester');
        $usersUpdateSemester->update();
        return redirect('/student-data/'.$id);
    }

    public function AddCommentstudent(Request $request,$id)
    {
        $users =User::find($id);
        $oldComment=Comment::all();
        $i=0;
        // if(Comment::where('user_id', '=' ,$users->id )->exists())
        {
            foreach ($oldComment as $com)
            {
                if ($com->user_id==$users->id && $com->TypeData == $request->input('datatype') && $com->NumberFile == $request->input('NumberFile')  && $i <= $com->NumberComment)
                {
                    $i=$com->NumberComment;
                    $i++;
                }
            }
        }
        $users->comments()->saveMany([
                new Comment([
                    'user_id'=>$users->id,
                    'TypeData'=>$request->input('datatype'),
                    'NumberComment'=>$i,
                    'NumberFile'=>$request->input('NumberFile'),
                    'Comment'=>$request->input('Comments'),
                ]),
        ]);
        return redirect('/student-data/'.$request->input('usersid'))->with('oldComment',$oldComment);
    }

    public function deletCommentstudent(Request $request,$id)
    {
        $users=User::find($id);

        $users->comments()->where('user_id','=',$id)
        ->where('NumberFile','=',$request->input('NumberFile'))
        ->where('NumberComment','=',$request->input('NumberComment'))
        ->where('TypeData','=',$request->input('TypeData'))
        ->delete();

        return redirect('/student-data/'.$request->input('usersid'))->with('status','the comment deleted');
    }
}
