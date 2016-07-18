@extends('layouts.app')

@section('content')

    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link  rel="stylesheet" href="{{URL('/assets/css/bootstrap.min.css')}}">
    <link  rel="stylesheet" href="{{URL('/assets/css/bootstrap.min.css')}}">
    </br>
    </br>
    <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Data Pemasukan</div>
                <br/>
    <div class="container">
    {!! Form::open(array('route'=>'handleLogin'))!!}
    <div class="form-inline">
<div class="form-group">
		{!! Form::label ('Uang Masuk :') !!}  
		{!! Form::text('text',null, array('class'=>'form-control')) !!}
	</div>
	</div>
	<div class="form-inline">
<div class="from-group">
		{!! Form::label ('Tanggal Terima :') !!}  
		{!! Form::date('date',null, array('class'=>'form-control')) !!}
	</div>
	</div>
	 <div class="form-inline">
<div class="form-group">
		{!! Form::label ('Yang Menerima :') !!}  
		{!! Form::text('text',null, array('class'=>'form-control')) !!}
	</div>
	</div>
	 <div class="form-inline">
<div class="form-group">
		{!! Form::label ('Yang Menyerahkan:') !!}  
		{!! Form::text('text',null, array('class'=>'form-control')) !!}
	</div>
	</div>
<br/>
	{!! Form::token() !!}
	 <button type="submit" class="btn btn-primary " > Simpan</button>
{!! Form::close() !!}
					</div>
	<br/>

    </div>
 @endsection