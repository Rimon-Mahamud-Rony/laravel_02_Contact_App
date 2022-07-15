@extends('master')

@section('welcome')

<div class="container-fluid">
    <br>
    <h6 align="center" class="alert alert-info" style="border-radius: 0px; font-family: 'Sanchez', serif; color:black; font-size: 15px;">
        Welcome to Contact Management App
    </h6>

    <div id="full" class="container-fluid">
        <div id="left" class="container col-sm-4" style="float: left;">
            <p>This is left section</p>
        </div>

        <div id="right" class="container col-sm-8" style="float: left;">
            
            @if(Auth::check()) 
                    <div class="card-header alert-dark">
                        <a href="{{route('home')}}" class="divdec"> Go to Dashboard </a>
                    </div>
            @else

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8" >
                    
                        <div class="card" style="border-radius: 0px;">
                            <div class="card-header alert" style=" border-radius: 0px;">
                            {{ __('Login to Proceed...') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="col-md-4 btn btn-primary btn-sm">
                                                {{ __('Login') }}
                                            </button>
                                            

                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br>

                        <div class="card-header alert-dark">
                        <a href="{{route('register')}}" class="divdec"> REGISTER AS A NEW USER </a>
                        </div>
                        <br>

                        <div class="card-header alert-info" >
                            <a href="/index" class="divdec"> USE APP AS A GUEST USER</a>
                        </div><br> 
                    </div>

                    
                </div>
            </div>
            @endif
        </div>
        
    </div>
</div>

<style type="text/css">
    .divdec{
        text-decoration:none;
        color: black;
    }
</style>

@endsection