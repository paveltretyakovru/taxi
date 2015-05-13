<div id="edit-categories-form">
	<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
		{!! Form::label('title', 'Название:') !!}
		{!! Form::text('title' , null , ['class' => 'form-control']) !!}
		{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
	</div>
	
	<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
		{!! Form::label('description', 'Описание:') !!}
		{!! Form::textarea('description' , null , ['class' => 'form-control' , 'style' => 'height: 70px' , 'id' =>'category-edit-parameters']) !!}
		{!! $errors->first('description', '<span class="help-block">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
		{!! Form::label('price', 'Цена:') !!}
		{!! Form::text('price' , null , ['class' => 'form-control']) !!}
		{!! $errors->first('price', '<span class="help-block">:message</span>') !!}
	</div>

	{!! Form::hidden('taxi_id' , $taxi->id) !!}

	<div class="form-group">
		{!! Form::submit('Отправить' , ['class' => 'btn btn-primary']) !!}
	</div>
</div>