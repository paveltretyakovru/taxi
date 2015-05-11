{{-- указываем активную ссылку в меню --}}
<?php $taxidb = true; ?>

@extends('admin.master')

@section('content')
	<h3>Редактирование</h3>
	
	{!! Form::model($taxi , ['route' => ['admin.taxi.update' , $taxi->id] , 'method' => 'PATCH']) !!}
		@include('admin.taxi.form')
	{!! Form::close() !!}

	<hr>
	<h4>Дополнительная информация</h4>
	@if (count($addinfos))
		@foreach ($addinfos as $addinfo)
			{!! Form::model($addinfo , ['route' => ['admin.taxi.update' , $addinfo->id] , 'method' => 'PATCH']) !!}
				@include('admin.taxi.addinfoform')
			{!! Form::close() !!}
		@endforeach		
	@else
		У такси такси отсутствует дополнительная информация
	@endif

	<h4>Добавить дополнительную информацию:</h4>
	{!! Form::open(['route' => 'admin.taxi.store', 'method' => 'post']) !!}
		@include('admin.taxi.addinfoform')
	{!! Form::close() !!}
@stop