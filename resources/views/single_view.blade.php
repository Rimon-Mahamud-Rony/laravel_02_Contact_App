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
            <li class="list-group-item py-1" style="text-align:center; ">
              <img src="{{asset('img/'.$single_view_id->image_path) }}" height="250"  style="border-radius: 4%;">
            </li>
            <li class="f list-group-item py-1">
                <label style="color:green;">Mobile: </label>
                <p>{{$single_view_id->phone}}</p>
                <label style="color:green;">Email: </label>
                <p>{{$single_view_id->email}}</p>
                <label style="color:green;">Address: </label>
                <p>{{$single_view_id->address}}</p>
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
              <li class="f list-group-item py-1">
                  <label style="color:green;">Skills:</label>
                  <p>{{$single_view_id->skill}}</p>
              </li>
              <li class="f list-group-item py-1">
                  <label style="color:green;">Designation:</label>
                  <p>{{$single_view_id->designation}}</p>
              </li>
              <li class="f list-group-item py-1">
                  <label style="color:green;">Blood Group: </label>
                  <p>{{$single_view_id->bg}}</p>
              </li>
              <li class="f list-group-item py-1">
                  <label style="color:green;">Date of Birth: </label>

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
                  <p>{{$dob2}} {{$dob1}}, {{$dob3}}</p>
              </li>
              <li class="f list-group-item py-1">
                  <label style="color:green;">Compnay Name</label>
                  <p>{{$single_view_id->company}}</p>
              </li>
              <li class="f list-group-item py-1">
                  <label style="color:green;">Previous History</label>
                  <p>{{$single_view_id->prehis}}</p>
              </li>

          </ul>
          <br>
          <br>
        </div>
      </div>

       @if(Auth::check()) 
      <div class="col-sm-7" style="float:right;">
          <div class="card-header py-1" style=" font-family: 'Kanit', sans-serif; background-color:#1F618D; ">
            <a class="btn btn-link btn-sm" href="{{route('edit', $single_view_id->id)}}" style="color:white;">
              EDIT INFO
            </a>

          </div>
          <br>
          <br>
          <br>
          <br>
      </div>
      @endif
        
    </div>
</div>

@endsection