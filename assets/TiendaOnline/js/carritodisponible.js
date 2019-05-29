$(obtener_registros());
function obtener_registros()
{
	$.ajax({
		url : 'php/vercarrito.php',
		type : 'POST',
		dataType : 'html'
		})

	.done(function(resultado){
		$("#tablacarrito").html(resultado);
	})
}