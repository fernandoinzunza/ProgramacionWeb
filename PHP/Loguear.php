<?php
session_start();
require_once("Clases/admin.php");
$admin = new Admin();
$admin->setUsuario($_POST['usuario']);
$admin->setContraseña($_POST['contra']);
$resultado = $admin->LogearAdmin($admin);

if($resultado>0){
    $usuario= $admin->User;
    $_SESSION['usuario'] = $usuario;
    $_SESSION['loguear'] = "SI";
   header("Location:../assets/");
}
else{
    header("Location:../log.php");
    }
?>