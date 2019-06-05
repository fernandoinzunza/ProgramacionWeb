$(document).ready(function () {
    $("#modificarart").click(function () {
        var frmData = new FormData;
        frmData.append("cod",$("#cod").val());
        frmData.append("tit",$("#tit").val());
        frmData.append("cat",$("#cat").val());
        frmData.append("aut",$("#aut").val());
        frmData.append("des",$("#des").val());
        frmData.append("pc",$("#pc").val());
        frmData.append("uni",$("#uni").val());
        frmData.append("img",$("input[name=img]")[0].files[0]);
        if ($('#form')[0].checkValidity() === false) {
            event.stopPropagation();
        } else {
                $.ajax({
                    url: '../php/modificararticulo.php',
                    method: 'POST',
                    data:frmData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function(data){
                    
                        $("#edit2").modal("hide");
                        $("#tabla").load('../php/verarticulos.php');
                        $("#msjbody").text(data);
                        $("#msjsis").modal("show");
                        location.reload();
                        
                    }
                });
            }
            $('#form').addClass('was-validated');
    });
});