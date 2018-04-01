@extends('layouts/app')

@section('title', 'Services')

@section('content')
    <div class="starter-template">
        <h1>Services</h1>
        @if(count($services)>0)
            <ul class="list-group">
                @foreach($services as $service)
                    <li class="list-group-item">{{$service}}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection