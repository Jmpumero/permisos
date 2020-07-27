<div class="form-group">
	{{ Form::label('name', 'Nombre de la etiqueta') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
	{{ Form::label('descripcion', 'Descripción') }}
	{{ Form::textarea('descripcion', null, ['class' => 'form-control','id'=>'descripcion']) }}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => ' bt-guardar btn btn-sm btn-primary']) }}
</div>
