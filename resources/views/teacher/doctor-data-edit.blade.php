@extends('layouts.mainDoctor')
<?php
use App\Detail;
?>
@section('title')

  Professor Edit informations
@endsection

@section('content')
  <?php
    if(Detail::where('user_id', '=' ,$doctorEdit->id )->exists())
    {
      $w=1;
    }
    else {
      $w=0;
    }
  ?>
  <div class="content bgdarkred">
    <div class="row m-0" style="min-height:380px;">
      <div class="col-lg-4 col-md-4 col-sm-12 p-1">
        <div class="card-user card radius-top mt-3 p-0" >
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
                  <form action="/updateBgImage/{{$doctorEdit->id}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('PUT')}}
                    <div class="" hidden>
                      <input type="text" name="routeDir" value="1">
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
            @if ($w==1)
              <img src="{{asset('./assets/DataDoc/IMG/Back_image/'.$doctorEdit->details[0]->Bg_image)}}" alt="..." style="width:100%; height:180px;">
            @else
              <img src="" alt="..." style="width:100%; height:180px;">
            @endif
          </div>
          <div class="card-body ">
            <div class="author bgblack radius-down">
              <a class="">
                <div class="justify-content-center row">
                  <div class=" avatar " id="{{$doctorEdit->Gender=='Female'?'bgfemale':'bgmale'}}">
                    @if ($w==1)
                      <img src="{{asset('./assets/DataDoc/IMG/Profile/'.$doctorEdit->details[0]->Profil_image)}}" alt="profile picture" class="avatar position-relative " style="width:140px; height:140px;" >
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
                      <form action="/updateProfileImage/{{$doctorEdit->id}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{method_field('PUT')}}
                        <div class="" hidden>
                          <input type="text" name="routeDir" value="1">
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
                  <p class="h6">{{$doctorEdit->details[0]->Position}}</p>
                @else
                  <p class="h6">the taecher position in the fpo</p>
                @endif
                <h5 class="title" style="color:orangered;">{{$doctorEdit->FirstName.' '.$doctorEdit->LastName }}</h5>
              </a>
            </div>
            <div class="description bgblack  text-center radius-top" style="margin:0px -12px 0px -12px;">
              <i class="h5"> biography </i>
            </div>
            <div  class="description p-1 bg-dark scroll "  style="margin:0px -12px 0px -12px; width:auto; border:black dashed 2px; border-top:0px;">
              @if ($w==1)
                <p class="">{{$doctorEdit->details[0]->Biography}}</p>
              @else
                <p class="h6">here will be the biography</p>
              @endif
            </div>
          </div>
          <hr>
          {{-- face twitter youtube website --}}
          <div class="container text-center pt-1 form-control radius-down">
            <div class="h5 justify-content-center p-0">Follow me on:</div>
            @if ($w==1)
              <a href="{{$doctorEdit->details[0]->Facebook}}" target="_blank" class="btn btn-neutral  btn-icon btn-round" title="facebook">
                <img src="../assets/img/facebook-icon-1.png" style="width:40px; height:40px;" alt="facebook">
              </a>
              <a href="{{$doctorEdit->details[0]->Twitter}}" target="_blank" class="btn btn-neutral  btn-icon btn-round" title="twitter">
                <img src="../assets/img/twitter-icon-2.png" style="width:40px; height:40px;" alt="twitter">
              </a>
              <a href="{{$doctorEdit->details[0]->Youtube}}" target="_blank" class="btn btn-neutral  btn-icon btn-round" title="youtube">
                <img src="../assets/img/youtube-icon-2.png" style="width:40px; height:40px;" alt="youtube">
              </a>
              <a href="{{$doctorEdit->details[0]->Siteweb}}" target="_blank" class="btn btn-neutral  btn-icon btn-round" title="siteweb">
                <img src="../assets/img/siteweb-icon-1.png" style="width:40px; height:40px;" alt="siteweb">
              </a>
            @else
              <a href="#12" class="btn btn-neutral  btn-icon btn-round" title="facebook">
                <img src="../assets/img/facebook-icon-1.png" style="width:40px; height:40px;" alt="facebook">
              </a>
              <a href="#12" class="btn btn-neutral  btn-icon btn-round" title="twitter">
                <img src="../assets/img/twitter-icon-2.png" style="width:40px; height:40px;" alt="twitter">
              </a>
              <a href="#12" class="btn btn-neutral  btn-icon btn-round" title="youtube">
                <img src="../assets/img/youtube-icon-2.png" style="width:40px; height:40px;" alt="youtube">
              </a>
              <a href="#12" class="btn btn-neutral  btn-icon btn-round" title="siteweb">
                <img src="../assets/img/siteweb-icon-1.png" style="width:40px; height:40px;" alt="siteweb">
              </a>
            @endif         
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12 p-1">
        <div class="card  mt-3 p-0">
          <div class="card-header">
            <h5 class="title">Edit Profile</h5>
          </div>
          <div class="card-body mylabel">
            <form action="/doctor-update/{{$doctorEdit->id}}" method="POST">
              {{ csrf_field() }}
              {{method_field('PUT')}}

              {{-- name first && last --}}
              <div class="row">
                {{-- first name --}}
                <div class="col-lg-6 col-md-6 col-sm-12  pt-0">
                  <div class="form-group">
                    <label>First Name</label>
                  <input type="text" class="form-control" value="{{$doctorEdit->FirstName}}" placeholder="First Name" name="First_name" required>
                  </div>
                </div>
                {{-- last Name --}}
                <div class="col-lg-6 col-md-6 col-sm-12  pt-0">
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" value="{{$doctorEdit->LastName}}" placeholder="Last Name" name="Last_name" required>
                  </div>
                </div>
              </div>
              {{-- email && phone Number --}}
              <div class="row">
                {{-- Email --}}
                <div class="col-lg-6 col-md-12 col-sm-12  pt-0">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" id="exampleInputEmail1" class="form-control" value="{{$doctorEdit->email}}" placeholder="Email" name="Email" required>
                  </div>
                </div>
                {{-- phone Number --}}
                <div class="col-lg-6 col-md-12 col-sm-12  pt-0">
                  <div class="form-group">
                    <label for="pn">Phone Number</label>
                    <input type="number" id="pn" class="form-control" value="{{$doctorEdit->Number}}" placeholder="Phone Number" name="Phone_Number">
                  </div>
                </div>
              </div>
              {{-- position in the school && gender--}}
              <div class="row">
                {{-- position in the school --}}
                <div class="col-lg-6 col-md-12 col-sm-12  pt-0">
                  <div class="form-group">
                    <label for="po">position 'POST'</label>
                    @if ($w==1)
                      <input type="text" id="po" class="form-control" value="{{$doctorEdit->details[0]->Position}}" placeholder="the position in the college" name="Position" required>
                    @else
                      <input type="text" id="po" class="form-control" placeholder="the position in the college" name="Position" required>
                    @endif
                  </div>
                </div>
                {{-- gender --}}
                <div class="col-lg-6 col-md-12 col-sm-12  pt-0 ">
                  <label >Gender</label>
                  <div class="form-group row col-8 col-lg-12">
                    <br>
                    <div class="col-4 p-0 form-control text-center">
                      <label for="aad1">Male :</label>
                      <input type="radio" id="aad1" class="" value="Male" {{$doctorEdit->Gender=='Male'?'checked':''}}  name="gender" required>
                    </div>
                    <div class="col-4 p-0 form-control text-center">
                      <label for="aad2">Female :</label>
                      <input type="radio" id="aad2" class="" value="Female" {{$doctorEdit->Gender=='Female'?'checked':''}}  name="gender" required>
                    </div>
                    <div class="col-4 p-0 form-control text-center">
                      <label for="aad3">Other :</label>
                      <input type="radio" id="aad3" class="" value="Other" {{$doctorEdit->Gender=='Other'?'checked':''}}  name="gender" required>
                    </div>
                  </div>
                </div>
              </div>
              {{--Feliere && Semester--}}
              <div class="row">
                {{-- Feliere --}}
                <div class="col-lg-6 col-md-12 col-sm-12  pt-1 m-0">
                  <div class="form-group row m-0">
                    <label for="Feliere" class="">Field</label>
                    <select name="FeliereDoctor" id="Feliere" class="form-control" required>
                      <option value="">Please select a felier</option>
                      <option value="SMI" {{$doctorEdit->Feliere =='SMI'?'selected':''}} required>SMI</option>
                      <option value="SMP" {{$doctorEdit->Feliere =='SMP'?'selected':''}} required>SMP</option>
                      <option value="TEER" {{$doctorEdit->Feliere =='TEER'?'selected':''}} required>TEER</option>
                      <option value="IGE" {{$doctorEdit->Feliere =='IGE'?'selected':''}} required>IGE</option>
                      <option value="LEA" {{$doctorEdit->Feliere =='LEA'?'selected':''}} required>LEA</option>
                      <option value="GPCA" {{$doctorEdit->Feliere =='GPCA'?'selected':''}} required>GPCA</option>
                    </select>
                  </div>
                </div>
                {{-- Semester --}}
                <div class="col-lg-6 col-md-12 col-sm-12  pt-1 m-0">
                  <div class="form-group">
                    <label for="sem" class="">Semester</label>
                    <nav class="" id="sem">
                      <a  class="p-0 m-0 mt-1 btn btn-warning"  style="width:60px;" {{$doctorEdit->Feliere=='TEER' ? 'hidden' : ''}}>
                        <label for="s1">S1 :</label>
                        <input type="radio" name="SemesterDoctor" {{$doctorEdit->Semester=='S1' && $doctorEdit->Feliere!='TEER' ? 'checked':''}} value="S1" id="s1" required>
                      </a>
                      <a  class="p-0 m-0 mt-1 btn btn-warning"  style="width:60px;" {{$doctorEdit->Feliere=='TEER' ? 'hidden' : ''}}>
                        <label for="s2">S2 :</label>
                        <input type="radio" name="SemesterDoctor" {{$doctorEdit->Semester=='S2' &&  $doctorEdit->Feliere!='TEER' ? 'checked':''}} value="S2" id="s2" required>
                      </a>
                      <a  class="p-0 m-0 mt-1 btn btn-warning"  style="width:60px;" >
                        <label for="s3">S3 :</label>
                        <input type="radio" name="SemesterDoctor" {{$doctorEdit->Semester=='S3'?'checked':''}} value="S3" id="s3" required>
                      </a>
                      <a  class="p-0 m-0 mt-1 btn btn-warning"  style="width:60px;" >
                        <label for="s4">S4 :</label>
                        <input type="radio" name="SemesterDoctor" {{$doctorEdit->Semester=='S4'?'checked':''}} value="S4" id="s4" required>
                      </a>
                      <a  class="p-0 m-0 mt-1 btn btn-warning"  style="width:60px;" >
                        <label for="s5">S5 :</label>
                        <input type="radio" name="SemesterDoctor" {{$doctorEdit->Semester=='S5'?'checked':''}} value="S5" id="s5" required>
                      </a>
                      <a  class="p-0 m-0 mt-1 btn btn-warning"  style="width:60px;" >
                        <label for="s6">S6 :</label>
                        <input type="radio" name="SemesterDoctor" {{$doctorEdit->Semester=='S6'?'checked':''}} value="S6" id="s6" required>
                      </a>
                    </nav>
                  </div>
                </div>
              </div>
              {{-- Subject --}}
              <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12  pt-1 m-0" >
                  <div class="form-group row m-0">
                    <label for="Sub" class="">Subject</label>
                    <p class="p-0 m-0" style="color:red"><sup>***</sup>If you didn't get your Subjects ,<br/>select the Field and the Current Semester than reload the page .</p>
                    <select name="SubjectData" id="Sub" class="form-control bgdarkred color-white-shadow " @if ($doctorEdit->Feliere !=NULL && $doctorEdit->Semester !=NULL && $w==1) required @endif>
                      <option value="" class="bgwhite">Please select a Subject</option>
                      @if ($w==1)
                        @if ($doctorEdit->Feliere=='SMI')
                          @if ($doctorEdit->Semester=='S1')
                            <option value="ANALYSE1" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='ANALYSE1'?'selected':''}} required>ANALYSE1</option>
                            <option value="ALGEBRE1" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='ALGEBRE1'?'selected':''}} required>ALGEBRE1</option>
                            <option value="ALGEBRE2" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='ALGEBRE2'?'selected':''}} required>ALGEBRE2</option>
                            <option value="PHYSIQUE1" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='PHYSIQUE1'?'selected':''}} required>PHYSIQUE1</option>
                            <option value="PHYSIQUE2" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='PHYSIQUE2'?'selected':''}} required>PHYSIQUE2</option>
                            <option value="INFORMATIQUE" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='INFORMATIQUE'?'selected':''}} required>INFORMATIQUE</option>
                            <option value="LTI" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='LTI'?'selected':''}} required>LTI</option>
                          @else
                            @if($doctorEdit->Semester=='S2')
                              <option value="ANALYSE2" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='ANALYSE2'?'selected':''}} required>ANALYSE2</option>
                              <option value="ANALYSE3" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='ANALYSE3'?'selected':''}} required>ANALYSE3</option>
                              <option value="ALGEBRE3" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='ALGEBRE3'?'selected':''}} required>ALGEBRE3</option>
                              <option value="PHYSIQUE3" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='PHYSIQUE3'?'selected':''}} required>PHYSIQUE3</option>
                              <option value="PHYSIQUE4" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='PHYSIQUE4'?'selected':''}} required>PHYSIQUE4</option>
                              <option value="INFORMATIQUE2" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='INFORMATIQUE2'?'selected':''}} required>INFORMATIQUE2</option>
                              <option value="LTII" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='LTII'?'selected':''}} required>LTII</option>
                            @else
                              @if ($doctorEdit->Semester=='S3')
                                <option value="PROGRAMMATION1" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='PROGRAMMATION1'?'selected':''}} required>PROGRAMMATION1</option>
                                <option value="ALGORITHMIQUE2" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='ALGORITHMIQUE2'?'selected':''}} required>ALGORITHMIQUE2</option>
                                <option value="SYSTEME D EXPLOITATION" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='SYSTEME D EXPLOITATION'?'selected':''}} required>SYSTEME D EXPLOITATION</option>
                                <option value="PROBABILITES-STATIQUE" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='PROBABILITES-STATIQUE'?'selected':''}} required>PROBABILITES-STATIQUE</option>
                                <option value="TEACHNOLOGIE DE WEB" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='TEACHNOLOGIE DE WEB'?'selected':''}} required>TEACHNOLOGIE DE WEB</option>
                                <option value="ELECTRONIQUE" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='ELECTRONIQUE'?'selected':''}} required>ELECTRONIQUE</option>
                              @else
                                @if($doctorEdit->Semester=='S4')
                                  <option value="PROGRAMMATION2" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='PROGRAMMATION2'?'selected':''}} required>PROGRAMMATION2</option>
                                  <option value="STRUCTURES DE DONNE" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='STRUCTURES DE DONNE'?'selected':''}} required>STRUCTURES DE DONNE</option>
                                  <option value="SYSTEME D-EXPLOITATION2" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='SYSTEME D-EXPLOITATION2'?'selected':''}} required>SYSTEME D-EXPLOITATION2</option>
                                  <option value="ANNATYSE NUMIRIQUE" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='ANNATYSE NUMIRIQUE'?'selected':''}} required>ANNATYSE NUMIRIQUE</option>
                                  <option value="ARCHITECTEUR DES ORDINATEURS" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='ARCHITECTEUR DES ORDINATEURS'?'selected':''}} required>ARCHITECTEUR DES ORDINATEURS</option>
                                  <option value="ELECTROMAGNETISME" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='ELECTROMAGNETISME'?'selected':''}} required>ELECTROMAGNETISME</option>
                                @else
                                  @if ($doctorEdit->Semester=='S5')
                                    <option value="BASES DE DONNEES" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='BASES DE DONNEES'?'selected':''}} required>BASES DE DONNEES</option>
                                    <option value="COMPILATION" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='COMPILATION'?'selected':''}} required>COMPILATION</option>
                                    <option value="RESEAUX" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='RESEAUX'?'selected':''}} required>RESEAUX</option>
                                    <option value="ROCHERCHE OPERATIONNELLE" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='ROCHERCHE OPERATIONNELLE'?'selected':''}} required>ROCHERCHE OPERATIONNELLE</option>
                                    <option value="UML" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='UML'?'selected':''}} required>UML</option>
                                    <option value="PROGRAMATION ORIENTEE OBJETS" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='PROGRAMATION ORIENTEE OBJETS'?'selected':''}} required>PROGRAMATION ORIENTEE OBJETS</option>
                                  @else
                                    @if ($doctorEdit->Semester=='S6')
                                      <option value="MODELISATION" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S6' && $doctorEdit->details[0]->SubjectDoctor =='MODELISATION'?'selected':''}} required>MODELISATION</option>
                                      <option value="IHM" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S6' && $doctorEdit->details[0]->SubjectDoctor =='IHM'?'selected':''}} required>IHM</option>
                                      <option value="GENIE LOGICIEL" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S6' && $doctorEdit->details[0]->SubjectDoctor =='GENIE LOGICIEL'?'selected':''}} required>GENIE LOGICIEL</option>
                                      <option value="PROGRAMMATION WEB DYNAMIQUE" {{$doctorEdit->Feliere=='SMI' && $doctorEdit->Semester=='S6' && $doctorEdit->details[0]->SubjectDoctor =='PROGRAMMATION WEB DYNAMIQUE'?'selected':''}} required>PROGRAMMATION WEB DYNAMIQUE</option>
                                    @else
                                      <option value="">please select a semester than update your information</option>
                                    @endif
                                  @endif
                                @endif
                              @endif
                            @endif
                              
                          @endif
                        @else
                          @if($doctorEdit->Feliere=='SMP')
                            @if ($doctorEdit->Semester=='S1')
                              <option value="Mecanique du point" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='Mecanique du point'?'selected':''}} required>Mecanique du point</option>
                              <option value="Thermodynamique1" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='Thermodynamique1'?'selected':''}} required>Thermodynamique1</option>
                              <option value="Atomistique" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='Atomistique'?'selected':''}} required>Atomistique</option>
                              <option value="Thermochimie" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='Thermochimie'?'selected':''}} required>Thermochimie</option>
                              <option value="Analyse1" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='Analyse1'?'selected':''}} required>Analyse1</option>
                              <option value="Algèbre1" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='Algèbre1'?'selected':''}} required>Algèbre1</option>
                              <option value="Langue et Terminologie1" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='Langue et Terminologie1'?'selected':''}} required>Langue et Terminologie1</option>
                            @else
                              @if($doctorEdit->Semester=='S2')
                                <option value="Electrostatique et Electrocinetique" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='Electrostatique et Electrocinetique'?'selected':''}} required>Electrostatique et Electrocinetique</option>
                                <option value="Optique geometrique" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='Optique geometrique'?'selected':''}} required>Optique geometrique</option>
                                <option value="Liaisons chimiques" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='Liaisons chimiques'?'selected':''}} required>Liaisons chimiques</option>
                                <option value="Chimie des solutions" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='Chimie des solutions'?'selected':''}} required>Chimie des solutions</option>
                                <option value="Analyse2" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='Analyse2'?'selected':''}} required>Analyse2</option>
                                <option value="Algebre2" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='Algebre2'?'selected':''}} required>Algebre2</option>
                                <option value="Langue et Terminologie2" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='Langue et Terminologie2'?'selected':''}} required>Langue et Terminologie2</option>
                              @else
                                @if ($doctorEdit->Semester=='S3')
                                  <option value="Mecanique du solide" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='Mecanique du solide'?'selected':''}} required>Mecanique du solide</option>
                                  <option value="Thermodynamique2" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='Thermodynamique2'?'selected':''}} required>Thermodynamique2</option>
                                  <option value="Electromagnetisme dans le vide" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='Electromagnetisme dans le vide'?'selected':''}} required>Electromagnetisme dans le vide</option>
                                  <option value="Chimie organique generale" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='Chimie organique generale'?'selected':''}} required>Chimie organique generale</option>
                                  <option value="Analyse3" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='Analyse3'?'selected':''}} required>Analyse3</option>
                                  <option value="Informatique" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='Informatique'?'selected':''}} required>Informatique</option>
                                @else
                                  @if($doctorEdit->Semester=='S4')
                                    <option value="Electronique de base" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='Electronique de base'?'selected':''}} required>Electronique de base</option>
                                    <option value="Optique physique" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='Optique physique'?'selected':''}} required>Optique physique</option>
                                    <option value="Electricite3" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='Electricite3'?'selected':''}} require>Electricite3</option>
                                    <option value="Mecanique quantique" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='Mecanique quantique'?'selected':''}} required>Mecanique quantique</option>
                                    <option value="Cristallographie geometrique et cristallochimie" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='Cristallographie geometrique et cristallochimie'?'selected':''}} required>Cristallographie geometrique et cristallochimie</option>
                                    <option value="Analyse numerique et algorithme" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='Analyse numerique et algorithme'?'selected':''}} required>Analyse numerique et algorithme</option>
                                  @else
                                    @if ($doctorEdit->Semester=='S5')
                                      <option value="Electronique analogique" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='Electronique analogique'?'selected':''}} required>Electronique analogique</option>
                                      <option value="Mecanique analytique et vibrations" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='Mecanique analytique et vibrations'?'selected':''}} required>Mecanique analytique et vibrations</option>
                                      <option value="Physique nucleaire" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='Physique nucleaire'?'selected':''}} required>Physique nucleaire</option>
                                      <option value="Physique des materiaux" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='Physique des materiaux'?'selected':''}} required>Physique des materiaux</option>
                                      <option value="Physique quantique" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='Physique quantique'?'selected':''}} required>Physique quantique</option>
                                      <option value="Physique statistique" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='Physique statistique'?'selected':''}} required>Physique statistique</option>
                                    @else
                                      @if ($doctorEdit->Semester=='S6')
                                        <option value="Techniques de caracterisation des materiaux" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S6' && $doctorEdit->details[0]->SubjectDoctor =='Techniques de caracterisation des materiaux'?'selected':''}} required>Techniques de caracterisation des materiaux</option>
                                        <option value="Theorie des materiaux" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S6' && $doctorEdit->details[0]->SubjectDoctor =='Theorie des materiaux'?'selected':''}} required>Theorie des materiaux</option>
                                        <option value="Physique atomique" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S6' && $doctorEdit->details[0]->SubjectDoctor =='Physique atomique'?'selected':''}} required>Physique atomique</option>
                                        <option value="Initiation à la modelisation" {{$doctorEdit->Feliere=='SMP' && $doctorEdit->Semester=='S6' && $doctorEdit->details[0]->SubjectDoctor =='Initiation à la modelisation'?'selected':''}} required>Initiation à la modelisation</option>
                                      @else
                                        <option value="">please select a semester than update your information</option>
                                      @endif
                                    @endif
                                  @endif
                                @endif
                              @endif
                            @endif
                          @else
                            @if ($doctorEdit->Feliere=='IGE')
                              @if ($doctorEdit->Semester=='S1')
                                <option value="Statistiques descriptives" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='Statistiques descriptives'?'selected':''}} required>Statistiques descriptives</option>
                                <option value="ANALYSE 1" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='ANALYSE 1'?'selected':''}} required>ANALYSE 1</option>
                                <option value="MACROECONOMIE" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='MACROECONOMIE'?'selected':''}} required>MACROECONOMIE</option>
                                <option value="MICROECONOMIE" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='MICROECONOMIE'?'selected':''}} required>MICROECONOMIE</option>
                                <option value="INTRODUCTION A L’ETUDE DU DROIT" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='INTRODUCTION A L’ETUDE DU DROIT'?'selected':''}} required>INTRODUCTION A L’ETUDE DU DROIT</option>
                                <option value="INTRODUCTION A L’INFORMATIQUE" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='INTRODUCTION A L’INFORMATIQUE'?'selected':''}} required>INTRODUCTION A L’INFORMATIQUE</option>
                                <option value="LANGUES ET TERMINOLOGIE I" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='LANGUES ET TERMINOLOGIE I'?'selected':''}} required>LANGUES ET TERMINOLOGIE I</option>
                              @else
                                @if($doctorEdit->Semester=='S2')
                                  <option value="LANGUES ET TERMINOLOGIE" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='LANGUES ET TERMINOLOGIE'?'selected':''}} required>LANGUES ET TERMINOLOGIE</option>
                                  <option value="ALGORITHMIQUE 1" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='ALGORITHMIQUE 1'?'selected':''}} required>ALGORITHMIQUE 1</option>
                                  <option value="INITIATION AUX BASES DE DONNEES ET MERISE" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='INITIATION AUX BASES DE DONNEES ET MERISE'?'selected':''}} required>INITIATION AUX BASES DE DONNEES ET MERISE</option>
                                  <option value="MANAGEMENT" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='MANAGEMENT'?'selected':''}} required>MANAGEMENT</option>
                                  <option value="COMPTABILITE GENERALE" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='COMPTABILITE GENERALE'?'selected':''}} required>COMPTABILITE GENERALE</option>
                                  <option value="MATHEMATIQUES FINANCIERES" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='MATHEMATIQUES FINANCIERES'?'selected':''}} required>MATHEMATIQUES FINANCIERES</option>
                                  <option value="ALGEBRE" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='ALGEBRE'?'selected':''}} required>ALGEBRE</option>
                                @else
                                  @if ($doctorEdit->Semester=='S3')
                                    <option value="PROGRAMMATION I" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='PROGRAMMATION I'?'selected':''}} required>PROGRAMMATION I</option>
                                    <option value="ALGORITHMIQUE II" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='ALGORITHMIQUE II'?'selected':''}} required>ALGORITHMIQUE II</option>
                                    <option value="MARKETING" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='MARKETING'?'selected':''}} required>MARKETING</option>
                                    <option value="PROBABILITES-STATISTIQUE" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='PROBABILITES-STATISTIQUE'?'selected':''}} required>PROBABILITES-STATISTIQUE</option>
                                    <option value="TECHNOLOGIE DU WEB" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='TECHNOLOGIE DU WEB'?'selected':''}} required>TECHNOLOGIE DU WEB</option>
                                    <option value="FISCALITE" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='FISCALITE'?'selected':''}} required>FISCALITE</option>
                                  @else
                                    @if($doctorEdit->Semester=='S4')
                                      <option value="SQL" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='SQL'?'selected':''}} required>SQL</option>
                                      <option value="PROGRAMMATION WEB DYNAMIQUE" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='PROGRAMMATION WEB DYNAMIQUE'?'selected':''}} required>PROGRAMMATION WEB DYNAMIQUE</option>
                                      <option value="GESTION DES RESSOURCES HUMAINES" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='GESTION DES RESSOURCES HUMAINES'?'selected':''}} required>GESTION DES RESSOURCES HUMAINES</option>
                                      <option value="COMPTABILITE ANALYTIQUE" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='COMPTABILITE ANALYTIQUE'?'selected':''}} required>COMPTABILITE ANALYTIQUE</option>
                                      <option value="ANALYSE DES DONNEES" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='ANALYSE DES DONNEES'?'selected':''}} required>ANALYSE DES DONNEES</option>
                                      <option value="DIAGNOSTIC ET ANALYSE FINANCIERE" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='DIAGNOSTIC ET ANALYSE FINANCIERE'?'selected':''}} required>DIAGNOSTIC ET ANALYSE FINANCIERE</option>
                                    @else
                                      @if ($doctorEdit->Semester=='S5')
                                        <option value="RECHERCHE OPERATIONNELLE" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='RECHERCHE OPERATIONNELLE'?'selected':''}} required>RECHERCHE OPERATIONNELLE</option>
                                        <option value="ORACLE" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='ORACLE'?'selected':''}} required>ORACLE</option>
                                        <option value="GESTION FINANCIERES" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='GESTION FINANCIERES'?'selected':''}} required>GESTION FINANCIERES</option>
                                        <option value="MANAGEMENT STRATEGIQUE" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='MANAGEMENT STRATEGIQUE'?'selected':''}} required>MANAGEMENT STRATEGIQUE</option>
                                        <option value="CONCEPTION ORIENTEE OBJETS (UML)" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='CONCEPTION ORIENTEE OBJETS (UML)'?'selected':''}} required>CONCEPTION ORIENTEE OBJETS (UML)</option>
                                        <option value="JAVA" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='JAVA'?'selected':''}} required>JAVA</option>
                                      @else
                                        @if ($doctorEdit->Semester=='S6')
                                          <option value="CONTROLE DE GESTION" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S6' && $doctorEdit->details[0]->SubjectDoctor =='CONTROLE DE GESTION'?'selected':''}} required>CONTROLE DE GESTION</option>
                                          <option value="ENTREPREUNARIAT" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S6' && $doctorEdit->details[0]->SubjectDoctor =='ENTREPREUNARIAT'?'selected':''}} required>ENTREPREUNARIAT</option>
                                          <option value="SYSTEME D'INFORMATION INTEGRE" {{$doctorEdit->Feliere=='IGE' && $doctorEdit->Semester=='S6' && $doctorEdit->details[0]->SubjectDoctor =='SYSTEME D\'INFORMATION INTEGRE'?'selected':''}} required>GENIE LOGICIEL</option>
                                        @else
                                          <option value="">please select a semester than update your information</option>
                                        @endif
                                      @endif
                                    @endif
                                  @endif
                                @endif
                              @endif
                            @else
                              @if($doctorEdit->Feliere=='LEA')
                                @if ($doctorEdit->Semester=='S1')
                                  <option value="GRAMMAIRE FRANÇAISE" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='GRAMMAIRE FRANÇAISE'?'selected':''}} required>GRAMMAIRE FRANÇAISE</option>
                                  <option value="GRAMMAIRE ANGLAISE" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='GRAMMAIRE ANGLAISE'?'selected':''}} required>GRAMMAIRE ANGLAISE</option>
                                  <option value="MACROECONOMIE" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='MACROECONOMIE'?'selected':''}} required>MACROECONOMIE</option>
                                  <option value="MICROECONOMIE" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='MICROECONOMIE'?'selected':''}} required>MICROECONOMIE</option>
                                  <option value="INTRODUCTION A L’ETUDE DU DROIT" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='INTRODUCTION A L’ETUDE DU DROIT'?'selected':''}} required>INTRODUCTION A L’ETUDE DU DROIT</option>
                                  <option value="TECHNIQUES D’EXPRESSION ET DE COMMUNICATION" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='TECHNIQUES D’EXPRESSION ET DE COMMUNICATION'?'selected':''}} required>TECHNIQUES D’EXPRESSION ET DE COMMUNICATION</option>
                                  <option value="METHODOLOGIE DU TRAVAIL UNIVERSITAIRE" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='METHODOLOGIE DU TRAVAIL UNIVERSITAIRE'?'selected':''}} required>METHODOLOGIE DU TRAVAIL UNIVERSITAIRE</option>
                                @else
                                  @if($doctorEdit->Semester=='S2')
                                    <option value="ART, CULTURES ET CIVILISATIONS DU MAROC" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='ART, CULTURES ET CIVILISATIONS DU MAROC'?'selected':''}} required>ART, CULTURES ET CIVILISATIONS DU MAROC</option>
                                    <option value="SOCIOLOGIE DES ORGANISATIONS ET INSTITUTIONS SOCIALES" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='SOCIOLOGIE DES ORGANISATIONS ET INSTITUTIONS SOCIALES'?'selected':''}} required>SOCIOLOGIE DES ORGANISATIONS ET INSTITUTIONS SOCIALES</option>
                                    <option value="HISTOIRE ET GEOGRAPHIE DU MAROC" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='HISTOIRE ET GEOGRAPHIE DU MAROC'?'selected':''}} required>HISTOIRE ET GEOGRAPHIE DU MAROC</option>
                                    <option value="MANAGEMENT" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='MANAGEMENT'?'selected':''}} required>MANAGEMENT</option>
                                    <option value="COMPTABILITE GENERALE" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='COMPTABILITE GENERALE'?'selected':''}} required>COMPTABILITE GENERALE</option>
                                    <option value="ANALYSE DE TEXTE EN ANGLAIS" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='ANALYSE DE TEXTE EN ANGLAIS'?'selected':''}} required>ANALYSE DE TEXTE EN ANGLAIS</option>
                                    <option value="ANALYSE DE TEXTE EN FRANCAIS" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='ANALYSE DE TEXTE EN FRANCAIS'?'selected':''}} required>ANALYSE DE TEXTE EN FRANCAIS</option>
                                  @else
                                    @if ($doctorEdit->Semester=='S3')
                                      <option value="EXPRESSION ET CORRESPONDANCE COMMERCIALE EN FRANÇAIS" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='EXPRESSION ET CORRESPONDANCE COMMERCIALE EN FRANÇAIS'?'selected':''}} required>EXPRESSION ET CORRESPONDANCE COMMERCIALE EN FRANÇAIS</option>
                                      <option value="EXPRESSION ET CORRESPONDANCE COMMERCIALE EN ANGLAIS" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='EXPRESSION ET CORRESPONDANCE COMMERCIALE EN ANGLAIS'?'selected':''}} required>EXPRESSION ET CORRESPONDANCE COMMERCIALE EN ANGLAIS</option>
                                      <option value="GESTION FINANCIERE" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='GESTION FINANCIERE'?'selected':''}} required>GESTION FINANCIERE</option>
                                      <option value="STATISTIQUES ET METHEMATIQUES FINANCIERES" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='STATISTIQUES ET METHEMATIQUES FINANCIERES'?'selected':''}} required>STATISTIQUES ET METHEMATIQUES FINANCIERES</option>
                                      <option value="CULTURE ET CIVILISATION FRANÇAISE" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='CULTURE ET CIVILISATION FRANÇAISE'?'selected':''}} required>CULTURE ET CIVILISATION FRANÇAISE</option>
                                      <option value="INITIATION A L’ESPAGNOL" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='INITIATION A L’ESPAGNOL'?'selected':''}} required>INITIATION A L’ESPAGNOL</option>
                                    @else
                                      @if($doctorEdit->Semester=='S4')
                                        <option value="RENFORCEMENT DE LA CULTURE ESPAGNOLE" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='RENFORCEMENT DE LA CULTURE ESPAGNOLE'?'selected':''}} required>RENFORCEMENT DE LA CULTURE ESPAGNOLE</option>
                                        <option value="COMMERCE EQUITABLE ET ECONOMIE SOLIDAIRE" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='COMMERCE EQUITABLE ET ECONOMIE SOLIDAIRE'?'selected':''}} required>COMMERCE EQUITABLE ET ECONOMIE SOLIDAIRE</option>
                                        <option value="GESTION DES RESSOURCES HUMAINES ET NTIC" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='GESTION DES RESSOURCES HUMAINES ET NTIC'?'selected':''}} required>GESTION DES RESSOURCES HUMAINES ET NTIC</option>
                                        <option value="REDACTION PROFESSIONNELLE EN ANGLAIS" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='REDACTION PROFESSIONNELLE EN ANGLAIS'?'selected':''}} required>REDACTION PROFESSIONNELLE EN ANGLAIS</option>
                                        <option value="COMMUNICATION DES ORGANISATIONS" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='COMMUNICATION DES ORGANISATIONS'?'selected':''}} required>COMMUNICATION DES ORGANISATIONS</option>
                                        <option value="CULTURE ET CIVILISATION ANGLAISE" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='CULTURE ET CIVILISATION ANGLAISE'?'selected':''}} required>CULTURE ET CIVILISATION ANGLAISE</option>
                                      @else
                                        @if ($doctorEdit->Semester=='S5')
                                          <option value="COMMERCE ET ECHANGES INTERNATIONAUX" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='COMMERCE ET ECHANGES INTERNATIONAUX'?'selected':''}} required>COMMERCE ET ECHANGES INTERNATIONAUX</option>
                                          <option value="ECRITURE JOURNALISTIQUE ET PRESSE ECRITE" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='ECRITURE JOURNALISTIQUE ET PRESSE ECRITE'?'selected':''}} required>ECRITURE JOURNALISTIQUE ET PRESSE ECRITE</option>
                                          <option value="MARKETING ET E-COMMERCE" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='MARKETING ET E-COMMERCE'?'selected':''}} required>MARKETING ET E-COMMERCE</option>
                                          <option value="REDACTION PROFESSIONNELLE EN FRANÇAIS" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='REDACTION PROFESSIONNELLE EN FRANÇAIS'?'selected':''}} required>REDACTION PROFESSIONNELLE EN FRANÇAIS</option>
                                          <option value="COMMUNICATION MEDIATIQUE" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='COMMUNICATION MEDIATIQUE'?'selected':''}} required>COMMUNICATION MEDIATIQUE</option>
                                          <option value="LANGUES DES AFFAIRES EN ESPAGNOL" {{$doctorEdit->Feliere=='LEA' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='LANGUES DES AFFAIRES EN ESPAGNOL'?'selected':''}} required>LANGUES DES AFFAIRES EN ESPAGNOL</option>
                                        @else
                                          @if ($doctorEdit->Semester=='S6')
                                            <option value="ENTREPREUNARIAT ET GESTION DE PROJET" {{$doctorEdit->details[0]->SubjectDoctor =='ENTREPREUNARIAT ET GESTION DE PROJET'?'selected':''}} required>ENTREPREUNARIAT ET GESTION DE PROJET</option>
                                            <option value="INGENIERIE ET MANAGEMENT CULTUREL" {{$doctorEdit->details[0]->SubjectDoctor =='INGENIERIE ET MANAGEMENT CULTUREL'?'selected':''}} required>INGENIERIE ET MANAGEMENT CULTUREL</option>
                                            <option value="PUBLICITE ET COMMUNICATION COMMERCIALE" {{$doctorEdit->details[0]->SubjectDoctor =='PUBLICITE ET COMMUNICATION COMMERCIALE'?'selected':''}} required>PUBLICITE ET COMMUNICATION COMMERCIALE</option>
                                          @else
                                            <option value="">please select a semester than update your information</option>
                                          @endif
                                        @endif
                                      @endif
                                    @endif
                                  @endif
                                @endif
                              @else
                                @if ($doctorEdit->Feliere=='TEER')
                                  @if ($doctorEdit->Semester=='S1')
                                    <option value="{{$doctorEdit->details[0]->SubjectDoctor}}" required>None</option>
                                  @else
                                    @if($doctorEdit->Semester=='S2')
                                      <option value="{{$doctorEdit->details[0]->SubjectDoctor}}" required>None</option>
                                    @else
                                      @if ($doctorEdit->Semester=='S3')
                                        <option value="UML" {{$doctorEdit->Feliere=='TEER' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='UML'?'selected':''}} required>UML</option>
                                        <option value="UML" {{$doctorEdit->Feliere=='TEER' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='UML'?'selected':''}} required>UML</option>
                                        <option value="UML" {{$doctorEdit->Feliere=='TEER' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='UML'?'selected':''}} required>UML</option>
                                        <option value="UML" {{$doctorEdit->Feliere=='TEER' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='UML'?'selected':''}} required>UML</option>
                                        <option value="UML" {{$doctorEdit->Feliere=='TEER' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='UML'?'selected':''}} required>UML</option>
                                        <option value="UML" {{$doctorEdit->Feliere=='TEER' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='UML'?'selected':''}} required>UML</option>
                                      @else
                                        @if($doctorEdit->Semester=='S4')
                                          <option value="Informatique" {{$doctorEdit->Feliere=='TEER' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='Informatique'?'selected':''}} required>Informatique</option>
                                          <option value="Electronique de Puissance" {{$doctorEdit->Feliere=='TEER' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='Electronique de Puissance'?'selected':''}} required>Electronique de Puissance</option>
                                          <option value="Electrotechnique" {{$doctorEdit->Feliere=='TEER' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='Electrotechnique'?'selected':''}} required>Electrotechnique</option>
                                          <option value="Transferts Thermiques" {{$doctorEdit->Feliere=='TEER' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='Transferts Thermiques'?'selected':''}} required>Transferts Thermiques</option>
                                          <option value="Optique physique" {{$doctorEdit->Feliere=='TEER' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='Optique physique'?'selected':''}} required>Optique physique</option>
                                          <option value="Mécanique des Fluides" {{$doctorEdit->Feliere=='TEER' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='Mécanique des Fluides'?'selected':''}} required>Mécanique des Fluides</option>
                                        @else
                                          @if ($doctorEdit->Semester=='S5')
                                            <option value="UML" {{$doctorEdit->Feliere=='TEER' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='UML'?'selected':''}} required>UML</option>
                                            <option value="UML" {{$doctorEdit->Feliere=='TEER' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='UML'?'selected':''}} required>UML</option>
                                            <option value="UML" {{$doctorEdit->Feliere=='TEER' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='UML'?'selected':''}} required>UML</option>
                                            <option value="UML" {{$doctorEdit->Feliere=='TEER' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='UML'?'selected':''}} required>UML</option>
                                            <option value="UML" {{$doctorEdit->Feliere=='TEER' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='UML'?'selected':''}} required>UML</option>
                                            <option value="UML" {{$doctorEdit->Feliere=='TEER' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='UML'?'selected':''}} required>UML</option>
                                          @else
                                            @if ($doctorEdit->Semester=='S6')
                                              <option value="Entreprenariat" {{$doctorEdit->Feliere=='TEER' && $doctorEdit->Semester=='S6' && $doctorEdit->details[0]->SubjectDoctor =='Entreprenariat'?'selected':''}} required>Entreprenariat</option>
                                              <option value="Ressources Energétique et Capteurs" {{$doctorEdit->Feliere=='TEER' && $doctorEdit->Semester=='S6' && $doctorEdit->details[0]->SubjectDoctor =='Ressources Energétique et Capteurs'?'selected':''}} required>Ressources Energétique et Capteurs</option>
                                              <option value="Régulation" {{$doctorEdit->Feliere=='TEER' && $doctorEdit->Semester=='S6' && $doctorEdit->details[0]->SubjectDoctor =='Régulation'?'selected':''}} required>Régulation</option>
                                            @else
                                              <option value="">please select a semester than update your information</option>
                                            @endif
                                          @endif
                                        @endif
                                      @endif
                                    @endif
                                  @endif
                                @else
                                  @if ($doctorEdit->Feliere=='GPCA')
                                    @if ($doctorEdit->Semester=='S1')
                                      <option value="Français" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='Français'?'selected':''}} required>Français</option>
                                      <option value="Anglais" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='Anglais'?'selected':''}} required>Anglais</option>
                                      <option value="Macroéconomie" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='Macroéconomie'?'selected':''}} required>Macroéconomie</option>
                                      <option value="Microéconomie" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='Microéconomie'?'selected':''}} required>Microéconomie</option>
                                      <option value="Introduction à l’étude du droit" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='Introduction à l’étude du droit'?'selected':''}} required>Introduction à l’étude du droit</option>
                                      <option value="Communication" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='Communication'?'selected':''}} required>Communication</option>
                                      <option value="éthodologie du travail universitaire" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S1' && $doctorEdit->details[0]->SubjectDoctor =='éthodologie du travail universitaire'?'selected':''}} required>éthodologie du travail universitaire</option>
                                    @else
                                      @if($doctorEdit->Semester=='S2')
                                        <option value="ART, CULTURE ET CIVILISATION DU MAROC" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='ART, CULTURE ET CIVILISATION DU MAROC'?'selected':''}} required>ART, CULTURE ET CIVILISATION DU MAROC</option>
                                        <option value="SOCIOLOGIE GENERALE" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='SOCIOLOGIE GENERALE'?'selected':''}} required>SOCIOLOGIE GENERALE</option>
                                        <option value="GEOGRAPHIE" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='GEOGRAPHIE'?'selected':''}} required>GEOGRAPHIE</option>
                                        <option value="MANAGEMENT" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='MANAGEMENT'?'selected':''}} required>MANAGEMENT</option>
                                        <option value="COMPTABILITE GENERALE" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='COMPTABILITE GENERALE'?'selected':''}} required>COMPTABILITE GENERALE</option>
                                        <option value="ANALYSE DE TEXTE EN ANGLAIS" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='ANALYSE DE TEXTE EN ANGLAIS'?'selected':''}} required>ANALYSE DE TEXTE EN ANGLAIS</option>
                                        <option value="ANALYSE DE TEXTE EN FRANCAIS" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S2' && $doctorEdit->details[0]->SubjectDoctor =='ANALYSE DE TEXTE EN FRANCAIS'?'selected':''}} required>ANALYSE DE TEXTE EN FRANCAIS</option>
                                      @else
                                        @if ($doctorEdit->Semester=='S3')
                                          <option value="Histoire des idées" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='Histoire des idées'?'selected':''}} required>Histoire des idées</option>
                                          <option value="Atelier d’écriture scénaristique" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='Atelier d’écriture scénaristique'?'selected':''}} required>Atelier d’écriture scénaristique</option>
                                          <option value="Gestion financière" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='Gestion financière'?'selected':''}} required>Gestion financière</option>
                                          <option value="Statistiques et mathématiques financières" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='Statistiques et mathématiques financières'?'selected':''}} required>Statistiques et mathématiques financières</option>
                                          <option value="Histoire de l’Art" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='Histoire de l’Art'?'selected':''}} required>Histoire de l’Art</option>
                                          <option value="Histoire du cinéma et de la TV" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S3' && $doctorEdit->details[0]->SubjectDoctor =='Histoire du cinéma et de la TV'?'selected':''}} required>Histoire du cinéma et de la TV</option>
                                        @else
                                          @if($doctorEdit->Semester=='S4')
                                            <option value="INFOGRAPHIE" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='INFOGRAPHIE'?'selected':''}} required>INFOGRAPHIE</option>
                                            <option value="ESTHETIQUE FILMIQUE" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='ESTHETIQUE FILMIQUE'?'selected':''}} required>ESTHETIQUE FILMIQUE</option>
                                            <option value="GESTION DES RESSOURCES HUMAINES" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='GESTION DES RESSOURCES HUMAINES'?'selected':''}} required>GESTION DES RESSOURCES HUMAINES</option>
                                            <option value="ANALYSE DE L'IMAGE FIXE ET ANIMEE" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='ANALYSE DE L\'IMAGE FIXE ET ANIMEE'?'selected':''}} required>ANALYSE DE L'IMAGE FIXE ET ANIMEE</option>
                                            <option value="LITTERATURE ET CINEMA" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='LITTERATURE ET CINEMA'?'selected':''}} required>LITTERATURE ET CINEMA</option>
                                            <option value="THEORIE DE LA PRODUCTION CINEMATOGRAPHIQUE ET AUDIOVISUELLE" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S4' && $doctorEdit->details[0]->SubjectDoctor =='THEORIE DE LA PRODUCTION CINEMATOGRAPHIQUE ET AUDIOVISUELLE'?'selected':''}} required>THEORIE DE LA PRODUCTION CINEMATOGRAPHIQUE ET AUDIOVISUELLE</option>
                                          @else
                                            @if ($doctorEdit->Semester=='S5')
                                              <option value="Psychologie et dynamique des groupes sociaux" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='Psychologie et dynamique des groupes sociaux'?'selected':''}} required>Psychologie et dynamique des groupes sociaux</option>
                                              <option value="Ecriture journalistique et Reportage" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='Ecriture journalistique et Reportage'?'selected':''}} required>Ecriture journalistique et Reportage</option>
                                              <option value="Théories du cinéma" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='Théories du cinéma'?'selected':''}} required>Théories du cinéma</option>
                                              <option value="Post production Son" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='Post production Son'?'selected':''}} required>Post production Son</option>
                                              <option value="Communication médiatique" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='Communication médiatique'?'selected':''}} required>Communication médiatique</option>
                                              <option value="Préparation d’un documentaire et d’un courtmétrage" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S5' && $doctorEdit->details[0]->SubjectDoctor =='Préparation d’un documentaire et d’un courtmétrage'?'selected':''}} required>Préparation d’un documentaire et d’un courtmétrage</option>
                                            @else
                                              @if ($doctorEdit->Semester=='S6')
                                                <option value="ENTREPRENARIAT, DROIT DU CINEMA ET DE L'AUDIOVISUEL" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S6' && $doctorEdit->details[0]->SubjectDoctor =='ENTREPRENARIAT, DROIT DU CINEMA ET DE L\'AUDIOVISUEL'?'selected':''}} required>ENTREPRENARIAT, DROIT DU CINEMA ET DE L'AUDIOVISUEL</option>
                                                <option value="PRATIQUES DE L'INTERCULTUREL" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S6' && $doctorEdit->details[0]->SubjectDoctor =='PRATIQUES DE L\'INTERCULTUREL'?'selected':''}} required>PRATIQUES DE L'INTERCULTUREL</option>
                                                <option value="PRATIQUES DU MONTAGE FINAL CUT PRO" {{$doctorEdit->Feliere=='GPCA' && $doctorEdit->Semester=='S6' && $doctorEdit->details[0]->SubjectDoctor =='PRATIQUES DU MONTAGE FINAL CUT PRO'?'selected':''}} required>PRATIQUES DU MONTAGE FINAL CUT PRO</option>
                                              @else
                                                <option value="">please select a semester than update your information</option>
                                              @endif
                                            @endif
                                          @endif
                                        @endif
                                      @endif
                                    @endif
                                  @else
                                    <option value="">please select a Field than update your information</option>
                                  @endif
                                @endif
                              @endif
                            @endif
                          @endif
                        @endif
                      @else
                        <option value="">please complet all the fields than update your information</option>
                      @endif
                    </select>
                  </div>
                </div>
              </div>
              {{-- biography --}}
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="descri">About Me (biography):</label>
                    @if ($w==1)
                      <textarea cols=auto id="descri" name="Biography" class="textarea bg-info rounded" style="height:140px" placeholder="Here can be your biography" required>{{$doctorEdit->details[0]->Biography}}</textarea>
                    @else
                      <textarea cols=auto id="descri" name="Biography" class="textarea bg-info rounded" style="height:140px" placeholder="Here can be your biography" required></textarea>
                    @endif
                  </div>
                </div>
              </div>
              {{--facebook && twitter && youtube && siteWeb--}}
                {{--collapse--}}
              <a href="#social_media" class=" btn btn-success radius-collapse col-12 p-0" data-toggle="collapse" >
                Social Media
                <span class="caret"></span>
              </a>
              @if ($w==1)
                @if($doctorEdit->details[0]->Facebook==NULL || $doctorEdit->details[0]->Twitter==NULL || $doctorEdit->details[0]->Youtube==NULL || $doctorEdit->details[0]->Siteweb==NULL) 
                  @php
                      $show='show';
                  @endphp
                @endif
                <div class="row ml-1 mr-1 collapse in {{$show ?? ''}}" id="social_media">
                  
              @else
                <div class="row ml-1 mr-1 collapse in show" id="social_media">    
              @endif
                {{--facebook--}}
                <div class="col-lg-3 col-md-6 col-sm-6  p-0">
                  <label>faceBook</label>
                  <div class="input-group">
                    <div class="input-group-prepend ">
                      <span class="input-group-text p-1" ><img src="../assets/img/facebook-icon-1.png" style="width:30px; height:30px;" alt=""></span>
                    </div>
                    @if ($w==1)
                      <input type="url" class="form-control" value="{{$doctorEdit->details[0]->Facebook}}" placeholder="Facebook link" name="Facebook" >
                    @else
                      <input type="url" class="form-control" placeholder="Facebook link" name="Facebook" >
                    @endif
                  </div>
                </div>
                {{--Youtube--}}
                <div class="col-lg-3 col-md-6 col-sm-6  p-0">
                  <label>YouTube</label>
                  <div class="input-group">
                    <div class="input-group-prepend ">
                      <span class="input-group-text p-1 circle" ><img src="../assets/img/youtube-icon-2.png" style="width:30px; height:30px;" alt=""></span>
                    </div>
                    @if ($w==1)
                      <input type="url" class="form-control" value="{{$doctorEdit->details[0]->Youtube}}" placeholder="Youtube link" name="Youtube" >
                    @else
                      <input type="url" class="form-control" placeholder="Youtube link" name="Youtube" >
                    @endif
                  </div>
                </div>
                {{--Twitter--}}
                <div class="col-lg-3 col-md-6 col-sm-6  p-0">
                  <label>Twitter</label>
                  <div class="input-group">
                    <div class="input-group-prepend ">
                      <span class="input-group-text p-1" ><img src="../assets/img/twitter-icon-2.png" style="width:30px; height:30px;" alt=""></span>
                    </div>
                    @if ($w==1)
                    <input type="url" class="form-control" value="{{$doctorEdit->details[0]->Twitter}}" placeholder="Twitter link" name="Twitter" >
                    @else
                      <input type="url" class="form-control" placeholder="Twitter link" name="Twitter" >
                    @endif
                  </div>
                </div>
                {{--SiteWeb--}}
                <div class="col-lg-3 col-md-6 col-sm-6  p-0">
                  <label>SiteWeb</label>
                  <div class="input-group ">
                    
                    <div class="input-group-prepend ">
                      <span class="input-group-text p-1" ><img src="../assets/img/siteweb-icon-1.png" style="width:30px; height:30px;" alt=""></span>
                    </div>
                    @if ($w==1)
                      <input type="url" class="form-control" value="{{$doctorEdit->details[0]->Siteweb}}" placeholder="SiteWeb link" name="Siteweb" >
                    @else
                      <input type="url" class="form-control " placeholder="SiteWeb link" name="Siteweb" >
                    @endif
                  </div>
                </div>
                {{-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div> --}}
              </div>
              {{-- update && cancel button --}}
              <div class="row bgblack m-0 pull-right rounded">
              <a href="/doctor-data-profile/{{$doctorEdit->id}}" class="btn btn-danger m-0 mr-2 radius-top"><b>cancel</b></a>
                <input type="submit" class="btn btn-success m-0 radius-top" name="submit" value="Update"/>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
      
