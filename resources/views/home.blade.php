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
        <div class=" card text-center">
          <div align="center" class="alert alert-success" style="border-radius: 0px; font-family: 'Sanchez', serif; color:black; font-size: 14px;">
            Dashboard of Contact management App
          </div>

          <div class="container-fluid">

            <div class="container">
                <div class="container-fluid">
                  
                  <div class="card-body">
                    
                  </div>
                  
                </div>

              <div class="row">

                <div class="col">
                  <div class="card" style="width: 15rem;">
                    <img src="{{asset('img/list.png') }}" height="180" width="180" class="card-img-top" alt="List of Employee">
                      <div class="card-body">
                        <h6>List of Employee Contacts</h6>
                            <table class="table table-sm table-bordered">
                                <tr>
                                    <td class="tf text-sm-left">Total Employess: 100</td>
                                    
                                </tr>
                                <tr>
                                    <td class="tf text-sm-left">Last employees Name: ABCD EFGH</td>
                                    
                                </tr>
                                <tr>
                                    <td class="tf text-sm-left">Last employees ID: 1012101</td>
                                    
                                </tr>
                            </table>
                                <a href="/contact_list" class="btbg btn btn-primary btn-sm">All employee contacts</a>
                       </div>
                    </div>
                </div>

                <div class="col">
                  <div class="card" style="width: 15rem;">
                    <img src="{{asset('img/add.png') }}" height="180" width="180" class="card-img-top" alt="Add  Employee">
                      <div class="card-body">
                        <h6>Add  a new Employee</h6>
                        <table class="table table-sm table-bordered">
                                <tr>
                                    <td class="tf text-sm-left">Last Action: 22-6-2022</td>
                                    
                                </tr>
                                <tr>
                                    <td class="tf text-sm-left">Last employees Name: ABCD EFGH</td>
                                    
                                </tr>
                                <tr>
                                    <td class="tf text-sm-left">Last employees ID: 1012101</td>
                                    
                                </tr>
                            </table>
                        <a href="#" class="btbg btn btn-primary btn-sm">Add a new contacts </a>
                      </div>
                    </div>
                </div>

                <div class="col">
                  <div class="card" style="width: 15rem;">
                    <img src="{{asset('img/com.png') }}" height="180" width="180" class="card-img-top" alt="Add Company">
                      <div class="card-body">
                        <h6>Add Company</h6>
                        <p class="card-text"></p>
                        <a href="#" class="btbg btn btn-primary btn-sm">Go somewhere</a>
                      </div>
                    </div>
                </div>

             
                <div class="col">
                  <div class="card" style="width: 15rem;">
                    <img src="{{asset('img/com.png') }}" height="180" width="180" class="card-img-top" alt="Add Company">
                      <div class="card-body">
                        <h6>List of Companies</h6>
                        <p class="card-text"></p>
                        <a href="#" class="btbg btn btn-primary btn-sm">Go somewhere</a>
                      </div>
                    </div>
                </div>

              </div>
              <br>

            </div>
        </div>
    </div>
    
</div>

@endsection
