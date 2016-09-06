@extends('layouts.app')
@section('content')
@if(Session::has('message'))
	<div class="container">
	<span class="label label-success">{{ Session::get('message')}}</span>
	</div>
@endif

@stop