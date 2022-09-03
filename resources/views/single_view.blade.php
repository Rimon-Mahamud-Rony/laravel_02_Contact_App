@extends('master')

@section('title')
CONTACT APP | CONTACT LIST
@endsection

@section('contact_list')

<style type="text/css">
  .f{
        font-size: 12px;
        font-family: 'Kanit', sans-serif;
    }
</style>

  <div class="container-fluid">
    <br>
    <h6 align="center" class="alert alert-success" style="border-radius: 0px; font-family: 'Sanchez', serif; color:black; font-size: 14px;">Contact Management: Details of <span style="color:red;">{{$single_view_id->first_name}}{{" "}}{{$single_view_id->last_name}}</span></h6>
  </div>

<div class="container-fluid col-sm-10" style="font-size:13px;">

    <div id="inof" style="margin-left: 3%; background-color:white;">
      
      <div id="basic_info" class="col-sm-4" style="float:left;">
        <div>
          <div class="card-header py-1" style=" font-family: 'Kanit', sans-serif; background-color:#1F618D; ">
            <a class="btn btn-link btn-sm"  style="color:white;">
              Contact Info
            </a>
          </div>
          <ul class="list-group">
            <li class="f list-group-item py-1">
              <label style="color:green;">Name: </label>
              <h6 style="color:#1F618D;">{{$single_view_id->first_name}}{{" "}}{{$single_view_id->last_name}}</h6>
            </li>
            <li class="list-group-item py-1" style="text-align:center;">
              <img src="{{asset('img/'.$single_view_id->image_path) }}" height="180"  style="border-radius: 5%;">
            </li>
            <li class="f list-group-item py-1">
                <label style="color:green;">Mobile: </label>
                <h6>{{$single_view_id->phone}}</h6>
            </li>
            <li class="f list-group-item py-1">
                <label style="color:green;">Email: </label>
                <h6>{{$single_view_id->email}}</h6>
            </li>
            <li class="f list-group-item py-1">
                <label style="color:green;">Address: </label>
                <h6>{{$single_view_id->address}}</h6>
            </li>
            <br>
          <br>
          <br>
          </ul>
        </div>
      </div>

      <div id="described_info" class="col-sm-7" style="float:right;">
        <div>
          <div class="card-header py-1" style=" font-family: 'Kanit', sans-serif; background-color:#1F618D; ">
            <a class="btn btn-link btn-sm"  style="color:white;">
              Described Info
            </a>
            <a class="btn btn-link btn-sm" href="/contact_list" style="color:yellow; float:right;">
              List of Contacts
            </a>
          </div>
          
          <ul class="list-group">
              <li class="list-group-item py-1">
                  <label>Skills:</label>
                  <h6>{{$single_view_id->skill}}</h6>
              </li>
              <li class="list-group-item py-1">
                  <label>Designation:</label>
                  <h6>{{$single_view_id->designation}}</h6>
              </li>
              <li class="list-group-item py-1">
                  <label>Blood Group: </label>
                  <h6>{{$single_view_id->bg}}</h6>
              </li>
              <li class="list-group-item py-1">
                  <label>Date of Birth: </label>

                  <?php  
                    $dob = explode('-',$single_view_id->dob);
                    $dob1=$dob[0] ;

                    $dob2=$dob[1] ;
                    if ($dob2==01) {
                      $dob2="January";
                    }
                    elseif ($dob2==2) {
                      $dob2="February";
                    }
                    elseif ($dob2==03) {
                      $dob2="March";
                    }
                    elseif ($dob2==04) {
                      $dob2="April";
                    }
                    elseif ($dob2==05) {
                      $dob2="May";
                    }
                    elseif ($dob2==06) {
                      $dob2="June";
                    }
                    elseif ($dob2==07) {
                      $dob2="July";
                    }
                    elseif ($dob2==8) {
                      $dob2="August";
                    }
                    elseif ($dob2==9) {
                      $dob2="September";
                    }
                    elseif ($dob2==10) {
                      $dob2="October";
                    }
                    elseif ($dob2==11) {
                      $dob2="November";
                    }
                    else
                      $dob2="December";

                    $dob3=$dob[2] ;
                  ?> 
                  <h6>{{$dob2}} {{$dob1}}, {{$dob3}}</h6>
              </li>
              <li class="list-group-item py-1">
                  <label>Compnay Name</label>
                  <h6>{{$single_view_id->company}}</h6>
              </li>
              <li class="list-group-item py-1">
                  <label>Previous History</label>
                  <h6>{{$single_view_id->prehis}}</h6>
              </li>

          </ul>
          <br>
          <br>
          <br>
        </div>
      </div>

    </div>
</div>

@endsection