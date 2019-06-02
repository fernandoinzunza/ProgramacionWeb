<?php 
    require_once('conexion.php');
    require_once('articulo.php');
    $actual = $_POST['actual'];
    $nuevo = $_POST['nuevo'];
    $seleccionado = new Articulo();
    $seleccionado->obtenerDatosPorCodigo($nuevo,$seleccionado);
    $conn = abrirBD();
    $sql = "UPDATE EDITAR_CARRUSEL SET ID_IMG='$seleccionado->Imagen',TITULO_LIBRO='$seleccionado->Titulo',AUTOR='$seleccionado->Autor',PRECIO='$seleccionado->Precio',ID='$seleccionado->Codigo' WHERE ID = '$actual'";
    $conn->query($sql);
    $resul = array();
    $resul[0] = $seleccionado->Imagen;
    $resul[1] = $seleccionado->Titulo;
    $resul[2] = $seleccionado->Autor;
    $resul[3] = $seleccionado->Precio;
    echo json_encode($resul);
    
?>