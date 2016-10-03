@extends('layouts.master')
 
@section('content')
	<h2>Register</h2>
{!! Form::open(array('route'=>'users.store','files'=> true)) !!}
	<div class="form-group">
		{!! Form::label('name','username') !!}
		{!! Form::text('name',null, array('class'=>'form-control')) !!}
	</div>
	<div class="form-group">
		{!! Form::label ('email') !!}
		{!! Form::text('email',null, array('class'=>'form-control')) !!}
	</div>
	<div class="form-group">
		{!! Form::label ('password') !!}
		{!! Form::password('password', array('class'=>'form-control')) !!}
	</div>
	<div class="form-group">
		{!! Form::label('avatar') !!}
		{!! Form:: file('avatar',array('class'=>'form-control')) !!}
	</div>
	
	{!! Form::token() !!}
	{!! Form::submit('Cek Kamar',null,array('class'=>'btn btn-primary')) !!}
	<button type="submit" class="btn btn-info">{{ link_to_route('login','Login') }}</button>
		
	
{!! Form::close() !!}

@endsection
