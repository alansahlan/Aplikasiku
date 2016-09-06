@extends('layouts.app')
 
@section('content')
	<p></p>
	<div class="container">
		<div class="table-responsive">
			<table class="table table-bordered" >

				<tr>
					<th> No </th>
					<th> Uang Masuk </th>
					<th> Tanggal Terima </th>
					<th> Yang Menerima </th>
					<th> Yang Menyerahkan </th>
				</tr>
				<?php $no=1; ?>
				@foreach ($dt_masuk as $data)
				<tr>
					<td>{{ $no++ }}</td>
					<td>{{ $data-> uang_masuk}}</td>
					<td>{{ $data-> tgl_terima}}</td>
					<td>{{ $data-> yg_menerima }}</td>
					<td>{{ $data-> yg_menyerahkan}}</td>
					<td><a href="{{URL('hapus/{id}')}}">Hapus</a></td>
					<td><a href="">Edit</a></td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>

@endsection