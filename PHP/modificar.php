<?php
require_once('Clases/usuario.php');
$usuario = new Usuario();
$usuario->setUsername(strip_tags($_POST['user']));
$usuario->setPass(strip_tags($_POST['pass']));
$usuario->setCorreo(strip_tags($_POST['email']));
$usuario->setNombre(strip_tags($_POST['nombre']));
$usuario->setApPat(strip_tags($_POST['appat']));
$usuario->setApMat(strip_tags($_POST['apmat']));
$usuario->ActualizarDatos($usuario);
echo "Se Modifico Exitosamente correctamente!";
?>