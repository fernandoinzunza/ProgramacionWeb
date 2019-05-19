$(document).on("click","#mostrar2",function(){
    var cod = $(this).val();
        var titulo=$('#titulo'+cod).text();
		var categoria=$('#categoria'+cod).text();
		var autor=$('#autor'+cod).text();
        var descripcion=$('#descripcion'+cod).text();
		var precio=$('#precio'+cod).text();
        var unidades=$('#unidades'+cod).text();
		var imagen=$('#imagen'+cod).text();
	
		$('#edit2').modal('show');
		$('#cod').val(cod);
		$('#tit').val(titulo);
        $('#cat').val(categoria);
		$('#aut').val(autor);
		$('#des').val(descripcion);
		$('#pc').val(precio);
		$('#uni').val(unidades);
		$('#referencia').attr("src","../assets/img/"+imagen);
		$('#img').val(imagen);
});