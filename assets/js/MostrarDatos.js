$(document).ready(function(){
    $(document).on("click","#editar",function(){
        var user = $(this).data('id');
        $.ajax({
            
            data: {user:user},
            //Cambiar a type: POST si necesario
            type: "POST",
            // Formato de datos que se espera en la respuesta
            dataType: "json",
            // URL a la que se enviará la solicitud Ajax
            url: "../php/ObtenerDatos.php",
            success:function(data){
                $("#user").val(data.Userame);
                $("#pass").val(data.Pass);
                $("#modificar").modal("show");
            }
        })
    });
});
