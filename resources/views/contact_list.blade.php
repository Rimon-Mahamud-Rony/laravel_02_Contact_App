@extends('master')

@section('title')
CONTACT APP | CONTACT LIST
@endsection

@section('contact_list')

	<div class="container-fluid">
		<br>
		<h6 align="center" class="alert alert-success" style="border-radius: 0px; font-family: 'Sanchez', serif; color:black; font-size: 14px;">Contact Management: List of all the contacts</h6>
	</div>

	<style type="text/css">
		.def{
			font-size: 12px;

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

	<div  id="contact_list" style="margin-left: 3%; margin-right: 3%; background-color:white;">
		<div class="card-header py-1" style=" font-family: 'Kanit', sans-serif; background-color:#1F618D; ">

			<a class="btn btn-link btn-sm fa fa-plus-circle" href="/creat_contacts" style="color:white;">&nbsp;Add new Contacts</a>
		</div>

		<table class=" table table-sm  table-bordered table-hover">
		  <thead class="def alert alert-dark">
		    <tr>
		      <th scope="col" >S/N</th>
		      <th scope="col"> Name</th>
		      <th scope="col"> Email</th>
		      <th scope="col"> Phone</th>
		      <th scope="col"> Address</th>
		      <th scope="col"> Company</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  	<tbody>

				@php $i=0; @endphp

				@foreach ($contact_list as $contact_list_showed) 

				  @php $i=$i+1; @endphp
				    <tr class="def">
				      <th scope="row" >{{$i}}</th>
				      <td>{{$contact_list_showed->first_name}}{{" "}}{{$contact_list_showed->last_name}}</td>
				      <td>{{$contact_list_showed->email}}</td>
				      <td>{{$contact_list_showed->phone}}</td>
				      <td>{{$contact_list_showed->address}}</td>
				      <td>{{$contact_list_showed->company}}</td>
				      
				      <td>
				        <a href="{{route('single_view', $contact_list_showed->id)}}" class="btcls btn btn-sm btn-info" >VIEW</a>
				        @if (Auth::Check())

				        <a href="{{route('edit', $contact_list_showed->id)}}" class="btcls btn btn-sm btn-success">EDIT</a>
				        <a href="{{route('delete', $contact_list_showed->id)}}" class="btcls btn btn-sm btn-danger">DELETE</a>
				        
				        @endif
				      </td>
				    </tr>
				@endforeach
		</table>
	</div>
</tbody>

<div class="container">
	{{ $contact_list->links() }}
	<br>
</div> 
<div>
	<br>
</div>
	

@endsection