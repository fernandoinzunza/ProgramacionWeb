<?php 
require_once('Clases/conexion.php');
$conn = abrirBD();
$tabla ="";
$query = "SELECT *FROM compras";
if(isset($_POST['busqueda']))
{
	$q=$conn->real_escape_string($_POST['busqueda']);
	$query="SELECT * FROM compras WHERE
        FOLIO LIKE '%".$q."%' OR
        CORREO LIKE '%".$q."%' OR 
	    COD_ART LIKE '%".$q."%' OR
		TITULO LIKE '%".$q."%' OR
        DESCRIPCION LIKE '%".$q."%' OR
        PRECIO LIKE '%".$q."%' OR
        UNIDADES LIKE '%".$q."%' OR
		IMAGEN_ART LIKE '%".$q."%'";
}
$buscarUsuarios=$conn->query($query);
if ($buscarUsuarios->num_rows > 0)
{
	while($fila= $buscarUsuarios->fetch_assoc())
	{
		$tabla.=
		'<tr>
            <td><span id ="folio"</span>'.utf8_encode($fila['folio']).'</td>
            <td><span id = "correo'.$fila['folio'].'"</span>'.utf8_encode($fila['correo']).'</td>
			<td><span id = "cod_art'.$fila['folio'].'"</span>'.utf8_encode($fila['cod_art']).'</td>
            <td><span id = "titulo'.$fila['folio'].'"</span>'.utf8_encode($fila['titulo']).'</td>
            <td><span id = "descripcion'.$fila['folio'].'"</span>'.utf8_encode($fila['descripcion']).'</td>
			<td><span id = "precio'.$fila['folio'].'"</span>'.utf8_encode($fila['precio']).'</td>
			<td><span id = "unidades'.$fila['folio'].'"</span>'.utf8_encode($fila['unidades']).'</td>
			<td><span id = "imagen_art'.$fila['folio'].'"</span>'.utf8_encode($fila['imagen_art']).'</td>
		 </tr>
		';
		
		
	}
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}
	echo $tabla;
?>