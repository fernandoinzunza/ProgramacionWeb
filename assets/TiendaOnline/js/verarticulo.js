$(document).ready(function(){
    $(".codigo").click(function(){
        var codigo = $(this).attr("data-id");
        $.ajax({
            data:{
            url: "../shop_articulo.php",
            method:"POST",
            codigo:codigo
            },
            success:function(data){
            location.replace("shop_articulo.php");
            }
        });
    });
});