@extends('layouts.master')

@section('title')
    <title>Reddit2: </title>
@stop

@section('content')
    <article>
        <h1 class="text-center">{{ $post->title }} <small> By {{ $post->user->name }}</small></h1>
        <img class="center-block"  src="{{ $post->image }}" width="100%">
        <p>{{ $post->content }}</p>
        <a class="btn btn-primary" href="{{ action('PostsController@edit', $post->id) }}">Edit Post</a>
    </article>
@stop

@section('pageCSS')

    <style type="text/css">

        img {
            border: 2px solid black;
            margin: 16px;
        }

    </style>

@stop

@section('pageJS')

    <script type="text/javascript">
        
        
    </script>

@stop