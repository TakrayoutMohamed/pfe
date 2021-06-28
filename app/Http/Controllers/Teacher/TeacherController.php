<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\File;
use App\Comment;
use App\Detail;
use Auth;


class TeacherController extends Controller
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

    public function doctorData(Request $request,$id)
    {
        $doctorData =User::find($id);

        if(Auth::user()->id == $id)
        {
            return view('teacher.doctor-data')->with('doctorData',$doctorData);
        }
        else
        {
            return redirect('/doctor-data/'.Auth::user()->id)/* ->with('status','you can not login to :'.$id) */;
        }
    }

    public function doctorEdit(Request $request,$id)
    {
        $doctorEdit =User::find($id);
        if(Auth::user()->id == $id)
        {
            return view('/teacher.doctor-data-edit')->with('doctorEdit',$doctorEdit);
        }
        else
        {
            return redirect('/doctor-data-edit/'.Auth::user()->id)/* ->with('status','you can not login to :'.$id) */;
        }
    }

    public function doctorProfile(Request $request,$id)
    {
        $doctorProfile =User::find($id);
        $oldComment=Comment::all();

        if(Auth::user()->id == $id)
        {
            return view('/teacher.doctor-data-profile')
            ->with('oldComment',$oldComment)
            ->with('doctorProfile',$doctorProfile);
        }
        else
        {
            return redirect('/doctor-data-profile/'.Auth::user()->id)/* ->with('status','you can not login to :'.$id) */;
        }
    }

    public function UpdateBgImage(Request $request,$id)
    {
        $doctorEditImg =User::find($id);

        if ($request->hasfile('bgimage'))
        {

            $file=$request->file('bgimage');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;

            // accepted or not extension
            $imgExtention="JPEG GIF PNG JPG RAW PSD TIFF";
            if (strpos($imgExtention,strtoupper($extension))!==false) {

                //exist row in database
                if(Detail::where('user_id', '=' ,$doctorEditImg->id )->exists())
                {
                    $expired_filed='./assets/DataDoc/IMG/Back_image/'.$doctorEditImg->details[0]->Bg_image;

                    //exist file in database

                    if(file_exists($expired_filed)===true)
                    {
                        if($doctorEditImg->details[0]->Bg_image!=NULL)
                        {
                            unlink($expired_filed);
                        }

                    }
                    $file->move('./assets/DataDoc/IMG/Back_image',$filename);
                    $doctorEditImg->details()->where('user_id',$id)->update([
                        'Bg_image'=>$filename,
                    ]);
                }
                else {
                    $file->move('./assets/DataDoc/IMG/Back_image',$filename);
                    $doctorEditImg->details()->saveMany([
                        new Detail([
                        'user_id'=>$doctorEditImg->id,
                        'Biography'=>'',
                        'Bg_image'=>$filename,
                        ]),
                    ]);
                    // return redirect('/doctor-data-edit/'.Auth::user()->id)->with('status','Please Complete all your informations');
                }
            }
            else
            {
                if($request->input('routeDir')=='1')
                {
                    return redirect('/doctor-data-edit/'.Auth::user()->id)->with('status','the extension or the size is not compatible (JPEG GIF PNG JPG RAW PSD TIFF better to be small size less than 1MB)');
                }
                elseif($request->input('routeDir')=='0')
                {
                    return redirect('/doctor-data-profile/'.Auth::user()->id)->with('status','the extension or the size is not compatible (JPEG GIF PNG JPG RAW PSD TIFF better to be small size less than 1MB)');
                }
            }
        }
        // deriction
            if($request->input('routeDir')=='1')
            {
                return redirect('/doctor-data-edit/'.Auth::user()->id)->with('status','your Bg pic is Updated');
            }
            elseif($request->input('routeDir')=='0')
            {
                return redirect('/doctor-data-profile/'.Auth::user()->id)->with('status','your Bg pic is Updated');
            }
            else
            {
                return "pchaaaakh ataghsayt";
            }
        // end derection
    }

    public function UpdateProfileImage(Request $request,$id)
    {
        $doctorEditImg =User::find($id);

        if ($request->hasfile('profileimage'))
        {
            $file=$request->file('profileimage');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;

            // accepted or not extension
            $imgExtention="JPEG GIF PNG JPG RAW PSD TIFF";
            if (strpos($imgExtention,strtoupper($extension))!==false) {

                //exist row in database
                if(Detail::where('user_id', '=' ,$doctorEditImg->id )->exists())
                {
                    $expired_filed='./assets/DataDoc/IMG/Profile/'.$doctorEditImg->details[0]->Profil_image;

                    //exist file in database
                    if(file_exists($expired_filed)===true)
                    {
                        if($doctorEditImg->details[0]->Profil_image!=NULL)
                        {
                            unlink($expired_filed);
                        }
                    }
                    $file->move('./assets/DataDoc/IMG/Profile',$filename);
                    $doctorEditImg->details()->where('user_id',$id)->update([
                    'Profil_image'=>$filename,
                    ]);
                }
                else {
                    $file->move('./assets/DataDoc/IMG/Profile',$filename);
                    $doctorEditImg->details()->saveMany([
                        new Detail([
                        'user_id'=>$doctorEditImg->id,
                        'Biography'=>'',
                        'Profil_image'=>$filename,
                        ]),
                    ]);
                    // return redirect('/doctor-data-edit/'.Auth::user()->id)->with('status','Please Complete all your informations');
                }
            }
            else
            {
                if($request->input('routeDir')=='1')
                {
                    return redirect('/doctor-data-edit/'.Auth::user()->id)->with('status','the extension or the size is not compatible (JPEG GIF PNG JPG RAW PSD TIFF better to be small size less than 1MB)');
                }
                elseif($request->input('routeDir')=='0')
                {
                    return redirect('/doctor-data-profile/'.Auth::user()->id)->with('status','the extension or the size is not compatible (JPEG GIF PNG JPG RAW PSD TIFF better to be small size less than 1MB)');
                }
            }
        }
        // deriction
            if($request->input('routeDir')=='1')
            {
                return redirect('/doctor-data-edit/'.Auth::user()->id)->with('status','your Bg pic is Updated');
            }
            elseif($request->input('routeDir')=='0')
            {
                return redirect('/doctor-data-profile/'.Auth::user()->id)->with('status','your Bg pic is Updated');
            }
            else
            {
                return "pchaaaakh shiiiiiiiit";
            }
        // end direction
    }

    public function updateEditInfos(Request $request,$id)
    {
        $doctorEditInfo=User::find($id);

        $doctorEditInfo->FirstName =$request->input('First_name');
        $doctorEditInfo->LastName  =$request->input('Last_name');
        $doctorEditInfo->email     =$request->input('Email');
        $doctorEditInfo->Number    =$request->input('Phone_Number');
        $doctorEditInfo->Gender    =$request->input('gender');
        $doctorEditInfo->Feliere   =$request->input('FeliereDoctor');
        $doctorEditInfo->Semester  =$request->input('SemesterDoctor');

        $doctorEditInfo->update();

        if(Detail::where('user_id', '=' ,$doctorEditInfo->id )->exists())
        {
            $doctorEditInfo->details()->where('user_id',$id)->update([
                'Biography'=>$request->input('Biography'),
                'Position'=>$request->input('Position'),
                'Facebook'=>$request->input('Facebook'),
                'Youtube'=>$request->input('Youtube'),
                'Twitter'=>$request->input('Twitter'),
                'Siteweb'=>$request->input('Siteweb'),
                'SubjectDoctor'=>$request->input('SubjectData'),
            ]);
        }else {
            $doctorEditInfo->details()->saveMany([
                new Detail([
                'user_id'=>$doctorEditInfo->id,
                'Biography'=>$request->input('Biography'),
                'Position'=>$request->input('Position'),
                'Facebook'=>$request->input('Facebook'),
                'Youtube'=>$request->input('Youtube'),
                'Twitter'=>$request->input('Twitter'),
                'Siteweb'=>$request->input('Siteweb'),
                'SubjectDoctor'=>$request->input('SubjectData'),
                ]),
            ]);
        }
        return redirect('/doctor-data-edit/'.Auth::user()->id)->with('status','your data is Updated');
    }

    public function doctorUpdateSemester(Request $request,$id)
    {
        $usersUpdate=User::find($id);
        $usersUpdateSemester=User::find(Auth::user()->id);

        $usersUpdateSemester->Semester=$request->input('Semester');
        $usersUpdateSemester->update();
        return redirect('/doctor-data-profile/'.$usersUpdateSemester->id);
    }

    public function UploadData(Request $request,$id)
    {
        $doctorDataAdd =User::find($id);
        $doctorDataAll =File::all();

        if ($request->hasfile('FileData'))
        {
            echo "there is a file";
            $file=$request->file('FileData');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $videoExtention="WEBM MPG MP2 MPEG MPE MPV OGG MP4 M4P M4V AVI WMV MOV QT FLV SWF AVCHD";
            if (strpos($videoExtention,strtoupper($extension))!==false) {
                $file->move('./assets/Data/Videos/',$filename);
                $a=0;
                // if(File::where('user_id', '=' ,$doctorDataAdd->id )->exists())
                {
                    foreach($doctorDataAll as $file)
                    {
                        if ($file->Typedata == 'Video' && $a <= $file->NumberFile)
                        {
                            $a=$file->NumberFile;
                            $a++;
                        }
                    }
                }
                $doctorDataAdd->files()->saveMany([
                    new File([
                        'user_id'=>$doctorDataAdd->id,
                        'Typedata'=>'Video',
                        'NumberFile'=>$a,
                        'Semester_data'=>$doctorDataAdd->Semester,
                        'File'=>$filename,
                        'Title'=>$request->input('TitleData'),
                        'Description'=>$request->input('DescriptionData'),
                        'Subject'=>$doctorDataAdd->details[0]->SubjectDoctor,
                        'Felieredata'=>$doctorDataAdd->Feliere,
                    ]),
                ]);
            }
            $documentExtention="DOC DOCX DOCM DOT DOTX DOTM PDF PPT PPTX XLS XLSX TXT XPS XML WPS RTF ODT MHT MHTML HTM HTML";
            if(strpos($documentExtention,strtoupper($extension))!== false)
            {
                $file->move('./assets/Data/Files/',$filename);
                $a=0;
                // if(File::where('user_id', '=' ,$doctorDataAdd->id )->exists())
                {
                    foreach($doctorDataAll as $file)
                    {
                        if ($file->Typedata == 'Document' && $a <= $file->NumberFile)
                        {
                            $a=$file->NumberFile;
                            $a++;
                        }
                    }
                }
                $doctorDataAdd->files()->saveMany([
                    new File([
                        'user_id'=>$doctorDataAdd->id,
                        'Typedata'=>'Document',
                        'Semester_data'=>$doctorDataAdd->Semester,
                        'NumberFile'=>$a,
                        'File'=>$filename,
                        'Title'=>$request->input('TitleData'),
                        'Description'=>$request->input('DescriptionData'),
                        'Subject'=>$doctorDataAdd->details[0]->SubjectDoctor,
                        'Felieredata'=>$doctorDataAdd->Feliere,
                    ]),
                ]);
            }
        }
        else{
            if($request->input('typedata')==1)
            {
                // for the comment help
                $a=0;
                // if(File::where('user_id', '=' ,$doctorDataAdd->id )->exists())
                {
                    foreach($doctorDataAll as $file)
                    {
                        if ($file->Typedata == 'Statement' && $a <= $file->NumberFile)
                        {
                            $a=$file->NumberFile;
                            $a++;
                        }
                    }
                }
                $doctorDataAdd->files()->saveMany([
                    new File([
                        'user_id'=>$doctorDataAdd->id,
                        'Typedata'=>'Statement',
                        'Semester_data'=>$doctorDataAdd->Semester,
                        'NumberFile'=>$a,
                        'Title'=>$request->input('TitleData'),
                        'Statement'=>$request->input('StatementData'),
                        'Subject'=>$doctorDataAdd->details[0]->SubjectDoctor,
                        'Felieredata'=>$doctorDataAdd->Feliere,
                    ]),
                ]);
            }
            else{
                return redirect('/doctor-data/'.Auth::user()->id)->with('status','you can not add this data due to its unacceptable extension or large size');
            }

        }
        return redirect('/doctor-data/'.Auth::user()->id)->with('status','your data uploaded');
    }

    public function AddComment(Request $request,$id)
    {
        $z=0;
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
        return redirect('/doctor-data-profile/'.Auth::user()->id)->with('oldComment',$oldComment);
    }

    public function deleteComment(Request $request,$id)
    {
        $users=User::find($id);

        $users->comments()->where('user_id','=',$id)
        ->where('NumberFile','=',$request->input('NumberFile'))
        ->where('NumberComment','=',$request->input('NumberComment'))
        ->where('TypeData','=',$request->input('TypeData'))
        ->delete();
        return redirect('/doctor-data-profile/'.Auth::user()->id)->with('status','the comment deleted');
    }

    public function DeleteFile(Request $request,$id)
    {
        $usersdoctor=User::find($id);
        $fileComments=Comment::all();

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

        $usersdoctor->files()
            ->where('user_id','=',$id)
            ->where('NumberFile','=',$request->input('NumberFile'))
            ->delete();
        foreach ($fileComments as $com)
        {
            $com->where('TypeData','=',$request->input('Typedata'))
            ->where('NumberFile','=',$request->input('NumberFile'))
            ->delete();
        }
        return redirect('/doctor-data/'.Auth::user()->id)->with('status','your data deleted');
    }
}

        // $file->store('public/img'.time().'');
            // foreach ($doctorEditImg->details as $doc)
            // {
                // $doc->Bg_image='filename222';
                // echo "<br>".$doc."<br>";
            // }
            // $doctorEditImg->details()->updateExistingPivot($id, $a);

            // $doctorEditImg->details()->saveMany([
            //     new Detail(['Biography'=>"aaaa",'Profil_image'=>"aaaa","Bg_image"=>"fffffffffffffffffffffff"]),
            //     new Detail(['Biography'=>"aaaa",'Profil_image'=>"aaaa","Bg_image"=>"new fffffffffffffffffff"]),
            // ]);

            // $doctorEditImg->details()->where('user_id',$id)->update([
            //     'Bg_image'=>'filename',
            // ]);

            // $comment = new App\Comment(['message' => 'A new comment.']);
            // $post = App\Post::find(1);
            // $post->comments()->save($comment);
