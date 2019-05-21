
function showRecords(CantidadPagina, PaginaNumero) {
    $.ajax({
        type: "GET",
        url: "php/paginar.php",
        data: {"PaginaNumero":  PaginaNumero },
        cache: false,
        beforeSend: function() {
     
            
        },
        success: function(html) {
            $("#catalogo").html(html);
        
        }
    });
}
function showPorCategoria(CantidadPagina, PaginaNumero, categoria) {
    $.ajax({
        type: "GET",
        url: "php/paginarCategorias.php",
        data: {"PaginaNumero": PaginaNumero , categoria:categoria},
        cache: false,
        beforeSend: function() {
     
            
        },
        success: function(html) {
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
});