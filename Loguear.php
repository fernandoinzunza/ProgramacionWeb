<?php
session_start();
require_once("php/Clases/admin.php");
$admin = new Admin();
$admin->SetUsuario($_POST['user']);
$admin->SetContraseña($_POST['contra']);
$resultado= $admin->LogearAdmin($admin);
if($resultado>0){

    $usuario= $admin->Usuario;
    $_SESSION['usuario'] = $usuario;
    $_SESSION['loguear'] = "SI";
   header("Location:template.html");
}
else{
    header("Location:login.php");
    }
?>