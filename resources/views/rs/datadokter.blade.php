@extends('layouts.app')
 
@section('content')
<div class="container">
	<h3>Data Dokter</h3>
{!! Form::open(array('route'=>'users.store')) !!}
	<div class="form-group">
		{!! Form::label('id_dokter','Id Dokter') !!}
		{!! Form::text('name',null, array('class'=>'form-control')) !!}
	</div>

	<div class="form-group">
		{!! Form::label('nama_dokter','Nama Dokter') !!}
		{!! Form::text('name',null, array('class'=>'form-control')) !!}
	</div>
	<div class="form-group">
		{!! Form::label('special','Jenis Spesialis') !!}
		{!! Form::text('name',null, array('class'=>'form-control')) !!}
	</div>
	<div class="form-group">
		{!! Form::label('hari','Hari Praktek') !!}
		{!! Form::text('name',null, array('class'=>'form-control')) !!}
	</div>
	<div class="form-group">
		{!! Form::label('jam','Jam Praktek') !!}
		{!! Form::text('name',null, array('class'=>'form-control')) !!}
	</div>
	
	{!! Form::token() !!}
	{!! Form::submit('Submit',null,array('class'=>'btn btn-primary')) !!}
	
		
	
{!! Form::close() !!}
</div>
@endsection
