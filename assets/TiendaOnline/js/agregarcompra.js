$(document).ready(function(){
    $("#rgCompra").click(function(){
        var correo = $(this).attr("data-id");
        $.ajax({
            url:"php/agregarcompra.php",
            method:"post",
            data:{
                correo:correo
            },
            success:function(data){
            alert(data);
            }
        });
    });
});