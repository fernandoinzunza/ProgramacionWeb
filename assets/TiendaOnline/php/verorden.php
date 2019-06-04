<?php 
session_start();
$tabla ="";
if (isset($_SESSION['carrito']))
{
    $arreglo = $_SESSION['carrito'];
	foreach($arreglo as $key => $fila)
	{
        $artotal = $fila['precios'] * $fila['cantidad'];
		$tabla.=
		'<tr>   
			<td>'.$fila['titulos'].'</td>
			<td>'.$fila['cantidad'].'</td>
			<td><strong class="mx-2">$</strong>'.$artotal.'</td>
		 </tr>
		';
	}
} else
	{
		$tabla="No hay articulos";
	}
	echo $tabla;
?>