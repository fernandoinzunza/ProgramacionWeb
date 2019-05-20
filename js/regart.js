$(document).ready(function(){
    $('#regart').click(function(){
        var frmData = new FormData;
        frmData.append("codi",$("#codi").val());
        frmData.append("titu",$("#titu").val());
        frmData.append("cate",$("#cate").val());
        frmData.append("auto",$("#auto").val());
        frmData.append("descrip",$("#descrip").val());
        frmData.append("prec",$("#prec").val());
        frmData.append("unid",$("#unid").val());
        frmData.append("imagen",$("input[name=imagen]")[0].files[0]);
            $.ajax({
                url: '../php/registrarart.php',
                method:'POST',
                data:frmData,
                processData: false,
                contentType: false,
                cache: false,
                success: function(data){
                    $('#regisart').modal("hide");
                    $("#msjbody").text("Se Registro Exitosamente!");
                    $('#msjsis').modal("show");
                    $('#codi').val("");
                    $('#titu').val("");
                    $('#cate').val("");
                    $('#auto').val("");
                    $('#descrip').val("");
                    $('#prec').val("");
                    $('#unid').val("");
                    $("#tabla").load('../php/verarticulos.php');
                }
            });
    });

});