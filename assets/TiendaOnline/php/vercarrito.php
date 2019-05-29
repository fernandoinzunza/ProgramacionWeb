<?php 
session_start();
$tabla ="";
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
		 </tr>
		';
		
		
	}
} else
	{
		$tabla="No se hay articulos";
	}
	echo $tabla;
?>