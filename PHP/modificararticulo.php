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
$ruta_carpeta="../assets/img/";
$nombre_imagen = $_POST['cod'].".".pathinfo($_FILES['img']['name'],PATHINFO_EXTENSION);
$ruta_guardar_archivo=$ruta_carpeta.$nombre_imagen;
if(unlink($ruta_guardar_archivo)){
    if(move_uploaded_file($_FILES['img']['tmp_name'],$ruta_guardar_archivo))
{
    $articulo->setImagen(strip_tags($nombre_imagen));
}
else
{
    echo "no se pudo";
}
$articulo->ActualizarArticulo($articulo);
echo "Articulo modificado Exitosamente";
}
else{
    echo "no se puedo compadre";
}
?>