<?php 
require_once('conexion.php');
$conn = abrirBD();
$tabla ="";
$query = "SELECT *FROM articulos";
$buscarUsuarios=$conn->query($query);
$selec = $_POST['seleccionado'];
$consultaCarrusel = "SELECT * FROM EDITAR_CARRUSEL";
$res = $conn->query($consultaCarrusel);
$articulosDelCarrusel = array();
$x = 0;
while($row = $res->fetch_assoc())
{
	$articulosDelCarrusel[$x] = $row['id'];
	$x++;
}
if ($buscarUsuarios->num_rows > 0)
{
	while($fila= $buscarUsuarios->fetch_assoc())
	{
		
		$tabla.=
		'<tr>';
		if($fila['codigo']!=$selec)
		{
			$band = false;
			for($i = 0; $i<count($articulosDelCarrusel);$i++)
			{
				if($fila['codigo'] == $articulosDelCarrusel[$i])
					$band = true;
			}
			if(!$band)
			{
				$tabla.= '<td>
		  		<button type="button" class="btn btn-link" id="cambiarImg" data-id="'.$fila['codigo'].'">'.utf8_encode($fila['codigo']).'</button>
			  </td>';
			}
			else{
				$tabla.= '<td>
		  		<button type="button" disabled class="btn btn-link" id="cambiarImg" data-id="'.$fila['codigo'].'">'.utf8_encode($fila['codigo']).'</button>
			  </td>';
			}
			
		}
		else
		{
			$tabla.= '<td>
		  	<button type="button" disabled class="btn btn-link" id="cambiarImg" data-id="'.$fila['codigo'].'">'.utf8_encode($fila['codigo']).'</button>
			  </td>';
		}
		$tabla.=  '<td><span id = "titulo'.$fila['codigo'].'"></span>'.utf8_encode($fila['titulo']).'</td>   
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
