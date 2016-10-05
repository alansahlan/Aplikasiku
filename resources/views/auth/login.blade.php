@extends('layouts.master')

@section('content')
<style type="text/css">
	body {
		background-image: url('../public/images/background.jpg');
        background-size: cover;
	}
	h2{
		color: white;
		text-align: center;
		font-family: 'Lato';
	}
</style>
<br/>
<h2></h2>
<br/>
	<div class="container">
		<div class="append-icon">
			<div class="row">
        		<div class="col-sm-3 col-md-3 col-lg-3">
        		</div>
        		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            		<div class="panel panel-default">
              		<div class="panel-heading">
                	<h4 class="panel-title">Login Admin</h4>   
                    </div>
              	<div class="panel-body">
                <div class="row">
                <div class="col-sm-12 col-xs-12">
 
@if(count($errors))
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>

@endif

{!! Form::open(array('route'=>'handleLogin'))!!}
<div class="form-group">
		{!! Form::label ('email') !!}
		{!! Form::text('email',null, array('class'=>'form-control','placeholder'=>'Email')) !!}
	</div>
<div class="from-group">
		{!! Form::label ('password') !!}
		{!! Form::password('password', array('class'=>'form-control','placeholder'=>'Password')) !!}
</div>
<br/>
	{!! Form::token() !!}

	 <button type="submit" class="btn btn-primary " > Login  <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></button>
	 <!--{{ link_to_route('users.create','New User') }} -->
{!! Form::close() !!}
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection

	



