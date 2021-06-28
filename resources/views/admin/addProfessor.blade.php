@extends('layouts.master')
@php
    // use App\Detail;
    $k=0;
@endphp
@section('title')

    Dashboard Invete Professors

@endsection



@section('content')
    <div class='row  m-0' >
        <div class='card p-0 m-0 '>
            <div class="card-body bgwhite m-0 p-1 justify-content-center row m-0" style="background: url('../assets/img/appointment.jpg') center center; background-size:100% 100%; min-height:356px;">
                <div class="card bgblack col-5">
                    <div class="card-header justify-content-center row m-0">
                        <div class="h3 ptxt" style="color:whitesmook;">
                            Invete Professor
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/send-mail/{{$addProfessor->id}}" method="POST" class="">
                                {{ csrf_field() }}
                                {{-- {{method_field('PUT')}} --}}
                            {{-- E-Mail --}}
                            <div class="form-group">
                                <label for="emai" class="ptxt col-12 col-form-label text-md-center p-0 m-0">
                                    <h4>{{ __('E-Mail Address') }}</h4>
                                </label>

                                <div class="col-12">
                                    <input id="emai" type="email" class=" bggray color-white text-center pt-1 h5 form-control @error('email') is-invalid @enderror p-0 m-0" name="emailInvite" placeholder="Exemple:prof@gmail.com"  value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Send invitation btn --}}
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="p-3 btn btn-success">
                                        {{ __('Send invitation') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    
@endsection