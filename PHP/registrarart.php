<?php
require_once('Clases/admin.php');
$articulo = new Admin();
$articulo->setCodigo(strip_tags($_POST['codigo']));
$articulo->setTitulo(strip_tags($_POST['titulo']));
$articulo->setCategoria(strip_tags($_POST['categoria']));
$articulo->setAutor(strip_tags($_POST['autor']));
$articulo->setDescripcion(strip_tags($_POST['descripcion']));
$articulo->setPrecio(strip_tags($_POST['precio']));
$articulo->setUnidades(strip_tags($_POST['unidades']));
$articulo->setImagen(strip_tags($_POST['imagen']));
$articulo->RegistrarArticulo($articulo);
echo "Se registró correctamente!";
?>