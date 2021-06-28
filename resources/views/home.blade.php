@extends('layouts.app')
@php
    use App\Detail;
    use App\File;
    use App\Comment;
    $vid=0;
    $st=0;
    $fi=0;
    $k=0;
@endphp
@section('title')
    Home
@endsection

@section('content')
    @if ($usershome->usertype=='student')
        <div class="row m-0">
            @foreach ($allusers as $usersdoc)
                    @if ($usersdoc->usertype=='doctor' && $usershome->Feliere==$usersdoc->Feliere)
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 pl-1 p-1 m-0">
                            <a href="/student-data/{{$usersdoc->id}}">
                                <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-1 p-0" >
                                    @if ($usersdoc->details[0]->Profil_image ?? '' !=Null && file_exists('./assets/DataDoc/IMG/Profile/'.$usersdoc->details[0]->Profil_image))
                                        <img  src="{{asset('./assets/DataDoc/IMG/Profile/'.$usersdoc->details[0]->Profil_image)}}" alt="professor's profile picture" class="card-img-top img-fluid m-0">
                                    @else
                                        @if ($usersdoc->Gender=='Female')
                                            <img  src="{{asset('../assets/img/default-avatar-female.jpeg')}}" alt="{{$usersdoc->details[0]->Profil_image?? ''}}" class="card-img-top img-fluid m-0">
                                        @else
                                            <img  src="{{asset('../assets/img/default-avatar-male.png')}}" alt="{{$usersdoc->details[0]->Profil_image?? ''}}" class="card-img-top img-fluid m-0">
                                        @endif
                                    {{-- id="{{$usersdoc->Gender=='Female'?'bgfemale':'bgmale'}}" --}}
                                    @endif
                                    <div class="card-block p-0 description row m-0 " style="">
                                        <p class="card-title m-0 px-1 h7 col-12">.{{$usersdoc->details[0]->SubjectDoctor ?? ''}}</p>
                                        <p class="card-title m-0 px-2 h5 col-12">.{{$usersdoc->Feliere.' '.$usersdoc->Semester}}.</p>
                                    </div>
                                </div>
                                <div class="col-12 m-1 p-0 h5 text-center">
                                    {{$usersdoc->FirstName.' '.$usersdoc->LastName}}
                                </div>
                            </a>
                        </div>
                    @endif
            @endforeach
        </div>
    @endif

    @if ($usershome->usertype=='doctor')
        {{-- @if (session('status'))
            <div class="alert alert-success " role="alert" style="color:red; ">
                {{ session('status') }}
            </div>
        @endif --}}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Dashboard</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success " role="alert" style="color:red; ">
                                    {{ session('status') }}
                                </div>
                            @endif
                            You are logged in!
                            <div class="row m-0 justify-content-center">
                                <a href="/doctor-data-profile/{{Auth::user()->id}}" class="btn btn-toolbar mb-0 mt-1 py-1">go to your profil</a>
                                <a href="/doctor-data/{{Auth::user()->id}}" class="btn btn-toolbar mb-0 mt-1 py-1">go to add Data</a>
                                <a href="/doctor-data-edit/{{Auth::user()->id}}" class="btn btn-toolbar mb-0 mt-1 py-1">go to edit infos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- show my FILES|| statement --}}
            <div class="col-12 m-0">

            </div>
        {{-- fff --}}
    @endif

    @if ($usershome->usertype=='admin')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Dashboard</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success " role="alert" style="color:red; ">
                                    {{ session('status') }}
                                </div>
                            @endif
                            You are logged in!
                            <a href="/Professors-admin">go to Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection


