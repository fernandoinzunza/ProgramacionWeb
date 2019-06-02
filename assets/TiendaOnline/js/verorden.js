$(obtener_registros());
function obtener_registros()
{
	$.ajax({
		url : 'php/verorden.php',
		type : 'POST',
		dataType : 'html'
		})

	.done(function(resultado){
		$("#orden").html(resultado);
	})
}