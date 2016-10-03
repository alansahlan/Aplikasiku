@extends('layouts.app')
 
@section('content')
<div class="container">
	<h3>Data Kamar</h3>
{!! Form::open(array('url'=>'data/kamar','methode'=>'post')) !!}
	<div class="form-group">
		{!! Form::label('class','Kelas Kamar') !!}
		{!! Form::text('class',null, array('class'=>'form-control')) !!}
	</div>
	<div class="form-group">
		{!! Form::label('nama_kamar','Nama Kamar') !!}
		{!! Form::text('nama_kamar',null, array('class'=>'form-control')) !!}
	</div>
	<div class="form-group">
		{!! Form::label('jml_lantai','Lantai') !!}
		{!! Form::text('jml_lantai',null, array('class'=>'form-control')) !!}
	</div>
	{!! Form::token() !!}
	{!! Form::submit('Submit',null,array('class'=>'btn btn-primary')) !!}
	
		
	
{!! Form::close() !!}
</div>
@endsection
