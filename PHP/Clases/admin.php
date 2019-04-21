<?php
require_once("conexion.php");
class Admin{
    public $Usuario;
    public $Contraseña;
    public function setUsuario($usuario) {
       $this->User =$usuario;
    }
    public function setContraseña($contraseña) {
        $this->Contraseña =$contraseña;
    }
    
    public function _construct(){
         $this->Usuario ="";
         $this->Contraseña ="";
    }
    public function LogearAdmin($admin){
        try
        {
            $resultado=0;
            $conn = abrirBD();
        if($sentencia_preparada =$conn->prepare("SELECT count(*) FROM administrador WHERE USUARIO=? AND CONTRA=?"))
            {
                $sentencia_preparada->bind_param('ss',$user,$contra);
                $user =$admin->Usuario;
                $contra = $admin->Contraseña;
                $sentencia_preparada->execute();
                $sentencia_preparada->bind_result($user);
                while($sentencia_preparada->fetch()){
                $resultado = $user;
                }
                $conn->close();
            }
    
            return $resultado;
        }
        catch (Exception $e)
        {
        $error = $e->getMessage();
        echo $error;
        }
    }
}
?>