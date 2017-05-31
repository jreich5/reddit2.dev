@extends('layouts.master')

@section('title')
	<title>Reddit2: User Profile</title>
@stop

@section('content')
	
	<h1 class="text-center">{{ $user->name }}</h1>
	<h3 class="text-center">Joined  {{ $user->created_at->timezone('America/Chicago')->diffForHumans() }}</h3>
	@if($user->id == Auth::id())
		<a class="btn btn-primary" href="{{ action('UsersController@edit', $user->id) }}">Edit Profile</a>
	@endif
	<h3>Previous Posts:</h3>
	@foreach($userPosts as $post)

		<article class="row">
            <div class="col-md-4">
                <img src="{{ $post->image }}" width="100%">
            </div> 
            <div class="col-md-8">
                <h3><em>{{ $post->title }}</em> <small>Posted {{ $user->created_at->timezone('America/Chicago')->diffForHumans() }}</small></h3>
                <p class="line-clamp">{{ $post->content }}</p>
                <a class="btn btn-primary" href="{{ action('PostsController@show', $post->id) }}">Continue Reading</a>
            </div>
        </article>
        <hr>

	@endforeach

@stop

@section('pageCSS')

	<style type="text/css">
		

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