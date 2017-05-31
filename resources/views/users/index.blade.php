@extends('layouts.master')

@section('title')
    <title>Reddit2: Users</title>
@stop

@section('content')
    
    <h1 class="text-center">Users</h1>
    
    <br>

    <div id="pageNumbers">
        {!! $users->render() !!}
    </div>

    @foreach($users as $user)
    
        <article>
            <h2 data-dbid="{{ $user->id }}">{{ $user->name }} <small>Joined: {{ $user->created_at->timezone('America/Chicago')->diffForHumans() }}</small> </h2>
        </article>
        <hr>
    @endforeach
    <div id="pageNumbers">
        {!! $users->render() !!}
    </div>

@stop

@section('pageCSS')

    <style type="text/css">
        
        #pageNumbers {
            text-align: center;
        }

    </style>

@stop

@section('pageJS')

    <script type="text/javascript">
        
        $(document).ready(function() {
            "use strict";

            $('h2').hover(

                function() {
                    $(this).css("background-color", "WhiteSmoke");
                }, 
                function() {
                   $(this).css("background-color", "white"); 
                }
            );

            $('h2').click(function() {
                window.location.href = "/users/" + $(this).data("dbid");
            });

        });
        
    </script>

@stop