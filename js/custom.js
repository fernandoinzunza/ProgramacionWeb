$(document).on("click","#mostrar",function(){
    var user = $(this).val();
        var pass=$('#pass'+user).text();
		var correo=$('#correo'+user).text();
		var nombre=$('#nombre'+user).text();
        var appat=$('#appat'+user).text();
		var apmat=$('#apmat'+user).text();
	
		$('#edit').modal('show');
		$('#user').val(user);
		$('#pass').val(pass);
        $('#correo').val(correo);
		$('#nombre').val(nombre);
		$('#appat').val(appat);
		$('#apmat').val(apmat);
});