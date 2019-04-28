<?php
require_once("conexion.php");
class Admin{
    public $Usuario;
    public $Contraseña;
    public function setUsuario($usuario) {
       $this->Usuario = $usuario;
    }
    public function setContraseña($contraseña) {
        $this->Contraseña = $contraseña;
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
                $sentencia_preparada->bind_param('ss',$usuario,$contra);
                $usuario =$admin->Usuario;
                $contra = $admin->Contraseña;
                $sentencia_preparada->execute();
                $sentencia_preparada->bind_result($numero);
                while($sentencia_preparada->fetch()){
                $resultado = $numero;
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
    public function ObtenerDatos($user,$admin){
        try
        {
         $conn = abrirBD();
         if($sentencia_preparada =$conn->prepare("SELECT * FROM administrador WHERE USUARIO=?"))
         {
             $sentencia_preparada->bind_param('s',$usuario);
             $usuario = $user;
             $sentencia_preparada->execute();
             $sentencia_preparada->bind_result($usuario,$pass);
             while($sentencia_preparada->fetch()){
             $admin->setUsuario($usuario);
             $admin->setContraseña($pass);
             }
             $conn->close();
         }
        }
        catch(Exception $e)
        {
            $error = $e->getMessage();
            echo error;
        }
    }
    
}
?>