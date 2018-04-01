@extends('layouts.app')

@section('title', 'blog')


@section('content')
    <a href="/posts" class="btn btn-outline-primary bg-sm mb-3">Go Back</a>
    
    <h1>{{$post->title}}</h1>
    <img style="width:100%;" src="/storage/cover_images/{{$post->cover_image}}" alt="no_cover">
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary bg-sm mb-3">Edit</a>
            
            {!! Form::open(['action' => ['PostsController@destroy',$post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
        @endif
    @endif
@endsection