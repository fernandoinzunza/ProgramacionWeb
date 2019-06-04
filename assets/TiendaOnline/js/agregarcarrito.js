$(document).ready(function(){
    $("#carrito").click(function(){
        var idcod = $(this).attr("data-id");
        var cant = $("#cantidad").val();
        var mens = $("#msjbody");
        var vacio="";
        $.ajax({
            url: 'php/carrito.php',
            method: 'POST',
            data:{
            idcod:idcod,
            cant:cant
            },
            success: function(data){
            if(data == "mayor"){
                mens.text("La Cantidad Excede a la cantidad de articulos registrados");
                $("#msjsis").modal("show");
            }
            else if(data =="cero"){
                mens.text("no hay productos");
                $("#msjsis").modal("show");
            }else{
                mens.text("Agregado Correctamente al Carrito");
                $("#msjsis").modal("show");
                $("#cars").text(data);
                }
            }
        });
    });
});