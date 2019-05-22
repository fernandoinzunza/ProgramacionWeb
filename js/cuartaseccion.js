$(document).ready(function(){  
    $("#btnguardar").click(function(){
        var frmData = new FormData;
        frmData.append("copy",$("#copy").val());
        frmData.append("contacto",$("#contacto").val());
        frmData.append("redes",$("#redes").val());
                $.ajax({
                    url: '../php/modificarfoot.php',
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