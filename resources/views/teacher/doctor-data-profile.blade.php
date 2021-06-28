@extends('layouts.mainDoctor')

<?php
use App\Detail;

?>
@section('title')
    my profile 
@endsection

@section('content')
    <div class="content bg-dark container-fluid p-0" style="">
        <div class="row mx-0" style="min-height:380px;">
            <div class="col-lg-4 col-md-4 col-sm-12 mt-5 ml-0">
                <div class="card-user card radius-top" >
                    <div class="image radius-top position-relative " id="bgback" style="width:100%; height:180px;" >
                        <a href="#bg_image" class="now-ui-icons media-1_camera-compact position-absolute circle p-2 " data-toggle="modal"  style=" right:0px; bottom:0px;" title="update picture" ></a>
                        <div class="modal fade" id="bg_image">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header p-0 m-0 bgblack color-white ">
                                        <p class="title position-relative p-0 m-1" style="left:5px">Update Image</p>
                                        <a type="button" class="close bg-danger p-0 position-relative" data-dismiss="modal" style="right:15px; top:16px;" aria-hidden="true">
                                            <span class="now-ui-icons ui-1_simple-remove"></span>
                                        </a>
                                    </div>
                                    <form action="/updateBgImage/{{$doctorProfile->id}}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{method_field('PUT')}}
                                        <div class="" hidden>
                                            <input type="text" name="routeDir" value="0">
                                        </div>
                                        <div class="row m-0">
                                            <div class="input-group  mt-2">
                                                <div class="custom-file">
                                                    <label for="bgim" class="custom-file-label">Image &nbsp;&nbsp;:&nbsp;&nbsp;</label>
                                                    <input type="file" id="bgim" name="bgimage" class="custom-file-input" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer p-0 mt-2 ">
                                            <div class="row p-0 col-12">
                                                <button  class="btn btn-danger p-1 position-absolute" data-dismiss="modal" style="left:2px; top:50%; width:60px;">Cancel</button>
                                                <button  class="btn btn-warning p-1 position-absolute" type="reset" style="right:63px; top:50%; width:60px;" >Clear</button>
                                                <button type="submit" class="btn btn-success p-1 position-absolute" style="right:1px; top:50%; width:60px;">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php
                            if(Detail::where('user_id', '=' ,$doctorProfile->id )->exists())
                            {
                                $w=1;
                            }
                            else {
                                $w=0;
                            }
                        ?>
                        @if ($w==1)
                            <img src="{{asset('./assets/DataDoc/IMG/Back_image/'.$doctorProfile->details[0]->Bg_image)}}" alt="..." style="width:100%; height:180px;">
                        @else
                            <img src="" alt="..." style="width:100%; height:180px;">
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="author bgblack radius-down">
                            <a>
                                <div class="justify-content-center row">
                                    <div class=" avatar " id="{{$doctorProfile->Gender=='Female'?'bgfemale':'bgmale'}}">
                                        @if ($w==1)
                                            <img src="{{asset('./assets/DataDoc/IMG/Profile/'.$doctorProfile->details[0]->Profil_image)}}" alt="profile picture" class="avatar position-relative " style="width:140px; height:140px;" >
                                        @else
                                            <img src="" alt="..." style="width:100%; height:180px;">
                                        @endif
                                    </div>
                                </div>
                                <a href="#wall_image" class="now-ui-icons media-1_camera-compact circle position-absolute p-1 " data-toggle="modal" style="right:50%; top:240px; margin:-10px -55px 0px 0px;" title="update profile picture"></a>
                                <div class="modal fade" id="wall_image">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header p-0 m-0 bgblack color-white ">
                                                <p class="title position-relative p-0 m-1" style="left:5px">Update Image</p>
                                                <a type="button" class="close bg-danger p-0 position-relative" data-dismiss="modal" style="right:15px; top:16px;" aria-hidden="true">
                                                    <span class="now-ui-icons ui-1_simple-remove"></span>
                                                </a>
                                            </div>
                                            <form action="/updateProfileImage/{{$doctorProfile->id}}" method="POST" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                {{method_field('PUT')}}
                                                <div class="" hidden>
                                                    <input type="text" name="routeDir" value="0">
                                                </div>
                                                <div class="row m-0">
                                                    <div class="input-group  mt-2">
                                                    <div class="custom-file">
                                                        <label for="bgim" class="custom-file-label">Image &nbsp;&nbsp;:&nbsp;&nbsp;</label>
                                                        <input type="file" id="bgim" name="profileimage" class="custom-file-input" required>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer p-0 mt-2 ">
                                                    <div class="row p-0 col-12">
                                                        <button  class="btn btn-danger p-1 position-absolute" data-dismiss="modal" style="left:2px; top:50%; width:60px;">Cancel</button>
                                                        <button  class="btn btn-warning p-1 position-absolute" type="reset" style="right:63px; top:50%; width:60px;" >Clear</button>
                                                        <button type="submit" class="btn btn-success p-1 position-absolute" style="right:1px; top:50%; width:60px;">Update</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @if ($w==1)
                                    <p class="h6">{{$doctorProfile->details[0]->Position}}</p>
                                @else
                                    <p class="h6">the taecher position in the fpo</p>
                                @endif
                                <h5 class="title" style="color:orangered;">{{$doctorProfile->FirstName.' '.$doctorProfile->LastName }}</h5>
                            </a>
                        </div>
                        <div class="description bgblack  text-center radius-top" style="margin:0px -12px 0px -12px;">
                            <i class="h5"> biography </i>
                        </div>
                        <div  class="description p-1 bg-dark scroll "  style="margin:0px -12px 0px -12px; width:auto; border:black dashed 2px; border-top:0px;">
                            @if ($w==1)
                                <p class="">{{$doctorProfile->details[0]->Biography}}</p>
                            @else
                                <p class="h6">here will be the biography</p>
                            @endif
                        </div>
                    </div>

                    <div class="container text-center pt-1 form-control radius-down">
                        <div class="h5 justify-content-center p-0">Follow me on:</div>
                        @if ($w==1)
                            <a href="{{$doctorProfile->details[0]->Facebook}}" target="_blank" class="btn btn-neutral  btn-icon btn-round" title="facebook">
                                <img src="../assets/img/facebook-icon-1.png" style="width:40px; height:40px;" alt="facebook">
                            </a>
                            <a href="{{$doctorProfile->details[0]->Twitter}}" target="_blank" class="btn btn-neutral  btn-icon btn-round" title="twitter">
                                <img src="../assets/img/twitter-icon-2.png" style="width:40px; height:40px;" alt="twitter">
                            </a>
                            <a href="{{$doctorProfile->details[0]->Youtube}}" target="_blank" class="btn btn-neutral  btn-icon btn-round" title="youtube">
                                <img src="../assets/img/youtube-icon-2.png" style="width:40px; height:40px;" alt="youtube">
                            </a>
                            <a href="{{$doctorProfile->details[0]->Siteweb}}" target="_blank" class="btn btn-neutral  btn-icon btn-round" title="siteweb">
                                <img src="../assets/img/siteweb-icon-1.png" style="width:40px; height:40px;" alt="siteweb">
                            </a>
                        @else
                            <a href="#34" class="btn btn-neutral  btn-icon btn-round" title="facebook">
                                <img src="../assets/img/facebook-icon-1.png" style="width:40px; height:40px;" alt="facebook">
                            </a>
                            <a href="#34" class="btn btn-neutral  btn-icon btn-round" title="twitter">
                                <img src="../assets/img/twitter-icon-2.png" style="width:40px; height:40px;" alt="twitter">
                            </a>
                            <a href="#34" class="btn btn-neutral  btn-icon btn-round" title="youtube">
                                <img src="../assets/img/youtube-icon-2.png" style="width:40px; height:40px;" alt="youtube">
                            </a>
                            <a href="#34" class="btn btn-neutral  btn-icon btn-round" title="siteweb">
                                <img src="../assets/img/siteweb-icon-1.png" style="width:40px; height:40px;" alt="siteweb">
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 mt-2">
                <div class="">
                    <nav class="nav nav-pills justify-content-center">
                        <a href="#Documents" class="nav-link active" data-toggle="tab"> Documents PDF</a>
                        <a href="#Videos" class="nav-link" data-toggle="tab"> Videos</a> 
                        <a href="#statements" class="nav-link" data-toggle="tab">statements</a>
                    </nav>
                    <form action="/doctor-update-semester/{{$doctorProfile->id}}" method="POST" class="position-relative" style="margin-bottom:; margin-top:; top:8px; left:-8px;">
                        {{ csrf_field() }}
                        {{method_field('PUT')}}
                        <div class="form-group m-0  row position-absolute">
                            <select name="Semester" id="" class="col-7 p-0 m-0 form-control radiusDD bgmaroon color-white-shadow" style="width:; height:24px" required>
                                <option value="">Semester ???</option>
                                <option value="S1" {{Auth::user()->Semester=='S1'?'selected':''}} required>Semester 1</option>
                                <option value="S2" {{Auth::user()->Semester=='S2'?'selected':''}} required>Semester 2</option>
                                <option value="S3" {{Auth::user()->Semester=='S3'?'selected':''}} required>Semester 3</option>
                                <option value="S4" {{Auth::user()->Semester=='S4'?'selected':''}} required>Semester 4</option>
                                <option value="S5" {{Auth::user()->Semester=='S5'?'selected':''}} required>Semester 5</option>
                                <option value="S6" {{Auth::user()->Semester=='S6'?'selected':''}} required>Semester 6</option>
                            </select>
                            <button type="submit" class=" p-1 m-0 ml-2 btn btn-success " title="reload" style="width:60px; height:24px">
                                <span class="now-ui-icons arrows-1_refresh-69 color-white m-0 p-0" style=""></span>
                            </button>
                        </div>
                    </form>
                    <div class="tab-content">
                        <div class="tab-pane active tabs_radius" id="Documents" >
                            <div class="row m-2 p-2 pt-3">
                                <?php $m=1; ?>
                                @foreach ($doctorProfile->files as $file)
                                    @if ($file->Typedata=='Document' && $file->Semester_data == Auth::user()->Semester)
                                        <div class="col-lg-4 col-md-4 col-sm-6 m-0 p-1">
                                            <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-1 " >
                                            
                                                <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="card-img-top img-fluid " style="height:60px; width:60px;">
                                            
                                                <div class="card-block p-0" style="margin:-3px;">
                                                    {{-- Download && read  icons --}}
                                                    <div class="col-12  row">
                                                        <h3 class="card-title m-0 ">{{$file->Title}}.</h3>
                                                        {{-- download icons --}}
                                                        <a href="##Download##" title="download" class="position-absolute bgdarkred text-center rounded" style="right:0px; top:50%; width:22px; height:22px;" >
                                                            <img src="../assets/img/download-icon.jpeg" class="" style="">
                                                        </a>
                                                        {{-- read icons --}}
                                                        <a href="##read##" target="_blank" title="read" class="position-absolute  text-center rounded" style="right:24px; top:50%; width:22px; height:22px;" >
                                                            <img src="../assets/img/read-icon-2.svg" class="" style="">
                                                        </a>
                                                    </div>
                                                    <div class="description ">
                                                        {{$file->Description}}.
                                                    </div>
                                                    <hr class="p-0 m-0">
                                                    {{-- comment --}}
                                                    <div class="card-body  p-0 " >
                                                        @php
                                                            $m++;    
                                                        @endphp
                                                        {{-- collapse comments --}}
                                                        <a href="#comments{{$m.'D'}}" class=" btn btn-success radius-collapse col-12 p-0" data-toggle="collapse" >
                                                            Comments
                                                            <span class="caret"></span>
                                                        </a>
                                                        <div id="comments{{$m.'D'}}" class="collapse in p-1">
                                                            @foreach ($oldComment as $com)
                                                                @if ($com->NumberFile==$file->NumberFile && $com->TypeData==$file->Typedata)
                                                                    <div class="" style="margin:1px -14px 1px -14px;">
                                                                        <div class="card scroll p-0 m-0">
                                                                            <div class="card-block  m-0 p-0 pt-1 bgblack position-relative">
                                                                                @if ($com->user->id==Auth::user()->id)
                                                                                    {{-- delete comment --}}
                                                                                    <form action="/Delete-Comment/{{$com->user_id}}" method="POST" class="">
                                                                                        {{ csrf_field() }}
                                                                                        {{ method_field('DELETE')}}
                                                                                        <div class="" hidden>
                                                                                            <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                                                                            <input type="text" name="NumberComment" value="{{$com->NumberComment}}">
                                                                                            <input type="text" name="usersid" value="{{$doctorProfile->id}}">
                                                                                            <input type="text" name="TypeData" value="{{$file->Typedata}}">
                                                                                        </div>
                                                                                        <button type="submit" class="position-absolute bgmaroon m-0 p-0 rounded radius-down-" title="delete" style="right:0px; top:4px;">
                                                                                            <span class="now-ui-icons ui-1_simple-remove color-white m-0 p-0" style=""></span>
                                                                                        </button>
                                                                                    </form>
                                                                                    <a href="#####" class="position-absolute bgmaroon m-0 rounded " title="Edit" style=" right:21px; top:4px;">
                                                                                        <span class="now-ui-icons ui-1_settings-gear-63 color-white"></span>
                                                                                    </a>
                                                                                @endif
                                                                                <div class="bgwhite px-1 p-0 m-0 radius-top-">
                                                                                    <p class="p-0 m-0" style="font-weight: bold;">{{$com->user->FirstName.' '.$com->user->LastName}}</p>
                                                                                    {{$com->Comment}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                            {{-- add comment --}}
                                                            <form action="/addComment/{{Auth::user()->id}}" method="post">
                                                                {{ csrf_field() }}
                                                                <div class="" hidden>
                                                                    <input type="text" name="datatype" value="{{$file->Typedata}}">
                                                                    <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                                                    <input type="text" name="usersid" value="{{$doctorProfile->id}}">
                                                                </div>
                                                                <div class="clearfix row form-group">
                                                                    <textarea name="Comments" class="form-control bgblack col-sm-9 col-9 rounded mx-0 pull-left" placeholder="Comment..." id="" cols=auto rows='1' required></textarea>
                                                                    <button type="submit" class="now-ui-icons ui-1_send btn rounded pull-right" ></button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane tabs_radius" id="Videos" >
                            <div class="row m-2 p-2 pt-3">
                                <?php $m=1; ?>
                                @foreach ($doctorProfile->files as $file)
                                    @if ($file->Typedata=='Video' && $file->Semester_data == Auth::user()->Semester)
                                        <div class="col-lg-4 col-md-4 col-sm-6 m-0 p-1">
                                            <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-1 p-1" >
                                                <video class="card-img-top img-fluid" controls=controls preload=auto loop=0 poster="/assets/img/fpo_logo.jpeg">
                                                    <source src="{{asset('./assets/Data/Videos/'.$file->File)}}" type="video/mp4">
                                                </video>
                                                <div class="card-block p-1">
                                                    <h3 class="card-title m-0">{{$file->Title}}.</h3>
                                                    <div class="description ">
                                                        {{$file->Description}}.
                                                    </div>
                                                    <hr class="p-0 m-0">
                                                    {{-- Comment --}}
                                                    <div class="card-body  p-0" >
                                                        @php
                                                            $m++;    
                                                        @endphp
                                                        {{-- collapse comments --}}
                                                        <a href="#comments{{$m.'V'}}" class=" btn btn-success radius-collapse col-12 p-0" data-toggle="collapse" >
                                                            Comments
                                                            <span class="caret"></span>
                                                        </a>
                                                        <div id="comments{{$m.'V'}}" class="collapse in p-2">
                                                            @foreach ($oldComment as $com)
                                                                @if ($com->NumberFile==$file->NumberFile && $com->TypeData==$file->Typedata)
                                                                    <div class="p-0" style="margin:1px -14px 1px -14px;">
                                                                        <div class="card p-0 m-0 scroll">
                                                                            <div class="card-block  m-0 p-0 pt-1 bgblack position-relative">
                                                                                @if ($com->user->id==Auth::user()->id)
                                                                                    {{-- delete comment --}}
                                                                                    <form action="/Delete-Comment/{{$com->user_id}}" method="POST" class="">
                                                                                        {{ csrf_field() }}
                                                                                        {{ method_field('DELETE')}}
                                                                                        <div class="" hidden>
                                                                                            <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                                                                            <input type="text" name="NumberComment" value="{{$com->NumberComment}}">
                                                                                            <input type="text" name="usersid" value="{{$doctorProfile->id}}">
                                                                                            <input type="text" name="TypeData" value="{{$file->Typedata}}">
                                                                                        </div>
                                                                                        <button type="submit" class="position-absolute bgmaroon m-0 p-0 rounded radius-down-" title="delete" style="right:0px; top:4px;">
                                                                                            <span class="now-ui-icons ui-1_simple-remove color-white m-0 p-0" style=""></span>
                                                                                        </button>
                                                                                    </form>
                                                                                    <a href="#####" class="position-absolute bgmaroon m-0 rounded " title="Edit" style=" right:21px; top:4px;">
                                                                                        <span class="now-ui-icons ui-1_settings-gear-63 color-white"></span>
                                                                                    </a>
                                                                                @endif
                                                                                <div class="bgwhite px-1 p-0 m-0 radius-top-">
                                                                                    <p class="p-0 m-0" style="font-weight: bold;">{{$com->user->FirstName.' '.$com->user->LastName}}</p>
                                                                                    {{$com->Comment}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                            {{-- add comment --}}
                                                            <form action="/addComment/{{Auth::user()->id}}" method="post">
                                                                {{ csrf_field() }}
                                                                <div class="" hidden>
                                                                    <input type="text" name="datatype" value="{{$file->Typedata}}">
                                                                    <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                                                    <input type="text" name="usersid" value="{{$doctorProfile->id}}">
                                                                </div>
                                                                <div class="clearfix row form-group">
                                                                    <textarea name="Comments" class="form-control bgblack col-sm-9 col-9 rounded mx-0 pull-left" placeholder="Comment..." id="" cols=auto rows='1' required></textarea>
                                                                    <button type="submit" class="now-ui-icons ui-1_send btn rounded pull-right" ></button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane tabs_radius" id="statements" >
                            <div class="row m-2 pt-4">
                                <?php $m=1; ?>
                                @foreach ($doctorProfile->files as $file)
                                    @if ($file->Typedata=='Statement' && $file->Semester_data == Auth::user()->Semester)
                                        <div class="card bgdark mt-1">
                                            <div class="card-header ">
                                            </div>
                                            <div class="card-block  m-1 p-1 pt-1 mt-2 bgblack rounded">
                                                <div class="jumbotron p-1 m-1">
                                                    <p class="p-0 m-0 bgblack color-white-shadow ">{{$file->Title}}.</p>
                                                    <p class="p-0">
                                                        {{$file->Statement}}
                                                    </p> 
                                                </div>
                                            </div>
                                            <hr class="p-0 m-0">
                                            {{-- Comments --}}
                                            <div class="card-body p-0" >
                                                @php
                                                    $m++;    
                                                @endphp
                                                {{-- collapse comments --}}
                                                <a href="#comments{{$m.'S'}}" class=" btn btn-success radius-collapse col-12 p-0" data-toggle="collapse" >
                                                    Comments
                                                    <span class="caret"></span>
                                                </a>
                                                <div id="comments{{$m.'S'}}" class="collapse in p-0">
                                                    @foreach ($oldComment as $com)
                                                        @if ($com->NumberFile==$file->NumberFile && $com->TypeData==$file->Typedata)
                                                            <div class="p-0" style="margin:1px 0px 1px 0px;">
                                                                <div class="card p-0 m-0">
                                                                    <div class="card-block  m-0 p-0 pt-1 bgblack position-relative">
                                                                        @if ($com->user->id==Auth::user()->id)
                                                                            {{-- delete comment --}}
                                                                            <form action="/Delete-Comment/{{$com->user_id}}" method="POST" class="">
                                                                                {{ csrf_field() }}
                                                                                {{ method_field('DELETE')}}
                                                                                <div class="" hidden>
                                                                                    <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                                                                    <input type="text" name="NumberComment" value="{{$com->NumberComment}}">
                                                                                    <input type="text" name="usersid" value="{{$doctorProfile->id}}">
                                                                                    <input type="text" name="TypeData" value="{{$file->Typedata}}">
                                                                                </div>
                                                                                <button type="submit" class="position-absolute bgmaroon m-0 p-0 rounded radius-down-" title="delete" style="right:0px; top:4px;">
                                                                                    <span class="now-ui-icons ui-1_simple-remove color-white m-0 p-0" style=""></span>
                                                                                </button>
                                                                            </form>
                                                                            <a href="#####" class="position-absolute bgmaroon m-0 rounded " title="Edit" style=" right:21px; top:4px;">
                                                                                <span class="now-ui-icons ui-1_settings-gear-63 color-white"></span>
                                                                            </a>
                                                                        @endif
                                                                        <div class="bgwhite px-1 p-0 m-0 radius-top-">
                                                                            <p class="p-0 m-0" style="font-weight: bold;">{{$com->user->FirstName.' '.$com->user->LastName}}</p>
                                                                            {{$com->Comment}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                    {{-- add comments --}}
                                                    <form action="/addComment/{{Auth::user()->id}}" method="post">
                                                        {{ csrf_field() }}
                                                        <div class="" hidden>
                                                            <input type="text" name="datatype" value="{{$file->Typedata}}">
                                                            <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                                            <input type="text" name="usersid" value="{{$doctorProfile->id}}">
                                                        </div>
                                                        <div class="clearfix row ml-2 form-group">
                                                            <textarea name="Comments" class="form-control col-sm-9 col-9 bgmaroon rounded mx-0 pull-left" placeholder="Comment..." id="" cols=auto rows='1' required></textarea>
                                                            <button type="submit" class="now-ui-icons ui-1_send btn rounded pull-right" ></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection