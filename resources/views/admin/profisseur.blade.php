@extends('layouts.master')
@php
    // use App\Detail;
    $k=0;
@endphp
@section('title')

    Dashboard Professors | alvares web tec

@endsection



@section('content')
    <div class='row bgblue m-0' >
        <div class='card p-0 m-0 bgyellow'>
            <div class="card-body bgblack p-1 pl-2 pr-1 m-0" style="min-height:357px;">
                @foreach ($users as $users)
                    @if ($users->usertype=='doctor')
                        <div class="card mt-2 mb-0 mx-0 p-0 ">
                            <div class="card-header p-0 m-0 color-white-shadow" style="margin-top: -12px;">
                                <p class="bgblack p-0 m-0 radius-down- h5 text-center" style="width: 200px;">Professor Card</p>
                            </div>
                            <div class="card-body">
                                <div class="row m-0">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 row">
                                        <p class="p-0 m-0 " > First Name </p>
                                        <p class="p-0 m-0 ptxt" > :&nbsp;&nbsp;&nbsp;&nbsp;{{$users->FirstName}}</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 row">
                                        <p class="p-0 m-0" > Last Name </p>
                                        <p class="p-0 m-0 ptxt" > :&nbsp;&nbsp;&nbsp;&nbsp;{{$users->LastName}}</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 row">
                                        <p class="p-0 m-0" > Email </p>
                                        <p class="p-0 m-0 ptxt" > :&nbsp;&nbsp;&nbsp;&nbsp;{{$users->email}}</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 row">
                                        <p class="p-0 m-0" > Phone number</p>
                                        <p class="p-0 m-0 ptxt" > :&nbsp;&nbsp;&nbsp;&nbsp;{{$users->Number}}</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 row">
                                        <p class="p-0 m-0" > Position (Post) </p>
                                        <p class="p-0 m-0 ptxt" > :&nbsp;&nbsp;&nbsp;&nbsp;{{$users->details[0]->Position ?? ''}}</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 row">
                                        <p class="p-0 m-0" > Gender </p>
                                        <p class="p-0 m-0 ptxt" > :&nbsp;&nbsp;&nbsp;&nbsp;{{$users->Gender}}</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 row">
                                        <p class="p-0 m-0" > Field </p>
                                        <p class="p-0 m-0 ptxt" > :&nbsp;&nbsp;&nbsp;&nbsp;{{$users->Feliere}}</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 row">
                                        <p class="p-0 m-0" > Semester </p>
                                        <p class="p-0 m-0 ptxt" > :&nbsp;&nbsp;&nbsp;&nbsp;{{$users->Semester}}</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 row">
                                        <p class="p-0 m-0" > Subject </p>
                                        <p class="p-0 m-0 ptxt" > :&nbsp;&nbsp;&nbsp;&nbsp;{{$users->details[0]->SubjectDoctor ?? ''}}</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 row">
                                        <p class="p-0 m-0" > Facebook </p>
                                        <p class="p-0 m-0 ptxt" > :&nbsp;&nbsp;&nbsp;&nbsp;{{$users->details[0]->Facebook ?? ''}}</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 row">
                                        <p class="p-0 m-0" > Twitter </p>
                                        <p class="p-0 m-0 ptxt" > :&nbsp;&nbsp;&nbsp;&nbsp;{{$users->details[0]->Twitter ?? ''}}</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 row">
                                        <p class="p-0 m-0" > Youtube </p>
                                        <p class="p-0 m-0 ptxt" > :&nbsp;&nbsp;&nbsp;&nbsp;{{$users->details[0]->Youtube ?? ''}}</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 row">
                                        <p class="p-0 m-0" > Site Web </p>
                                        <p class="p-0 m-0 ptxt" > :&nbsp;&nbsp;&nbsp;&nbsp;{{$users->details[0]->Siteweb ?? ''}}</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 row">
                                        <p class="p-0 m-0" > User Type </p>
                                        <p class="p-0 m-0 ptxt" > :&nbsp;&nbsp;&nbsp;&nbsp;{{$users->usertype}}</p>
                                    </div>
                                </div>
                                <div class="row m-0 mb-3 jumbotron-fluid ">
                                    <p class="p-0 m-0 col-12" > Biography :&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                    <p class="p-0 m-0 ptxt" > {{$users->details[0]->Biography ?? ''}}</p>
                                </div>
                            </div>
                            <div class="p-0 m-0 bg-success">
                                {{-- delete button --}}
                                <form action="/delete-user/{{ $users->id }}" method="POST" class="bgblue position-relative">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE')}}
                                    <a href="/Edit-user/{{$users->id}}" class="btn btn-success p-1 radius-collapse position-absolute" style="right:0px; width:50px; bottom:0px;">Edit</a>
                                    <a href="#Deletedoc{{$k}}" class="btn btn-danger p-1 radius-collapse position-absolute" style="right:44px; width:100px; bottom:0px;" data-toggle="modal">Delete</a>
                                    <div id="Deletedoc{{$k}}" class="modal">
                                        @php $k++; @endphp
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header p-0 m-0">
                                                    Confirm delete user
                                                </div>
                                                <div class="modal-body p-0 m-0">
                                                    <p class="h4 p-0 m-0" style="color: red;"> are you sure you want to delete this user !!!</p>
                                                </div>
                                                <div class="modal-footer p-1 mt-2 ">
                                                    <div class="row p-0 col-12 position-relative">
                                                        <button  class="btn btn-success p-1 position-absolute" data-dismiss="modal" style="left:-20px; top:50%; width:60px;">
                                                            Cancel
                                                        </button>
                                                        <button type="submit" class="btn btn-danger p-1 position-absolute" style="right:10px; top:50%; width:60px;">
                                                            Delete!!
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> 
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    
@endsection