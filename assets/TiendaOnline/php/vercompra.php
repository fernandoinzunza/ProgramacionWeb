<?php
session_start();
if(!isset($_SESSION['ingresar'])){
    echo "no";
}elseif(!isset($_SESSION['carrito'])){
    echo "tampoco";
}else{
    echo "si";
}
?>