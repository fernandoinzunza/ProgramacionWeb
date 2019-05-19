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
$articulo->setImagen(strip_tags($_POST['imagenes']));
//$resultado = move_uploaded_file($HTTP_POST_FILES['imagenes']['tmp_name'],"../assets/img/".$_POST['imagenes']);
//if($resultado){
    $articulo->RegistrarArticulo($articulo);
    echo "Se registró correctamente!";
//}else{
//    echo "no se pudo";
//}
?>