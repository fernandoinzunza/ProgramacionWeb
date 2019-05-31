<?php
require_once("conexion.php");
session_start();
$codi = $_POST['idcod'];
$cant = $_POST['cant'];
$conn = abrirBD();
$sql = "SELECT codigo,titulo,descripcion,precio,imagen FROM articulos where codigo = '$codi'";
$conn = abrirBD();
$resultado = $conn->query($sql);
if($resultado){
    $fila = mysqli_fetch_array($resultado);
    if(!isset($_SESSION['carrito'])){
        $arreglo[0]['codigos'] = $fila['codigo'];
        $arreglo[0]['titulos'] = $fila['titulo'];
        $arreglo[0]['des'] = $fila['descripcion'];
        $arreglo[0]['precios'] = $fila['precio'];
        $arreglo[0]['cantidad'] = $cant;
        $arreglo[0]['imagenes'] = $fila['imagen'];
        $_SESSION['carrito'] = $arreglo;
    }
    else{
        $arreglo = $_SESSION['carrito'];
        $num = count($arreglo);
        if($num>1){
        $arreglo[$num+1]['codigos'] = $fila['codigo'];
        $arreglo[$num+1]['titulos'] = $fila['titulo'];
        $arreglo[$num+1]['des'] = $fila['descripcion'];
        $arreglo[$num+1]['precios'] = $fila['precio'];
        $arreglo[$num+1]['cantidad'] = $cant;
        $arreglo[$num+1]['imagenes'] = $fila['imagen'];
        $_SESSION['carrito'] = $arreglo;
        }else{
        $arreglo[$num]['codigos'] = $fila['codigo'];
        $arreglo[$num]['titulos'] = $fila['titulo'];
        $arreglo[$num]['des'] = $fila['descripcion'];
        $arreglo[$num]['precios'] = $fila['precio'];
        $arreglo[$num]['cantidad'] = $cant;
        $arreglo[$num]['imagenes'] = $fila['imagen'];
        $_SESSION['carrito'] = $arreglo;
        }
    }
}
$conn->close();
$num = count($arreglo);
echo $num;
?>