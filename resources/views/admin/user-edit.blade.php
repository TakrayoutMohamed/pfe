@extends('layouts.master')

@section('title')

    Dashboard Edit users

@endsection



@section('content')
    <div class=" jumbotron px-0 mx-0">
        <div class="card-body bgblack p-1 pl-2 pr-1 row m-0 " style="min-height:357px;">
            <div class="m-0 ">
                <div class="col-12  p-0">
                    <div class="card p-0 mt-2 ml-0 ">
                        <div class="card-header p-0">
                            <h3 class="p-0 m-0">Update user information</h3>
                        </div>
                        <div class="card-body">
                            <form action="/Update-user/{{$users->id}}" method="POST" class="row">
                                {{ csrf_field() }}
                                {{method_field('PUT')}}
                                @if ($users->usertype=='student')
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="FirstName" class="col-md-0 col-form-label text-md-right">First Name</label>
                                        <input id="FirstName" value="{{$users->FirstName}}" type="text" name="FirstName1" class=" col-md-12 form-control">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="LastName" class="col-md-0 col-form-label text-md-right">Last Name</label>
                                        <input id="LastName" value="{{$users->LastName}}" type="text" name="LastName1" class=" col-md-12 form-control">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="email" class="col-md-0 col-form-label text-md-right">E-Mail Address</label>
                                        <input id="email" value="{{$users->email}}" type="email" name="email1" class=" col-md-12 form-control">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="Number" class="col-md-0 col-form-label text-md-right">Phone Number</label>
                                        <input id="Number" value="{{$users->Number}}" type="number" name="Number1" class=" col-md-12 form-control">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="CNE" class="col-md-0 col-form-label text-md-right">CNE</label>
                                        <input id="CNE" value="{{$users->CNE}}" type="text" name="CNE1" class=" col-md-12 form-control">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="CNI" class="col-md-0 col-form-label text-md-right">CNI</label>
                                        <input id="CNI" value="{{$users->CNI}}" type="text" name="CNI1" class=" col-md-12 form-control">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="Feliere" class="col-md-0 col-form-label text-md-right">Feliere</label>
                                        <input id="Feliere" value="{{$users->Feliere}}" type="text" name="Feliere1" class=" col-md-12 form-control">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="Gender" class="col-md-0 col-form-label text-md-right">Gender</label>
                                        <input id="Gender" value="{{$users->Gender}}" type="text" name="Gender1" class=" col-md-12 form-control">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="usertype" class="col-md-0 col-form-label text-md-right">User Type</label>
                                        <div class="col-12 p-0 m-0 row">
                                            <span class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p-0 m-0">
                                                <div class="row m-0 p-0">
                                                    <label for="usertype" class="p-0 m-0">Student :</label>
                                                    <input type="radio"  name="usertype1" class="p-0 m-0" {{$users->usertype=='student'?'checked':''}} value="student" id="usertype" required="">
                                                </div>
                                            </span>
                                            <span class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p-0 m-0">
                                                <div class="row m-0 p-0">
                                                    <label for="usertype1" class="p-0 m-0">Doctor :</label>
                                                    <input type="radio" name="usertype1" class="p-0 m-0" {{$users->usertype=='doctor'?'checked':''}} value="doctor" id="usertype1" required="">
                                                </div>
                                            </span>
                                            <span class="col-lg-4 col-md-4 col-sm-4 col-xs-12  p-0 m-0 "> 
                                                <div class="row m-0 p-0">
                                                    <label for="usertype2" class="p-0 m-0">Admin :</label>
                                                    <input type="radio" name="usertype1" class="p-0 m-0" {{$users->usertype=='admin'?'checked':''}} value="admin" id="usertype2" required>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="se" class="col-md-0 col-form-label text-md-right">Semester</label>
                                        <input id="se" value="{{$users->Semester}}" type="text" name="Semester1" class=" col-md-12 form-control">
                                    </div>
                                    <div class="col-12 bgblack m-0 rounded position-relative">
                                        <a href="/Students-admin" class="btn btn-danger m-0 radius-down  position-absolute" style=" top:10px; right:100px;"><b>cancel</b></a>
                                        <input type="submit" class="btn btn-success m-0 radius-down position-absolute" name="submit" value="Update" style="top:10px; right:1px;"/>
                                    </div>
                                @else 
                                @if ($users->usertype=='doctor')
                                    
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="FirstName" class="col-md-0 col-form-label text-md-right">First Name :</label>
                                        <input id="FirstName" value="{{$users->FirstName}}" type="text" name="FirstName1" class=" col-md-12 form-control">
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="LastName" class="col-md-0 col-form-label text-md-right">Last Name :</label>
                                        <input id="LastName" value="{{$users->LastName}}" type="text" name="LastName1" class=" col-md-12 form-control">
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="email" class="col-md-0 col-form-label text-md-right">E-Mail Address :</label>
                                        <input id="email" value="{{$users->email}}" type="email" name="email1" class=" col-md-12 form-control">
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="Number" class="col-md-0 col-form-label text-md-right">Phone Number :</label>
                                        <input id="Number" value="{{$users->Number}}" type="number" name="Number1" class=" col-md-12 form-control">
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="CNE" class="col-md-0 col-form-label text-md-right">Position (Post) :</label>
                                        <input id="CNE" value="{{$users->details[0]->Position ?? ''}}" type="text" name="CNE1" class=" col-md-12 form-control">
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="Feliere" class="col-md-0 col-form-label text-md-right">Field :</label>
                                        <input id="Feliere" value="{{$users->Feliere}}" type="text" name="Feliere1" class=" col-md-12 form-control">
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="Gender" class="col-md-0 col-form-label text-md-right">Gender :</label>
                                        <input id="Gender" value="{{$users->Gender}}" type="text" name="Gender1" class=" col-md-12 form-control">
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="se" class="col-md-0 col-form-label text-md-right">Semester :</label>
                                        <input id="se" value="{{$users->Semester}}" type="text" name="Semester1" class=" col-md-12 form-control">
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="sub" class="col-md-0 col-form-label text-md-right">Subject :</label>
                                        <input id="sub" value="{{$users->details[0]->SubjectData ?? ''}}" type="text" name="SubjectData1" class=" col-md-12 form-control">
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="fa" class="col-md-0 col-form-label text-md-right">Facebook :</label>
                                        <input id="fa" value="{{$users->details[0]->Facebook ?? ''}}" type="text" name="Facebook1" class=" col-md-12 form-control">
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="tw" class="col-md-0 col-form-label text-md-right">Twitter :</label>
                                        <input id="tw" value="{{$users->details[0]->Twitter ?? ''}}" type="text" name="Twitter1" class=" col-md-12 form-control">
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="yo" class="col-md-0 col-form-label text-md-right">Youtube :</label>
                                        <input id="yo" value="{{$users->details[0]->Youtube ?? ''}}" type="text" name="Youtube1" class=" col-md-12 form-control">
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="sit" class="col-md-0 col-form-label text-md-right">Site Web :</label>
                                        <input id="sit" value="{{$users->details[0]->Siteweb ?? ''}}" type="text" name="Siteweb1" class=" col-md-12 form-control">
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="usertype" class="col-md-0 col-form-label text-md-right">User Type</label>
                                        <div class="col-12 p-0 m-0 row">
                                            <span class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p-0 m-0">
                                                <div class="row m-0 p-0">
                                                    <label for="usertype" class="p-0 m-0">Student :</label>
                                                    <input type="radio"  name="usertype1" class="p-0 m-0" {{$users->usertype=='student'?'checked':''}} value="student" id="usertype" required="">
                                                </div>
                                            </span>
                                            <span class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p-0 m-0">
                                                <div class="row m-0 p-0">
                                                    <label for="usertype1" class="p-0 m-0">Doctor :</label>
                                                    <input type="radio" name="usertype1" class="p-0 m-0" {{$users->usertype=='doctor'?'checked':''}} value="doctor" id="usertype1" required="">
                                                </div>
                                            </span>
                                            <span class="col-lg-4 col-md-4 col-sm-4 col-xs-12  p-0 m-0 "> 
                                                <div class="row m-0 p-0">
                                                    <label for="usertype2" class="p-0 m-0">Admin :</label>
                                                    <input type="radio" name="usertype1" class="p-0 m-0" {{$users->usertype=='admin'?'checked':''}} value="admin" id="usertype2" required>
                                                </div>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-group col-12">
                                        <label for="bi" class="">Biography :</label>
                                        <textarea id="bi" type="text" name="Biography1" class="form-control textarea" required>{{$users->details[0]->Biography ?? ''}}</textarea>
                                    </div>

                                    <div class="col-12 bgblack m-0 rounded position-relative">
                                        <a href="/Professors-admin" class="btn btn-danger m-0 radius-down  position-absolute" style=" top:10px; right:100px;"><b>cancel</b></a>
                                        <input type="submit" class="btn btn-success m-0 radius-down position-absolute" name="submit" value="Update" style="top:10px; right:1px;"/>
                                    </div>

                                @endif
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')

@endsection