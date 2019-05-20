$(obtener_registros());

function obtener_registros(busqueda)
{
	$.ajax({
		url : 'php/verCatalogo.php',
		type : 'POST',
		dataType : 'html',
		data : { busqueda: busqueda },
		})

	.done(function(resultado){
		$("#catalogo").html(resultado);
	})
}