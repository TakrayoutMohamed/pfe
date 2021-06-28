@extends('layouts.master')
@php
    // use App\Detail;
    $k=0;
@endphp
@section('title')

    Dashboard Add Statements

@endsection



@section('content')
    <div class='row bgblue m-0' >
        <div class='card p-0 m-0 bgyellow'>
            <div class="card-body bgblack m-0 p-1" style="min-height:356px;">
                {{-- add Statements --}}
                <div class="card p-0 mt-0">
                    <div class="card-header p-0 m-0">
                        <p class=" h5 p-0 m-0">Add statement</p>
                    </div>
                    <div class="card-body p-0 m-0">
                        <form action="/UploadDataAdmin/{{$users->id}}" method="POST">
                            {{ csrf_field() }}
                            {{-- {{method_field('PUT')}} --}}
                            <div class="" hidden>
                                <input type="text" name="TypedataAdmin" value="Statement">
                            </div>
                            {{-- Title --}}
                            <div class="form-group py-0 m-0">
                                <div class="row p-0 m-2">
                                    <label for="title" class="title">title :</label>
                                    <input type="text" name="TitleAdmin" id="title" class="form-control p-1" placeholder="title" required/>
                                </div>
                            </div>
                            {{-- statement  --}}
                            <div class="bgwhite p-1 m-0">
                                <textarea name="StatementAdmin" class="bg-warning p-1 textarea" placeholder="enter the statement here" required></textarea>
                            </div>
                            <div class="row p-0 col-12">
                                <button  class="btn btn-warning p-1 m-0 position-absolute" type="reset" style="right:64px; top:50%; width:60px;" >
                                    Clear
                                </button>
                                <button type="submit" class="btn btn-success p-1 m-0 position-absolute" style="right:2px; top:50%; width:60px;">
                                    Post
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- affiche my statements --}}
                <div class="row m-0">
                    @foreach ($users->files as $file)
                        @if ($file->Typedata=='Statement' )
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12  p-1 m-0">
                                <div class="card bgdark m-0 p-0">
                                    <div class="card-header p-0 row m-0">
                                        <p class="p-0 m-0 ptxt color-white col-9">
                                            {{$users->FirstName .' '.$users->LastName}} 
                                            
                                        </p>
                                        <p class="p-0 m-0 ptxt color-white col-3">
                                            {{$file->Felieredata.' '.$file->Semester_data}}
                                        </p>
                                    </div>
                                    <div class="card-block m-0 p-0 bgblack rounded">
                                        <div class="jumbotron p-1 m-1 row " >
                                            <p class="p-0 m-0 ">Title : </p>
                                            <p class="ptxt p-0 m-0">{{$file->Title}}</p>
                                            <p class="m-0 p-0 col-12">Subject : </p>
                                            <p class="ptxt p-0 m-0 col-12">{{$file->Statement}}</p>
                                        </div>
                                        <div class="bg-primary color-black px-1 row m-0 clearfix">
                                            <p class="p-0 m-0 col-6">{{$users->usertype}}</p>
                                            <p class="p-0 m-0 col-6">{{$file->created_at}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    
@endsection