@extends('master')

@section('title')
CONTACT APP|Creat Contacts
@endsection

@section('creat_contacts')

<div class="container-fluid">
	<br>
	<h6 align="center" class="alert alert-success" style="border-radius: 0px; font-family: 'Sanchez', serif; color:black; font-size: 14px;">Contact Management: Add a new contact to the list</h6>
</div>
@if (Auth::Check())

<div class="container col-md-6">

	<div id="cardbody" class=" card" style="width: 34rem; background-color:white;">

		<div class="card-header " style=" background-color:#1F618D; color: white; font-family: 'Kanit', sans-serif;">
			+ Add new contact
		</div>

		<div id="" class="container-fluid col-sm-10" style="font-size:13px;">
		<form>
		  <div class="form-group ">
		  	<p></p>
		    <label for="exampleInputEmail1">First Name:</label>
		    <input type="text" class="form-control form-control-sm" name="f_name">
		  </div>

		  <div class="form-group ">
		    <label for="exampleInputEmail1">Last Name:</label>
		    <input type="text" class="form-control form-control-sm" name="l_name">
		  </div>

		  <div class="form-group ">
		    <label for="exampleInputEmail1">Email address:</label>
		    <input type="email" class="form-control form-control-sm" name="email">
		  </div>

		  <div class="form-group ">
		    <label for="exampleInputEmail1">Phone:</label>
		    <input type="text" class="form-control form-control-sm" name="phone">
		  </div>

		  <div class="form-group ">
		    <label for="exampleInputEmail1">Address</label>
		    <input type="text" class="form-control form-control-sm" name="address">
		  </div>

		  <div class="form-group ">
		    <label for="exampleFormControlSelect1">Company</label>
		    <select class="form-control form-control-sm" name="company">

		      @foreach ($list_company as $list_company)

		      <option>{{$list_company->name}}</option>
		      
		      @endforeach
		      
		    </select>
		  </div>
		  <button type="submit" name="contact_submit" class="col-sm-4 btn btn-primary btn-sm">Submit</button>

		</form>
		<br>
		</div>
	</div>
</div>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>

@else

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	 {{ __('Please Log in First') }}
                </div>
                

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

                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                        	<br>
                            <div class="alert alert-warning">
				                Don’t have an account? <a href="{{ route('register') }}">{{ __('Complete your registration from here.') }}</a>
				            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@endsection