@extends('layouts.app')

@section('content')
	<div class="container">
		<h3 style="text-align: center;">Informasi Jadwal Dokter</h3>
		<p>Untuk Informasi lebih lanjut mengenai jadwal Dokter bisa menghubungi</p>
		<p>Unit Admin Kami (021) 80880.</p>
		<hr>
		<h4><strong>Poliklinik</strong></h4>
		{!! Form::open(array('route'=>'users.store')) !!}
		<div class="form-group">
		{!! Form::select('size', [
		'Penyakit Dalam' => 'Penyakit Dalam', 
		'Bedah' => 'Bedah',
		'Bidan dan Kandungan' => 'Bidan dan Kandungan',
		'Bedah Syaraf' => 'Bedah Syaraf',
		'THT' => 'THT',
		'Anak' => 'Anak',
		'Mata' => 'Mata',
		'Kulit' => 'Kulit',
		'Syaraf' => 'Syaraf'], 
		null, ['placeholder' => 'Pilih Poli']); !!}
	</div>
		<div class="form-group">
		{!! Form::select('size', [
		'Penyakit Dalam' => 'Penyakit Dalam', 
		'Bedah' => 'Bedah',
		'Bidan dan Kandungan' => 'Bidan dan Kandungan',
		'Bedah Syaraf' => 'Bedah Syaraf',
		'THT' => 'THT',
		'Anak' => 'Anak',
		'Mata' => 'Mata',
		'Kulit' => 'Kulit',
		'Syaraf' => 'Syaraf'], 
		null, ['placeholder' => 'Pilih Poli']); !!}
		
		{!! Form::close () !!}
	</div>
		

		
		
	</div>
	
@stop