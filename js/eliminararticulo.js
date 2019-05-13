var $codigoEliminar = 0;
$(obtener_registros());

function obtener_registros(busqueda)
{
    $(document).on("click","#elim2",function(){
		var cod = $(this).val();
		codigoEliminar = cod;
	});	

	$(document).on("click","#eliminar",function(){
		var datoeliminar = codigoEliminar;
		$.ajax({
				url: '../php/eliminararticulo.php', 
				method: 'POST',
				data:{
					cod : datoeliminar,
				},
				success: function (data){
					$("#tabla").load('../php/verarticulos.php');
				}
			});
		
    });
}