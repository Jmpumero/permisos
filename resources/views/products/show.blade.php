@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Producto</div>
                @if ($products)
                <div class="panel-body">
                    <p><strong>Nombre</strong>     {{ $products->name }}</p>
                    <p><strong>Descripción</strong>  {{ $products->descripcion }}</p>
                </div>
                @endif


            </div>
        </div>
    </div>
</div>
@endsection
