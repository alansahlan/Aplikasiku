@extends('layouts.app')

@section('content')

<div class="container">
	<div class="table-responsive">
		<table class="table table-bordered">
			<tr>
				<td>No</td>
				<td>Kelas Kamar</td>
				<td>Nama Kamar</td>
				<td>Lantai</td>
				<td>Action</td>
			</tr>
			<?php $no=1; ?>
			@foreach ($data_kamar as $data)
			<tr>
				<td>{{ $no++}}</td>
				<td>{{$data->class}}</td>
				<td>{{$data->nama_kamar}}</td>
				<td>{{$data->jml_lantai}}</td>
				<td><a href="#">Edit</a>Edit</td>
				<td><a href="#">Hapus</a>Hapus</td>
			</tr>
			@endforeach
		</table>

	</div>

</div>



@endsection