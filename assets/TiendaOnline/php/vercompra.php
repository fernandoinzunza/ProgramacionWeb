<?php
session_start();
if(!isset($_SESSION['ingresar'])){
    echo "no";
}else{
    echo"si";
}
?>