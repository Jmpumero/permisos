$(document).ready(function () {
    $('#alerta').hide();

    $('.bt-eliminar').click(function (e) {
        e.preventDefault();
        /*
        if (!confirm("¿Estas seguro de eliminar?")) {
            return false;

        }*/

        var row= $(this).parents('tr'); //captura la fila que se eliminara
        var form=$(this).parents('form'); //para obtener la url
        var url=form.attr('action');

        $('#alerta').show();
       // console.log(url);
        //console.log(form.serialize());
        //console.log(form);

        //forma mas elegante y resumida
        $.post(url,form.serialize(),function(result){
            row.fadeOut();
            $('#total_product').html(result.total);
            $('#alerta').html(result.mensaje);

        }).fail(function(){
            $('#alerta').addClass('alert-danger');
            $('#alerta').html("Operación no procesada :(");
        });

        /* //otra forma mas clasica
        $.ajax({
            type: "post",
            url: url,
            data: form.serialize(),
            dataType: "Json",
            success: function (result) {
                row.fadeOut();
                $('#total_product').html(result.total);
                $('#alerta').html(result.mensaje);
            },error: function (result){
                $('#alerta').addClass('alert-danger');
                $('#alerta').html("Operación no procesada :(");
                console.log(result);
             }
        });*/
    });

    $('.bt-guardar').click(function (e) {
        e.preventDefault();

        var form=$(this).parents('form'); //para obtener la url
        var url=form.attr('action');


        console.log(url);

        $.ajax({
            type: "post",
            url: url,
            data: form.serialize(),
            dataType: "Json",
            success: function (result) {
                location.reload(); //pero no me gusta,esto es pra recargar la pagina
                $('#alerta').show();

                $('#alerta').html(result.mensaje);
                $('#total_product').html('Total:'+result.total);
                $('#modelId').modal('hide');

               // var URLactual = window.location.href;
                //var url = window.location.pathname;
                //console.log(url);
                //console.log(URLactual);
                //$('#tablaproductos').load();

                /*
                // todo esto serviria para añadir una nueva fila a la tabla pero.. al intentar acceder a una ruta da un error
                var _nombre=result.nombre;
                var _id=result.id;
                var btn_ver= "<td> <a href="+ '"{{ route('+"'products.show', $product->id"+') }}"'+"class="+
                '"btn btn-sm btn-info">'+"ver"+"</a></td>";
                var btn_editar= "<td> <a href="+ '"{{ route('+"'products.edit', $product->id"+') }}"'+"class="+
                '"btn btn-sm btn-secondary">'+"editar"+"</a></td>";
                var _row=
                "<tr><td>"+_id+
                "</td>"+"<td>"+_nombre +
                "</td>"+btn_ver
                +btn_editar+" </tr>";
                $('#tablaproductos tbody').append(_row);
                console.log('funciono');
                //*/
                //document.location.href='{{ route("products.index" )}}';
            },error: function (result){
                $('#alerta').addClass('alert-danger');
                $('#alerta').html("Operación no procesada :(");
                console.log(result);
             }
        });
    });

});
