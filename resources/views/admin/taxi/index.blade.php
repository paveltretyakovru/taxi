{{-- указываем активную ссылку в меню --}}
<?php $taxidb = true; ?>

@extends('admin.master')

@section('content')
	<h3>Список такси:</h3>

	<ul class='list-group'>		
		@if (count($taxis))
			@foreach ($taxis as $taxi)
				<li class='list-group-item'>
					{{$taxi->title}}
					{!! delete_form(['admin.taxi.destroy' , $taxi->id ], 'Удалить' , 'list-right btn-xs') !!}	
					<a href="{{ route('admin.taxi.edit' , $taxi->id) }}" class="btn btn-info btn list-right btn-xs">Редактировать</a>
				</li>
			@endforeach	
		@else
			В базе данных пока отсутсвуют записи о такси
		@endif
	</ul>

	<a href="{{ url('admin/taxi/create') }}" class="btn btn-success btn">Новое такси</a>
@stop