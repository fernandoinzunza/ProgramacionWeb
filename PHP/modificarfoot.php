<?php
require_once('Clases/conexion.php');
$copy = $_POST['copy'];
$contacto = $_POST['contacto'];
$redes = $_POST['redes'];
$conn = abrirBD();
$query = "UPDATE FOOTER SET COPYRIGHT = '$copy', CONTACTO = '$contacto', REDESSOCIALES = '$redes'";
$sentencia_preparada1 = $conn->prepare($query);
$sentencia_preparada1->bind_param('sss',$cop,$contac,$red);
$cop = $copy;
$contac = $contacto;
$red = $redes;
$sentencia_preparada1->execute();
echo "footer modificado Exitosamente";
$conn->close();
?>