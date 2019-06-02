<?php 
require_once('conexion.php');
$conn = abrirBD();
$tabla ="";
$query = "SELECT *FROM articulos";
$buscarUsuarios=$conn->query($query);
if ($buscarUsuarios->num_rows > 0)
{
	while($fila= $buscarUsuarios->fetch_assoc())
	{
		$tabla.=
		'<tr>
            <td><button type="button" class="btn btn-link" id="cambiarImg" data-id="'.$fila['codigo'].'">'.utf8_encode($fila['codigo']).'</button></td>
            <td><span id = "titulo'.$fila['codigo'].'"></span>'.utf8_encode($fila['titulo']).'</td>   
			<td><span id = "categoria'.$fila['codigo'].'"></span>'.utf8_encode($fila['categoria']).'</td>
			<td><span id = "autor'.$fila['codigo'].'"></span>'.utf8_encode($fila['autor']).'</td>
		 </tr>
		';
		
		
	}
} else
	{
		$tabla="No hay registro de articulos en el sistema";
	}
	echo $tabla;
?>
