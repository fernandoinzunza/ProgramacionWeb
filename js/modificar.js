$(document).ready(function () {
    $("#modificar").click(function () {
        var user = $("#user").val();
        var pass = $("#pass").val();
        var email = $("#correo").val();
        var nombre = $("#nombre").val();
        var appat = $("#appat").val();
        var apmat = $("#apmat").val();
        var mens = $("#mens");
                $.ajax({
                    url: '../php/modificar.php',
                    method: 'POST',
                    data: {
                        user: user,
                        pass: pass,
                        email: email,
                        nombre: nombre,
                        appat: appat,
                        apmat: apmat
                    },
                    success: function (data) {
                        $("#edit").modal("hide");
                        $("#tabla").load('../php/verusuario.php');
                        mens.text(data);
                        $("#mensaje").modal("show");
                    }
                });
        
    });
});