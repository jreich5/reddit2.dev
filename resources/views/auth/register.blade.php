@extends('layouts.master')

@section('title')
    <title>Reddit2: Register</title>
@stop

@section('content')

    {!! Form::open(array('url' => '/auth/register')) !!}
    
        <div class="form-group">
            {!! Form::label('name', 'Full Name') !!}
            {!! Form::text('name', null, array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'E-Mail Address') !!}
            {!! Form::text('email', null, array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password_confirmation', 'Password Confirmation') !!}
            {!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
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