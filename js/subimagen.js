$(document).ready(function(){  
    $("#imagenes").change(function(){
         var frmData = new FormData;
         frmData.append("imagen",$("input[name=imagen]")[0].files[0]);
         $.ajax({
            url: '../php/altaimagen.php',
            type:'POST',
            data: frmData,
            processData: false,
            contentType: false,
            cache: false,
            success: function(data){
                $("#referencia").attr("src",data);
                $("#mens").text("Se subio la imagen!");
                $("#exitoImg").modal("show");
            }
         });
    });
});