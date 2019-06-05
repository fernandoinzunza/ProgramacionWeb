$(document).ready(function(){
    $("#comprar").click(function(){
        var isma = $(this).attr("data-id");
        $.ajax({
            url:"php/vercompra.php",
            method:"post",
            data:{
                isma:isma
            },
            success:function(data){
                if(data == "no"){
                    alert("necesitas Inicias Sesión");
                }else{
                    if (data == "tampoco") {
                    alert("necesitas realizar una compra por lo menos");
                    } else {
                        location.href="http://localhost/ProgWeb/assets/TiendaOnline/checkout";    
                    }
                    
                }
            }
        });
    });
});