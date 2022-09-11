@extends('master')

@section('title')
CONATCT APP | ALL INFORMATION
@endsection

@section('content')

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

<div id="list of all companies">
	
<div class="container col-md-8" style="float:right;">
    <div class="row">
    <div class="col-sm-2">
       <a href="{{URL::current()}}">All information List</a>
    </div>
    <div class="col-sm-2">
        <select class="form-control form-control-sm"  onchange="window.location.href=this.value;">
          <option>Sort By Name: </option>
          <option value="{{URL::current()."?sort=az"}}">Name: A->Z</option>
          <option value="{{URL::current()."?sort=za"}}">Name: Z->A</option>
        </select>
    </div>
    <div class="col-sm-3">
      <select class="form-control form-control-sm"  onchange="window.location.href=this.value;">
          <option>Sort By Company: </option>
        @foreach($company_name as $com)
          <option value="{{URL::current()."?sort=$com->id"}}">{{$com->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
      <form  class="form-inline my-2 my-lg-0" type="get" action="{{URL::current()}}">
        @csrf
        <input  class="form-control form-control-sm mr-sm-2" type="search" name="Search" placeholder="Search" aria-label="Search" required>
        <button class="btn btn-sm btn-outline-success my-3 my-sm-0" type="submit">Search</button>
      </form>
    </div>
    </div>
  </div>
</div>

<table class="table table-sm table-bordered table-hover" style="background-color:white;">
    @php $sn=0; @endphp
  <thead class="def">
    <thead class="def alert alert-success">
      <th scope="col" >S/N</th>
      <th scope="col">View Contact</th>
      <th scope="col">Contact Name</th>
      <th scope="col">Contact Address</th>
      <th scope="col">Contact Email</th>
      <th scope="col">Contact Phone</th>
      <th scope="col">Company Name</th>
      <th scope="col">Company website</th>
      <th scope="col">Company email</th>
      <th scope="col">Company Phone</th>
    </thead>
    @foreach($dbtest as $data)

    @php $sn=$sn+1; @endphp
    <tr class="def">
        <td>{{$sn}}</td>
        <td><a href="single_view/{{$data->contact_id}}">View</a></td>
        <td>{{$data->contact_name.' '.$data->contactlast_name}}</a></td>
        <td>{{$data->contact_adress}}</td>
        <td>{{$data->contact_email}}</td>
        <td>{{$data->contact_phone}}</td>
        <td>{{$data->company_name}}</td>
        <td>{{$data->website}}</td>
        <td>{{$data->company_email}}</td>
        <td>{{$data->company_phone}}</td>
    </tr>
    @endforeach
  </thead>

  
  <tbody>


      </td>
    </tr>
 
  </tbody>
</table>
</div>






@endsection