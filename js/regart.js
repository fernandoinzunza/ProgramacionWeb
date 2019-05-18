$(document).ready(function(){
    var fileName = ""
    $("#imagenes").change(function (){
        fileName = $(this).val().replace("C:\\fakepath\\", "");
        });
    $('#regart').click(function(){
        var codi = $('#codi').val();
        var titu = $('#titu').val();
        var cate = $('#cate').val();
        var auto = $('#auto').val();
        var descrip = $('#descrip').val();
        var prec = $('#prec').val();
        var unid = $('#unid').val();
        var imagenes = fileName;
        var msj = $('#mens');
            $.ajax({
                url: '../php/registrarart.php',
                method:'POST',
                data:{
                    codi:codi,
                    titu,titu,
                    cate:cate,
                    auto:auto,
                    descrip:descrip,
                    prec:prec,
                    unid:unid,
                    imagenes:imagenes
                },
                success: function(data){
                    $('#codi').val("");
                    $('#titu').val("");
                    $('#cate').val("");
                    $('#auto').val("");
                    $('#descrip').val("");
                    $('#prec').val("");
                    $('#unid').val("");
                    $('#imagenes').val("");
                    $('#regisart').modal("hide");
                    $("#tabla").load('../php/verarticulos.php');
                    msj.text(data);
                    $('#mensaje').modal("show");
                }
            });
    });

});