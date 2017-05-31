@extends('layouts.master')

@section('title')
    <title>Reddit2: Create Post</title>
@stop

@section('content')

    <h1 class="text-center">Create Post</h1>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(array('url' => 'posts')) !!}
    
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

        {!! Form::submit('Submit', array('class' => 'btn btn-default')) !!}

    {!! Form::close() !!}

@stop

@section('pageCSS')

    <style type="text/css">
        

    </style>

@stop

@section('pageJS')

    <script type="text/javascript">
        
        
    </script>

@stop