
function showRecords(CantidadPagina, PaginaNumero) {
    $.ajax({
        type: "POST",
        url: "php/paginar.php",
        data: {"PaginaNumero":  PaginaNumero },
        cache: false,
        beforeSend: function() {
     
            
        },
        success: function(html) {
            $("#tituloCat").text('Todos');
            $("#catalogo").html(html);
        }
    });
}
function showPorCategoria(CantidadPagina, PaginaNumero, categoria) {
    $.ajax({
        type: "POST",
        url: "php/paginarCategorias.php",
        data: {"PaginaNumero": PaginaNumero , "categoria":categoria},
        cache: false,
        beforeSend: function() {
            
        },
        success: function(html) {
            $("#tituloCat").text(categoria);
            $("#catalogo").html(html);
        }
    });
}

$(document).ready(function() {
    showRecords(10, 1);
    $(".categoria").click(function(){
        var categoria = $(this).data('id');
        showPorCategoria(10,1,categoria);
    });
    $(".todos").click(function(){
        showRecords(10, 1);        
    });
});