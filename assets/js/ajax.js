$(document).ready(function(){
    $("#crear").click(function(){
        var user = $("#user").val();
        var pass = $("#pass").val();
        var email = $("#email").val();
        var nombre = $("#nombre").val();
        var appat = $("#appat").val();
        var apmat = $("#apmat").val();
        $.ajax({
            url: 'php/registrar.php', 
            method: 'POST',
            data:{
                user : user,
                pass: pass,
                email:email,
                nombre:nombre,
                appat:appat,
                apmat:apmat
            },
            success: function (data){
            toastr.success(data);
            }
        });
    });
});