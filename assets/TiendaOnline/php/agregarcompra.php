<?php
session_start();
require_once("conexion.php");
if(!isset($_SESSION['carrito'])){
    echo"no";
}else{
    $arreglo = $_SESSION['carrito'];
    foreach($arreglo as $key => $fila){
        $folio = "1";
        $correo = $_POST['correo'];
        $cod_art = $fila['codigos'];
        $titulo = $fila['titulos'];
        $descripcion = $fila['des'];
        $precio = $fila['precios'];
        $unidades = $fila['cantidad'];
        $imagen_art = $fila['imagenes'];
        $conn = abrirBD();
        $sql = "INSERT INTO COMPRAS VALUES('$folio','$correo','$cod_art','$titulo','$descripcion','$precio','$unidades','$imagen_art')";
        $conn->query($sql);
        $conn->close();
    }
    echo"Compra realizada correctamente";
    unset($_SESSION['carrito']);
}


?>