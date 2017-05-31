@extends('layouts.master')

@section('title')
	<title>Reddit2: Login</title>
@stop

@section('content')
	{!! Form::open(array('url' => 'auth/login')) !!}
	
		<div class="form-group">
			{!! Form::label('email', 'E-Mail Address') !!}
			{!! Form::text('email', null, array('class' => 'form-control')) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Password') !!}
			{!! Form::password('password', array('class' => 'form-control')) !!}
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