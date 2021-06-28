@extends('layouts.master')
@php
    $k=0;
@endphp
@section('title')

    Dashboard Students

@endsection

@section('content')
    {{-- <div class='row mx-0'>
        <div class='col-md-12' style="min-height:380px;">
            <div class='card'>
                <div class='card-header'>
                    <h4 class='card-title'>Register Rols</h4>
                    @if (session('status'))
                        <div class="alert alert-success " role="alert" style="color:red">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class='table'>
                            <thead class="text-primary">
                               <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>CNE</th>
                                <th>CNI</th>
                                <th>Feliere</th>
                                <th>Gender</th>
                                <th>user Type</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                            </thead>
                            <tbody>
                                @foreach ($users as $row)
                                    
                                
                                <tr>
                                    <td>{{$row->FirstName}}</td>
                                    <td>{{$row->LastName}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->Number}}</td>
                                    <td>{{$row->CNE}}</td>
                                    <td>{{$row->CNI}}</td>
                                    <td>{{$row->Feliere}}</td>
                                    <td>{{$row->Gender}}</td>
                                    <td>-{{$row->usertype}}</td>
                                    <td>
                                        <a href="/role-edit/{{$row->id}}" class="btn btn-success">EDIT</a>
                                    </td>
                                    <td>
                                        <form action="/delete-user/{{ $row->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE')}}
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class='row bgblue m-0' >
        <div class='card p-0 m-0 bgyellow'>
            <div class="card-body bgblack p-1 pl-2 pr-1 row m-0 " style="min-height:355px;">
                @foreach ($users as $users)
                    @if ($users->usertype=='student')
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 pl-1 p-0 m-0">
                            <div class="card mt-2 mb-0 mx-0 p-0">
                                <a href="#student{{$k}}" data-toggle="collapse" class="p-0 m-0 color-white-shadow" style="margin-top: -12px; color:white">
                                    <p class="bgblack p-0 m-0 radius-down- h5 text-center " style="" title="collapse full infos">
                                        {{$users->FirstName.' '.$users->LastName}}
                                        <span class="now-ui-icons gestures_tap-01"></span>
                                    </p>
                                </a>
                                <div id="student{{$k}}" class="card-body p-1 my-2 collapse in">
                                    @php $k++; @endphp
                                    <div class=" m-0 p-0">
                                        <div class="col-12 p-0" style="border: 2px solid black">
                                            <p class=  "p-0 m-0 ptxt bgciel" >  First Name </p>
                                            <p class="p-0 m-0   " >  {{$users->FirstName}}</p>
                                        </div>
                                        <div class="col-12 p-0 " style="border: 2px solid black">
                                            <p class=  "p-0 m-0 ptxt bgciel" >  Last Name </p>
                                            <p class="p-0 m-0   " >  {{$users->LastName}}</p>
                                        </div>
                                        <div class="col-12 p-0 " style="border: 2px solid black">
                                            <p class=  "p-0 m-0 ptxt bgciel" >  Email </p>
                                            <p class="p-0 m-0   " >  {{$users->email}}</p>
                                        </div>
                                        <div class="col-12 p-0 " style="border: 2px solid black">
                                            <p class=  "p-0 m-0 ptxt bgciel" >  Phone number</p>
                                            <p class="p-0 m-0   " > {{$users->Number}}</p>
                                        </div>
                                        <div class="col-12 p-0 " style="border: 2px solid black">
                                            <p class=  "p-0 m-0 ptxt bgciel" >  CNE </p>
                                            <p class="p-0 m-0   " > {{$users->CNE}}</p>
                                        </div>
                                        <div class="col-12 p-0 " style="border: 2px solid black">
                                            <p class=  "p-0 m-0 ptxt bgciel" >  CNI </p>
                                            <p class="p-0 m-0   " >  {{$users->CNI}}</p>
                                        </div>
                                        <div class="col-12 p-0 " style="border: 2px solid black">
                                            <p class=  "p-0 m-0 ptxt bgciel" >  Gender </p>
                                            <p class="p-0 m-0   " >  {{$users->Gender}}</p>
                                        </div>
                                        <div class="col-12 p-0 " style="border: 2px solid black">
                                            <p class=  "p-0 m-0 ptxt bgciel" >  Field </p>
                                            <p class="p-0 m-0   " >  {{$users->Feliere}}</p>
                                        </div>
                                        <div class="col-12 p-0 " style="border: 2px solid black">
                                            <p class=  "p-0 m-0 ptxt bgciel" >  Semester </p>
                                            <p class="p-0 m-0   " >  {{$users->Semester}}</p>
                                        </div>
                                        <div class="col-12 p-0 " style="border: 2px solid black">
                                            <p class=  "p-0 m-0 ptxt bgciel" >  User Type </p>
                                            <p class="p-0 m-0   " >  {{$users->usertype}}</p>
                                        </div>
                                    </div>
                                </div>
                                {{-- delete edit button --}}
                                <div class="p-0 m-0 col-12">
                                    {{-- delete edit button --}}
                                    <form action="/delete-user/{{$users->id}}" method="POST" class="p-0 m-0">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE')}}
                                        <a href="/Edit-user/{{$users->id}}" class="btn btn-success p-0 m-0 radius-collapse " style="width:50px; bottom:;">Edit</a>
                                        <a href="#Deletedoc{{$k}}" class="btn btn-danger p-0 m-0 radius-collapse " style="width:100px;" data-toggle="modal">Delete</a>
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
                        </div>    
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    
@endsection