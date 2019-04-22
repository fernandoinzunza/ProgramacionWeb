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
}

?>