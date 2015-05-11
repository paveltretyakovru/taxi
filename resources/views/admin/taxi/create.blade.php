{{-- указываем активную ссылку в меню --}}
<?php $taxidb = true; ?>

@extends('admin.master')

@section('content')
	<h3>Добавление такси</h3>

	{!! Form::open(['route' => 'admin.taxi.store', 'method' => 'post']) !!}
		@include('admin.taxi.form')
	{!! Form::close() !!}
@stop