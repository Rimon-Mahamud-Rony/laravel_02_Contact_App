<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
    
  </title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&family=Sanchez&display=swap" rel="stylesheet">

  <!--font-family: 'Kanit', sans-serif;
  font-family: 'Sanchez', serif; -->


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>

  <style type="text/css">
    .kan{
      font-family: 'Kanit', sans-serif;
    }
  </style>

<nav class="navbar navbar-expand-sm navbar-light bg-light">
  <a class="kan navbar-brand" href="{{url('/')}}" style="color: red;">Contact Management App</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
       
        <a class="kan nav-link" href="{{route('home')}}">Home </a>
      </li>
      <li class="nav-item">
        <a class="kan nav-link" href="#">Link</a>
      </li>
      </ul>

      @if(Auth::Check())
      <ul class="navbar-nav mr-right" >
      <li class="nav-item ">
       <a class=" kan nav-link " href="#" ><span class="fa fa-user"> {{"  ".Auth::user()->name }}</span></a>
      </li>
      <li class="nav-item">
         <a class="form-control mr-sm-3" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" style="color: red; border-radius: 0px; font-size: 15px;"><span class="fa fa-sign-out">{{ __('Logout') }}</span>
         </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
      </li>
      @endif
    </ul>
    
  </div>
</nav>

<div id="content" class="container-fluid">

	@yield('index')

  @yield('welcome')

  @yield('content')



</div>


<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  border-radius: 0px;
  background-color: #1F618D;
  font-size: 12px;
  color: white;
  font-family: 'Kanit', sans-serif;
}
</style>

<div class="footer">
   
  <div class=" footer-copyright text-center py-2">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">&copy; Copyright: 2022 | Rimon Mahamud Rony | Contact Management App | <span class="fa fa-phone">&nbsp;&nbsp;: 
       01862117112</span> | &#9993; : rimonronyinfo@gmail.com</li>
    </ul>
  </div>

</div>

</body>
</html>