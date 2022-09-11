@extends('master')

@section('title')
CONATCT APP | DASHBOARD
@endsection

@section('content')


<style type="text/css">
    .btbg
    {
        background-color: #1F618D;
        border-radius: 0px;
        font-size: 13px;
    }
    .tf{
        font-size: 12px;
    }
</style>

<br>

<div class="container-fluid">

    <div id="dashboard-auth" class="container-fluid">
        <div class="card text-center">
          <div align="center" class="alert alert-success" style="border-radius: 0px; font-family: 'Sanchez', serif; color:black; font-size: 14px;">
            Dashboard of Contact management App
          </div>

          <div class="container-fluid">

            <div class="card col-sm-2" style="float:left; margin-left: 3%;">
              <ul class="list-group list-group-flush">      
                <li class="list-group-item alert" style="font-size:12px; text-align:left;">
                    <label style="color:green;">Last Action: </label>  <p>{{$last_employee->created_at}}</p>
                    <label style="color:green;">Last employee Name: </label><p>{{$last_employee->first_name.' '.$last_employee->last_name}}</p>
                    <label style="color:green;">Last employee ID:</label>  <p>10121{{$last_employee->id}}</p>
                </li>             
              </ul>
            </div>

            <div class="col-sm-9" style="float:right;">

              <div class="row">

                <div class="col">
                  <div class="card" style="width: 12rem;">
                    <img src="{{asset('img/list.png') }}" height="180" width="180" class="card-img-top" alt="List of Employee">
                      <div class="card-body">
                        <h6>List of Employee</h6>
                                <a href="/contact_list" class="btbg btn btn-primary btn-sm">All employee contacts</a>
                       </div>
                    </div>
                </div>

                <div class="col">
                  <div class="card" style="width: 12rem;">
                    <img src="{{asset('img/add.png') }}" height="180" width="180" class="card-img-top" alt="List of Employee">
                      <div class="card-body">
                        <h6>Add a new Contacts</h6>
                                <a href="/contact_list" class="btbg btn btn-primary btn-sm">All employee contacts</a>
                       </div>
                    </div>
                </div>

                <div class="col">
                  <div class="card" style="width: 12rem;">
                    <img src="{{asset('img/com.png') }}" height="180" width="180" class="card-img-top" alt="Add Company">
                      <div class="card-body">
                        <h6>Add Company</h6>
                        <p class="card-text"></p>
                        <a href="#" class="btbg btn btn-primary btn-sm">Go somewhere</a>
                      </div>
                    </div>
                </div>

             
                <div class="col">
                  <div class="card" style="width: 12rem;">
                    <img src="{{asset('img/com.png') }}" height="180" width="180" class="card-img-top" alt="Add Company">
                      <div class="card-body">
                        <h6>List of Companies</h6>
                        <p class="card-text"></p>
                        <a href="#" class="btbg btn btn-primary btn-sm">Go somewhere</a>
                      </div>
                    </div>
                    <br>
                <br>
                </div>
              </div>
              <br>

            </div>
        </div>
    </div>
    
</div>

@endsection
