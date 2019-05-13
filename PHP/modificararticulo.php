<?php
require_once('Clases/admin.php');
$articulo = new Admin();
$articulo->SetCodigo(strip_tags($_POST['cod']));
$articulo->SetTitulo(strip_tags($_POST['tit']));
$articulo->SetCategoria(strip_tags($_POST['cat']));
$articulo->SetAutor(strip_tags($_POST['aut']));
$articulo->SetDescripcion(strip_tags($_POST['des']));
$articulo->SetPrecio(strip_tags($_POST['pc']));
$articulo->SetUnidades(strip_tags($_POST['uni']));
$articulo->SetImagen(strip_tags($_POST['img']));
$articulo->ActualizarArticulo($articulo);
echo "Articulo modificado Exitosamente";
?>