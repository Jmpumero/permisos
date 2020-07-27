$(document).ready(function () {
    $('#alerta2').hide();



    $('.bt-guardar').click(function (e) {
        e.preventDefault();
        /*
        if (!confirm("¿Estas seguro de eliminar?")) {
            return false;

        }*/


        var form=$(this).parents('form'); //para obtener la url
        var url=form.attr('action');


        console.log(url);
        //console.log(form.serialize());
        //console.log(form);
        /*
        //forma mas elegante y resumida
        $.post(url,form.serialize(),function(result){
            row.fadeOut();
            $('#total_product').html(result.total);
            $('#alerta').html(result.mensaje);

        }).fail(function(){
            $('#alerta').addClass('alert-danger');
            $('#alerta').html("Operación no procesada :(");
        });
        */
         //otra forma mas clasica
        $.ajax({
            type: "post",
            url: url,
            data: form.serialize(),
            dataType: "Json",
            success: function (result) {
                $('#alerta2').show();
                console.log('funciono');
                $('#alerta2').html(result.mensaje);
                //document.location.href='{{ route("products.index" )}}';
            },error: function (result){
                $('#alerta2').addClass('alert-danger');
                $('#alerta2').html("Operación no procesada :(");
                console.log(result);
             }
        });
    });

});
