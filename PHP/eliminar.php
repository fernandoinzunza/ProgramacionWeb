<?php
require_once("Clases/usuario.php");
$usuario = new Usuario();
$user = $_POST['cod'];
$usuario->EliminarUsuario($user);
echo "Usuario Eliminador Exitosamente";
?>
