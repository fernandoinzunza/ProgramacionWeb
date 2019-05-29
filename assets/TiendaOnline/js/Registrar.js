$(document).ready(function () {
    $("#crear").click(function () {
        var user = $("#user").val();
        var pass = $("#pass").val();
        var email = $("#email").val();
        var nombre = $("#nombre").val();
        var appat = $("#appat").val();
        var apmat = $("#apmat").val();
        $('#form').submit(function (event) {
            event.preventDefault();
            if ($('#form')[0].checkValidity() === false) {
                event.stopPropagation();
            } else {
                $.ajax({
                    url: 'php/registrar.php',
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
                        $("#user").val("");
                        $("#pass").val("");
                        $("#email").val("");
                        $("#nombre").val("");
                        $("#appat").val("");
                        $("#apmat").val("");
                        $(".toast-body").html(data);
                        $("#toast").addClass("animated");
                        $("#toast").addClass("rollIn");
                        $("#exampleModal").modal("show");
                        alert(data);
                    }
                });
            }
            $('#form').addClass('was-validated');
        });
    });
});