@extends('layouts.mainDoctor')
@php
    use App\Detail;
    use App\File;
    use App\Comment;
    $vid=0;
    $st=0;
    $fi=0;
@endphp

@section('title')
  Add data 
@endsection



@section('content')
  <div class="row m-0">
    <div class="content bg-dark container-fluid p-0" style="min-height:380px;">
      <div class="row m-1">
        {{-- Add NEW FILES|| statement --}}
        <div class="col-12 m-0 row">
          {{-- add statement--}}
          <div class="card-body  p-0 m-0" >
            
            <a href="#statement" class=" btn btn-success radius-collapse col-12 p-0" data-toggle="modal">
              ADD New statement
            </a>
            <div class="modal" id="statement">
              <div class="modal-dialog">
                <div class="modal-content bgblack color-white ">
                  <div class="modal-header p-0 ">
                    <p class="title position-relative" style="left:5px">statements</p>
                    <a type="button" class="close bg-danger p-0 position-relative" data-dismiss="modal" style="right:15px; top:16px;" aria-hidden="true">
                      <span class="now-ui-icons ui-1_simple-remove"></span>
                    </a>
                  </div>
                  @if (Detail::where('user_id','=',$doctorData->id)->exists())
                    <form action="/uploadData/{{$doctorData->id}}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      {{method_field('PUT')}}
                      <div class="" hidden>
                        <input type="text" name="typedata" value="1">
                      </div>
                      @if ($doctorData->details[0]->SubjectDoctor != NULL && $doctorData->Semester != NULL)
                        {{-- Subject and semester--}}
                        <div class="row px-2 py-0 m-0" >
                          <div  id="" class="col-12 p-0 my-1 bgdarkred color-white-shadow rounded" >
                            <p class="p-0 m-0">Field&nbsp;&nbsp;: {{$doctorData->Feliere }}</p>
                            <p class="p-0 m-0">Subject&nbsp;&nbsp;: {{$doctorData->details[0]->SubjectDoctor }}</p>
                            <p class="p-0 m-0">Semester&nbsp;&nbsp;: {{$doctorData->Semester }}</p>
                          </div>
                        </div>
                        {{-- Title --}}
                        <div class="form-group py-0 m-0">
                          <div class="row p-0 m-2">
                            <label for="title" class="title">title :</label>
                            <input type="text" name="TitleData" id="title" class="form-control p-1" placeholder="title" required/>
                          </div>
                        </div>
                        {{-- statement  --}}
                        <div class="modal-body  bgwhite p-1 m-2">
                          <textarea name="StatementData" class="bg-warning p-1 textarea" placeholder="enter the statement here" required></textarea>
                        </div>
                        <div class="modal-footer p-1 mt-2 ">
                          <div class="row p-0 col-12">
                            <button  class="btn btn-danger p-1 position-absolute" data-dismiss="modal" style="left:2px; top:50%; width:60px;">Cancel</button>
                            <button  class="btn btn-warning p-1 position-absolute" type="reset" style="right:64px; top:50%; width:60px;" >Clear</button>
                            <button type="submit" class="btn btn-success p-1 position-absolute" style="right:2px; top:50%; width:60px;">Post</button>
                          </div>
                        </div>
                      @else
                        <div class="row px-2 py-0 m-0" >
                          <div  id="" class="col-12 p-0 my-1 bgdarkred color-white-shadow rounded" >
                            <p class="p-0 m-0">click <a href="/doctor-data-edit/{{$doctorData->id}}">here</a> to update your data and be sure to choose your own Subject and the current Semester</p>
                          </div>
                        </div>
                      @endif
                    </form>
                  @else
                    <div class="row px-2 py-0 m-0" >
                      <div  id="" class="col-12 p-0 my-1 bgdarkred color-white-shadow rounded" >
                        <p class="p-0 m-0">click <a href="/doctor-data-edit/{{$doctorData->id}}">here</a> to update your data and be sure to choose your own Subject and the current Semester </p>
                      </div>
                    </div>
                  @endif
                  
                </div>
              </div>
            </div>
          </div>
          {{-- add document pdf --}}
          <div class="card-body  p-0 m-0" >

            <a href="#documents" class=" btn btn-success radius-collapse col-12 p-0"  data-toggle="modal">
              ADD New PDF
            </a>
            <div class="modal p-0 " id="documents">
              <div class="modal-dialog p-0 ">
                <div class="modal-content bgblue color-white-shadow p-0">
                  <div class="modal-header p-0 ">
                    <p class="title position-relative" style="left:5px">Upload Documents</p>
                    <a type="button" class="close bg-danger p-0 position-relative" data-dismiss="modal" style="right:15px; top:16px;" aria-hidden="true">
                      <span class="now-ui-icons ui-1_simple-remove"></span>
                    </a>
                  </div>
                  @if (Detail::where('user_id','=',$doctorData->id)->exists())
                    <form action="/uploadData/{{$doctorData->id}}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      {{method_field('PUT')}}
                      @if ($doctorData->details[0]->SubjectDoctor != NULL && $doctorData->Semester != NULL)
                        {{-- Subject and semester--}}
                        <div class="row px-2 py-0 m-0" >
                          <div  id="" class="col-12 p-0 my-1 bgdarkred color-white-shadow rounded" >
                            <p class="p-0 m-0">Field&nbsp;&nbsp;: {{$doctorData->Feliere }}</p>
                            <p class="p-0 m-0">Subject&nbsp;&nbsp;: {{$doctorData->details[0]->SubjectDoctor }}</p>
                            <p class="p-0 m-0">Semester&nbsp;&nbsp;: {{$doctorData->Semester }}</p>
                          </div>
                        </div>
                        <div class="modal-body">
                          <div class="">
                            <div class="row">
                              <label for="f" class="title">File :</label>
                              <input type="file" name="FileData" id="f" class="form-control p-1" required/>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <label for="title" class="title">title :</label>
                              <input type="text" name="TitleData" id="title" class="form-control p-1" placeholder="title" required/>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <label for="description" class="title">Description :</label>
                              <textarea name="DescriptionData" class="bg-warning p-1 textarea radius-down-" style="height:100px;" placeholder="Enter the Description here" required></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer p-1 mt-2 ">
                          <div class="row p-0 col-12">
                            <button  class="btn btn-danger p-1 position-absolute" data-dismiss="modal" style="left:2px; top:50%; width:60px;">Cancel</button>
                            <button  class="btn btn-warning p-1 position-absolute" type="reset" style="right:63px; top:50%; width:60px;" >Clear</button>
                            <button type="submit" class="btn btn-success p-1 position-absolute" style="right:1px; top:50%; width:60px;">Post</button>
                          </div>
                        </div>
                      @else
                        <div class="row px-2 py-0 m-0" >
                          <div  id="" class="col-12 p-0 my-1 bgdarkred color-white-shadow rounded" >
                            <p class="p-0 m-0">click <a href="/doctor-data-edit/{{$doctorData->id}}">here</a> to update your data and be sure to choose your own Subject and the current Semester</p>
                          </div>
                        </div>
                      @endif
                    </form>
                  @else
                    <div class="row px-2 py-0 m-0" >
                      <div  id="" class="col-12 p-0 my-1 bgdarkred color-white-shadow rounded" >
                        <p class="p-0 m-0">click <a href="/doctor-data-edit/{{$doctorData->id}}">here</a> to update your data and be sure to choose your own Subject and the current Semester </p>
                      </div>
                    </div>
                  @endif
                </div>
              </div>
            </div>
          </div>
          {{-- add video  --}}
          <div class="card-body  p-0 m-0" >
            <a href="#video" class=" btn btn-success radius-collapse col-12 p-0" data-toggle="modal" >
                ADD New Video
            </a>
            <div class="modal p-0 " id="video">
              <div class="modal-dialog p-0 ">
                <div class="modal-content bggray color-white-shadow p-0">
                  <div class="modal-header p-0 ">
                    <p class="title position-relative" style="left:5px">Upload Video</p>
                    <a type="button" class="close bg-danger p-0 position-relative" data-dismiss="modal" style="right:15px; top:16px;" aria-hidden="true">
                      <span class="now-ui-icons ui-1_simple-remove"></span>
                    </a>
                  </div>
                  @if (Detail::where('user_id','=',$doctorData->id)->exists())
                    <form action="/uploadData/{{$doctorData->id}}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      {{method_field('PUT')}}
                      @if ($doctorData->details[0]->SubjectDoctor != NULL && $doctorData->Semester != NULL)
                        {{-- Subject and semester--}}
                        <div class="row px-2 py-0 m-0" >
                          <div  id="" class="col-12 p-0 my-1 bgdarkred color-white-shadow rounded" >
                            <p class="p-0 m-0">Field&nbsp;&nbsp;: {{$doctorData->Feliere }}</p>
                            <p class="p-0 m-0">Subject&nbsp;&nbsp;: {{$doctorData->details[0]->SubjectDoctor }}</p>
                            <p class="p-0 m-0">Semester&nbsp;&nbsp;: {{$doctorData->Semester }}</p>
                          </div>
                        </div>
                        <div class="modal-body myinput">
                          <div class="">
                            <div class="row">
                              <label for="f" class="title">File :</label>
                              <input type="file" name="FileData" id="f" class="form-control p-1" required/>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <label for="title" class="title">title :</label>
                              <input type="text" name="TitleData" id="title" class="form-control p-1" placeholder="title" required/>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <label for="description" class="title">Description :</label>
                              <textarea name="DescriptionData" class="bg-warning p-1 textarea radius-down-" style="height:100px;" placeholder="Enter the Description here" required></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer p-1 mt-2 ">
                          <div class="row p-0 col-12">
                            <button  class="btn btn-danger p-1 position-absolute" data-dismiss="modal" style="left:2px; top:50%; width:60px;">Cancel</button>
                            <button  class="btn btn-warning p-1 position-absolute" type="reset" style="right:63px; top:50%; width:60px;" >Clear</button>
                            <button type="submit" class="btn btn-success p-1 position-absolute" style="right:1px; top:50%; width:60px;">Post</button>
                          </div>
                        </div>
                      @else
                        <div class="row px-2 py-0 m-0" >
                          <div  id="" class="col-12 p-0 my-1 bgdarkred color-white-shadow rounded" >
                            <p class="p-0 m-0">click <a href="/doctor-data-edit/{{$doctorData->id}}">here</a> to update your data and be sure to choose your own Subject and the current Semester</p>
                          </div>
                        </div>
                      @endif
                    </form>
                  @else
                    <div class="row px-2 py-0 m-0" >
                      <div  id="" class="col-12 p-0 my-1 bgdarkred color-white-shadow rounded" >
                        <p class="p-0 m-0">click <a href="/doctor-data-edit/{{$doctorData->id}}">here</a> to update your data and be sure to choose your own Subject and the current Semester </p>
                      </div>
                    </div>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- show my FILES|| statement --}}
        <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
          <div class=" tabs_radius" id="Documents" >
            <div class="row m-2 p-2">
              @foreach ($doctorData->files as $file)
                @if ($file->Typedata=='Document')
                  <div class="col-lg-2 col-md-4 col-sm-6 mt-2 p-1">
                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-1 " >
                      <img src="/assets/img/pdf_image.png" alt="pdf_picture" class="card-img-top img-fluid " style="height:60px; width:60px;">
                      <div class="card-block p-0" style="margin:-3px;">
                          {{-- Download && read  icons --}}
                          <div class="col-12  row">
                            <h6 class="mt-1 ">{{$file->Title}}.</h6>
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
                          <div class="card-body  p-0 " >
                              {{-- delete button --}}
                              <form action="/FileDelete/{{$file->user_id}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE')}}
                                <div class="" hidden>
                                  <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                  <input type="text" name="Typedata" value="{{$file->Typedata}}">
                                </div>
                                <a href="#Deletefile{{$fi}}" class="btn btn-danger radius-collapse col-12 p-0" data-toggle="modal">Delete</a>
                                <div id="Deletefile{{$fi}}" class="modal">
                                  @php $fi++; @endphp
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header p-0 m-0">
                                        Confirm delete file
                                      </div>
                                      <div class="modal-body p-0 m-0">
                                        <p class="h4 p-0 m-0" style="color: red;"> are you sure you want to delete this file !!!</p>
                                      </div>
                                      <div class="modal-footer p-1 mt-2 ">
                                        <div class="row p-0 col-12">
                                          <button  class="btn btn-success p-1 position-absolute" data-dismiss="modal" style="left:2px; top:50%; width:60px;">Cancel</button>
                                          <button type="submit" class="btn btn-danger p-1 position-absolute" style="right:1px; top:50%; width:60px;">Delete!!</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                          </div>
                      </div>
                    </div>
                  </div>
                @endif
              @endforeach
            </div>
          </div>
          <div class=" tabs_radius" id="statement" >
            <div class="row  bgdark m-0 p-1">
              @foreach ($doctorData->files as $file)
                @if ($file->Typedata=='Statement')
                  <div class="col-lg-4 col-md-6 col-sm-12 mt-2 p-1">
                    <div class="card bgblack">
                      <div class="card-block col-12  rounded p-1" >
                        <div class="col-12 bggray rounded pb-1" >
                          <div class="title  bgwhite radius-down- " >
                            <p class="text-center p-0 m-0">{{$doctorData->FirstName.' '.$doctorData->LastName}}</p>
                          </div>
                          <div class="jumbotron p-1 m-1">
                            <p class="p-0 m-0 bgblack color-white-shadow">{{$file->Title}}.</p>
                            <p class="p-0">
                              {{$file->Statement}}.
                            </p> 
                          </div>
                          <hr class="p-0 m-0">
                          <div class="card-body  p-0 m-0" >
                            {{-- delete button --}}
                            <form action="/FileDelete/{{$file->user_id}}" method="POST">
                              {{ csrf_field() }}
                              {{ method_field('DELETE')}}
                              <div class="" hidden>
                                <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                                <input type="text" name="Typedata" value="{{$file->Typedata}}">
                              </div>
                              <a href="#Deletest{{$st}}" class="btn btn-danger radius-collapse col-12 m-0 p-0" data-toggle="modal">Delete</a>
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
                                        <button type="submit" class="btn btn-danger p-1 position-absolute" style="right:1px; top:50%; width:60px;">Delete!!</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endif
              @endforeach
            </div>
          </div>
          <div class=" tabs_radius" id="Videos" >
            <div class="row m-2 p-2">
              @foreach ($doctorData->files as $file)
                @if ($file->Typedata=='Video')
                  <div class="col-lg-2 col-md-4 col-sm-6 mt-2 p-1">
                    <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12 m-1 p-1">
                      <video class="card-img-top img-fluid" controls=controls preload=auto loop=0 poster="/assets/img/fpo_logo.jpeg">
                        <source src="{{asset('./assets/Data/Videos/'.$file->File)}}" type="video/mp4">
                      </video>
                      <div class="card-block p-1">
                        <h3 class="card-title m-0">{{$file->Title}}.</h3>
                        <div class="description ">
                          {{$file->Description}}.
                        </div>
                        <hr class="p-0 m-0">
                        <div class="card-body  p-0 m-0" >
                          {{-- delete button --}}
                          <form action="/FileDelete/{{$file->user_id}}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE')}}
                            <div class="" hidden>
                              <input type="text" name="NumberFile" value="{{$file->NumberFile}}">
                              <input type="text" name="Typedata" value="{{$file->Typedata}}">
                            </div>
                            <a href="#Deletevid{{$vid}}" class="btn btn-danger radius-collapse col-12 p-0" data-toggle="modal">Delete</a>
                            <div id="Deletevid{{$vid}}" class="modal">
                              @php $vid++; @endphp
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header p-0 m-0">
                                    Confirm delete video
                                  </div>
                                  <div class="modal-body p-0 m-0">
                                    <p class="h4 p-0 m-0" style="color: red;"> are you sure you want to delete this video !!!</p>
                                  </div>
                                  <div class="modal-footer p-1 mt-2 ">
                                    <div class="row p-0 col-12">
                                      <button  class="btn btn-success p-1 position-absolute" data-dismiss="modal" style="left:2px; top:50%; width:60px;">Cancel</button>
                                      <button type="submit" class="btn btn-danger p-1 position-absolute" style="right:1px; top:50%; width:60px;">Delete!!</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>
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
@endsection