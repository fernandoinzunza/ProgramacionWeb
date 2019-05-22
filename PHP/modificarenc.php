<?php
require_once('Clases/conexion.php');
$tituloenc = $_POST['tituloenc'];
$encimg = $_POST['encimg'];
$descrimg = $_POST['descrimg'];
$ruta_carpeta="../assets/img/";
$nombre_imagen = "encabezados.".pathinfo($_FILES['imagen']['name'],PATHINFO_EXTENSION);
$ruta_guardar_archivo=$ruta_carpeta.$nombre_imagen;
if(unlink($ruta_guardar_archivo)){
    if(move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta_guardar_archivo))
    {
    $conn = abrirBD();
    $query = "UPDATE ENCABEZADO SET TITULO_PAG = '$tituloenc', ENCABEZADO_IMG = '$encimg', DESCRIPCION_IMG = '$descrimg', IMG_PRINCIPAL = '$nombre_imagen'";
    $sentencia_preparada1 = $conn->prepare($query);
    $sentencia_preparada1->bind_param('ssss',$titenc,$enimg,$desimg,$imagen);
    $titenc = $tituloenc;
    $enimg = $encimg;
    $desimg = $descrimg;
    $imagen = $nombre_imagen;
    $sentencia_preparada1->execute();
    echo "Encabezado modificado Exitosamente";
    }else
    {
        echo "no se pudo";
    }
    
}
else{
    
}
$conn->close();
?>