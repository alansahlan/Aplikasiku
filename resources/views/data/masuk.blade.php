@extends('layouts.app')
 
@section('content')

    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link  rel="stylesheet" href="{{URL('/assets/css/bootstrap.min.css')}}">
    <link  rel="stylesheet" href="{{URL('/assets/css/bootstrap.min.css')}}">
    </br>
    </br>
    @if(Session::has('message'))
	<div class="container">
	<span class="label label-success">{{ Session::get('message')}}</span>
	</div>
	@endif
    <div class="container">
    
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Data Pemasukan</div>
                <br/>
    <div class="container">
    {!! Form::open(array('url'=>'data/insert', 'method' => 'post'))!!}
    <div class="form-inline">
<div class="form-group">
		{!! Form::label ('Uang Masuk :') !!}  
		{!! Form::text('uang_masuk',null, array('class'=>'form-control')) !!}
	</div>
	</div>
	<div class="form-inline">
<div class="from-group">
		{!! Form::label ('Tanggal Terima :') !!}  
		{!! Form::date('tgl_terima',null, array('class'=>'form-control')) !!}
	</div>
	</div>
	 <div class="form-inline"> 
<div class="form-group">
		{!! Form::label ('Yang Menerima :') !!}  
		{!! Form::text('yg_menerima',null, array('class'=>'form-control')) !!}
	</div>
	</div>
	 <div class="form-inline">
<div class="form-group">
		{!! Form::label ('Yang Menyerahkan:') !!}  
		{!! Form::text('yg_menyerahkan',null, array('class'=>'form-control')) !!}
	</div>
	</div>
<br/>
	{!! Form::token() !!}
	 <button type="submit" class="btn btn-primary " > Simpan</button>
{!! Form::close() !!}


					</div>
	<br/>

    </div>
    </div>
    </div>
    </div>
 @endsection