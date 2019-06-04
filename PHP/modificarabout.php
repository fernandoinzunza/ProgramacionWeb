<?php
require_once('Clases/conexion.php');
$conn = abrirBD();
    if($sentencia_preparada =$conn->prepare("UPDATE about SET PRINCIPAL=?,SECUNDARIO=?,FACEBOOK=?,
    INSTAGRAM=?,TWITTER=? where 1" ))
    {
        $sentencia_preparada->bind_param('sssss',$prim,$secu,$face,$insta,$twitt);
        $prim = $_POST["quiensom"];
        $secu = $_POST["misivisi"];
        $face = $_POST["face"];
        $insta = $_POST["insta"];
        $twitt = $_POST["twitter"];
        $sentencia_preparada->execute();
        $conn->close();
    }   
?>