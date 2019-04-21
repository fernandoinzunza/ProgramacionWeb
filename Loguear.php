<?php
require_once("php/Clases/admin.php");
$admin = new Admin();
$admin->SetUser($_POST['user']);
$admin->SetContraseña($_POST['contra']);
$resultado= $admin->LogearAdmin($admin);
if($resultado>0){
    $usuario= $admin->User;
    $_SESSION['user'] = $usuario;
    $_SESSION['loguear'] = "SI";
   header("Location:template.html");
}
else{
    header("Location:template.html");
    echo $resultado;
    }
?>