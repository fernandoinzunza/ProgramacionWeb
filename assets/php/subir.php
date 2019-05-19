<?php 
$ruta_carpeta="../img/";
$nombre_imagen = "imagenPrincipal".date('dHis').".".pathinfo($_FILES['imagen']['name'],PATHINFO_EXTENSION);
$ruta_guardar_archivo=$ruta_carpeta.$nombre_imagen;
if(move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta_guardar_archivo))
{
    echo "img/".$ruta_guardar_archivo;
}
else
{
    echo "no se pudo";
}

?>