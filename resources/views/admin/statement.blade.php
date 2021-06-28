@extends('layouts.master')
@php
    // use App\Detail;
    $k=0;
    $st=0;
@endphp
@section('title')

    Dashboard Statements

@endsection



@section('content')
    <div class='row bgblue m-0' >
        <div class='card p-0 m-0 bgyellow'>
            <div class="card-body bgblack m-0 p-1 row" style="min-height:356px;">
                @foreach ($users as $users)
                    @foreach ($users->files as $file)
                        @if ($file->Typedata=='Statement')
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12  p-1 m-0">
                                <div class="card bgdark m-0 p-0">
                                    <div class="card-header p-0 m-0">
                                        <p class="p-0 m-0 ptxt color-white">
                                            {{$users->FirstName .' '.$users->LastName}}
                                        </p>
                                        <p class="p-0 m-0 color-white">

                                        </p>
                                    </div>
                                    <div class="card-block m-0 p-0 bgblack rounded">
                                        <div class="jumbotron p-1 m-1 row {{$users->usertype == 'admin' ?'bg-primary':''}}" >
                                            <p class="p-0 m-0 ">Title : </p>
                                            <p class="ptxt p-0 m-0">{{$file->Title}}</p>
                                            <p class="m-0 p-0 col-12">Subject : </p>
                                            <p class="ptxt p-0 m-0 col-12">{{$file->Statement}}</p>
                                        </div>
                                        <div class="bg-primary color-black pl-1 p-0 row m-0 clearfix">
                                            <p class="p-0 m-0 col-6" style="height:25px;" >{{$file->Subject}}</p>
                                            <p class="p-0 m-0  position-absolute row " style="right:0px; top-0">
                                                {{$file->created_at}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                {{-- delete button --}}
                                                <form action="/FileDeleteadmin/{{$file->user_id}}" method="POST" class="p-0 m-0 position-absolute" style="right:0px; bottom:-3px;">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE')}}
                                                    <div class="" hidden>
                                                        <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                                    </div>
                                                    <a href="#Deletest{{$st}}" class="btn btn-danger radius-collapse p-1" data-toggle="modal">X</a>
                                                    <div id="Deletest{{$st}}" class="modal">
                                                        @php $st++; @endphp
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0 m-0">
                                                                    Confirm delete statement
                                                                </div>
                                                                <div class="modal-body p-0 m-0">
                                                                    <p class="h4 p-0 m-0" style="color: red;"> are you sure you want to delete this statement !!!</p>
                                                                </div>
                                                                <div class="modal-footer p-1 mt-2 ">
                                                                    <div class="row p-0 col-12">
                                                                        <button  class="btn btn-success p-1 position-absolute" data-dismiss="modal" style="left:2px; top:50%; width:60px;">Cancel</button>
                                                                        <button type="submit" class="btn btn-danger p-1 position-absolute" style="right:24px; top:50%; width:60px;">Delete!!</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    
@endsection