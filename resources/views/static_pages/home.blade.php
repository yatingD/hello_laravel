@extends('layouts.default')
@section('title','about')
@section('content')
    <div class="jumbotron">
        <h1>Hello Laravel</h1>
        <p class="lead">
            What you are looking at is a sample page of <a href="/">yating's first laravel app</a>.
        </p>
        <p>
            Everything starts from here.
        </p>
        <p>
           <a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">Start your registration</a>
        </p>
    </div>
@stop