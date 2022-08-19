@extends('master')

@section('index')
<div class="container-fluid">
	<br>
	<h6 align="center" class="alert alert-success" style="border-radius: 0px; font-family: 'Sanchez', serif; color:black; font-size: 14px;">Contact Management: List of all the companies</h6>
</div>

<style type="text/css">
	.def{
		font-size: 13px;
	}
	.btcls
	{
		font-size: 10px;
		border-radius: 0px;
	}
</style>

@if (Session::has('message'))
   <div class="alert alert-warning" style="border-radius:0px; width:70%; margin-left: 15%;  text-align: center; font-size: 12px;">{{ Session::get('message') }}</div>
@endif

<div id="list of all companies" style="margin-left: 10%; margin-right: 10%;">
	<div class="container" align="left">
		<a href="" class="def btn btn-sm btn-success fa fa-plus-circle" > ADD A NEW COMPANY</a>
	</div>
	<br>
<table class="table table-sm table-striped table-bordered table-hover">
  <thead class="def alert alert-success">
    <tr>
      <th scope="col" >S/N</th>
      <th scope="col">Company Name</th>
      <th scope="col">Company Address</th>
      <th scope="col">Company Website</th>
      <th scope="col">Company Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

@php $i=0; @endphp

@foreach ($all_company as $list_company) 

	@php $i=$i+1; @endphp
    <tr class="def">
      <th scope="row" >{{$i}}</th>
      <td>{{$list_company->name}}</td>
      <td>{{$list_company->address}}</td>
      <td>{{$list_company->website}}</td>
      <td>{{$list_company->email}}</td>
      <td>
      	<a href="" class="btcls btn btn-sm btn-info" >VIEW</a>
        @if (Auth::Check())

      	<a href="" class="btcls btn btn-sm btn-success">EDIT</a>
      	<a href="" class="btcls btn btn-sm btn-danger">DELETE</a>
        
        @endif
      </td>
    </tr>
 @endforeach
  </tbody>
</table>
</div>



@endsection