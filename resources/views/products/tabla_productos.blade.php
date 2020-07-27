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

                @can('products.show')
                <td width="10px">
                    <a href="{{ route('products.show', $product->id) }}"
                    class="btn btn-sm btn-info">
                        ver
                    </a>
                </td>
                @endcan
                @can('products.edit')
                <td width="10px">
                    <a href="{{ route('products.edit', $product->id) }}"
                    class="btn btn-sm btn-secondary">
                        editar
                    </a>
                </td>
                @endcan
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
