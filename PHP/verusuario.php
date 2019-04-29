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
            <td><span id ="username"</span>'.utf8_encode($fila['username']).'</td>
            <td><span id = "pass'.$fila['username'].'"</span>'.utf8_encode($fila['pass']).'</td>   
			<td><span id = "correo'.$fila['username'].'"</span>'.utf8_encode($fila['correo']).'</td>
			<td><span id = "nombre'.$fila['username'].'"</span>'.utf8_encode($fila['nombre']).'</td>
			<td><span id = "appat'.$fila['username'].'"</span>'.utf8_encode($fila['ap_pat']).'</td>
			<td><span id = "apmat'.$fila['username'].'"</span>'.utf8_encode($fila['ap_mat']).'</td>
			<td><div class="font-icon-list">
			<div class="font-icon-detail"><button type="button" id="mostrar" value="'.$fila['username'].'" ><i class="pe-7s-diskette"></i></button>
			</div></div></td>
			<td><div class="font-icon-list">
			<a><div class="font-icon-detail"><button type="button" id="elim" value="'.$fila['username'].'" data-toggle="modal" data-target="#borrar" ><i class="pe-7s-delete-user"></i></button>
			<a/></div></div><td>
		 </tr>
		';
		
		
	}
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}
	echo $tabla;
?>