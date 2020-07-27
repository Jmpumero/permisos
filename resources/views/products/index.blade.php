@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default ">
                <div id="alerta" class="alert alert-success" role="alert">hola
                </div>
                {{--  original
                @if (session('info'))
                    <div class="alert alert-success">
                        {{ session('info') }}
                    </div>
                @endif
                  --}}

                <div class="panel-heading">
                    Productos
                    @can('products.create')
                    {{ Form::open(['route' => 'products.store']) }}

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#modelId">
                        Añadir
                    </button>
                        @include('products.partials.modal_create')

                    {{ Form::close() }}



                    {{--  <a href="{{ route('products.create') }}"
                    class="btn btn-sm btn-primary float-right">
                        Crear
                    </a>--}}
                    @endcan
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover" id="tablaproductos">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th> <span id="total_product">Total:{{ $products->total() }}</span></th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                @if ($product!=null)
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                @endif

                               {{--  @can('products.show')--}}
                                <td width="10px">
                                    <a href="{{ route('products.show', $product->id) }}"
                                    class="btn btn-sm btn-info">
                                        ver
                                    </a>
                                </td>
                               {{--  @endcan--}}
                               {{--  @can('products.edit') --}}
                                <td width="10px">
                                    <a href="{{ route('products.edit', $product->id) }}"
                                    class="btn btn-sm btn-secondary">
                                        editar
                                    </a>
                                </td>
                                {{--  @endcan--}}
                                @can('products.destroy')
                                <td width="10px">


                                    {!! Form::open(['route' => ['products.destroy', $product->id],
                                    'method' => 'DELETE']) !!}
                                        <button class=" bt-eliminar btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}

                                </td>
                                @endcan
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script_productos')
<script src="{{ asset('js/script_productos.js') }}"defer></script>
@endsection
