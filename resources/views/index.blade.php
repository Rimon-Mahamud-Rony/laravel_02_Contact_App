@extends('master')

@section('index')
<div class="container-fluid">
	<br>
	<h6 align="center" class="alert alert-success" style="border-radius: 0px; font-family: 'Sanchez', serif; color:black; font-size: 14px;">Contact Management: List of all the companies</h6>
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

<div id="list of all companies">
	
  
<div id="sort" align="right">
  
  <form  class="form-inline my-2 my-lg-0" type="get" action="{{URL::current()}}">
    @csrf
    <input  class="form-control mr-sm-2" type="search" name="Search" placeholder="Search" aria-label="Search" required>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  <a href="{{URL::current()}}">Default</a>
      <a href="{{URL::current()."?sort=az"}}"></a>
    <label>Sort By Name: </label>
    <select class=" form-select form-select-sm" onchange="window.location.href=this.value;">
      <option>Default</option>
      <option value="{{URL::current()."?sort=az"}}">Name: A->Z</option>
      <option value="{{URL::current()."?sort=za"}}">Name: Z->A</option>
    </select>

    <label>Sort By Company: </label>
    
    <select class=" form-select form-select-sm"  onchange="window.location.href=this.value;">
        <option>Default</option>
      @foreach($company_name as $com)
        <option value="{{URL::current()."?sort=$com->id"}}">{{$com->name}}</option>
      @endforeach
    </select>
  </div>

<table class="table table-sm table-bordered table-hover">
    
  
  <thead class="def">
    <thead class="def">
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
    <tr class="def">
        <td>#</td>
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