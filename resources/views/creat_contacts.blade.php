@extends('master')

@section('title')
CONTACT APP|Creat Contacts
@endsection

<!--link rel="stylesheet" type="text/css" href="{{asset('jq/jquery-ui.min.css')}}"-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>

@section('creat_contacts')

<div class="container-fluid">
	<br>
	<h6 align="center" class="alert alert-success" style="border-radius: 0px; font-family: 'Sanchez', serif; color:black; font-size: 14px;">Contact Management: Add a new contact to the list</h6>
</div>
@if (Auth::Check())

<div class="container">

	@if (Session::has('message'))
		   <div id="session_message" class="alert alert-warning" style="border-radius:0px; width:70%; margin-left: 15%;  text-align: center; font-size: 12px;">{{ Session::get('message') }}
		   </div>
		   
	@endif

	<div id="cardbody" class="container-fluid" style="font-size: 12px;">

					@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
		<form method="POST" action="{{route('store')}}" enctype="multipart/form-data">
			@csrf

			<div id="full_form_section" class="container-fluid">
				
				<div id="right" class="card" style="width: 24rem; float:left;">
						<div class="card-header " style=" background-color:#1F618D; color: white; font-family: 'Kanit', sans-serif;">
							<span>Contact Info</span>
						</div>
					<ul class="list-group">
						<li class="list-group-item py-1">
							<div class="form-group">
						    	<label for="exampleInputEmail1">First Name:</label>
						    	<input type="text" class="form-control form-control-sm" name="f_name">
						  	</div>

						  	<div class="form-group">
						    	<label for="exampleInputEmail1">Last Name:</label>
						    	<input type="text" class="form-control form-control-sm" name="l_name">
						  	</div>
						<!-- image-----------------------image-----------------------image----------->

						  	<div class="form-group">
						    	<label for="exampleInputEmail1">Display Photo:</label>
						    	<input class="form-control form-control-sm" type="file" name="dp" id="formFile">
						    </div>
						<!-- image-----------------------image-----------------------image--------------->
							<div class="form-group">
					    		<label for="exampleInputEmail1">Phone:</label>
					    		<input type="text" class="form-control form-control-sm" name="phone">
					  		</div>

						    <div class="form-group ">
						    	<label for="exampleInputEmail1">Email address:</label>
						    	<input type="email" class="form-control form-control-sm" name="email">
						  	</div>

						  	<div class="form-group ">
							    <label for="exampleInputEmail1">Address</label>
							    <input type="text" class="form-control form-control-sm" name="address">
							</div>
						</li>
							
					</ul>
				</div>

				<div class="col-md-1" style="float:left;">
					<br>
				</div>

				<div id="right" class="card" style="width: 32rem; float:left;">

						<div class="card-header " style=" background-color:#1F618D; color: white; font-family: 'Kanit', sans-serif;">
							<span>Description</span><span style="float:right;"><a href="/contact_list" style="color:yellow;">Conatct List</a></span>
						</div>
					<ul class="list-group">
						<li class="list-group-item py-1">	

							<div class="form-group ">
							    <label for="exampleInputEmail1">Skills</label>
							    <input type="text" class="form-control form-control-sm" name="skill">
							</div>

							<div class="form-group ">
							    <label for="exampleInputEmail1">Designation</label>
							    <input type="text" class="form-control form-control-sm" name="designation">
							</div>

							<div  class="form-group">
							    <label for="exampleInputEmail1">Blood Group</label>
							    <select class="form-control form-control-sm" name="bg">
							    	<option>A+</option>
							    	<option>A-</option>
							    	<option>B+</option>
							    	<option>B-</option>
							    	<option>O+</option>
							    	<option>O-</option>
							    	<option>AB+</option>
							    	<option>AB-</option>
							    </select>
							</div>

							<div  class="form-group">
							    <label for="exampleInputEmail1">Date</label>
							    <input type="text" class="form-control form-control-sm" id="datepicker" name="date">
							</div>

						  	<div class="form-group ">
							    <label for="exampleFormControlSelect1">Company</label>
							    <select class="form-control form-control-sm" name="company">

							      @foreach ($list_company as $list_company)

							      <option>{{$list_company->name}}</option>
							      
							      @endforeach
							      
							    </select>
						  	</div>

						  	<div class="form-group ">
							    <label for="exampleInputEmail1">Previous History</label>
							    <input type="text" class="form-control form-control-sm" name="prehis">
							</div>
					 		
					 	</li> 
					</ul>
				</div>
				<div class="container-fluid" style="float:left; text-align: center;">
					<br>
					<br>
							<button type="submit" name="contact_submit" class="col-sm-4 btn btn-primary btn-sm">
					 			Submit
					 		</button>
					 		<p>&nbsp;</p>

				</div>
				<div class="col-md-1" style="float:left;">
					<br>
					<br>
					<br>
				</div>
			</div>
		</form>

		<br>
		
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

<script  src="{{asset('jq/jquery-3.6.1.min.js')}}"></script>
<script  src="{{asset('jq/jquery-ui.min.js')}}"></script>

<script>
	$(document).ready(function(){
		$('#datepicker').datepicker({
			dateFormat: "dd-mm-yy",
			changeMonth: true,
			changeYear: true,
			//numberofMonths:1,
			//minDate: new Date(1980,0,5),
			//maxDate: new Date(2050,0,5),
		});
			
	}
	)
</script>
@endsection