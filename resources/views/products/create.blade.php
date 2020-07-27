@extends('layouts.app')

@section('content')
<div id="alerta2" class="alert alert-info" role="alert">hola
</div>
<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Producto</div>

                <div class="panel-body">
                    {{ Form::open(['route' => 'products.store']) }}
                    {{--  <div class="form-group">
                        {{ Form::label('name', 'Nombre de la etiqueta') }}
                        {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('descripcion', 'Descripción') }}
                        {{ Form::textarea('descripcion', null, ['class' => 'form-control','id'=>'descripcion']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::submit('Guardar', ['class' => ' bt-guardar btn btn-sm btn-primary']) }}
                    </div>--}}

                        @include('products.partials.form2')

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script_productos')
<script src="{{ asset('js/script_productos_c.js') }}"defer></script>
@endsection
