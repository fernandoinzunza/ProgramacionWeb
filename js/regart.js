$(document).ready(function(){
    $('#regart').click(function(){
        var cod = $('#codigo').val();
        var titulo = $('#titulo').val();
        var categoria = $('#categoria').val();
        var autor = $('#autor').val();
        var descripcion = $('#descripcion').val();
        var precio = $('#precio').val();
        var unidades = $('#unidades').val();
        var imagen = $('#imagen').val();
        var msj = $('#msj');
            $.ajax({
                url: '../php/registrarart.php',
                method:'POST',
                data:{
                    cod:cod,
                    titulo,titulo,
                    categoria:categoria,
                    autor:autor,
                    descripcion:descripcion,
                    precio:precio,
                    unidades:unidades,
                    imagen:imagen
                },
                success: function(data){
                    $('#codigo').val("");
                    $('#titulo').val("");
                    $('#categoria').val("");
                    $('#autor').val("");
                    $('#descripcion').val("");
                    $('#precio').val("");
                    $('#unidades').val("");
                    $('#imagen').val("");
                    $('#regisart').modal("hide");
                    $("#tabla").load('../php/verarticulos.php');
                    msj.text(data);
                    $('#msj').modal("show");
                }
            });

    });

});