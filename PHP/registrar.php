<?php
require_once('Clases/usuario.php');
$usuario = new Usuario();
$usuario->setUsername(strip_tags($_POST['user']));
$usuario->setPass(strip_tags($_POST['pass']));
$usuario->setCorreo(strip_tags($_POST['email']));
$usuario->setNombre(strip_tags($_POST['nombre']));
$usuario->setApPat(strip_tags($_POST['appat']));
$usuario->setApMat(strip_tags($_POST['apmat']));
$existe = $usuario->UserExists($_POST['user'],$_POST['email']);
$adminExiste = $usuario->DiferenteDeAdmin($_POST['user'],$_POST['pass']);
if($existe == 0 && $adminExiste == 0)
{
    $usuario->RegistrarUsuario($usuario);
    echo "<p class='alert alert-success text-center w-75'>Se registró correctamente!</p>";
}
else
{
    echo "<p class='alert alert-danger w-75 text-center'>Ya hay una cuenta con ese usuario y correo!</p>";
}
?>