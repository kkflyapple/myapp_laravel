@extends('layouts/app')

@section('title', 'home')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is the laravel application from the lfs youtube series</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>  <a class="btn btn-primary btn-lg" href="/register" role="button">Register</a></p>
    </div>
@endsection