@extends('master')

@section('title')
CONTACT APP | CONTACT LIST
@endsection

@section('contact_list')

<h1>Single view</h1>


<div id="cardbody" class=" card" style="width: 34rem; background-color:white;">
  <div class="card-header " style=" background-color:#1F618D; color: white; font-family: 'Kanit', sans-serif;">
    Details
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{$single_view_id->first_name}}{{" "}}{{$single_view_id->last_name}}</li>
    <li class="list-group-item">{{$single_view_id->email}}</li>
    <li class="list-group-item">{{$single_view_id->phone}}</li>
    <li class="list-group-item">{{$single_view_id->address}}</li>
    <li class="list-group-item">{{$single_view_id->company}}</li>
  </ul>
</div>

@endsection