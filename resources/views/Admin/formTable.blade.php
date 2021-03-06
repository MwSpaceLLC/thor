@extends('Admin.app')

@section('content')

    @if(isset($alert))
        <div class="alert alert-success" role="alert">
            {{$alert}} | <a href="{{$modulelink}}&form"> Go Back</a>
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Text</th>
            <th scope="col">Email</th>
            <th scope="col">Number</th>
            <th scope="col">Textarea</th>
        </tr>
        </thead>
        <tbody>
        @foreach($demos as $demo)
            <tr>
                <th scope="row">{{$demo->id}}</th>
                <td>{{$demo->text}}</td>
                <td>{{$demo->email}}</td>
                <td>{{$demo->number}}</td>
                <td>{{$demo->textarea}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection