<div class="form-group">
	{{ Form::label('name', 'Nombre de la etiqueta') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<hr>
<h3>Lista de roles</h3>


	<div class="dropdown">
  		<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    		Roles
  		</button>

	  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

		  	@foreach($roles as $role)

			    	<li>

			    		<a class="dropdown-item" href="#">
				        <label>
				        {{ Form::checkbox('roles[]', $role->id, null) }}
				        {{ $role->name }}
				        <em>({{ $role->description ?: 'N/A'  }})</em>
				        </label>
				        </a>
			    	</li>

	    	@endforeach

	  </div>
</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>