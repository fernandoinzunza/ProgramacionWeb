<?php
$ruta_carpeta="../TiendaOnline/images/categorias/";
$numero = $_POST['numero'];
$categoria = $_POST['categoria'];
$nombre_imagen =$_FILES['imagen']['name'];
$ruta_guardar_archivo=$ruta_carpeta.$nombre_imagen;
require_once('conexion.php');
$conn = abrirBD();
$validarCategoria = "SELECT COUNT(*)FROM ARTICULOS WHERE CATEGORIA=?";
$resultado = 0;
if($sentencia_preparada = $conn->prepare($validarCategoria))
{
    $sentencia_preparada->bind_param('s',$cat);
    $cat=$categoria;
    $sentencia_preparada->execute();
    $sentencia_preparada->bind_result($numero);
    while($sentencia_preparada->fetch()){
            $resultado = $numero;
    }
}
/*
if(!file_exists($ruta_guardar_archivo))
{
    if($resultado > 0 && move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta_guardar_archivo))
    {
        $articulo->obtenerDatos($_FILES['imagen']['name'],$articulo);
        $update ="UPDATE EDITAR_CARRUSEL SET ID_IMG = '$articulo->Codigo',TITULO_LIBRO = '$articulo->Titulo',AUTOR = '$articulo->Autor',PRECIO = '$articulo->Precio', ID = '$codi' where ID = '$nombre_imagen'";
        $conn->query($update);
        echo "TiendaOnline/images/carrusel/".$nombre_imagen;
    }
    else
    {
    echo "no se pudo";
    }   
}   

*/  
if( $_FILES['imagen']['type'] != "image/jpeg" && $_FILES['imagen']['type'] != "image/png"){
    $arr = array();
    $arr[0] = "La imagen debe ser de formato .png o .jpg!";
    echo json_encode($arr);
}
else if($resultado == 0)
{
    $arr = array();
    $arr[0] = "La categoria seleccionada no existe!";
    echo json_encode($arr);
}
else 
{
        $arreglo = array();
        if(move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta_guardar_archivo))
        {      
            $update ="UPDATE EDITAR_CATEGORIAS SET CATEGORIA='$categoria', IMAGEN='$nombre_imagen' where numero ='$numero'";
            $conn->query($update);
            $arreglo[0] = $categoria;
            $arreglo[1] = "TiendaOnline/images/categorias/".$nombre_imagen;
            echo json_encode($arreglo);
        }
        else
        {
            echo "no se pudo";
        }
}   
?>