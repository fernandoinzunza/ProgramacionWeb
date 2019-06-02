$(document).ready(function(){
    $(".cambio").click(function(){
        var frmData = new FormData;
        var numero = $(this).attr('data-id');
        var select = $("#"+numero+"Select").children("option:selected").val();
         frmData.append("imagen",$("input[name="+numero+"]")[0].files[0]);
         frmData.append("numero",numero);
         frmData.append("categoria",select);
         $.ajax({
            url: 'php/cambiarCategoria.php',
            type:'POST',
            dataType:'json',
            data: frmData,
            processData: false,
            contentType: false,
            cache: false,
            success: function(data){
                $("#"+numero+"Imagen").attr("src",data[1]);
                $("#"+numero+"Texto").text(data[0]);
                window.location.reload();
            }
         });
    });
});