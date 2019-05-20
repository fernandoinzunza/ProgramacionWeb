<?php
require_once("Clases/admin.php");
require_once("Clases/conexion.php");
$articulo = new Admin();
$cod = $_POST['cod'];
$conn = abrirBD();
$query = "SELECT IMAGEN FROM ARTICULOS WHERE CODIGO =?";
$sentencia_preparada1 = $conn->prepare($query);
$sentencia_preparada1->bind_param('s',$codi);
$codi = $cod;
$sentencia_preparada1->execute();
$sentencia_preparada1->bind_result($nameimagen);
$sentencia_preparada1->fetch();
$imageneliminar = "../assets/img/".$nameimagen;
if(unlink($imageneliminar)){
$articulo->EliminarArticulo($cod);
}else{
    echo"no se pudo";
}
$conn->close();
?>
