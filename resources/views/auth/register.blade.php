@extends('layouts.app')

@section('title')
    Register Student
@endsection

@section('content')
<div class='row  m-0 registerLabel' >
    <div class='card p-0 m-0'>
        <div class="card-body bgwhite m-0 p-1 justify-content-center row m-0" style="background: url('../assets/img/appointment.jpg') center center; background-size:100% 100%; min-height:356px;">
            <div class="card col-lg-6 col-md-8 col-sm-10 col-12 mt-4" style="background-color:black; color:white;">
                <div class="card-header row mx-0 p-4  justify-content-center">
                    <p class="m-0 p-0 h5" style="color: gray;"> Register Student </p>
                </div>
                <div class="card-body " style="">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        {{-- FirstName --}}
                        <div class="form-group row">
                            <label for="FirstName" class="col-md-4 col-form-label text-md-left">{{ __('First Name') }}</label>

                            <div class="col-md-6 input">
                                <input id="FirstName" type="text" class="form-control @error('FirstName') is-invalid @enderror" name="FirstName" value="{{ old('FirstName') }}" required autocomplete="FirstName" autofocus>

                                @error('FirstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- LastName --}}
                        <div class="form-group row">
                            <label for="LastName" class="col-md-4 col-form-label text-md-left">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="LastName" type="LastName" class="form-control @error('LastName') is-invalid @enderror" name="LastName" value="{{ old('LastName') }}" required autocomplete="LastName">

                                @error('LastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- E-Mail --}}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- Number --}}
                        <div class="form-group row">
                            <label for="Number" class="col-md-4 col-form-label text-md-left">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="Number" type="number" class="form-control @error('Number') is-invalid @enderror" name="Number" value="{{ old('Number') }}" required autocomplete="Number" autofocus>

                                @error('Number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- CNE --}}
                        <div class="form-group row">
                            <label for="CNE" class="col-md-4 col-form-label text-md-left">{{ __('CNE') }}</label>

                            <div class="col-md-6">
                                <input id="CNE" type="text" class="form-control @error('CNE') is-invalid @enderror" name="CNE" value="{{ old('CNE') }}" required autocomplete="CNE" autofocus>

                                @error('CNE')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- CNI --}}
                        <div class="form-group row">
                            <label for="CNI" class="col-md-4 col-form-label text-md-left">{{ __('CNI') }}</label>

                            <div class="col-md-6">
                                <input id="CNI" type="text" class="form-control @error('CNI') is-invalid @enderror" name="CNI" value="{{ old('CNI') }}" required autocomplete="CNI" autofocus>

                                @error('CNI')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- Feliere --}}
                        <div class="form-group row">
                            <label for="Feliere" class="col-md-4 col-form-label text-md-left">{{ __('Field') }}</label>
                            <div class="col-md-6">
                                <select name="Feliere" id="Feliere" class="col-md-12 form-control" required>
                                    <option value="">Please select a felier</option>
                                    <option value="SMI" required>SMI</option>
                                    <option value="SMP" required>SMP</option>
                                    <option value="TEER" required>TEER</option>
                                    <option value="IGE" required>IGE</option>
                                    <option value="LEA" required>LEA</option>
                                    <option value="GPCA" required>GPCA</option>
                                </select>
                                @error('Feliere')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- Gender --}}
                        <div class="form-group row">
                            <label for="Gender" class="col-md-4 col-form-label text-md-left">{{ __('Gender') }}</label>

                            <div class="col-md-6 ">
                                <div class="row m-0">
                                    <span class="col-lg-4 col-md-4 col-sm-4 col-4 m-0">
                                        <div class="row">
                                            <label for="men">Male&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</label>
                                            <input type="radio"  name="Gender" value="Male" id='men' required="">
                                        </div>
                                    </span>
                                    <span class="col-lg-4 col-md-4 col-sm-4 col-4 m-0">
                                        <div class="row">
                                            <label for="women">Female&nbsp;:&nbsp;&nbsp;</label>
                                            <input type="radio" name="Gender" value="Female" id='women' required="">
                                        </div>
                                    </span>
                                    <span class="col-lg-4 col-md-4 col-sm-4 col-4 m-0"> 
                                        <div class="row">
                                            <label for="other">Other&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</label>
                                            <input type="radio" name="Gender" value="Other" id='other' required="">
                                        </div>
                                    </span>
                                    @error('Gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                            </div>
                        </div>
                        {{-- password --}}
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-left">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- confirm password --}}
                        <div class="form-group row" >
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-left">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row mb-0 justify-content-center">
                            <div class="col-4 row ">
                                <button type="submit" class="btn btn-success rounded-pill col-12">
                                    {{ __('Register') }}
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
