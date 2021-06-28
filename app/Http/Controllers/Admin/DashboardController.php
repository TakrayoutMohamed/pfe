<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\File;
use App\Comment;
use App\Detail;
use Auth;

class DashboardController extends Controller
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

    public function adminDataEdit(Request $request,$id)
    {
        $adminUser=User::findOrFail($id);
        if(Auth::user()->id== $id)
        {
            return view('admin.AdminEdit')->with('adminUser',$adminUser);
        }
        else
        {
            return redirect('/home/'.Auth::user()->id)->with('status','you can not allowed to this page');
        }
    }

    public function adminUpdate(Request $request,$id)
    {
        $userUpdate =User::find($id);
        $userUpdate->FirstName =$request->input('FirstName');
        $userUpdate->LastName  =$request->input('LastName');
        $userUpdate->email     =$request->input('Email');
        $userUpdate->Number    =$request->input('PhoneNumber');
        $userUpdate->update();
        return redirect('/Students-admin')->with('status','your data is Updated');
    }

    public function professorUser()
    {
        $users=User::all();
        return view('admin.profisseur')->with('users',$users);
    }
    
    public function studentUser()
    {
        $users=User::all();
        return view('admin.student-admin')->with('users',$users);
    }
    public function editUser(Request $request,$id)
    {
        $users =User::findOrFail($id);
        return view('admin.user-edit')->with('users',$users);
    }

    public function updateUser(Request $request,$id)
    {
        $users=User::find($id);
        

        if($users->usertype=='student')
        {
            $users->FirstName =$request->input('FirstName1');
            $users->LastName  =$request->input('LastName1');
            $users->email     =$request->input('email1');
            $users->Number    =$request->input('Number1');
            $users->CNE       =$request->input('CNE1');
            $users->CNI       =$request->input('CNI1');
            $users->Feliere   =$request->input('Feliere1');
            $users->Gender    =$request->input('Gender1');
            $users->usertype  =$request->input('usertype1');
            $users->Semester  =$request->input('Semester1');
            $users->update();
            return redirect('/Students-admin')->with('status','your data is Updated');

        }
        if($users->usertype=='doctor')
        {
            $users->FirstName =$request->input('FirstName1');
            $users->LastName  =$request->input('LastName1');
            $users->email     =$request->input('email1');
            $users->Number    =$request->input('Number1');
            $users->Feliere   =$request->input('Feliere1');
            $users->Gender    =$request->input('Gender1');
            $users->usertype  =$request->input('usertype1');
            $users->Semester  =$request->input('Semester1');
            $users->update();

            if(Detail::where('user_id', '=' ,$users->id )->exists())
            {
                $users->details()->where('user_id',$id)->update([
                    'Biography'=>$request->input('Biography1'),
                    'Position'=>$request->input('Position1'),
                    'Facebook'=>$request->input('Facebook1'),
                    'Youtube'=>$request->input('Youtube1'),
                    'Twitter'=>$request->input('Twitter1'),
                    'Siteweb'=>$request->input('Siteweb1'),
                    'SubjectDoctor'=>$request->input('SubjectData1'),
                ]);
            }else {
                $users->details()->saveMany([
                    new Detail([
                    'user_id'=>$users->id,
                    'Biography'=>$request->input('Biography1'),
                    'Position'=>$request->input('Position1'),
                    'Facebook'=>$request->input('Facebook1'),
                    'Youtube'=>$request->input('Youtube1'),
                    'Twitter'=>$request->input('Twitter1'),
                    'Siteweb'=>$request->input('Siteweb1'),
                    'SubjectDoctor'=>$request->input('SubjectData1'),
                    ]),
                ]);
            }
            return redirect('/Professors-admin')->with('status','your data is Updated');
        }
        return redirect('/Professors-admin')->with('status','your data is Updated');

    }
    public function deleteUser(Request $request,$id)
    {
        $users= User::find($id);

        foreach ($users->files as $file)
        {
            if($file->user_id==$id && $file->Typedata=='Document' )
            {
                $expired_filed='./assets/Data/Files/'.$file->File;

                //exist file in database
                if(file_exists($expired_filed)===true)
                {
                    if($file->File!=NULL)
                    {
                        unlink($expired_filed);
                    }
                }
            }
            if($file->user_id==$id && $file->Typedata=='Video' )
            {
                $expired_filed='./assets/Data/Videos/'.$file->File;

                //exist file in database
                if(file_exists($expired_filed)===true)
                {
                    if($file->File!=NULL)
                    {
                        unlink($expired_filed);
                    }
                }
            }
        }
        if ($users->usertype=='doctor') {
            $users->files()->where('user_id','=',$users->id)->delete();
            $users->details()->where('user_id','=',$users->id)->delete();
            $users->comments()->where('user_id','=',$users->id)->delete();
            $users->where('id','=',$users->id)->delete();
            return redirect('/Professors-admin')->with('status','your data is Deleted');
        }
        else
        {
            $users->files()->where('user_id','=',$users->id)->delete();
            $users->details()->where('user_id','=',$users->id)->delete();
            $users->comments()->where('user_id','=',$users->id)->delete();
            $users->where('id','=',$users->id)->delete();
            return redirect('/Students-admin')->with('status','your data is Deleted');
        }
        
    }

    public function statementProfessors(Request $request)
    {
        $users=User::all();
        return view('admin.statement')->with('users',$users);
    }

    public function addStatement(Request $request,$id)
    {
        $users=User::find($id);
        
        if(Auth::user()->id == $id)
        {
            
            return view('admin.addStatement')->with('users',$users);
        }
        else
        {
            return redirect('/AddStatement/'.Auth::user()->id)->with('status','you can not login to :'.$id);
        }
        
    }

    public function addProfessor(Request $request,$id)
    {
        $addProfessor=User::find($id);
        
        if(Auth::user()->id == $id)
        {
            
            return view('admin.addProfessor')->with('addProfessor',$addProfessor);
        }
        else
        {
            return redirect('/AddProfessor/'.Auth::user()->id)->with('status','you can not login to :'.$id);
        }
        
    }

    public function uploadDataAdmin(Request $request,$id)
    {
        $users=User::find($id);

            // if($request->isMethod('post'))
            //     {

        // for the comment help
        $a=0;
        if(File::where('user_id', '=' ,$users->id )->exists())
        {
            foreach($users->files as $file)
            {
                $a=$file->NumberFile;
                $a++;
            }
        }
        $users->files()->saveMany([
            new File([
            'user_id'=>$users->id,
            'NumberFile'=>$a,
            'Title'=>$request->input('TitleAdmin'),
            'Statement'=>$request->input('StatementAdmin'),
            // 'Felieredata'=>$request->input('FieldAdmin'),
            // 'Semester_data'=>$request->input('Semester_dataAdmin'),
            'Typedata'=>$request->input('TypedataAdmin'),
            ]),
        ]);
        return redirect('/AddStatement/'.Auth::user()->id)->with('status','your statement uploaded');
            // }
    }

    public function commentsAll()
    {
        $users=User::all();
        $oldComment=Comment::all();
        return view('admin.comment')
        ->with('oldComment',$oldComment)
        ->with('userss',$users);
    }

    public function deleteCommentAdmin(Request $request,$id)
    {
        $users=User::find($id);

        $users->comments()->where('user_id','=',$id)
        ->where('NumberFile','=',$request->input('NumberFile'))
        ->where('NumberComment','=',$request->input('NumberComment'))
        ->delete();
        return redirect('/Comments-admin/')->with('status','the comment deleted');
    }

    public function DeleteFileAdmin(Request $request,$id)
    {
        $usersdoctor=User::find($id);

        foreach ($usersdoctor->files as $file)
        {
            if($file->user_id==$id && $file->NumberFile==$request->input('NumberFile') && $file->Typedata=='Document' )
            {
                $expired_filed='./assets/Data/Files/'.$file->File;

                //exist file in database
                if(file_exists($expired_filed)===true)
                {
                    if($file->File!=NULL)
                    {
                        unlink($expired_filed);
                    }
                }
            }
            if($file->user_id==$id && $file->NumberFile==$request->input('NumberFile') && $file->Typedata=='Video' )
            {
                $expired_filed='./assets/Data/Videos/'.$file->File;

                //exist file in database
                if(file_exists($expired_filed)===true)
                {
                    if($file->File!=NULL)
                    {
                        unlink($expired_filed);
                    }
                }
            }
        }

        $usersdoctor->files()->where('user_id','=',$id)->where('NumberFile','=',$request->input('NumberFile'))->delete();

        return redirect('/Statements-admin')->with('status','your data deleted');
    }
}
