<div id="edit-categories-form">
	<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
		{!! Form::label('title', 'Название:') !!}
		{!! Form::text('title' , null , ['class' => 'form-control']) !!}
		{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
	</div>
	
	<div class="form-group {{ $errors->has('min') ? 'has-error' : '' }}">
		{!! Form::label('phone', 'Телефоны:') !!}
		{!! Form::textarea('phone' , null , ['class' => 'form-control' , 'style' => 'height: 50px' , 'id' =>'category-edit-parameters']) !!}
		{!! $errors->first('phone', '<span class="help-block">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('cityprice') ? 'has-error' : '' }}">
		{!! Form::label('cityprice', 'Тариф по городу:') !!}
		{!! Form::text('cityprice' , null , ['class' => 'form-control']) !!}
		{!! $errors->first('cityprice', '<span class="help-block">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('outcityprice') ? 'has-error' : '' }}">
		{!! Form::label('outcityprice', 'Тариф за городом:') !!}
		{!! Form::text('outcityprice' , null , ['class' => 'form-control']) !!}
		{!! $errors->first('outcityprice', '<span class="help-block">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('simple') ? 'has-error' : '' }}">
		{!! Form::label('simple', 'Простой:') !!}
		{!! Form::text('simple' , null , ['class' => 'form-control']) !!}
		{!! $errors->first('simple', '<span class="help-block">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('landing') ? 'has-error' : '' }}">
		{!! Form::label('landing', 'Посадка:') !!}
		{!! Form::text('landing' , null , ['class' => 'form-control']) !!}
		{!! $errors->first('landing', '<span class="help-block">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('min') ? 'has-error' : '' }}">
		{!! Form::label('min', 'Минимальный:') !!}
		{!! Form::text('min' , null , ['class' => 'form-control']) !!}
		{!! $errors->first('min', '<span class="help-block">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('min') ? 'has-error' : '' }}">
		{!! Form::label('contact', 'Контактная информация:') !!}
		{!! Form::textarea('contact' , null , ['class' => 'form-control' , 'style' => 'height: 50px' , 'id' =>'category-edit-parameters']) !!}
		{!! $errors->first('contact', '<span class="help-block">:message</span>') !!}
	</div>

	<div class="form-group {{ $errors->has('min') ? 'has-error' : '' }}">
		{!! Form::label('addcontact', 'Дополнительная контактная информация:') !!}
		{!! Form::textarea('addcontact' , null , ['class' => 'form-control' , 'style' => 'height: 50px' , 'id' =>'category-edit-parameters']) !!}
		{!! $errors->first('addcontact', '<span class="help-block">:message</span>') !!}
	</div>


	<div class="form-group">
		{!! Form::submit('Отправить' , ['class' => 'btn btn-primary']) !!}
	</div>
</div>