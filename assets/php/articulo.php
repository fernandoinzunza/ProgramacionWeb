<?php 
require_once('conexion.php');
class Articulo{
public $Codigo;
public $Titulo;
public $Categoria;
public $Autor;
public $Descripcion;
public $Precio;
public $Unidades;
public $Imagen;

public function setCodigo($codigo){
    $this->Codigo = $codigo;
}
public function setTitulo($titulo){
    $this->Titulo = $titulo;
}
public function setCategoria($categoria){
    $this->Categoria = $categoria;
}
public function setAutor($autor){
    $this->Autor = $autor;
}
public function setDescripcion($descripcion){
    $this->Descripcion = $descripcion;
}
public function setPrecio($precio){
    $this->Precio = $precio;
}
public function setUnidades($unidades){
    $this->Unidades = $unidades;
}
public function setImagen($imagen){
    $this->Imagen = $imagen;
}
public function obtenerDatosPorCodigo($codigo,$articulo){
    try
    {
     $conn = abrirBD();
     if($sentencia_preparada =$conn->prepare("SELECT * FROM ARTICULOS WHERE codigo=?"))
         {
             $sentencia_preparada->bind_param('s',$cod);
             $cod =$codigo;
             $sentencia_preparada->execute();
             $sentencia_preparada->bind_result($cgo,$titulo,$categoria,$autor,$descripcion,$precio,$unidades,$imagen);
             while($sentencia_preparada->fetch()){
                 $articulo->setCodigo($cgo);
                 $articulo->setTitulo($titulo);
                 $articulo->setCategoria($categoria);
                 $articulo->setAutor($autor);
                 $articulo->setDescripcion($descripcion);
                 $articulo->setPrecio($precio);
                 $articulo->setUnidades($unidades);
                 $articulo->setImagen($imagen);
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
public function obtenerDatos($codigo,$articulo){
    try
    {
     $conn = abrirBD();
     if($sentencia_preparada =$conn->prepare("SELECT * FROM ARTICULOS WHERE imagen=?"))
         {
             $sentencia_preparada->bind_param('s',$cod);
             $cod =$codigo;
             $sentencia_preparada->execute();
             $sentencia_preparada->bind_result($cgo,$titulo,$categoria,$autor,$descripcion,$precio,$unidades,$imagen);
             while($sentencia_preparada->fetch()){
                 $articulo->setCodigo($cgo);
                 $articulo->setTitulo($titulo);
                 $articulo->setCategoria($categoria);
                 $articulo->setAutor($autor);
                 $articulo->setDescripcion($descripcion);
                 $articulo->setPrecio($precio);
                 $articulo->setUnidades($unidades);
                 $articulo->setImagen($imagen);
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
public function LibroExiste($codigo){
    try{
        $resultado = 0;
        $sql = "SELECT COUNT(*)FROM ARTICULOS WHERE IMAGEN = ?";
        $conn = abrirBD();
        if($sentencia_preparada = $conn->prepare($sql))
        {
                    $sentencia_preparada->bind_param('s',$cod);
                    $cod=$codigo;
                    $sentencia_preparada->execute();
                    $sentencia_preparada->bind_result($numero);
                    while($sentencia_preparada->fetch()){
                        $resultado = $numero;
                    }
        $conn->close();
        }
        return $resultado;
    }
    catch(Exception $e){
        $error = $e->getMessage();
        echo $error;
    }
    
}

}
?>
