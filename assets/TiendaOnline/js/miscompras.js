$(obtener_registros());
function obtener_registros()
{
	$.ajax({
		url : 'php/micompra.php',
		type : 'POST',
		dataType : 'html'
		})

	.done(function(resultado){
		$("#tablacompras").html(resultado);
	})
}