<?php
require_once("conexion.php");
class Admin{
    public $User;
    public $Contraseña;
    public function setUser($usuario) {
       $this->User =$usuario;
    }
    public function setContraseña($contraseña) {
        $this->Contraseña =$contraseña;
    }
    
    public function _construct(){
         $this->User ="";
         $this->Contraseña ="";
    }
    public function LogearAdmin($admin){
        try
        {
            $resultado=0;
            $conn = abrirBD();
        if($sentencia_preparada =$conn->prepare("SELECT count(*) FROM administrador WHERE User=? AND Contraseña=?"))
            {
                $sentencia_preparada->bind_param('ss',$usuario,$contra);
                $usuario =$admin->User;
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