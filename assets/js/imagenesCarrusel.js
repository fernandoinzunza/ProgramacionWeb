$(document).ready(function(){
    var id ="";
    $(".selec").click(function(){
        id = $(this).data('id');
        $("#cambiar").attr("data-id",id);
        $("#modalC").modal('show');
    });
    $("#cambiar").click(function(){
            var frmData = new FormData;
            var cod = $(this).attr('data-id');
            frmData.append("imagen",$("input[name=imgCarousel]")[0].files[0]);
            frmData.append("cod",cod);
            $.ajax({
               url: 'php/imgCarrusel.php',
               type:'POST',
               dataType: 'json',
               data: frmData,
               processData: false,
               contentType: false,
               cache: false,
               success: function(data){
                   $("#"+cod+"Carrusel").attr("src",data[0]);
                   $("#"+cod+"Titulo").text(data[1]);
                    $("#"+cod+"Autor").text(data[2]);
                    $("#"+cod+"Precio").text(data[3]);
                    $("#modalC").modal('hide');
               }
       });
    });
});