$(document).ready(function(){  
    $("#formImg").bind("submit",function(){
         var frmData = new FormData;
         frmData.append("imagen",$("input[name=imagen]")[0].files[0]);
         frmData.append("numero",numero);
         $.ajax({
            url: 'php/subir.php',
            type:'POST',
            data: frmData,
            processData: false,
            contentType: false,
            cache: false,
            success: function(data){
            }
         });
    });
});