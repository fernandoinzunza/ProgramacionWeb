<?php 
require_once("conexion.php");
class Usuario
{
    public $Username;
    public $Pass;
    public $Correo;
    public $Nombre;
    public $Ap_Pat;
    public $Ap_Mat;
    public function setUsername($username){
        $this->Username = $username;
    }
    public function setPass($pass){
        $this->Pass = $pass;
    }
    public function setCorreo($correo){
        $this->Correo = $correo;
    }
    public function setNombre($nombre){
        $this->Nombre = $nombre;
    }
    public function setApPat($appat){
        $this->Ap_Pat = $appat;
    }
    public function setApMat($apmat){
        $this->Ap_Mat = $apmat;
    }

    public function _construct(){
        $this->Username="";
        $this->Nombre="";
        $this->Pass="";
        $this->Correo="";
        $this->Ap_Pat="";
        $this->Ap_Mat="";
    }
    public function RegistrarUsuario($usuario){
        try
        {
            $conn = abrirBD();
            $sql = "INSERT INTO USUARIOS VALUES(?,?,?,?,?,?)";
            $sentencia_preparada = $conn->prepare($sql);
            $sentencia_preparada->bind_param("ssssss",$username,$pass,$correo,$nombre,$appat,$apmat);
            $username = $usuario->Username;
            $pass = $usuario->Pass;
            $correo = $usuario->Correo;
            $nombre = $usuario->Nombre;
            $appat = $usuario->Ap_Pat;
            $apmat = $usuario->Ap_Mat;
            $sentencia_preparada->execute();
            $conn->close();
        }
        catch(Exception $e)
        {
            $error = $e->getMessage();
            echo $error;
        }
    }
    public function ActualizarDatos($usuario){
        try
        {
         $conn = abrirBD();
         if($sentencia_preparada =$conn->prepare("UPDATE Usuarios SET PASS=?,CORREO=?,NOMBRE=?,AP_PAT=?,AP_MAT=? WHERE USERNAME=?"))
         {
             $sentencia_preparada->bind_param('ssssss',$pass,$correo,$nombre,$appat,$apmat,$username);
             $username = $usuario->Username;
             $pass = $usuario->Pass;
             $correo = $usuario->Correo;
             $nombre = $usuario->Nombre;
             $appat = $usuario->Ap_Pat;
             $apmat = $usuario->Ap_Mat;
             $sentencia_preparada->execute();
             $conn->close();
         }
        }
        catch(Exception $e)
        {
            $error = $e->getMessage();
            echo error;
        }
    }
    public function EliminarUsuario($user){
        try
        {
         $conn = abrirBD();
         if($sentencia_preparada =$conn->prepare("DELETE FROM usuarios WHERE username=?"))
         {
             $sentencia_preparada->bind_param('s',$username);
             $username = $user;
             $sentencia_preparada->execute();
             $conn->close();
         }
        
        }
        catch(Exception $e)
        {
            $error = $e->getMessage();
            echo error;
        }
    }
    public function ObtenerDatos($name,$usa){
        try
        {
         $conn = abrirBD();
         if($sentencia_preparada =$conn->prepare("SELECT * FROM usuario WHERE USUARIO=?"))
         {
             $sentencia_preparada->bind_param('s',$usuario);
             $usuario = $name;
             $sentencia_preparada->execute();
             $sentencia_preparada->bind_result($usuario,$pass,$correo,$nombre,$appat,$apmat);
             while($sentencia_preparada->fetch()){
             $usa->setUsername($usuario);
             $usa->setPass($pass);
             $usa->setCorreo($correo);
             $usa->setNombre($nombre);
             $usa->setAp_Pat($appat);
             $usa->setAp_Mat($apmat);
             }
             $conn->close();
         }
        }
        catch(Exception $e)
        {
            $error = $e->getMessage();
            echo $error;
        }
    }
}

?>