<?php
session_start();
require_once("Clases/admin.php");
require_once("Clases/usuario.php");
$cliente = new Usuario();
$admin = new Admin();
$admin->setUsuario($_POST['usuario']);
$admin->setContraseña($_POST['contra']);
$cliente->setUsername($_POST['usuario']);
$cliente->setPass($_POST['contra']);
$resultado = $admin->LogearAdmin($admin);
$resultado1 = $cliente->LogearUser($cliente);

if($resultado>0){
    $usuario= $admin->Usuario;
    $_SESSION['usuario'] = $usuario;
    $_SESSION['loguear'] = "SI";
   header("Location:../assets/");
} 
elseif($resultado1>0){
    $username = $cliente->Username;
    $_SESSION['username'] = $username;
    $_SESSION['ingresar'] = 'SI';
    header("Location:../assets/TiendaOnline/");
}
else{
    header("Location:../log.php");
    }
?>