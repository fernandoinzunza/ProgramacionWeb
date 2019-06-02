<?php 
require_once('Clases/conexion.php');
$conn = abrirBD();
$tabla ="";
$query = "SELECT *FROM articulos";
if(isset($_POST['busqueda']))
{
	$q=$conn->real_escape_string($_POST['busqueda']);
	$query="SELECT * FROM articulos WHERE 
	    CODIGO LIKE '%".$q."%' OR
		TITULO LIKE '%".$q."%' OR
        CATEGORIA LIKE '%".$q."%' OR
        AUTOR LIKE '%".$q."%' OR
        DESCRIPCION LIKE '%".$q."%' OR
        PRECIO LIKE '%".$q."%' OR
        UNIDADES LIKE '%".$q."%' OR
		IMAGEN LIKE '%".$q."%'";
}
$buscarUsuarios=$conn->query($query);
if ($buscarUsuarios->num_rows > 0)
{
	while($fila= $buscarUsuarios->fetch_assoc())
	{
		$tabla.=
		'<tr>
            <td><span id ="codigo"</span>'.utf8_encode($fila['codigo']).'</td>
            <td><span id = "titulo'.$fila['codigo'].'"</span>'.utf8_encode($fila['titulo']).'</td>   
			<td><span id = "categoria'.$fila['codigo'].'"</span>'.utf8_encode($fila['categoria']).'</td>
			<td><span id = "autor'.$fila['codigo'].'"</span>'.utf8_encode($fila['autor']).'</td>
            <td><span id = "descripcion'.$fila['codigo'].'"</span>'.utf8_encode($fila['descripcion']).'</td>
			<td><span id = "precio'.$fila['codigo'].'"</span>'.utf8_encode($fila['precio']).'</td>
			<td><span id = "unidades'.$fila['codigo'].'"</span>'.utf8_encode($fila['unidades']).'</td>
			<td><span id = "imagen'.$fila['codigo'].'"</span>'.utf8_encode($fila['imagen']).'</td>
			<td><div class="font-icon-list">
			<div class="font-icon-detail"><button type="button" id="mostrar2" value="'.$fila['codigo'].'" ><i class="pe-7s-diskette"></i></button>
			</div></div></td>
			<td><div class="font-icon-list">
			<a><div class="font-icon-detail"><button type="button" id="elim2" value="'.$fila['codigo'].'" data-toggle="modal" data-target="#borrar" ><i class="pe-7s-delete-user"></i></button>
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
