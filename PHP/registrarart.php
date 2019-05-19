<?php
require_once('Clases/admin.php');
$articulo = new Admin();
$articulo->setCodigo(strip_tags($_POST['codi']));
$articulo->setTitulo(strip_tags($_POST['titu']));
$articulo->setCategoria(strip_tags($_POST['cate']));
$articulo->setAutor(strip_tags($_POST['auto']));
$articulo->setDescripcion(strip_tags($_POST['descrip']));
$articulo->setPrecio(strip_tags($_POST['prec']));
$articulo->setUnidades(strip_tags($_POST['unid']));
$ruta_carpeta="../assets/img/";
$nombre_imagen = "imagenPrincipal".date('dHis').".".pathinfo($_FILES['imagen']['name'],PATHINFO_EXTENSION);
$ruta_guardar_archivo=$ruta_carpeta.$nombre_imagen;
if(move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta_guardar_archivo))
{
    $articulo->setImagen(strip_tags($nombre_imagen));
}
else
{
    echo "no se pudo";
}
$articulo->RegistrarArticulo($articulo);
echo "se registro";

?>