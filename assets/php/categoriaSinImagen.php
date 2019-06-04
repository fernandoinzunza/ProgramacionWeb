<?php
require_once('conexion.php');
$conn = abrirBD();
$numero = $_POST['numero'];
$categoria = $_POST['categoria'];
$update ="UPDATE EDITAR_CATEGORIAS SET CATEGORIA='$categoria' where numero ='$numero'";
$conn->query($update);
echo "Se edito";