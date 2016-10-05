
@extends('layouts.member')
 
@section('content')
	
	<div class="container">
	<h2>Reservasi Kamar</h2>
{!! Form::open(array('route'=>'users.store')) !!}
	<div class="form-group">
		{!! Form::label('Nomor Identitas') !!}
		{!! Form::text('ktp',null, array('class'=>'form-control')) !!}
	</div>
	<div class="form-group">
		{!! Form::label ('Nama Pasien') !!}
		{!! Form::text('name',null, array('class'=>'form-control')) !!}
	</div>
	<div class="form-group">
		{!! Form::label ('Alamat') !!}
		{!! Form::textarea('address', null, array('class'=>'form-control')) !!}
	</div>
	<div class="form-group">
		{!! Form::label('Nomor HP') !!}
		{!! Form::text('hp', null, array('class'=>'form-control')) !!}
	</div>
	<div class="form-group">
		{!! Form::label('Rujukan Dokter') !!}
		{!! Form::text('rujuk', null, array('class'=>'form-control')) !!}
	</div>
	<div class="form-group">
		{!! Form::label('Tanggal Reservasi') !!}
		{!! Form::date('date',null, array('class'=>'form-control')) !!}
	</div>
	<div class="form-group">
		{!! Form::label('Keterangan') !!}
		{!! Form::textarea('note',null, array('class'=>'form-control'))!!}
	</div>
	
	{!! Form::token() !!}
	{!! Form::submit('Save',null,array('class'=>'btn btn-primary')) !!}
	
		
	
{!! Form::close() !!}
</div>
@endsection