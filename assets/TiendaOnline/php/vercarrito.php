<?php 
session_start();
$tabla ="";
$i = 0;
if (isset($_SESSION['carrito']))
{
    $arreglo = $_SESSION['carrito'];
	foreach($arreglo as $key => $fila)
	{
		
		$tabla.=
		'<tr>
            <td><img src="../img/'.$fila['imagenes'].'" style="width: 6rem;"></td>
            <td>'.$fila['codigos'].'</td>   
			<td>'.$fila['titulos'].'</td>
			<td>'.$fila['des'].'</td>
			<td>'.$fila['precios'].'</td>
			<td>'.$fila['cantidad'].'</td>
			<td><a><button type="button" class="btn btn-danger" id="eliminarcarrito" type="button" data-id="'.$i.'" value="'.$i.'" data-toggle="modal" data-target="#eliminarcar" >X</button></a></td>
		 </tr>
		';
		
		$i++;
	}
} else
	{
		$tabla="No se hay articulos";
	}
	echo $tabla;
?>