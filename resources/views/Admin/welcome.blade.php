@extends('Admin.app')

@section('content')

    <div class="container">
        <div class="jumbotron mt-3">
            <p class="lead">Hello {{$config->CompanyName}}, go to the
                <a class="btn btn-sm btn-primary" href="{{$modulelink}}&settings" role="button">Settings Page</a>
            </p>
        </div>
    </div>

@endsection