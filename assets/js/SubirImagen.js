$(document).ready(function(){  
    $("#formImg").bind("submit",function(){
         var frmData = new FormData;
         frmData.append("imagen",$("input[name=imagen]")[0].files[0]);
         $.ajax({
            url: 'php/subir.php',
            type:'POST',
            data: frmData,
            processData: false,
            contentType: false,
            cache: false,
            success: function(data){
                $("#referencia").attr("src",data);
                $("#mens").text("Se cambio la imagen!");
                $("#exitoImg").modal("show");
            }
         });
    });
});