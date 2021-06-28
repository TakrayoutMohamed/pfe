@extends('layouts.master')
@php
    use App\File;
    // $k=0;
    $vid=0;
    $st=0;
    $m=0;

@endphp
@section('title')

    Dashboard Comments

@endsection



@section('content')
    <div class='row bgblue m-0' >
        <div class='card p-0 m-0 bgyellow'>
            <div class="card-body bgblack m-0 p-1 row" style="min-height:356px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
                    <div class="">
                        <nav class="nav nav-pills justify-content-center">
                            <a href="#smi" class="nav-link active " data-toggle="tab"> SMI </a>
                            <a href="#smp" class="nav-link" data-toggle="tab"> SMP </a> 
                            <a href="#ige" class="nav-link" data-toggle="tab">IGE</a>
                            <a href="#lea" class="nav-link" data-toggle="tab">LEA</a>
                            <a href="#teer" class="nav-link" data-toggle="tab">TEER</a>
                            <a href="#gpca" class="nav-link" data-toggle="tab">GPCA</a>
                        </nav>
                        <div class="tab-content">
                            <div class="tab-pane active tabs_radius" id="smi" >
                                {{-- show my FILES|| statement SMI --}}
                                <div class="col-lg-12 col-md-12 col-sm-12 mt-2 ">
                                    {{-- Documents --}}
                                    <div class=" tabs_radius" id="" >
                                        <div class="row m-0 p-0">
                                            <p class="p-0 m-0 mt-2 h5 col-12 color-white-shadow bgblack">Documents</p>
                                            @foreach ($userss as $users)
                                                @foreach ($users->files as $file)
                                                    @if ($file->Typedata=='Document' && $file->Felieredata=='SMI')
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-2 p-1">
                                                            <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                <div class="card-block p-0" style="margin:-3px;">
                                                                    {{-- Download && read  icons --}}
                                                                    <div class="col-12 p-0 m-0">
                                                                        <h4 class="m-0 pl-0 pull-left">{{$file->Title}}.</h4>
                                                                        <h4 class="m-0 pull-right">{{$file->user->FirstName.' '.$file->user->LastName}}.</h4>
                                                                        {{-- download icons --}}
                                                                        <a href="##Download##" title="download" class="position-absolute bgdarkred text-center rounded" style="right:0px; top:22px; width:22px; height:22px;" >
                                                                            <img src="../assets/img/download-icon.jpeg" class="" style="">
                                                                        </a>
                                                                        {{-- read icons --}}
                                                                        <a href="##read##" target="_blank" title="read" class="position-absolute  text-center rounded" style="right:24px; top:22px; width:22px; height:22px;" >
                                                                            <img src="../assets/img/read-icon-2.svg" class="" style="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="description row col-12">
                                                                        {{$file->Description}}.
                                                                    </div>
                                                                    <div class="description ">
                                                                        {{$file->Subject}}
                                                                        {{$file->Felieredata}}
                                                                        {{$file->Semester_data}}.
                                                                    </div>
                                                                    <hr class="p-0 m-0">
                                                                    {{-- Comments --}}
                                                                    <div class="card-body p-0" >
                                                                        @php
                                                                            $m++;    
                                                                        @endphp
                                                                        {{-- collapse comments --}}
                                                                        <a href="#comments{{$m.'D'}}" class=" btn btn-success radius-collapse col-12 p-0" data-toggle="collapse" >
                                                                            Comments
                                                                            <span class="caret"></span>
                                                                        </a>
                                                                        <div id="comments{{$m.'D'}}" class="collapse in p-0">
                                                                            @foreach ($oldComment as $com)
                                                                                @if ($com->NumberFile==$file->NumberFile && $com->TypeData==$file->Typedata)
                                                                                    <div class="p-0" style="margin:1px 0px 1px 0px;">
                                                                                        <div class="card p-0 m-0">
                                                                                            <div class="card-block  m-0 p-0 pt-1 bgblack position-relative">
                                                                                                {{-- delete comment --}}
                                                                                                <form action="/Delete-Comment-Admin/{{$com->user_id}}" method="POST" class="">
                                                                                                    {{ csrf_field() }}
                                                                                                    {{ method_field('DELETE')}}
                                                                                                    <div class="" hidden>
                                                                                                        <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                                                                                        <input type="text" name="NumberComment" value="{{$com->NumberComment}}">
                                                                                                        <input type="text" name="usersid" value="{{$users->id}}">
                                                                                                    </div>
                                                                                                    <button type="submit" class="position-absolute bgmaroon m-0 p-0 rounded radius-down-" title="delete" style="right:0px; top:4px;">
                                                                                                        <span class="now-ui-icons ui-1_simple-remove color-white m-0 p-0" style=""></span>
                                                                                                    </button>
                                                                                                </form>
                                                                                                <div class="bgwhite px-1 p-0 m-0 radius-top-">
                                                                                                    <p class="p-0 m-0" style="font-weight: bold;">{{$com->user->FirstName.' '.$com->user->LastName}}</p>
                                                                                                    {{$com->Comment}}
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
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                    {{-- statement --}}
                                    <div class=" tabs_radius" id="" >
                                        <div class="row  bgdark m-1 p-0 pb-3">
                                            <p class="p-0 m-0 mb-1 h5 col-12 color-white-shadow bgblack">Statements</p>
                                            @foreach ($userss as $users)
                                                @foreach ($users->files as $file)
                                                    @if ($file->Typedata=='Statement' && $file->Felieredata=='SMI')
                                                        <div class="col-lg-4 col-md-6 col-sm-12 m-0 p-1">
                                                            <div class="card bgblack p-0 m-0">
                                                                <div class="card-block col-12  rounded p-0 m-0" >
                                                                    <div class="col-12 bggray rounded pb-0" >
                                                                        <div class="title  bgwhite radius-down- m-0" >
                                                                            <p class="px-1 m-0 pull-right">{{$users->FirstName.' '.$users->LastName}}.</p>
                                                                            <p class="px-1 text-right m-0 pull-left"><mark>{{$file->Title}}.</mark></p>
                                                                            <p class="px-1 m-0 row col-12">{{$file->Statement}}.</p>
                                                                            <div class="pl-1 row m-0 col-12 h6"><mark>{{$file->Subject.' '.$file->Felieredata .' '.$file->Semester_data}}.</mark></div>
                                                                        </div>
                                                                        <hr class="p-0 m-0">
                                                                        {{-- Comments --}}
                                                                        <div class="card-body p-0" >
                                                                            @php
                                                                                $m++;    
                                                                            @endphp
                                                                            {{-- collapse comments --}}
                                                                            <a href="#comments{{$m.'S'}}" class=" btn btn-success radius-collapse col-12 p-0" data-toggle="collapse" >
                                                                                Comments
                                                                                <span class="caret"></span>
                                                                            </a>
                                                                            <div id="comments{{$m.'S'}}" class="collapse in p-0">
                                                                                @foreach ($oldComment as $com)
                                                                                    @if ($com->NumberFile==$file->NumberFile && $com->TypeData==$file->Typedata)
                                                                                        <div class="p-0" style="margin:1px 0px 1px 0px;">
                                                                                            <div class="card p-0 m-0">
                                                                                                <div class="card-block  m-0 p-0 pt-1 bgblack position-relative">
                                                                                                    {{-- delete comment --}}
                                                                                                    <form action="/Delete-Comment-Admin/{{$com->user_id}}" method="POST" class="">
                                                                                                        {{ csrf_field() }}
                                                                                                        {{ method_field('DELETE')}}
                                                                                                        <div class="" hidden>
                                                                                                            <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                                                                                            <input type="text" name="NumberComment" value="{{$com->NumberComment}}">
                                                                                                            <input type="text" name="usersid" value="{{$users->id}}">
                                                                                                        </div>
                                                                                                        <button type="submit" class="position-absolute bgmaroon m-0 p-0 rounded radius-down-" title="delete" style="right:0px; top:4px;">
                                                                                                            <span class="now-ui-icons ui-1_simple-remove color-white m-0 p-0" style=""></span>
                                                                                                        </button>
                                                                                                    </form>
                                                                                                    <div class="bgwhite px-1 p-0 m-0 radius-top-">
                                                                                                        <p class="p-0 m-0" style="font-weight: bold;">{{$com->user->FirstName.' '.$com->user->LastName}}</p>
                                                                                                        {{$com->Comment}}
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
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                    {{-- Videos --}}
                                    <div class=" tabs_radius pb-3" id="" >
                                        <div class="row m-0 p-0">
                                            <p class="p-0 m-0 h5 col-12 color-white-shadow bgblack">Videos</p>
                                            @foreach ($userss as $users)
                                                @foreach ($users->files as $file)
                                                    @if ($file->Typedata=='Video' && $file->Felieredata=='SMI')
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-2 p-1">
                                                            <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1">
                                                                <div class="card-block">
                                                                    <h3 class="card-title m-0">{{$users->Title}}</h3>
                                                                    {{-- Download && read  icons --}}
                                                                    <div class="col-12 m-0 p-0">
                                                                        <h4 class="m-0 pl-0 pull-left">{{$file->Title}}.</h4>
                                                                        <h4 class="m-0 pull-right">{{$file->user->FirstName.' '.$file->user->LastName}}.</h4>
                                                                        {{-- download icons --}}
                                                                        <a href="##Download##" title="download" class="position-absolute bgdarkred text-center rounded" style="right:0px; top:22px; width:22px; height:22px;" >
                                                                            <img src="../assets/img/download-icon.jpeg" class="" style="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="description row col-12">
                                                                        {{$file->Description}}.
                                                                    </div>
                                                                    <div class="description ">
                                                                        {{$file->Subject}}
                                                                        {{$file->Felieredata}}
                                                                        {{$file->Semester_data}}.
                                                                    </div>
                                                                    <hr class="p-0 m-0">
                                                                    {{-- Comments --}}
                                                                    <div class="card-body p-0" >
                                                                        @php
                                                                            $m++;    
                                                                        @endphp
                                                                        {{-- collapse comments --}}
                                                                        <a href="#comments{{$m.'D'}}" class=" btn btn-success radius-collapse col-12 p-0" data-toggle="collapse" >
                                                                            Comments
                                                                            <span class="caret"></span>
                                                                        </a>
                                                                        <div id="comments{{$m.'D'}}" class="collapse in p-0">
                                                                            @foreach ($oldComment as $com)
                                                                                @if ($com->NumberFile==$file->NumberFile && $com->TypeData==$file->Typedata)
                                                                                    <div class="p-0" style="margin:1px 0px 1px 0px;">
                                                                                        <div class="card p-0 m-0">
                                                                                            <div class="card-block  m-0 p-0 pt-1 bgblack position-relative">
                                                                                                {{-- delete comment --}}
                                                                                                <form action="/Delete-Comment-Admin/{{$com->user_id}}" method="POST" class="">
                                                                                                    {{ csrf_field() }}
                                                                                                    {{ method_field('DELETE')}}
                                                                                                    <div class="" hidden>
                                                                                                        <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                                                                                        <input type="text" name="NumberComment" value="{{$com->NumberComment}}">
                                                                                                        <input type="text" name="usersid" value="{{$users->id}}">
                                                                                                    </div>
                                                                                                    <button type="submit" class="position-absolute bgmaroon m-0 p-0 rounded radius-down-" title="delete" style="right:0px; top:4px;">
                                                                                                        <span class="now-ui-icons ui-1_simple-remove color-white m-0 p-0" style=""></span>
                                                                                                    </button>
                                                                                                </form>
                                                                                                <div class="bgwhite px-1 p-0 m-0 radius-top-">
                                                                                                    <p class="p-0 m-0" style="font-weight: bold;">{{$com->user->FirstName.' '.$com->user->LastName}}</p>
                                                                                                    {{$com->Comment}}
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
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane tabs_radius" id="smp" >
                                {{-- show my FILES|| statement SMP --}}
                                <div class="col-lg-12 col-md-12 col-sm-12 mt-2 ">
                                    {{-- Documents --}}
                                    <div class=" tabs_radius" id="" >
                                        <div class="row m-0 p-0">
                                            <p class="p-0 m-0 mt-2 h5 col-12 color-white-shadow bgblack">Documents</p>
                                            @foreach ($userss as $users)
                                                @foreach ($users->files as $file)
                                                    @if ($file->Typedata=='Document' && $file->Felieredata=='SMP')
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-2 p-1">
                                                            <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                <div class="card-block p-0" style="margin:-3px;">
                                                                    {{-- Download && read  icons --}}
                                                                    <div class="col-12 p-0 m-0">
                                                                        <h4 class="m-0 pl-0 pull-left">{{$file->Title}}.</h4>
                                                                        <h4 class="m-0 pull-right">{{$file->user->FirstName.' '.$file->user->LastName}}.</h4>
                                                                        {{-- download icons --}}
                                                                        <a href="##Download##" title="download" class="position-absolute bgdarkred text-center rounded" style="right:0px; top:22px; width:22px; height:22px;" >
                                                                            <img src="../assets/img/download-icon.jpeg" class="" style="">
                                                                        </a>
                                                                        {{-- read icons --}}
                                                                        <a href="##read##" target="_blank" title="read" class="position-absolute  text-center rounded" style="right:24px; top:22px; width:22px; height:22px;" >
                                                                            <img src="../assets/img/read-icon-2.svg" class="" style="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="description row col-12">
                                                                        {{$file->Description}}.
                                                                    </div>
                                                                    <div class="description ">
                                                                        {{$file->Subject}}
                                                                        {{$file->Felieredata}}
                                                                        {{$file->Semester_data}}.
                                                                    </div>
                                                                    <hr class="p-0 m-0">
                                                                    {{-- Comments --}}
                                                                    <div class="card-body p-0" >
                                                                        @php
                                                                            $m++;    
                                                                        @endphp
                                                                        {{-- collapse comments --}}
                                                                        <a href="#comments{{$m.'D'}}" class=" btn btn-success radius-collapse col-12 p-0" data-toggle="collapse" >
                                                                            Comments
                                                                            <span class="caret"></span>
                                                                        </a>
                                                                        <div id="comments{{$m.'D'}}" class="collapse in p-0">
                                                                            @foreach ($oldComment as $com)
                                                                                @if ($com->NumberFile==$file->NumberFile && $com->TypeData==$file->Typedata)
                                                                                    <div class="p-0" style="margin:1px 0px 1px 0px;">
                                                                                        <div class="card p-0 m-0">
                                                                                            <div class="card-block  m-0 p-0 pt-1 bgblack position-relative">
                                                                                                {{-- delete comment --}}
                                                                                                <form action="/Delete-Comment-Admin/{{$com->user_id}}" method="POST" class="">
                                                                                                    {{ csrf_field() }}
                                                                                                    {{ method_field('DELETE')}}
                                                                                                    <div class="" hidden>
                                                                                                        <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                                                                                        <input type="text" name="NumberComment" value="{{$com->NumberComment}}">
                                                                                                        <input type="text" name="usersid" value="{{$users->id}}">
                                                                                                    </div>
                                                                                                    <button type="submit" class="position-absolute bgmaroon m-0 p-0 rounded radius-down-" title="delete" style="right:0px; top:4px;">
                                                                                                        <span class="now-ui-icons ui-1_simple-remove color-white m-0 p-0" style=""></span>
                                                                                                    </button>
                                                                                                </form>
                                                                                                <div class="bgwhite px-1 p-0 m-0 radius-top-">
                                                                                                    <p class="p-0 m-0" style="font-weight: bold;">{{$com->user->FirstName.' '.$com->user->LastName}}</p>
                                                                                                    {{$com->Comment}}
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
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                    {{-- statement --}}
                                    <div class=" tabs_radius" id="" >
                                        <div class="row  bgdark m-1 p-0 pb-3">
                                            <p class="p-0 m-0 mb-1 h5 col-12 color-white-shadow bgblack">Statements</p>
                                            @foreach ($userss as $users)
                                                @foreach ($users->files as $file)
                                                    @if ($file->Typedata=='Statement' && $file->Felieredata=='SMP')
                                                        <div class="col-lg-4 col-md-6 col-sm-12 m-0 p-1">
                                                            <div class="card bgblack p-0 m-0">
                                                                <div class="card-block col-12  rounded p-0 m-0" >
                                                                    <div class="col-12 bggray rounded pb-0" >
                                                                        <div class="title  bgwhite radius-down- m-0" >
                                                                            <p class="px-1 m-0 pull-right">{{$users->FirstName.' '.$users->LastName}}.</p>
                                                                            <p class="px-1 text-right m-0 pull-left"><mark>{{$file->Title}}.</mark></p>
                                                                            <p class="px-1 m-0 row col-12">{{$file->Statement}}.</p>
                                                                            <div class="pl-1 row m-0 col-12 h6"><mark>{{$file->Subject.' '.$file->Felieredata .' '.$file->Semester_data}}.</mark></div>
                                                                        </div>
                                                                        <hr class="p-0 m-0">
                                                                        {{-- Comments --}}
                                                                        <div class="card-body p-0" >
                                                                            @php
                                                                                $m++;    
                                                                            @endphp
                                                                            {{-- collapse comments --}}
                                                                            <a href="#comments{{$m.'S'}}" class=" btn btn-success radius-collapse col-12 p-0" data-toggle="collapse" >
                                                                                Comments
                                                                                <span class="caret"></span>
                                                                            </a>
                                                                            <div id="comments{{$m.'S'}}" class="collapse in p-0">
                                                                                @foreach ($oldComment as $com)
                                                                                    @if ($com->NumberFile==$file->NumberFile && $com->TypeData==$file->Typedata)
                                                                                        <div class="p-0" style="margin:1px 0px 1px 0px;">
                                                                                            <div class="card p-0 m-0">
                                                                                                <div class="card-block  m-0 p-0 pt-1 bgblack position-relative">
                                                                                                    {{-- delete comment --}}
                                                                                                    <form action="/Delete-Comment-Admin/{{$com->user_id}}" method="POST" class="">
                                                                                                        {{ csrf_field() }}
                                                                                                        {{ method_field('DELETE')}}
                                                                                                        <div class="" hidden>
                                                                                                            <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                                                                                            <input type="text" name="NumberComment" value="{{$com->NumberComment}}">
                                                                                                            <input type="text" name="usersid" value="{{$users->id}}">
                                                                                                        </div>
                                                                                                        <button type="submit" class="position-absolute bgmaroon m-0 p-0 rounded radius-down-" title="delete" style="right:0px; top:4px;">
                                                                                                            <span class="now-ui-icons ui-1_simple-remove color-white m-0 p-0" style=""></span>
                                                                                                        </button>
                                                                                                    </form>
                                                                                                    <div class="bgwhite px-1 p-0 m-0 radius-top-">
                                                                                                        <p class="p-0 m-0" style="font-weight: bold;">{{$com->user->FirstName.' '.$com->user->LastName}}</p>
                                                                                                        {{$com->Comment}}
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
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                    {{-- Videos --}}
                                    <div class=" tabs_radius pb-3" id="" >
                                        <div class="row m-0 p-0">
                                            <p class="p-0 m-0 h5 col-12 color-white-shadow bgblack">Videos</p>
                                            @foreach ($userss as $users)
                                                @foreach ($users->files as $file)
                                                    @if ($file->Typedata=='Video' && $file->Felieredata=='SMP')
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-2 p-1">
                                                            <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1">
                                                                <div class="card-block">
                                                                    <h3 class="card-title m-0">{{$users->Title}}</h3>
                                                                    {{-- Download && read  icons --}}
                                                                    <div class="col-12 m-0 p-0">
                                                                        <h4 class="m-0 pl-0 pull-left">{{$file->Title}}.</h4>
                                                                        <h4 class="m-0 pull-right">{{$file->user->FirstName.' '.$file->user->LastName}}.</h4>
                                                                        {{-- download icons --}}
                                                                        <a href="##Download##" title="download" class="position-absolute bgdarkred text-center rounded" style="right:0px; top:22px; width:22px; height:22px;" >
                                                                            <img src="../assets/img/download-icon.jpeg" class="" style="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="description row col-12">
                                                                        {{$file->Description}}.
                                                                    </div>
                                                                    <div class="description ">
                                                                        {{$file->Subject}}
                                                                        {{$file->Felieredata}}
                                                                        {{$file->Semester_data}}.
                                                                    </div>
                                                                    <hr class="p-0 m-0">
                                                                    {{-- Comments --}}
                                                                    <div class="card-body p-0" >
                                                                        @php
                                                                            $m++;    
                                                                        @endphp
                                                                        {{-- collapse comments --}}
                                                                        <a href="#comments{{$m.'D'}}" class=" btn btn-success radius-collapse col-12 p-0" data-toggle="collapse" >
                                                                            Comments
                                                                            <span class="caret"></span>
                                                                        </a>
                                                                        <div id="comments{{$m.'D'}}" class="collapse in p-0">
                                                                            @foreach ($oldComment as $com)
                                                                                @if ($com->NumberFile==$file->NumberFile && $com->TypeData==$file->Typedata)
                                                                                    <div class="p-0" style="margin:1px 0px 1px 0px;">
                                                                                        <div class="card p-0 m-0">
                                                                                            <div class="card-block  m-0 p-0 pt-1 bgblack position-relative">
                                                                                                {{-- delete comment --}}
                                                                                                <form action="/Delete-Comment-Admin/{{$com->user_id}}" method="POST" class="">
                                                                                                    {{ csrf_field() }}
                                                                                                    {{ method_field('DELETE')}}
                                                                                                    <div class="" hidden>
                                                                                                        <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                                                                                        <input type="text" name="NumberComment" value="{{$com->NumberComment}}">
                                                                                                        <input type="text" name="usersid" value="{{$users->id}}">
                                                                                                    </div>
                                                                                                    <button type="submit" class="position-absolute bgmaroon m-0 p-0 rounded radius-down-" title="delete" style="right:0px; top:4px;">
                                                                                                        <span class="now-ui-icons ui-1_simple-remove color-white m-0 p-0" style=""></span>
                                                                                                    </button>
                                                                                                </form>
                                                                                                <div class="bgwhite px-1 p-0 m-0 radius-top-">
                                                                                                    <p class="p-0 m-0" style="font-weight: bold;">{{$com->user->FirstName.' '.$com->user->LastName}}</p>
                                                                                                    {{$com->Comment}}
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
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane tabs_radius" id="ige" >
                                {{-- show my FILES|| statement IGE --}}
                                <div class="col-lg-12 col-md-12 col-sm-12 mt-2 ">
                                    {{-- Documents --}}
                                    <div class=" tabs_radius" id="" >
                                        <div class="row m-0 p-0">
                                            <p class="p-0 m-0 mt-2 h5 col-12 color-white-shadow bgblack">Documents</p>
                                            @foreach ($userss as $users)
                                                @foreach ($users->files as $file)
                                                    @if ($file->Typedata=='Document' && $file->Felieredata=='IGE')
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-2 p-1">
                                                            <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                <div class="card-block p-0" style="margin:-3px;">
                                                                    {{-- Download && read  icons --}}
                                                                    <div class="col-12 p-0 m-0">
                                                                        <h4 class="m-0 pl-0 pull-left">{{$file->Title}}.</h4>
                                                                        <h4 class="m-0 pull-right">{{$file->user->FirstName.' '.$file->user->LastName}}.</h4>
                                                                        {{-- download icons --}}
                                                                        <a href="##Download##" title="download" class="position-absolute bgdarkred text-center rounded" style="right:0px; top:22px; width:22px; height:22px;" >
                                                                            <img src="../assets/img/download-icon.jpeg" class="" style="">
                                                                        </a>
                                                                        {{-- read icons --}}
                                                                        <a href="##read##" target="_blank" title="read" class="position-absolute  text-center rounded" style="right:24px; top:22px; width:22px; height:22px;" >
                                                                            <img src="../assets/img/read-icon-2.svg" class="" style="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="description row col-12">
                                                                        {{$file->Description}}.
                                                                    </div>
                                                                    <div class="description ">
                                                                        {{$file->Subject}}
                                                                        {{$file->Felieredata}}
                                                                        {{$file->Semester_data}}.
                                                                    </div>
                                                                    <hr class="p-0 m-0">
                                                                    {{-- Comments --}}
                                                                    <div class="card-body p-0" >
                                                                        @php
                                                                            $m++;    
                                                                        @endphp
                                                                        {{-- collapse comments --}}
                                                                        <a href="#comments{{$m.'D'}}" class=" btn btn-success radius-collapse col-12 p-0" data-toggle="collapse" >
                                                                            Comments
                                                                            <span class="caret"></span>
                                                                        </a>
                                                                        <div id="comments{{$m.'D'}}" class="collapse in p-0">
                                                                            @foreach ($oldComment as $com)
                                                                                @if ($com->NumberFile==$file->NumberFile && $com->TypeData==$file->Typedata)
                                                                                    <div class="p-0" style="margin:1px 0px 1px 0px;">
                                                                                        <div class="card p-0 m-0">
                                                                                            <div class="card-block  m-0 p-0 pt-1 bgblack position-relative">
                                                                                                {{-- delete comment --}}
                                                                                                <form action="/Delete-Comment-Admin/{{$com->user_id}}" method="POST" class="">
                                                                                                    {{ csrf_field() }}
                                                                                                    {{ method_field('DELETE')}}
                                                                                                    <div class="" hidden>
                                                                                                        <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                                                                                        <input type="text" name="NumberComment" value="{{$com->NumberComment}}">
                                                                                                        <input type="text" name="usersid" value="{{$users->id}}">
                                                                                                    </div>
                                                                                                    <button type="submit" class="position-absolute bgmaroon m-0 p-0 rounded radius-down-" title="delete" style="right:0px; top:4px;">
                                                                                                        <span class="now-ui-icons ui-1_simple-remove color-white m-0 p-0" style=""></span>
                                                                                                    </button>
                                                                                                </form>
                                                                                                <div class="bgwhite px-1 p-0 m-0 radius-top-">
                                                                                                    <p class="p-0 m-0" style="font-weight: bold;">{{$com->user->FirstName.' '.$com->user->LastName}}</p>
                                                                                                    {{$com->Comment}}
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
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                    {{-- statement --}}
                                    <div class=" tabs_radius" id="" >
                                        <div class="row  bgdark m-1 p-0 pb-3">
                                            <p class="p-0 m-0 mb-1 h5 col-12 color-white-shadow bgblack">Statements</p>
                                            @foreach ($userss as $users)
                                                @foreach ($users->files as $file)
                                                    @if ($file->Typedata=='Statement' && $file->Felieredata=='IGE')
                                                        <div class="col-lg-4 col-md-6 col-sm-12 m-0 p-1">
                                                            <div class="card bgblack p-0 m-0">
                                                                <div class="card-block col-12  rounded p-0 m-0" >
                                                                    <div class="col-12 bggray rounded pb-0" >
                                                                        <div class="title  bgwhite radius-down- m-0" >
                                                                            <p class="px-1 m-0 pull-right">{{$users->FirstName.' '.$users->LastName}}.</p>
                                                                            <p class="px-1 text-right m-0 pull-left"><mark>{{$file->Title}}.</mark></p>
                                                                            <p class="px-1 m-0 row col-12">{{$file->Statement}}.</p>
                                                                            <div class="pl-1 row m-0 col-12 h6"><mark>{{$file->Subject.' '.$file->Felieredata .' '.$file->Semester_data}}.</mark></div>
                                                                        </div>
                                                                        <hr class="p-0 m-0">
                                                                        {{-- Comments --}}
                                                                        <div class="card-body p-0" >
                                                                            @php
                                                                                $m++;    
                                                                            @endphp
                                                                            {{-- collapse comments --}}
                                                                            <a href="#comments{{$m.'S'}}" class=" btn btn-success radius-collapse col-12 p-0" data-toggle="collapse" >
                                                                                Comments
                                                                                <span class="caret"></span>
                                                                            </a>
                                                                            <div id="comments{{$m.'S'}}" class="collapse in p-0">
                                                                                @foreach ($oldComment as $com)
                                                                                    @if ($com->NumberFile==$file->NumberFile && $com->TypeData==$file->Typedata)
                                                                                        <div class="p-0" style="margin:1px 0px 1px 0px;">
                                                                                            <div class="card p-0 m-0">
                                                                                                <div class="card-block  m-0 p-0 pt-1 bgblack position-relative">
                                                                                                    {{-- delete comment --}}
                                                                                                    <form action="/Delete-Comment-Admin/{{$com->user_id}}" method="POST" class="">
                                                                                                        {{ csrf_field() }}
                                                                                                        {{ method_field('DELETE')}}
                                                                                                        <div class="" hidden>
                                                                                                            <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                                                                                            <input type="text" name="NumberComment" value="{{$com->NumberComment}}">
                                                                                                            <input type="text" name="usersid" value="{{$users->id}}">
                                                                                                        </div>
                                                                                                        <button type="submit" class="position-absolute bgmaroon m-0 p-0 rounded radius-down-" title="delete" style="right:0px; top:4px;">
                                                                                                            <span class="now-ui-icons ui-1_simple-remove color-white m-0 p-0" style=""></span>
                                                                                                        </button>
                                                                                                    </form>
                                                                                                    <div class="bgwhite px-1 p-0 m-0 radius-top-">
                                                                                                        <p class="p-0 m-0" style="font-weight: bold;">{{$com->user->FirstName.' '.$com->user->LastName}}</p>
                                                                                                        {{$com->Comment}}
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
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                    {{-- Videos --}}
                                    <div class=" tabs_radius pb-3" id="" >
                                        <div class="row m-0 p-0">
                                            <p class="p-0 m-0 h5 col-12 color-white-shadow bgblack">Videos</p>
                                            @foreach ($userss as $users)
                                                @foreach ($users->files as $file)
                                                    @if ($file->Typedata=='Video' && $file->Felieredata=='IGE')
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-2 p-1">
                                                            <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1">
                                                                <div class="card-block">
                                                                    <h3 class="card-title m-0">{{$users->Title}}</h3>
                                                                    {{-- Download && read  icons --}}
                                                                    <div class="col-12 m-0 p-0">
                                                                        <h4 class="m-0 pl-0 pull-left">{{$file->Title}}.</h4>
                                                                        <h4 class="m-0 pull-right">{{$file->user->FirstName.' '.$file->user->LastName}}.</h4>
                                                                        {{-- download icons --}}
                                                                        <a href="##Download##" title="download" class="position-absolute bgdarkred text-center rounded" style="right:0px; top:22px; width:22px; height:22px;" >
                                                                            <img src="../assets/img/download-icon.jpeg" class="" style="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="description row col-12">
                                                                        {{$file->Description}}.
                                                                    </div>
                                                                    <div class="description ">
                                                                        {{$file->Subject}}
                                                                        {{$file->Felieredata}}
                                                                        {{$file->Semester_data}}.
                                                                    </div>
                                                                    <hr class="p-0 m-0">
                                                                    {{-- Comments --}}
                                                                    <div class="card-body p-0" >
                                                                        @php
                                                                            $m++;    
                                                                        @endphp
                                                                        {{-- collapse comments --}}
                                                                        <a href="#comments{{$m.'D'}}" class=" btn btn-success radius-collapse col-12 p-0" data-toggle="collapse" >
                                                                            Comments
                                                                            <span class="caret"></span>
                                                                        </a>
                                                                        <div id="comments{{$m.'D'}}" class="collapse in p-0">
                                                                            @foreach ($oldComment as $com)
                                                                                @if ($com->NumberFile==$file->NumberFile && $com->TypeData==$file->Typedata)
                                                                                    <div class="p-0" style="margin:1px 0px 1px 0px;">
                                                                                        <div class="card p-0 m-0">
                                                                                            <div class="card-block  m-0 p-0 pt-1 bgblack position-relative">
                                                                                                {{-- delete comment --}}
                                                                                                <form action="/Delete-Comment-Admin/{{$com->user_id}}" method="POST" class="">
                                                                                                    {{ csrf_field() }}
                                                                                                    {{ method_field('DELETE')}}
                                                                                                    <div class="" hidden>
                                                                                                        <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                                                                                        <input type="text" name="NumberComment" value="{{$com->NumberComment}}">
                                                                                                        <input type="text" name="usersid" value="{{$users->id}}">
                                                                                                    </div>
                                                                                                    <button type="submit" class="position-absolute bgmaroon m-0 p-0 rounded radius-down-" title="delete" style="right:0px; top:4px;">
                                                                                                        <span class="now-ui-icons ui-1_simple-remove color-white m-0 p-0" style=""></span>
                                                                                                    </button>
                                                                                                </form>
                                                                                                <div class="bgwhite px-1 p-0 m-0 radius-top-">
                                                                                                    <p class="p-0 m-0" style="font-weight: bold;">{{$com->user->FirstName.' '.$com->user->LastName}}</p>
                                                                                                    {{$com->Comment}}
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
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane tabs_radius" id="lea" >
                                {{-- show my FILES|| statement LEA --}}
                                <div class="col-lg-12 col-md-12 col-sm-12 mt-2 ">
                                    {{-- Documents --}}
                                    <div class=" tabs_radius" id="" >
                                        <div class="row m-0 p-0">
                                            <p class="p-0 m-0 mt-2 h5 col-12 color-white-shadow bgblack">Documents</p>
                                            @foreach ($userss as $users)
                                                @foreach ($users->files as $file)
                                                    @if ($file->Typedata=='Document' && $file->Felieredata=='LEA')
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-2 p-1">
                                                            <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                <div class="card-block p-0" style="margin:-3px;">
                                                                    {{-- Download && read  icons --}}
                                                                    <div class="col-12 p-0 m-0">
                                                                        <h4 class="m-0 pl-0 pull-left">{{$file->Title}}.</h4>
                                                                        <h4 class="m-0 pull-right">{{$file->user->FirstName.' '.$file->user->LastName}}.</h4>
                                                                        {{-- download icons --}}
                                                                        <a href="##Download##" title="download" class="position-absolute bgdarkred text-center rounded" style="right:0px; top:22px; width:22px; height:22px;" >
                                                                            <img src="../assets/img/download-icon.jpeg" class="" style="">
                                                                        </a>
                                                                        {{-- read icons --}}
                                                                        <a href="##read##" target="_blank" title="read" class="position-absolute  text-center rounded" style="right:24px; top:22px; width:22px; height:22px;" >
                                                                            <img src="../assets/img/read-icon-2.svg" class="" style="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="description row col-12">
                                                                        {{$file->Description}}.
                                                                    </div>
                                                                    <div class="description ">
                                                                        {{$file->Subject}}
                                                                        {{$file->Felieredata}}
                                                                        {{$file->Semester_data}}.
                                                                    </div>
                                                                    <hr class="p-0 m-0">
                                                                    {{-- Comments --}}
                                                                    <div class="card-body p-0" >
                                                                        @php
                                                                            $m++;    
                                                                        @endphp
                                                                        {{-- collapse comments --}}
                                                                        <a href="#comments{{$m.'D'}}" class=" btn btn-success radius-collapse col-12 p-0" data-toggle="collapse" >
                                                                            Comments
                                                                            <span class="caret"></span>
                                                                        </a>
                                                                        <div id="comments{{$m.'D'}}" class="collapse in p-0">
                                                                            @foreach ($oldComment as $com)
                                                                                @if ($com->NumberFile==$file->NumberFile && $com->TypeData==$file->Typedata)
                                                                                    <div class="p-0" style="margin:1px 0px 1px 0px;">
                                                                                        <div class="card p-0 m-0">
                                                                                            <div class="card-block  m-0 p-0 pt-1 bgblack position-relative">
                                                                                                {{-- delete comment --}}
                                                                                                <form action="/Delete-Comment-Admin/{{$com->user_id}}" method="POST" class="">
                                                                                                    {{ csrf_field() }}
                                                                                                    {{ method_field('DELETE')}}
                                                                                                    <div class="" hidden>
                                                                                                        <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                                                                                        <input type="text" name="NumberComment" value="{{$com->NumberComment}}">
                                                                                                        <input type="text" name="usersid" value="{{$users->id}}">
                                                                                                    </div>
                                                                                                    <button type="submit" class="position-absolute bgmaroon m-0 p-0 rounded radius-down-" title="delete" style="right:0px; top:4px;">
                                                                                                        <span class="now-ui-icons ui-1_simple-remove color-white m-0 p-0" style=""></span>
                                                                                                    </button>
                                                                                                </form>
                                                                                                <div class="bgwhite px-1 p-0 m-0 radius-top-">
                                                                                                    <p class="p-0 m-0" style="font-weight: bold;">{{$com->user->FirstName.' '.$com->user->LastName}}</p>
                                                                                                    {{$com->Comment}}
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
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                    {{-- statement --}}
                                    <div class=" tabs_radius" id="" >
                                        <div class="row  bgdark m-1 p-0 pb-3">
                                            <p class="p-0 m-0 mb-1 h5 col-12 color-white-shadow bgblack">Statements</p>
                                            @foreach ($userss as $users)
                                                @foreach ($users->files as $file)
                                                    @if ($file->Typedata=='Statement' && $file->Felieredata=='LEA')
                                                        <div class="col-lg-4 col-md-6 col-sm-12 m-0 p-1">
                                                            <div class="card bgblack p-0 m-0">
                                                                <div class="card-block col-12  rounded p-0 m-0" >
                                                                    <div class="col-12 bggray rounded pb-0" >
                                                                        <div class="title  bgwhite radius-down- m-0" >
                                                                            <p class="px-1 m-0 pull-right">{{$users->FirstName.' '.$users->LastName}}.</p>
                                                                            <p class="px-1 text-right m-0 pull-left"><mark>{{$file->Title}}.</mark></p>
                                                                            <p class="px-1 m-0 row col-12">{{$file->Statement}}.</p>
                                                                            <div class="pl-1 row m-0 col-12 h6"><mark>{{$file->Subject.' '.$file->Felieredata .' '.$file->Semester_data}}.</mark></div>
                                                                        </div>
                                                                        <hr class="p-0 m-0">
                                                                        {{-- Comments --}}
                                                                        <div class="card-body p-0" >
                                                                            @php
                                                                                $m++;    
                                                                            @endphp
                                                                            {{-- collapse comments --}}
                                                                            <a href="#comments{{$m.'S'}}" class=" btn btn-success radius-collapse col-12 p-0" data-toggle="collapse" >
                                                                                Comments
                                                                                <span class="caret"></span>
                                                                            </a>
                                                                            <div id="comments{{$m.'S'}}" class="collapse in p-0">
                                                                                @foreach ($oldComment as $com)
                                                                                    @if ($com->NumberFile==$file->NumberFile && $com->TypeData==$file->Typedata)
                                                                                        <div class="p-0" style="margin:1px 0px 1px 0px;">
                                                                                            <div class="card p-0 m-0">
                                                                                                <div class="card-block  m-0 p-0 pt-1 bgblack position-relative">
                                                                                                    {{-- delete comment --}}
                                                                                                    <form action="/Delete-Comment-Admin/{{$com->user_id}}" method="POST" class="">
                                                                                                        {{ csrf_field() }}
                                                                                                        {{ method_field('DELETE')}}
                                                                                                        <div class="" hidden>
                                                                                                            <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                                                                                            <input type="text" name="NumberComment" value="{{$com->NumberComment}}">
                                                                                                            <input type="text" name="usersid" value="{{$users->id}}">
                                                                                                        </div>
                                                                                                        <button type="submit" class="position-absolute bgmaroon m-0 p-0 rounded radius-down-" title="delete" style="right:0px; top:4px;">
                                                                                                            <span class="now-ui-icons ui-1_simple-remove color-white m-0 p-0" style=""></span>
                                                                                                        </button>
                                                                                                    </form>
                                                                                                    <div class="bgwhite px-1 p-0 m-0 radius-top-">
                                                                                                        <p class="p-0 m-0" style="font-weight: bold;">{{$com->user->FirstName.' '.$com->user->LastName}}</p>
                                                                                                        {{$com->Comment}}
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
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                    {{-- Videos --}}
                                    <div class=" tabs_radius pb-3" id="" >
                                        <div class="row m-0 p-0">
                                            <p class="p-0 m-0 h5 col-12 color-white-shadow bgblack">Videos</p>
                                            @foreach ($userss as $users)
                                                @foreach ($users->files as $file)
                                                    @if ($file->Typedata=='Video' && $file->Felieredata=='LEA')
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-2 p-1">
                                                            <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1">
                                                                <div class="card-block">
                                                                    <h3 class="card-title m-0">{{$users->Title}}</h3>
                                                                    {{-- Download && read  icons --}}
                                                                    <div class="col-12 m-0 p-0">
                                                                        <h4 class="m-0 pl-0 pull-left">{{$file->Title}}.</h4>
                                                                        <h4 class="m-0 pull-right">{{$file->user->FirstName.' '.$file->user->LastName}}.</h4>
                                                                        {{-- download icons --}}
                                                                        <a href="##Download##" title="download" class="position-absolute bgdarkred text-center rounded" style="right:0px; top:22px; width:22px; height:22px;" >
                                                                            <img src="../assets/img/download-icon.jpeg" class="" style="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="description row col-12">
                                                                        {{$file->Description}}.
                                                                    </div>
                                                                    <div class="description ">
                                                                        {{$file->Subject}}
                                                                        {{$file->Felieredata}}
                                                                        {{$file->Semester_data}}.
                                                                    </div>
                                                                    <hr class="p-0 m-0">
                                                                    {{-- Comments --}}
                                                                    <div class="card-body p-0" >
                                                                        @php
                                                                            $m++;    
                                                                        @endphp
                                                                        {{-- collapse comments --}}
                                                                        <a href="#comments{{$m.'D'}}" class=" btn btn-success radius-collapse col-12 p-0" data-toggle="collapse" >
                                                                            Comments
                                                                            <span class="caret"></span>
                                                                        </a>
                                                                        <div id="comments{{$m.'D'}}" class="collapse in p-0">
                                                                            @foreach ($oldComment as $com)
                                                                                @if ($com->NumberFile==$file->NumberFile && $com->TypeData==$file->Typedata)
                                                                                    <div class="p-0" style="margin:1px 0px 1px 0px;">
                                                                                        <div class="card p-0 m-0">
                                                                                            <div class="card-block  m-0 p-0 pt-1 bgblack position-relative">
                                                                                                {{-- delete comment --}}
                                                                                                <form action="/Delete-Comment-Admin/{{$com->user_id}}" method="POST" class="">
                                                                                                    {{ csrf_field() }}
                                                                                                    {{ method_field('DELETE')}}
                                                                                                    <div class="" hidden>
                                                                                                        <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                                                                                        <input type="text" name="NumberComment" value="{{$com->NumberComment}}">
                                                                                                        <input type="text" name="usersid" value="{{$users->id}}">
                                                                                                    </div>
                                                                                                    <button type="submit" class="position-absolute bgmaroon m-0 p-0 rounded radius-down-" title="delete" style="right:0px; top:4px;">
                                                                                                        <span class="now-ui-icons ui-1_simple-remove color-white m-0 p-0" style=""></span>
                                                                                                    </button>
                                                                                                </form>
                                                                                                <div class="bgwhite px-1 p-0 m-0 radius-top-">
                                                                                                    <p class="p-0 m-0" style="font-weight: bold;">{{$com->user->FirstName.' '.$com->user->LastName}}</p>
                                                                                                    {{$com->Comment}}
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
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane tabs_radius" id="teer" >  
                                {{-- show my FILES|| statement TEER --}}
                                <div class="col-lg-12 col-md-12 col-sm-12 mt-2 ">
                                    {{-- Documents --}}
                                    <div class=" tabs_radius" id="" >
                                        <div class="row m-0 p-0">
                                            <p class="p-0 m-0 mt-2 h5 col-12 color-white-shadow bgblack">Documents</p>
                                            @foreach ($userss as $users)
                                                @foreach ($users->files as $file)
                                                    @if ($file->Typedata=='Document' && $file->Felieredata=='TEER')
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-2 p-1">
                                                            <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                <div class="card-block p-0" style="margin:-3px;">
                                                                    {{-- Download && read  icons --}}
                                                                    <div class="col-12 p-0 m-0">
                                                                        <h4 class="m-0 pl-0 pull-left">{{$file->Title}}.</h4>
                                                                        <h4 class="m-0 pull-right">{{$file->user->FirstName.' '.$file->user->LastName}}.</h4>
                                                                        {{-- download icons --}}
                                                                        <a href="##Download##" title="download" class="position-absolute bgdarkred text-center rounded" style="right:0px; top:22px; width:22px; height:22px;" >
                                                                            <img src="../assets/img/download-icon.jpeg" class="" style="">
                                                                        </a>
                                                                        {{-- read icons --}}
                                                                        <a href="##read##" target="_blank" title="read" class="position-absolute  text-center rounded" style="right:24px; top:22px; width:22px; height:22px;" >
                                                                            <img src="../assets/img/read-icon-2.svg" class="" style="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="description row col-12">
                                                                        {{$file->Description}}.
                                                                    </div>
                                                                    <div class="description ">
                                                                        {{$file->Subject}}
                                                                        {{$file->Felieredata}}
                                                                        {{$file->Semester_data}}.
                                                                    </div>
                                                                    <hr class="p-0 m-0">
                                                                    {{-- Comments --}}
                                                                    <div class="card-body p-0" >
                                                                        @php
                                                                            $m++;    
                                                                        @endphp
                                                                        {{-- collapse comments --}}
                                                                        <a href="#comments{{$m.'D'}}" class=" btn btn-success radius-collapse col-12 p-0" data-toggle="collapse" >
                                                                            Comments
                                                                            <span class="caret"></span>
                                                                        </a>
                                                                        <div id="comments{{$m.'D'}}" class="collapse in p-0">
                                                                            @foreach ($oldComment as $com)
                                                                                @if ($com->NumberFile==$file->NumberFile && $com->TypeData==$file->Typedata)
                                                                                    <div class="p-0" style="margin:1px 0px 1px 0px;">
                                                                                        <div class="card p-0 m-0">
                                                                                            <div class="card-block  m-0 p-0 pt-1 bgblack position-relative">
                                                                                                {{-- delete comment --}}
                                                                                                <form action="/Delete-Comment-Admin/{{$com->user_id}}" method="POST" class="">
                                                                                                    {{ csrf_field() }}
                                                                                                    {{ method_field('DELETE')}}
                                                                                                    <div class="" hidden>
                                                                                                        <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                                                                                        <input type="text" name="NumberComment" value="{{$com->NumberComment}}">
                                                                                                        <input type="text" name="usersid" value="{{$users->id}}">
                                                                                                    </div>
                                                                                                    <button type="submit" class="position-absolute bgmaroon m-0 p-0 rounded radius-down-" title="delete" style="right:0px; top:4px;">
                                                                                                        <span class="now-ui-icons ui-1_simple-remove color-white m-0 p-0" style=""></span>
                                                                                                    </button>
                                                                                                </form>
                                                                                                <div class="bgwhite px-1 p-0 m-0 radius-top-">
                                                                                                    <p class="p-0 m-0" style="font-weight: bold;">{{$com->user->FirstName.' '.$com->user->LastName}}</p>
                                                                                                    {{$com->Comment}}
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
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                    {{-- statement --}}
                                    <div class=" tabs_radius" id="" >
                                        <div class="row  bgdark m-1 p-0 pb-3">
                                            <p class="p-0 m-0 mb-1 h5 col-12 color-white-shadow bgblack">Statements</p>
                                            @foreach ($userss as $users)
                                                @foreach ($users->files as $file)
                                                    @if ($file->Typedata=='Statement' && $file->Felieredata=='TEER')
                                                        <div class="col-lg-4 col-md-6 col-sm-12 m-0 p-1">
                                                            <div class="card bgblack p-0 m-0">
                                                                <div class="card-block col-12  rounded p-0 m-0" >
                                                                    <div class="col-12 bggray rounded pb-0" >
                                                                        <div class="title  bgwhite radius-down- m-0" >
                                                                            <p class="px-1 m-0 pull-right">{{$users->FirstName.' '.$users->LastName}}.</p>
                                                                            <p class="px-1 text-right m-0 pull-left"><mark>{{$file->Title}}.</mark></p>
                                                                            <p class="px-1 m-0 row col-12">{{$file->Statement}}.</p>
                                                                            <div class="pl-1 row m-0 col-12 h6"><mark>{{$file->Subject.' '.$file->Felieredata .' '.$file->Semester_data}}.</mark></div>
                                                                        </div>
                                                                        <hr class="p-0 m-0">
                                                                        {{-- Comments --}}
                                                                        <div class="card-body p-0" >
                                                                            @php
                                                                                $m++;    
                                                                            @endphp
                                                                            {{-- collapse comments --}}
                                                                            <a href="#comments{{$m.'S'}}" class=" btn btn-success radius-collapse col-12 p-0" data-toggle="collapse" >
                                                                                Comments
                                                                                <span class="caret"></span>
                                                                            </a>
                                                                            <div id="comments{{$m.'S'}}" class="collapse in p-0">
                                                                                @foreach ($oldComment as $com)
                                                                                    @if ($com->NumberFile==$file->NumberFile && $com->TypeData==$file->Typedata)
                                                                                        <div class="p-0" style="margin:1px 0px 1px 0px;">
                                                                                            <div class="card p-0 m-0">
                                                                                                <div class="card-block  m-0 p-0 pt-1 bgblack position-relative">
                                                                                                    {{-- delete comment --}}
                                                                                                    <form action="/Delete-Comment-Admin/{{$com->user_id}}" method="POST" class="">
                                                                                                        {{ csrf_field() }}
                                                                                                        {{ method_field('DELETE')}}
                                                                                                        <div class="" hidden>
                                                                                                            <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                                                                                            <input type="text" name="NumberComment" value="{{$com->NumberComment}}">
                                                                                                            <input type="text" name="usersid" value="{{$users->id}}">
                                                                                                        </div>
                                                                                                        <button type="submit" class="position-absolute bgmaroon m-0 p-0 rounded radius-down-" title="delete" style="right:0px; top:4px;">
                                                                                                            <span class="now-ui-icons ui-1_simple-remove color-white m-0 p-0" style=""></span>
                                                                                                        </button>
                                                                                                    </form>
                                                                                                    <div class="bgwhite px-1 p-0 m-0 radius-top-">
                                                                                                        <p class="p-0 m-0" style="font-weight: bold;">{{$com->user->FirstName.' '.$com->user->LastName}}</p>
                                                                                                        {{$com->Comment}}
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
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                    {{-- Videos --}}
                                    <div class=" tabs_radius pb-3" id="" >
                                        <div class="row m-0 p-0">
                                            <p class="p-0 m-0 h5 col-12 color-white-shadow bgblack">Videos</p>
                                            @foreach ($userss as $users)
                                                @foreach ($users->files as $file)
                                                    @if ($file->Typedata=='Video' && $file->Felieredata=='TEER')
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-2 p-1">
                                                            <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1">
                                                                <div class="card-block">
                                                                    <h3 class="card-title m-0">{{$users->Title}}</h3>
                                                                    {{-- Download && read  icons --}}
                                                                    <div class="col-12 m-0 p-0">
                                                                        <h4 class="m-0 pl-0 pull-left">{{$file->Title}}.</h4>
                                                                        <h4 class="m-0 pull-right">{{$file->user->FirstName.' '.$file->user->LastName}}.</h4>
                                                                        {{-- download icons --}}
                                                                        <a href="##Download##" title="download" class="position-absolute bgdarkred text-center rounded" style="right:0px; top:22px; width:22px; height:22px;" >
                                                                            <img src="../assets/img/download-icon.jpeg" class="" style="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="description row col-12">
                                                                        {{$file->Description}}.
                                                                    </div>
                                                                    <div class="description ">
                                                                        {{$file->Subject}}
                                                                        {{$file->Felieredata}}
                                                                        {{$file->Semester_data}}.
                                                                    </div>
                                                                    <hr class="p-0 m-0">
                                                                    {{-- Comments --}}
                                                                    <div class="card-body p-0" >
                                                                        @php
                                                                            $m++;    
                                                                        @endphp
                                                                        {{-- collapse comments --}}
                                                                        <a href="#comments{{$m.'D'}}" class=" btn btn-success radius-collapse col-12 p-0" data-toggle="collapse" >
                                                                            Comments
                                                                            <span class="caret"></span>
                                                                        </a>
                                                                        <div id="comments{{$m.'D'}}" class="collapse in p-0">
                                                                            @foreach ($oldComment as $com)
                                                                                @if ($com->NumberFile==$file->NumberFile && $com->TypeData==$file->Typedata)
                                                                                    <div class="p-0" style="margin:1px 0px 1px 0px;">
                                                                                        <div class="card p-0 m-0">
                                                                                            <div class="card-block  m-0 p-0 pt-1 bgblack position-relative">
                                                                                                {{-- delete comment --}}
                                                                                                <form action="/Delete-Comment-Admin/{{$com->user_id}}" method="POST" class="">
                                                                                                    {{ csrf_field() }}
                                                                                                    {{ method_field('DELETE')}}
                                                                                                    <div class="" hidden>
                                                                                                        <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                                                                                        <input type="text" name="NumberComment" value="{{$com->NumberComment}}">
                                                                                                        <input type="text" name="usersid" value="{{$users->id}}">
                                                                                                    </div>
                                                                                                    <button type="submit" class="position-absolute bgmaroon m-0 p-0 rounded radius-down-" title="delete" style="right:0px; top:4px;">
                                                                                                        <span class="now-ui-icons ui-1_simple-remove color-white m-0 p-0" style=""></span>
                                                                                                    </button>
                                                                                                </form>
                                                                                                <div class="bgwhite px-1 p-0 m-0 radius-top-">
                                                                                                    <p class="p-0 m-0" style="font-weight: bold;">{{$com->user->FirstName.' '.$com->user->LastName}}</p>
                                                                                                    {{$com->Comment}}
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
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane tabs_radius" id="gpca" > 
                                {{-- show my FILES|| statement GPCA --}}
                                <div class="col-lg-12 col-md-12 col-sm-12 mt-2 ">
                                    {{-- Documents --}}
                                    <div class=" tabs_radius" id="" >
                                        <div class="row m-0 p-0">
                                            <p class="p-0 m-0 mt-2 h5 col-12 color-white-shadow bgblack">Documents</p>
                                            @foreach ($userss as $users)
                                                @foreach ($users->files as $file)
                                                    @if ($file->Typedata=='Document' && $file->Felieredata=='GPCA')
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-2 p-1">
                                                            <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1" >
                                                                <div class="card-block p-0" style="margin:-3px;">
                                                                    {{-- Download && read  icons --}}
                                                                    <div class="col-12 p-0 m-0">
                                                                        <h4 class="m-0 pl-0 pull-left">{{$file->Title}}.</h4>
                                                                        <h4 class="m-0 pull-right">{{$file->user->FirstName.' '.$file->user->LastName}}.</h4>
                                                                        {{-- download icons --}}
                                                                        <a href="##Download##" title="download" class="position-absolute bgdarkred text-center rounded" style="right:0px; top:22px; width:22px; height:22px;" >
                                                                            <img src="../assets/img/download-icon.jpeg" class="" style="">
                                                                        </a>
                                                                        {{-- read icons --}}
                                                                        <a href="##read##" target="_blank" title="read" class="position-absolute  text-center rounded" style="right:24px; top:22px; width:22px; height:22px;" >
                                                                            <img src="../assets/img/read-icon-2.svg" class="" style="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="description row col-12">
                                                                        {{$file->Description}}.
                                                                    </div>
                                                                    <div class="description ">
                                                                        {{$file->Subject}}
                                                                        {{$file->Felieredata}}
                                                                        {{$file->Semester_data}}.
                                                                    </div>
                                                                    <hr class="p-0 m-0">
                                                                    {{-- Comments --}}
                                                                    <div class="card-body p-0" >
                                                                        @php
                                                                            $m++;    
                                                                        @endphp
                                                                        {{-- collapse comments --}}
                                                                        <a href="#comments{{$m.'D'}}" class=" btn btn-success radius-collapse col-12 p-0" data-toggle="collapse" >
                                                                            Comments
                                                                            <span class="caret"></span>
                                                                        </a>
                                                                        <div id="comments{{$m.'D'}}" class="collapse in p-0">
                                                                            @foreach ($oldComment as $com)
                                                                                @if ($com->NumberFile==$file->NumberFile && $com->TypeData==$file->Typedata)
                                                                                    <div class="p-0" style="margin:1px 0px 1px 0px;">
                                                                                        <div class="card p-0 m-0">
                                                                                            <div class="card-block  m-0 p-0 pt-1 bgblack position-relative">
                                                                                                {{-- delete comment --}}
                                                                                                <form action="/Delete-Comment-Admin/{{$com->user_id}}" method="POST" class="">
                                                                                                    {{ csrf_field() }}
                                                                                                    {{ method_field('DELETE')}}
                                                                                                    <div class="" hidden>
                                                                                                        <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                                                                                        <input type="text" name="NumberComment" value="{{$com->NumberComment}}">
                                                                                                        <input type="text" name="usersid" value="{{$users->id}}">
                                                                                                    </div>
                                                                                                    <button type="submit" class="position-absolute bgmaroon m-0 p-0 rounded radius-down-" title="delete" style="right:0px; top:4px;">
                                                                                                        <span class="now-ui-icons ui-1_simple-remove color-white m-0 p-0" style=""></span>
                                                                                                    </button>
                                                                                                </form>
                                                                                                <div class="bgwhite px-1 p-0 m-0 radius-top-">
                                                                                                    <p class="p-0 m-0" style="font-weight: bold;">{{$com->user->FirstName.' '.$com->user->LastName}}</p>
                                                                                                    {{$com->Comment}}
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
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                    {{-- statement --}}
                                    <div class=" tabs_radius" id="" >
                                        <div class="row  bgdark m-1 p-0 pb-3">
                                            <p class="p-0 m-0 mb-1 h5 col-12 color-white-shadow bgblack">Statements</p>
                                            @foreach ($userss as $users)
                                                @foreach ($users->files as $file)
                                                    @if ($file->Typedata=='Statement' && $file->Felieredata=='GPCA')
                                                        <div class="col-lg-4 col-md-6 col-sm-12 m-0 p-1">
                                                            <div class="card bgblack p-0 m-0">
                                                                <div class="card-block col-12  rounded p-0 m-0" >
                                                                    <div class="col-12 bggray rounded pb-0" >
                                                                        <div class="title  bgwhite radius-down- m-0" >
                                                                            <p class="px-1 m-0 pull-right">{{$users->FirstName.' '.$users->LastName}}.</p>
                                                                            <p class="px-1 text-right m-0 pull-left"><mark>{{$file->Title}}.</mark></p>
                                                                            <p class="px-1 m-0 row col-12">{{$file->Statement}}.</p>
                                                                            <div class="pl-1 row m-0 col-12 h6"><mark>{{$file->Subject.' '.$file->Felieredata .' '.$file->Semester_data}}.</mark></div>
                                                                        </div>
                                                                        <hr class="p-0 m-0">
                                                                        {{-- Comments --}}
                                                                        <div class="card-body p-0" >
                                                                            @php
                                                                                $m++;    
                                                                            @endphp
                                                                            {{-- collapse comments --}}
                                                                            <a href="#comments{{$m.'S'}}" class=" btn btn-success radius-collapse col-12 p-0" data-toggle="collapse" >
                                                                                Comments
                                                                                <span class="caret"></span>
                                                                            </a>
                                                                            <div id="comments{{$m.'S'}}" class="collapse in p-0">
                                                                                @foreach ($oldComment as $com)
                                                                                    @if ($com->NumberFile==$file->NumberFile && $com->TypeData==$file->Typedata)
                                                                                        <div class="p-0" style="margin:1px 0px 1px 0px;">
                                                                                            <div class="card p-0 m-0">
                                                                                                <div class="card-block  m-0 p-0 pt-1 bgblack position-relative">
                                                                                                    {{-- delete comment --}}
                                                                                                    <form action="/Delete-Comment-Admin/{{$com->user_id}}" method="POST" class="">
                                                                                                        {{ csrf_field() }}
                                                                                                        {{ method_field('DELETE')}}
                                                                                                        <div class="" hidden>
                                                                                                            <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                                                                                            <input type="text" name="NumberComment" value="{{$com->NumberComment}}">
                                                                                                            <input type="text" name="usersid" value="{{$users->id}}">
                                                                                                        </div>
                                                                                                        <button type="submit" class="position-absolute bgmaroon m-0 p-0 rounded radius-down-" title="delete" style="right:0px; top:4px;">
                                                                                                            <span class="now-ui-icons ui-1_simple-remove color-white m-0 p-0" style=""></span>
                                                                                                        </button>
                                                                                                    </form>
                                                                                                    <div class="bgwhite px-1 p-0 m-0 radius-top-">
                                                                                                        <p class="p-0 m-0" style="font-weight: bold;">{{$com->user->FirstName.' '.$com->user->LastName}}</p>
                                                                                                        {{$com->Comment}}
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
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                    {{-- Videos --}}
                                    <div class=" tabs_radius pb-3" id="" >
                                        <div class="row m-0 p-0">
                                            <p class="p-0 m-0 h5 col-12 color-white-shadow bgblack">Videos</p>
                                            @foreach ($userss as $users)
                                                @foreach ($users->files as $file)
                                                    @if ($file->Typedata=='Video' && $file->Felieredata=='GPCA')
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-2 p-1">
                                                            <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 p-1">
                                                                <div class="card-block">
                                                                    <h3 class="card-title m-0">{{$users->Title}}</h3>
                                                                    {{-- Download && read  icons --}}
                                                                    <div class="col-12 m-0 p-0">
                                                                        <h4 class="m-0 pl-0 pull-left">{{$file->Title}}.</h4>
                                                                        <h4 class="m-0 pull-right">{{$file->user->FirstName.' '.$file->user->LastName}}.</h4>
                                                                        {{-- download icons --}}
                                                                        <a href="##Download##" title="download" class="position-absolute bgdarkred text-center rounded" style="right:0px; top:22px; width:22px; height:22px;" >
                                                                            <img src="../assets/img/download-icon.jpeg" class="" style="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="description row col-12">
                                                                        {{$file->Description}}.
                                                                    </div>
                                                                    <div class="description ">
                                                                        {{$file->Subject}}
                                                                        {{$file->Felieredata}}
                                                                        {{$file->Semester_data}}.
                                                                    </div>
                                                                    <hr class="p-0 m-0">
                                                                    {{-- Comments --}}
                                                                    <div class="card-body p-0" >
                                                                        @php
                                                                            $m++;    
                                                                        @endphp
                                                                        {{-- collapse comments --}}
                                                                        <a href="#comments{{$m.'D'}}" class=" btn btn-success radius-collapse col-12 p-0" data-toggle="collapse" >
                                                                            Comments
                                                                            <span class="caret"></span>
                                                                        </a>
                                                                        <div id="comments{{$m.'D'}}" class="collapse in p-0">
                                                                            @foreach ($oldComment as $com)
                                                                                @if ($com->NumberFile==$file->NumberFile && $com->TypeData==$file->Typedata)
                                                                                    <div class="p-0" style="margin:1px 0px 1px 0px;">
                                                                                        <div class="card p-0 m-0">
                                                                                            <div class="card-block  m-0 p-0 pt-1 bgblack position-relative">
                                                                                                {{-- delete comment --}}
                                                                                                <form action="/Delete-Comment-Admin/{{$com->user_id}}" method="POST" class="">
                                                                                                    {{ csrf_field() }}
                                                                                                    {{ method_field('DELETE')}}
                                                                                                    <div class="" hidden>
                                                                                                        <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                                                                                        <input type="text" name="NumberComment" value="{{$com->NumberComment}}">
                                                                                                        <input type="text" name="usersid" value="{{$users->id}}">
                                                                                                    </div>
                                                                                                    <button type="submit" class="position-absolute bgmaroon m-0 p-0 rounded radius-down-" title="delete" style="right:0px; top:4px;">
                                                                                                        <span class="now-ui-icons ui-1_simple-remove color-white m-0 p-0" style=""></span>
                                                                                                    </button>
                                                                                                </form>
                                                                                                <div class="bgwhite px-1 p-0 m-0 radius-top-">
                                                                                                    <p class="p-0 m-0" style="font-weight: bold;">{{$com->user->FirstName.' '.$com->user->LastName}}</p>
                                                                                                    {{$com->Comment}}
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
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    
@endsection