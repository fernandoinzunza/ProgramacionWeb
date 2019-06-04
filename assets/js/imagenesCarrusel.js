$(document).ready(function () {
    var id = "";
    $(".selec").click(function () {
        id = $(this).data('id');
        $("#cambiar").val(id);
        $.ajax({
            url: 'php/tablaCarrusel.php',
            type:'POST',
            data:{seleccionado:id},
            success: function (data) {
                $("#tablaCarrusel").html(data);
                $("#modalC").modal('show');
            }
        });
    });
    $(document).on("click","#cambiarImg",function(){
        var nuevo = $(this).attr('data-id');
        var actual = $("#cambiar").val();
        $.ajax({
            url: 'php/actualizarCarrusel.php',
            type:'POST',
            dataType:'json',
            data:
            {
                actual:actual,
                nuevo:nuevo
            },
            success: function (data) {              
                location.reload();
                $("#tablaCarrusel").html('se edito');
            }
        });
	});	
        /*var frmData = new FormData;
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
                //$("#recCarrusel").load('php/recargarCarrusel.php');
                location.reload();
                $("#modalC").modal('hide');
           }
           
   });*/
});