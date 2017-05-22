@extends('layouts.master')

@section('title')
	<title>Reddit2: </title>
@stop

@section('content')
	{!! Form::open(array('url' => 'auth/register')) !!}
	
		{!! Form::label('name', 'Full Name', array('class' => '')) !!}
		{!! Form::text('name') !!}
		{!! Form::label('email', 'E-Mail Address', array('class' => '')) !!}
		{!! Form::text('email') !!}
		{!! Form::label('password', 'Password', array('class' => '')) !!}
		{!! Form::password('password') !!}
		{!! Form::submit('Submit') !!}

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