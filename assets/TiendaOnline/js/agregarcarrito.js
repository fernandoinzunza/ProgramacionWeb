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
            mens.text(data);
            $("#msjsis").modal("show");
            }
        });
    });
});