@extends('layouts.mainHome')
@php
    use App\File;
    // variables of semester
        $smis1=0;
        $smis2=0;
        $smis3=0;
        $smis4=0;
        $smis5=0;
        $smis6=0;

        $smps1=0;
        $smps2=0;
        $smps3=0;
        $smps4=0;
        $smps5=0;
        $smps6=0;

        $leas1=0;
        $leas2=0;
        $leas3=0;
        $leas4=0;
        $leas5=0;
        $leas6=0;

        $iges1=0;
        $iges2=0;
        $iges3=0;
        $iges4=0;
        $iges5=0;
        $iges6=0;

        $teers1=0;
        $teers2=0;
        $teers3=0;
        $teers4=0;
        $teers5=0;
        $teers6=0;

        $gpcas1=0;
        $gpcas2=0;
        $gpcas3=0;
        $gpcas4=0;
        $gpcas5=0;
        $gpcas6=0;
    // end variables of semester

@endphp

@section('title')

    Home | alvares web tec

@endsection

@section('content')
    <div class="jumbotron bg-dark p-1 col-md-12" >
        <div class='row m-0 p-0' style="min-height:380px;">
            <div class='col-12 pb-1' style="border:1px white double;">
                <fieldset class="" style="border:rgb(235, 226, 226) double;" >
                    <legend style="" class="w-auto p-0 color-white-shadow ">SMI</legend>
                    <div class="row p-1 m-0">
                        {{-- semester 1 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='SMI' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S1')
                                        @php
                                            $smis1=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($smis1==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 1</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='SMI')
                                                        @if ($file->Semester_data=='S1' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 2 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='SMI' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S2')
                                        @php
                                            $smis2=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($smis2==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 2</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='SMI')
                                                        @if ($file->Semester_data=='S2' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 3 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='SMI' && File::where('user_id','=',$user->id)->exists())

                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S3')
                                        @php
                                            $smis3=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($smis3==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 3</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='SMI')
                                                        @if ($file->Semester_data=='S3' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 4 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='SMI' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S4')
                                        @php
                                            $smis4=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($smis4==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 4</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='SMI')
                                                        @if ($file->Semester_data=='S4' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 5 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='SMI' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S5')
                                        @php
                                            $smis5=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($smis5==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 5</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='SMI')
                                                        @if ($file->Semester_data=='S5' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 6 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='SMI' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S6')
                                        @php
                                            $smis6=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($smis6==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 6</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='SMI')
                                                        @if ($file->Semester_data=='S6' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </fieldset>
                <fieldset style="border:rgb(235, 226, 226) double;">
                    <legend style="" class="w-auto color-white-shadow">SMP</legend>
                    <div class="row p-1 m-0">
                        {{-- semester 1 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='SMP' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S1')
                                        @php
                                            $smps1=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($smps1==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 1</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='SMP')
                                                        @if ($file->Semester_data=='S1' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 2 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='SMP' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S2')
                                        @php
                                            $smps2=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($smps2==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 2</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='SMP')
                                                        @if ($file->Semester_data=='S2' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 3 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='SMP' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S3')
                                        @php
                                            $smps3=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($smps3==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 3</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='SMP')
                                                        @if ($file->Semester_data=='S3' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 4 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='SMP' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S4')
                                        @php
                                            $smps4=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($smps4==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 4</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='SMP')
                                                        @if ($file->Semester_data=='S4' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 5 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='SMP' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S5')
                                        @php
                                            $smps5=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($smps5==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 5</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='SMP')
                                                        @if ($file->Semester_data=='S5' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 6 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='SMP' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S6')
                                        @php
                                            $smps6=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($smps6==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 6</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='SMP')
                                                        @if ($file->Semester_data=='S6' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </fieldset>
                <fieldset style="border:rgb(235, 226, 226) double;">
                    <legend style="" class="w-auto color-white-shadow">IGE</legend>
                    <div class="row p-1 m-0">
                        {{-- semester 1 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='IGE' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S1')
                                        @php
                                            $iges1=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($iges1==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 1</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='IGE')
                                                        @if ($file->Semester_data=='S1' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 2 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='IGE' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S2')
                                        @php
                                            $iges2=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($iges2==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 2</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='IGE')
                                                        @if ($file->Semester_data=='S2' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 3 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='IGE' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S3')
                                        @php
                                            $iges3=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($iges3==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 3</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='IGE')
                                                        @if ($file->Semester_data=='S3' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 4 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='IGE' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S4')
                                        @php
                                            $iges4=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($iges4==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 4</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='IGE')
                                                        @if ($file->Semester_data=='S4' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 5 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='IGE' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S5')
                                        @php
                                            $iges5=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($iges5==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 5</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='IGE')
                                                        @if ($file->Semester_data=='S5' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 6 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='IGE' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S6')
                                        @php
                                            $iges6=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($iges6==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 6</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='IGE')
                                                        @if ($file->Semester_data=='S6' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </fieldset>
                <fieldset style="border:rgb(235, 226, 226) double;">
                    <legend style="" class="w-auto color-white-shadow">TEER</legend>
                    <div class="row p-1 m-0">
                        {{-- semester 1 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='TEER' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S1')
                                        @php
                                            $teers1=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($teers1==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 1</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='SMI')
                                                        @if ($file->Semester_data=='S1' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 2 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='TEER' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S2')
                                        @php
                                            $teers2=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($teers2==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 2</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='TEER')
                                                        @if ($file->Semester_data=='S2' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 3 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='TEER' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S3')
                                        @php
                                            $teers3=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($teers3==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 3</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='TEER')
                                                        @if ($file->Semester_data=='S3' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 4 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='TEER' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S4')
                                        @php
                                            $teers4=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($teers4==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 4</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='TEER')
                                                        @if ($file->Semester_data=='S4' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 5 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='TEER' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S5')
                                        @php
                                            $teers5=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($teers5==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 5</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='TEER')
                                                        @if ($file->Semester_data=='S5' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 6 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='TEER' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S6')
                                        @php
                                            $teers6=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($teers6==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 6</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='TEER')
                                                        @if ($file->Semester_data=='S6' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </fieldset>
                <fieldset style="border:rgb(235, 226, 226) double;">
                    <legend style="" class="w-auto color-white-shadow">LEA</legend>
                    <div class="row p-1 m-0">
                        {{-- semester 1 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='LEA' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S1')
                                        @php
                                            $leas1=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($leas1==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 1</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='LEA')
                                                        @if ($file->Semester_data=='S1' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 2 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='LEA' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S2')
                                        @php
                                            $leas2=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($leas2==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 2</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='LEA')
                                                        @if ($file->Semester_data=='S2' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 3 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='LEA' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S3')
                                        @php
                                            $leas3=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($leas3==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 3</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='LEA')
                                                        @if ($file->Semester_data=='S3' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 4 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='LEA' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S4')
                                        @php
                                            $leas4=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($leas4==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 4</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='LEA')
                                                        @if ($file->Semester_data=='S4' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 5 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='LEA' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S5')
                                        @php
                                            $leas5=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($leas5==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 5</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='LEA')
                                                        @if ($file->Semester_data=='S5' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 6 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='LEA' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S6')
                                        @php
                                            $leas6=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($leas6==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 6</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='LEA')
                                                        @if ($file->Semester_data=='S6' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </fieldset>
                <fieldset style="border:rgb(235, 226, 226) double;">
                    <legend style="" class="w-auto color-white-shadow">GPCA</legend>
                    <div class="row p-1 m-0">
                        {{-- semester 1 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='GPCA' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S1')
                                        @php
                                            $gpcas1=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($gpcas1==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 1</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='GPCA')
                                                        @if ($file->Semester_data=='S1' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 2 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='GPCA' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S2')
                                        @php
                                            $gpcas2=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($gpcas2==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 2</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='GPCA')
                                                        @if ($file->Semester_data=='S2' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 3 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='GPCA' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S3')
                                        @php
                                            $gpcas3=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($gpcas3==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 3</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='GPCA')
                                                        @if ($file->Semester_data=='S3' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 4 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='GPCA' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S4')
                                        @php
                                            $gpcas4=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($gpcas4==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 4</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='GPCA')
                                                        @if ($file->Semester_data=='S4' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 5 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='GPCA' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S5')
                                        @php
                                            $gpcas5=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($gpcas5==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 5</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='GPCA')
                                                        @if ($file->Semester_data=='S5' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- semester 6 --}}
                        @foreach ($users as $user)
                            @foreach ($user->files as $file)
                                @if ($file->Felieredata=='GPCA' && File::where('user_id','=',$user->id)->exists())
                                    @if ($file->Typedata=='Document' && $file->Semester_data=='S6')
                                        @php
                                            $gpcas6=1;
                                        @endphp
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        @if($gpcas6==1)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-0 p-1">
                                <div class="card p-0 m-0 col-12">
                                    <div class="card-header p-0 m-0">
                                        <p class="bgciel p-0 m-0 h5 rounded-top">Semester 6</p>
                                    </div>
                                    <div class="card-body bgblack p-0 row m-0">
                                        @foreach ($users as $user)
                                                @foreach ($user->files as $file)
                                                    @if ($file->Felieredata=='GPCA')
                                                        @if ($file->Semester_data=='S6' && $file->Typedata=='Document')
                                                            {{-- Documments --}}
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 m-0">
                                                                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                        <div class="card-img-top img-fluid ">
                                                                            <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="" style="height:60px; width:60px;">
                                                                            <div class="p-0 m-0">
                                                                                <p class="p-0 m-0 shadow ">{{$file->Subject}}.</p>
                                                                                <p class="p-0 m-0 " >Prof &nbsp;&nbsp;:{{$user->FirstName.' '.$user->LastName}}.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block p-1 m-0" style="margin:-3px;">
                                                                            {{-- Download && read  icons --}}
                                                                            <div class="col-12  row">
                                                                                <p class="h6 m-0 p-0">{{$file->Title}}.</p>
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {{-- Documments --}}
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
@endsection
