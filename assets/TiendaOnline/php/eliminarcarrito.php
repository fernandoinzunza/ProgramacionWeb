<?php
$indice = $_POST['cod'];
session_start();
if(isset($_SESSION['carrito'])){
    $arreglo = $_SESSION['carrito'];
    unset($arreglo[$indice]);
    $_SESSION['carrito'] = $arreglo;
   
}
if(count($arreglo)==0){
        unset($_SESSION['carrito']);
    }
?>