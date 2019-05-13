<?php
require_once("Clases/admin.php");
$articulo = new Admin();
$cod = $_POST['cod'];
$articulo->EliminarArticulo($cod);
echo "Articulo Eliminado Exitosamente";
?>
