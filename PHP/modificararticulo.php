<?php
require_once('Clases/admin.php');
require_once('Clases/conexion.php');
$articulo = new Admin();
$articulo->SetCodigo(strip_tags($_POST['cod']));
$articulo->SetTitulo(strip_tags($_POST['tit']));
$articulo->SetCategoria(strip_tags($_POST['cat']));
$articulo->SetAutor(strip_tags($_POST['aut']));
$articulo->SetDescripcion(strip_tags($_POST['des']));
$articulo->SetPrecio(strip_tags($_POST['pc']));
$articulo->SetUnidades(strip_tags($_POST['uni']));
$codi = $_POST['cod'];
$conn = abrirBD();
$sql = "SELECT IMAGEN FROM ARTICULOS WHERE CODIGO ='$codi'";
$resultado = $conn->query($sql);
while($resul = mysqli_fetch_array($resultado)){
    $img = $resul[0];
}
if(isset($_POST['img'])){
    $articulo->setImagen(strip_tags($img));
    $articulo->ActualizarArticulo($articulo);

}else{
    $ruta_carpeta="../assets/img/";
    $imagenborrar = $ruta_carpeta.$img;
    $nombre_imagen = $_POST['cod'].".".pathinfo($_FILES['img']['name'],PATHINFO_EXTENSION);
    $ruta_guardar_archivo=$ruta_carpeta.$nombre_imagen;
    if(unlink($imagenborrar)){
        if(move_uploaded_file($_FILES['img']['tmp_name'],$ruta_guardar_archivo))
    {
        $articulo->setImagen(strip_tags($nombre_imagen));
    }
    else
    {
        echo "no se pudo";
    }
    $articulo->ActualizarArticulo($articulo);
    echo "Articulo modificado Exitosamente";
    }
    else{
        echo "no se pudo";
    }
}
?>