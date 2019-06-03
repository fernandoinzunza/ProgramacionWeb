$(document).ready(function(){
    $(".cambio").click(function(){
        var frmData = new FormData;
        var numero = $(this).attr('data-id');
        var select = $("#"+numero+"Select").children("option:selected").val();
         frmData.append("imagen",$("input[name="+numero+"]")[0].files[0]);
         frmData.append("numero",numero);
         frmData.append("categoria",select);
         if($("input[name="+numero+"]")[0].files.length > 0)
         {
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
                    location.reload();
                }
             }); 
         }
         else
         {
            $.ajax({
                url: 'php/categoriaSinImagen.php',
                type:'POST',
                data: {
                    numero:numero,
                    categoria:select
                },
                success: function(data){
                    location.reload();
                }
             });
         }
         
    });
});