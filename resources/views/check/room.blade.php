@extends('layouts.app')

@section('content')

<div class="container">
	<h4>Ketersediaan Tempat Tidur</h4>
	<hr>
	<p>Informasi ketersediaan tempat tidur Rumah Sakit Bakti Husada Tambun</p>
	<p>Untuk Informasi lebih lanjut bisa menghubungi Unit Administrasi kami (021)8088</p>

	<h4><strong>Pilih Kamar</strong></h4>
		{!! Form::open(array('route'=>'users.store')) !!}
		<div class="form-group">
		{!! Form::select('size', [
		'vip' => 'VIP', 
		'vvip' => 'VVIP',
		'Kelas I' => 'Kelas I',
		'Kelas II' => 'Kelas II',
		'Kelas III' => 'Kelas III'],
		null, ['placeholder' => 'Pilih Kamar']); !!}
		<br/>
		<br/>
		{!! Form::submit('Cek Kamar',array('class'=>'btn btn-primary')) !!}
		{!! Form::submit('Reservasi',array('class'=>'btn btn-primary')) !!}
		{!! Form:: close() !!}
	</div>
</div>

@stop