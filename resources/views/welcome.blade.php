@extends('master')

@section('title')
ABC COMPANY | CONTACT APP
@endsection

@section('welcome')

<div class="container-fluid">
    <br>
    <h6 align="center" class="alert alert-success" style="border-radius: 0px; font-family: 'Sanchez', serif; color:black; font-size: 14px;">
        Welcome to Contact Management App
    </h6>
    <br>

    <div id="full" class="container-fluid">
        <div id="left" class="container col-sm-5" style="float: left;">
            <table class="table table-borderless table-sm">
                    <tbody style="font-family: 'Kanit', sans-serif;">
                        
                         <p style="margin-left:10%;">   
                            <img src="{{asset('img/ppp.png') }}" height="200" width="180">
                            
                        </p>
                        <tr>
                            <td><h5 style="color:red;">Conatct Management for ABCD COMPANY LTD.</h5></td>
                        </tr>
                        <tr>
                            <td  class="alert">Dhaka, Bangladesh. Established: 1990.</td>
                        </tr>
                        <tr>
                            <td  class="alert">ISIN: 123456</td>
                        </tr>
                    </tbody>            
                </table>

                <div class="">
                    <div class="f card alert alert-success divdec" style="background-color:#1F618D;  width: 18rem; ">
                        <a href="{{route('home')}}" style="color: white;"> Go to your dashboard </a>
                    </div>
                </div>

        </div>

        <style type="text/css">
            .f{
                font-size: 13px;
                font-family: 'Kanit', sans-serif;
            }
        </style>

        <div id="right" class="container-fluid col-sm-7" style="float: right;">
            
            @if(Auth::check()) 
                
            <div class="row justify-content-center">
                <div class="f card" style=" width: 18rem;">
                    
                        <a class="f card-header"  style="background-color:#1F618D; color:white;">
                          Admin Profile
                        </a>
                   
                  <ul class="f list-group list-group-flush">
                    <li class="f list-group-item alert py-1" style="text-align: center;">
                          <img src="{{asset('img/rimon.jpg')}}" height="220"  style="border-radius: 0%;">
                    </li>
                    <li class="f list-group-item alert" style="font-size:12px;">
                        <p><span style="color:green;">&#9863;</span>{{"  ".Auth::user()->name }}</p>
                    
                    
                        <p><span style="color:green;">&#9993;</span> {{"  ".Auth::user()->email }}</p>
                   
                        <p><span style="color:green;">&phone;</span>+8801862117118</p>
                    
                        <p><span style="color:green;">&#9873;</span>ASH16010{{Auth::user()->id }}</p>
                    </li>
                   
                  </ul>
                </div>
            <br>
            </div>
            <br>
            
                    
            @else

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8" >
                    
                        <div class="card" style="border-radius: 0px; font-size:13px;">
                            <div class="card-header alert" style=" border-radius: 0px; background-color:#1F618D; color: white;">
                            {{ __('Login to Proceed...') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address :') }}</label>

                                        <div class="col-md-7">
                                            <input id="email" type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password :') }}</label>

                                        <div class="col-md-7">
                                            <input id="password" type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="col-md-6 btn btn-primary btn-sm">
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

                        <div class="card-header alert alert-info" style="font-size: 12px;">
                        <a href="{{route('register')}}" class="divdec"> REGISTER AS A NEW USER </a>
                        </div>

                        <div class="card-header alert alert-info" style="font-size: 12px;" >
                            <a href="/index" class="divdec"> USE APP AS A <span style="color:red;"><b>GUEST</b></span> USER</a>
                        </div><br> 
                    </div>

                    
                </div>
            </div>
            @endif
            <p>&nbsp;</p>
            
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