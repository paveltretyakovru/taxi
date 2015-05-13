{{-- указываем активную ссылку в меню --}}
<?php $taxidb = true; ?>

@extends('admin.master')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Редактирование</h3>
		</div>
	
		<div class="panel-body">
			{!! Form::model($taxi , ['route' => ['admin.taxi.update' , $taxi->id] , 'method' => 'PATCH']) !!}
				@include('admin.taxi.form')
			{!! Form::close() !!}
		</div>
	</div>
		
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Дополнительная информация:</h3>
		</div>
	@if (count($addinfos))
			<div class="panel-body">
				@foreach($addinfos as $addinfo)
					
						{!! Form::model($addinfo , ['route' => ['admin.addinfo.update' , $addinfo->id] , 'method' => 'PATCH']) !!}
							@include('admin.taxi.addinfoform')
						{!! Form::close() !!}
						{!! delete_form(['admin.addinfo.destroy' , $addinfo->id ], 'Удалить') !!}
						<hr />					
				@endforeach		
			</div>
	@else
		<div class="panel-body">
			У такси такси отсутствует дополнительная информация
		<div class="panel-body">
	@endif
	</div>	

	<h3>Добавить дополнительную информацию:</h3>
	{!! Form::open(['route' => 'admin.addinfo.store', 'method' => 'post']) !!}
		@include('admin.taxi.addinfoform')
	{!! Form::close() !!}
@stop