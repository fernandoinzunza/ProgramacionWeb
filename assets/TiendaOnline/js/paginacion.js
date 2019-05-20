
function showRecords(CantidadPagina, PaginaNumero) {
    $.ajax({
        type: "GET",
        url: "php/paginar.php",
        data: "PaginaNumero=" + PaginaNumero,
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
});