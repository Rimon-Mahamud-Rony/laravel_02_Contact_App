@extends('master')


@section('content')

<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"  style="border-radius:0px;">
            <div class="card">
                <div class="card-header alert alert-info" style="border-radius:0px;">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
