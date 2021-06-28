@extends('layouts.mainStudent')
@section('title')

    Student side  | alvares web tec
@endsection

@section('content')
  <div class="content bgblack" style="background: url(../assets/img/dataEditBg2.jpeg) no-repeat center center; background-size:100%;">
    <div class="row m-0 justify-content-center">
      <div class="col-lg-8 col-md-10 col-sm-12 p-1">
        <div class="card  mt-3 p-0" style="opacity: 0.8;">
          <div class="card-header">
            <h5 class="title">Edit Information</h5>
          </div>
          <div class="card-body mylabel">
            <form action="/student-update/{{$usersedit->id}}" method="POST">
              {{ csrf_field() }}
              {{method_field('PUT')}}
              {{-- name first && last --}}
              <div class="row">
                {{-- first name --}}
                <div class="col-lg-6 col-md-6 col-sm-12  pt-0">
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" placeholder="First Name" value="{{$usersedit->FirstName}}" name="First_name" required>
                  </div>
                </div>
                {{-- last Name --}}
                <div class="col-lg-6 col-md-6 col-sm-12  pt-0">
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" placeholder="Last Name" value="{{$usersedit->LastName}}" name="Last_name" required>
                  </div>
                </div>
              </div>
              {{-- email && phone Number --}}
              <div class="row">
                {{-- Email --}}
                <div class="col-lg-6 col-md-12 col-sm-12  pt-0">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" id="exampleInputEmail1" class="form-control" placeholder="Email" value="{{$usersedit->email}}" name="Email" required>
                  </div>
                </div>
                {{-- phone Number --}}
                <div class="col-lg-6 col-md-12 col-sm-12  pt-0">
                  <div class="form-group">
                    <label for="pn">Phone Number</label>
                    <input type="number" id="pn" class="form-control" placeholder="Phone Number" value="{{$usersedit->Number}}" name="Phone_Number">
                  </div>
                </div>
              </div>
              {{-- CNE  && gender--}}
              <div class="row">
                {{-- gender --}}
                <div class="col-lg-6 col-md-12 col-sm-12  pt-0 ">
                  <label >Gender</label>
                  <div class="form-group row col-8 col-lg-12">
                    <br>
                    <div class="col-4 p-0 form-control">
                      <label for="aad1">Male :</label>
                      {{-- @if($usersedit->Gender=='male'){print 'checked'} @endif --}}
                      <input type="radio" id="aad1" class="" value="Male"  name="gender" {{$usersedit->Gender=='Male'?'checked':''}} required>
                    </div>
                    <div class="col-4 p-0 form-control">
                      <label for="aad2">Female :</label>
                      <input type="radio" id="aad2" class="" value="Female" name="gender" {{$usersedit->Gender=='Female'?'checked':''}} required>
                    </div>
                    <div class="col-4 p-0 form-control">
                      <label for="aad3">Other :</label>
                      <input type="radio" id="aad3" class="" value="Other" name="gender" {{$usersedit->Gender=='Other'?'checked':''}} required>
                    </div>
                  </div>
                </div>
                {{-- CNE --}}
                <div class="col-lg-6 col-md-12 col-sm-12  pt-0">
                  <div class="form-group">
                    <label>CNE</label>
                    <input type="text" class="form-control" placeholder="CNE" value="{{$usersedit->CNE}}" name="CNE" required>
                  </div>
                </div>
              </div>
              {{-- Feliere and CNI --}}
              <div class="row">
                {{-- CNI--}}
                <div class="col-lg-6 col-md-6 col-sm-12  pt-0">
                  <div class="form-group">
                    <label>CNI</label>
                    <input type="text" class="form-control" placeholder="CNI" value="{{$usersedit->CNI}}" name="CNI" required>
                  </div>
                </div>
                {{-- Feliere --}}
                <div class="col-lg-6 col-md-6 col-sm-12  pt-0">
                  <div class="form-group">
                    <label for="Feliere" class="">Field</label>
                    <select name="Field" id="Feliere" class="form-control" required>
                      <option value="">Please select a felier</option>
                      <option value="SMI" {{$usersedit->Feliere=='SMI'?'selected':''}} required>SMI</option>
                      <option value="SMP" {{$usersedit->Feliere=='SMP'?'selected':''}} required>SMP</option>
                      <option value="TEER" {{$usersedit->Feliere=='TEER'?'selected':''}} required>TEER</option>
                      <option value="IGE" {{$usersedit->Feliere=='IGE'?'selected':''}} required>IGE</option>
                      <option value="LEA" {{$usersedit->Feliere=='LEA'?'selected':''}} required>LEA</option>
                      <option value="GPCA" {{$usersedit->Feliere=='GPCA'?'selected':''}} required>GPCA</option>
                    </select>
                  </div>
                </div>
              </div>
              {{-- Semester --}}
              <div class="row">
                {{-- Semester --}}
                <div class="col-lg-6 col-md-12 col-sm-12  pt-1 m-0">
                  <div class="form-group">
                    <label for="sem" class="">Semester</label>
                    <nav class="" id="sem">
                      <a  class="p-0 m-0 mt-1 btn btn-warning"  style="width:60px;" >
                        <label for="s1">S1 :</label>
                        <input type="radio" name="Semester" value="S1" id="s1" {{$usersedit->Semester=='S1'?'checked':''}} required>
                      </a>
                      <a  class="p-0 m-0 mt-1 btn btn-warning"  style="width:60px;" >
                        <label for="s2">S2 :</label>
                        <input type="radio" name="Semester" value="S2" id="s2" {{$usersedit->Semester=='S2'?'checked':''}} required>
                      </a>
                      <a  class="p-0 m-0 mt-1 btn btn-warning"  style="width:60px;" >
                        <label for="s3">S3 :</label>
                        <input type="radio" name="Semester" value="S3" id="s3" {{$usersedit->Semester=='S3'?'checked':''}} required>
                      </a>
                      <a  class="p-0 m-0 mt-1 btn btn-warning"  style="width:60px;" >
                        <label for="s4">S4 :</label>
                        <input type="radio" name="Semester" value="S4" id="s4" {{$usersedit->Semester=='S4'?'checked':''}} required>
                      </a>
                      <a  class="p-0 m-0 mt-1 btn btn-warning"  style="width:60px;" >
                        <label for="s5">S5 :</label>
                        <input type="radio" name="Semester" value="S5" id="s5" {{$usersedit->Semester=='S5'?'checked':''}} required>
                      </a>
                      <a  class="p-0 m-0 mt-1 btn btn-warning"  style="width:60px;" >
                        <label for="s6">S6 :</label>
                        <input type="radio" name="Semester" value="S6" id="s6" {{$usersedit->Semester=='S6'?'checked':''}} required>
                      </a>
                    </nav>
                  </div>
                </div>
              </div>
              {{-- update && cancel button --}}
              <div class="row bgblack m-0 pull-right rounded">
                <a href="/student-data/{{$usersedit->id}}" class="btn btn-danger m-0 mr-2 radius-top"><b>cancel</b></a>
                <input type="submit" class="btn btn-success m-0 radius-top" name="submit" value="Update"/>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
      
