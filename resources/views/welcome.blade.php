@extends('master')

@section('welcome')

<div class="container-fluid">
    <br>
    <h6 align="center" class="alert alert-info" style="border-radius: 0px; font-family: 'Sanchez', serif; color:black; font-size: 15px;">
        Welcome to Contact Management App
    </h6>
    <br>

    <div id="full" class="container-fluid">
        <div id="left" class="container col-sm-4" style="float: left;">
            <table class="table table-borderless table-sm">
                    <tbody style="font-family: 'Kanit', sans-serif;">
                        
                         <p style="margin-left:10%;">   
                            <img src="{{asset('img/ppp.png') }}" height="200" width="180">
                            
                        </p>
                        <tr>
                            <td><h5 class="alert" style="color:red;">Conatct Management for <br>ABCD COMPANY LTD.</h5></td>
                        </tr>
                        <tr>
                            <td  class="alert">Dhaka, Bangladesh. Established: 1990.</td>
                        </tr>
                        <tr>
                            <td  class="alert">ISIN: 123456</td>
                        </tr>
                    </tbody>            
                </table>
        </div>

        <div id="right" class="container col-sm-8" style="float: right;">
            <div class="row justify-content-center">
            
            @if(Auth::check()) 


            <div class="card" style="width: 28rem;" style="font-family: 'Sanchez', serif;">
              
                  <img src="{{asset('img/add.png')}}" height="200" width="50" class="card-img-top" alt="..." style="border-radius:50%; ">
              
              <div class="card-body">
                <h5 class="card-title">Admin Name</h5>
                <p class="card-text"></p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Email</li>
                <li class="list-group-item">Phone</li>
                <li class="list-group-item">Admin's ID</li>
              </ul>
              <div class="card-body">
                    <div class="card-header alert-dark">
                        <a href="{{route('home')}}" class="divdec"> Go to Dashboard </a>
                    </div>
              </div>
            </div>
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