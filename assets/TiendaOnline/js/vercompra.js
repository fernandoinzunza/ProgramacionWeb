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
<<<<<<< HEAD
                        location.href="http://localhost/ProgWeb/assets/TiendaOnline/checkout";    
=======
                        location.href="http://localhost:8088/ProgramacionWeb/assets/TiendaOnline/checkout";    
>>>>>>> origin/manny
                    }
                    
                }
            }
        });
    });
});