$(document).ready(function(){  
    $("#btnencabezado").click(function(){
        var frmData = new FormData;
        frmData.append("tituloenc",$("#tituloenc").val());
        frmData.append("encimg",$("#encimg").val());
        frmData.append("descrimg",$("#descrimg").val());
        frmData.append("imagen",$("input[name=imagen]")[0].files[0]);
                $.ajax({
                    url: '../php/modificarenc.php',
                    method: 'POST',
                    data:frmData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function (data) {
                        $("#msjbody").text("Editado exitosamente");
                        $("#msjsis").modal("show");
                    }
         });
    });
});