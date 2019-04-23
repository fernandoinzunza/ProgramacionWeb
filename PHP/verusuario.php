<?php 
require_once('Clases/conexion.php');
$conn = abrirBD();
$tabla ="";
$query = "SELECT *FROM usuarios";
if(isset($_POST['busqueda']))
{
	$q=$conn->real_escape_string($_POST['busqueda']);
	$query="SELECT * FROM usuarios WHERE 
		USERNAME LIKE '%".$q."%' OR
		PASS LIKE '%".$q."%' OR
        CORREO LIKE '%".$q."%' OR
        NOMBRE LIKE '%".$q."%' OR
        AP_PAT LIKE '%".$q."%' OR
		AP_MAT LIKE '%".$q."%'";
}
$buscarUsuarios=$conn->query($query);
if ($buscarUsuarios->num_rows > 0)
{
    
	while($fila= $buscarUsuarios->fetch_assoc())
	{
		$tabla.=
		'<tr>
            <td>'.utf8_encode($fila['username']).'</td>
            <td>'.utf8_encode($fila['pass']).'</td>   
			<td>'.utf8_encode($fila['correo']).'</td>
			<td>'.utf8_encode($fila['nombre']).'</td>
			<td>'.utf8_encode($fila['ap_pat']).'</td>
            <td>'.utf8_encode($fila['ap_mat']).'</td>
		 </tr>
		';
		
		
	}
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}
	echo $tabla;
?>