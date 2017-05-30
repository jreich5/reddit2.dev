@extends('layouts.master')

@section('title')
    <title>Reddit2: Posts</title>
@stop

@section('content')

    <h1 class="text-center">Posts</h1>
    
    <br>

    @foreach($posts as $post)
    
        <article class="row">
            <div class="col-md-4">
                <img src="{{ $post->image }}" width="100%">
            </div> 
            <div class="col-md-8">
                <h3><em>{{ $post->title }}</em></h3>
                <h4>By {{ $post->user->name }} </h4>
                <p class="line-clamp">{{ $post->content }}</p>
                <a class="btn btn-primary" href="{{ action('PostsController@show', $post->id) }}">Continue Reading</a>
            </div>
        </article>
        <hr>
    @endforeach
    <div class="pagination">
        {!! $posts->render() !!}
    </div>

@stop

@section('pageCSS')

    <style type="text/css">

        .articleElement {
            float: left;
        }

    </style>

@stop

@section('pageJS')

    <script type="text/javascript">
        
        $(document).ready(function() {

            "use strict";

            $('article').hover(function() {
                $(this).css({
                    'background-color': 'WhiteSmoke',
                    'cursor': 'pointer'
                });
            }, function() {
                $(this).css('background-color', 'white');
            });

            $('article').click(function(event) {
                // console.log($(this).find('a').first());
                $(this).find('a').get(0).click();
            });

            $('article a').click(function(e) {
                e.stopPropagation();
            });

        });

        
    </script>

@stop