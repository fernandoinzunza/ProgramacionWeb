<?php 
require_once('Clases/admin.php');
$usuario = new Usuario();
$username = $_POST['user'];
$usuario->ObtenerDatos($username,$usuario);
echo json_encode($usuario);
?>