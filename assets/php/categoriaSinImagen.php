<?php
require_once('conexion.php');
$conn = abrirBD();
$numero = $_POST['numero'];
$categoria = $_POST['categoria'];
$update ="UPDATE EDITAR_CATEGORIAS SET CATEGORIA='$categoria' where numero ='$numero'";
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

if($resultado>0)
{
    $conn->query($update);
    echo "Se edito";
}
else{
    echo "La categoría seleccionada no existe!";
}

?>