@extends('master')

@section('title')
CONTACT APP | CONTACT LIST
@endsection

@section('contact_list')

  <div class="container-fluid">
    <br>
    <h6 align="center" class="alert alert-success" style="border-radius: 0px; font-family: 'Sanchez', serif; color:black; font-size: 14px;">Contact Management: Details of <span style="color:red;">{{$single_view_id->first_name}}{{" "}}{{$single_view_id->last_name}}</span></h6>
  </div>

<div class="container-fluid col-sm-10">

    <div id="inof" style="margin-left: 3%; background-color:white;">
      
      <div id="basic_info" class="col-sm-3" style="float:left;">
        <div>
          <div class="card-header py-1" style=" font-family: 'Kanit', sans-serif; background-color:#1F618D; ">
            <a class="btn btn-link btn-sm"  style="color:white;">
              Basic Info
            </a>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span style="color:#1F618D;"><b>{{$single_view_id->first_name}}{{" "}}{{$single_view_id->last_name}}</b>
            </li>
            <li class="list-group-item" style="text-align:center;">
              <img src="{{asset('img/'.$single_view_id->image_path) }}" height="150" width="150">
            </li>
            <li class="list-group-item">Mobile: +880{{$single_view_id->phone}}</li>
          </ul>
        </div>
      </div>

      <div id="described_info" class="col-sm-8" style="float:right;">
        <div>
          <div class="card-header py-1" style=" font-family: 'Kanit', sans-serif; background-color:#1F618D; ">
            <a class="btn btn-link btn-sm"  style="color:white;">
              Described Info
            </a>
            <a class="btn btn-link btn-sm" href="/contact_list" style="color:yellow; float:right;">
              List of Contacts
            </a>
          </div>
          
          <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$single_view_id->email}}</li>
            <li class="list-group-item">{{$single_view_id->address}}</li>
            <li class="list-group-item">{{$single_view_id->company}}</li>
            <li class="list-group-item">Previous History</li>
            <li class="list-group-item">Skills</li>
            <li class="list-group-item">Designation</li>
            <li class="list-group-item">Blood Group: A+</li>
            <li class="list-group-item">Date of Birth: 22-06-1994</li>
          </ul>
          <br>
          <br>
        </div>
      </div>

    </div>
</div>

@endsection