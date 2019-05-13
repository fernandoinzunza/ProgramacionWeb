<?php
require_once("conexion.php");
class Admin{
    public $Usuario;
    public $Contraseña;
    public $Codigo;
    public $Titulo;
    public $Categoria;
    public $Autor;
    public $Descripcion;
    public $Precio;
    public $Unidades;
    public $Imagen;
    public function setUsuario($usuario) {
       $this->Usuario = $usuario;
    }
    public function setContraseña($contraseña) {
        $this->Contraseña = $contraseña;
    }
    public function SetCodigo($codigo){
        $this->Codigo = $codigo;
    }
    public function SetTitulo($titulo){
        $this->Titulo = $titulo;
    }
    public function SetCategoria($categoria){
        $this->Categoria = $categoria;
    }
    public function SetAutor($autor){
        $this->Autor = $autor;
    }
    public function SetDescripcion($descripcion){
        $this->Descripcion = $descripcion;
    }
    public function SetPrecio($precio){
        $this->Precio = $precio;
    }
    public function SetUnidades($unidades){
        $this->Unidades = $unidades;
    }
    public function SetImagen($imagen){
        $this->Imagen = $imagen;
    }
    
    public function _construct(){
         $this->Usuario ="";
         $this->Contraseña ="";
         $this->Codigo = "";
         $this->Titulo ="";
         $this->Categoria ="";
         $this->Autor = "";
         $this->Descripcion ="";
         $this->Precio ="";
         $this->Unidades = "";
         $this->Imagen = "";
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
    public function RegistrarArticulo($articulo){
        try
        {
            $conn = abrirBD();
            $sql = "INSERT INTO ARTICULOS VALUES(?,?,?,?,?,?,?,?)";
            $sentencia_preparada = $conn->prepare($sql);
            $sentencia_preparada->bind_param("ssssssss",$cod,$titu,$cat,$aut,$des,$pc,$uni,$img);
            $cod = $articulo->Codigo;
            $titu = $articulo->Titulo;
            $cat = $articulo->Categoria;
            $aut = $articulo->Autor;
            $des = $articulo->Descripcion;
            $pc = $articulo->Precio;
            $uni = $articulo->Unidades;
            $img = $articulo->Imagen;
            $sentencia_preparada->execute();
            $conn->close();
        }
        catch(Exception $e)
        {
            $error = $e->getMessage();
            echo $error;
        }
    }
    public function ActualizarArticulo($articulo){
        try
        {
         $conn = abrirBD();
         if($sentencia_preparada =$conn->prepare("UPDATE Articulos SET TITULO=?,CATEGORIA=?,AUTOR=?,DESCRIPCION=?,PRECIO=?,UNIDADES=?,IMAGEN=? WHERE CODIGO=?"))
         {
             $sentencia_preparada->bind_param('ssssssss',$tit,$cat,$aut,$des,$pc,$uni,$img,$cod);
             $cod = $articulo->Codigo;
             $tit = $articulo->Titulo;
             $cat = $articulo->Categoria;
             $aut = $articulo->Autor;
             $des = $articulo->Descripcion;
             $pc = $articulo->Precio;
             $uni = $articulo->Unidades;
             $img = $articulo->Imagen;
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
    public function EliminarArticulo($art){
        try
        {
         $conn = abrirBD();
         if($sentencia_preparada =$conn->prepare("DELETE FROM articulos WHERE codigo=?"))
         {
             $sentencia_preparada->bind_param('s',$cod);
             $cod = $art;
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
    
}
?>