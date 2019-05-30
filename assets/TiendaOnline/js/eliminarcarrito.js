var $codigoEliminar = 0;
$(obtener_registros());

function obtener_registros()
{
    $(document).on("click","#eliminarcarrito",function(){
		var cod = $(this).attr("data-id");
        codigoEliminar = cod;
	});	

	$(document).on("click","#borrarcarrito",function(){
		var datoeliminar = codigoEliminar;
		$.ajax({
				url: 'php/eliminarcarrito.php', 
				method: 'POST',
				data:{
					cod : datoeliminar,
				},
				success: function (data){
                    $("#tablacarrito").load('php/vercarrito.php');
                    alert(data);
				}
			});
		
    });
}