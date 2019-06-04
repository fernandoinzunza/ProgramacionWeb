$(document).ready(function(){  
    $("#buttonguardar").click(function(){
        var frmData = new FormData;
        frmData.append("quiensom",$("#quiensom").val());
        frmData.append("misivisi",$("#misivisi").val());
        frmData.append("face",$("#face").val());
        frmData.append("insta",$("#insta").val());
        frmData.append("twitter",$("#twitter").val());
        $.ajax({
            type: 'POST',
            url: '../php/modificarabout.php',
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