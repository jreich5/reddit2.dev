@extends('layouts.master')

@section('title')
	<title>Reddit2: Edit Profile</title>
@stop

@section('content')

	<h1>Edit Profile</h1>
	
	{!! Form::model($user, ['route' => ['users.update', $user->id]]) !!}

        {{ method_field('PUT') }}

        <div class="form-group">
            {!! Form::label('name', 'Full Name') !!}
            {!! Form::text('name', null, array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'E-Mail Address') !!}
            {!! Form::text('email', null, array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'New Password') !!}
            {!! Form::password('password', array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password_confirmation', 'New Password Confirmation') !!}
            {!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
        </div>

        {!! Form::submit('Update', array('class' => 'btn btn-default pull-left')) !!}

    {!! Form::close() !!}

    <form action="/users/{{ $user->id }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button class="btn btn-danger pull-right">Delete Profile</button>
    </form>

@stop

@section('pageCSS')

	<style type="text/css">
		


	</style>

@stop

@section('pageJS')

	<script type="text/javascript">
		
		
	</script>

@stop