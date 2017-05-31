@extends('layouts.master')

@section('title')
    <title>Reddit2: Post Edit</title>
@stop

@section('content')

    {!! Form::model($post, ['route' => ['posts.update', $post->id]]) !!}

        {{ method_field('PUT') }}

        <div class="form-group">
            {!! Form::label('title', 'Post Title') !!}
            {!! Form::text('title', null, array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('url', 'Post Url') !!}
            {!! Form::text('url', null, array('class' => 'form-control')) !!}
        </div>    

        <div class="form-group">
            {!! Form::label('image', 'Post Image Url') !!}
            {!! Form::text('image', null, array('class' => 'form-control')) !!}
        </div>    

        <div class="form-group">
            {!! Form::label('content', 'Post Content') !!}
            {!! Form::textarea('content', null, array('class' => 'form-control')) !!}
        </div> 

        {!! Form::submit('Update', array('class' => 'btn btn-default pull-left')) !!}

    {!! Form::close() !!}

    <form action="/posts/{{ $post->id }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button class="btn btn-danger pull-right">Delete Post</button>
    </form>
    
    {{-- <a class="btn btn-danger" href="{{ action('PostsController@show', $post->id) }}">Delete Post</a> --}}

@stop

@section('pageCSS')

    <style type="text/css">
        

    </style>

@stop

@section('pageJS')

    <script type="text/javascript">
        
        
    </script>

@stop