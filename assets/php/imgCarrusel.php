<?php
require_once('articulo.php');
$ruta_carpeta="../TiendaOnline/images/carrusel/";
$nombre_imagen =$_FILES['imagen']['name'];
$ruta_guardar_archivo=$ruta_carpeta.$nombre_imagen;
$codi = $_POST['cod'];
$articulo = new Articulo();
$resultado = $articulo->LibroExiste($_FILES['imagen']['name']);
require_once('conexion.php');
$conn = abrirBD();
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
    $anterior = new Articulo();
    $anterior->obtenerDatosPorCodigo($codi,$anterior);
    $nombre_anterior = $anterior->Imagen;
    $ruta_guardar_archivo_anterior=$ruta_carpeta.$nombre_anterior;
    if(file_exists($ruta_guardar_archivo_anterior))
        unlink($ruta_guardar_archivo_anterior);
    $articulo->obtenerDatos($_FILES['imagen']['name'],$articulo);
    $arreglo = array();
    if($resultado > 0 && move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta_guardar_archivo))
    {   
        $update ="UPDATE EDITAR_CARRUSEL SET ID_IMG = '$nombre_imagen',TITULO_LIBRO = '$articulo->Titulo',AUTOR = '$articulo->Autor',PRECIO = '$articulo->Precio', ID = '$articulo->Codigo' where ID = '$codi'";
        $conn->query($update);
        $arreglo[0] = "TiendaOnline/images/carrusel/".$nombre_imagen;
        $arreglo[1] = $articulo->Titulo;
        $arreglo[2] = $articulo->Autor;
        $arreglo[3] = $articulo->Precio;
        echo json_encode($arreglo);
        
    }
    else
    {
    echo "no se pudo";
    }   

?>