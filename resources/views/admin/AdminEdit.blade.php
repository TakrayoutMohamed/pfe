@extends('layouts.master')
@section('title')

    Dashboard Edit Admin
@endsection

@section('content')
  <div class="content bgblack">
    <div class="row m-0 justify-content-center" style="background: url(../assets/img/dataEditBg1.jpeg) repeat-x center center; background-size:50% 100%;">
      <div class="col-lg-8 col-md-10 col-sm-12 p-1">
        <div class="card  mt-3 p-0" style="opacity:0.9;">
          <div class="">
            <h5 class="title">Edit Information</h5>
          </div>
          <div class="card-body mylabel">
            <form action="/Admin-update/{{$adminUser->id}}" method="POST">
              {{ csrf_field() }}
              {{method_field('PUT')}}
              {{-- name first && last --}}
              <div class="row">
                {{-- first name --}}
                <div class="col-lg-6 col-md-6 col-sm-12  pt-0">
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" placeholder="First Name" value="{{$adminUser->FirstName}}" name="FirstName" required>
                  </div>
                </div>
                {{-- last Name --}}
                <div class="col-lg-6 col-md-6 col-sm-12  pt-0">
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" placeholder="Last Name" value="{{$adminUser->LastName}}" name="LastName" required>
                  </div>
                </div>
              </div>
              {{-- email && phone Number --}}
              <div class="row">
                {{-- Email --}}
                <div class="col-lg-6 col-md-12 col-sm-12  pt-0">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" id="exampleInputEmail1" class="form-control" placeholder="Email" value="{{$adminUser->email}}" name="Email" required>
                  </div>
                </div>
                {{-- phone Number --}}
                <div class="col-lg-6 col-md-12 col-sm-12  pt-0">
                  <div class="form-group">
                    <label for="pn">Phone Number</label>
                    <input type="number" id="pn" class="form-control" placeholder="Phone Number" value="{{$adminUser->Number}}" name="PhoneNumber">
                  </div>
                </div>
              </div>
              {{-- update && cancel button --}}
              <div class="row m-0 pull-right rounded">
                <a href="/Students-admin" class="btn btn-danger m-0 mr-2 radius-top"><b>cancel</b></a>
                <input type="submit" class="btn btn-success m-0 radius-top" name="submit" value="Update"/>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection