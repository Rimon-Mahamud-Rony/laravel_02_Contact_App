@extends('master')


@section('content')

<br>

<div class="container-fluid">

    <div id="dashboard-auth" class="container-fluid">
        <div class=" card text-center">
          <div class="card-header">
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
                  <div class="card" style="width: 18rem;">
                    <img src="{{asset('img/list.png') }}" height="180" width="180" class="card-img-top" alt="List of Employee">
                      <div class="card-body">
                        <h5 class="card-title">List of Employee</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                </div>

                <div class="col">
                  <div class="card" style="width: 18rem;">
                    <img src="{{asset('img/add.png') }}" height="180" width="180" class="card-img-top" alt="Add  Employee">
                      <div class="card-body">
                        <h5 class="card-title">Add  Employee</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                </div>

                <div class="col">
                  <div class="card" style="width: 18rem;">
                    <img src="{{asset('img/com.png') }}" height="180" width="180" class="card-img-top" alt="Add Company">
                      <div class="card-body">
                        <h5 class="card-title">Add Company</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
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
