<?php 
session_start();
require_once('../../../php/Clases/conexion.php');
  if(!isset($_SESSION['ingresar'])){
    $correo="";
    } else{
    require_once('../../../php/Clases/usuario.php');
    $usuario = new Usuario();
    $user = $_SESSION['username'];
    $usuario->ObtenerDatos($user,$usuario);
    $name = $usuario;
    $nombre = utf8_encode($usuario->Nombre);
    $appat = utf8_encode($usuario->Ap_Pat);
    $apmat = utf8_encode($usuario->Ap_Mat);
    $correo = utf8_encode($usuario->Correo);
    }
$tabla ="";
$conn = abrirBD();
$sql = "SELECT * FROM compras where correo = '$correo'";
$resultado=$conn->query($sql);
if ($resultado->num_rows > 0)
{
	while($fila = $resultado->fetch_assoc())
	{
		
		$tabla.=
		'<tr>
            <td>'.$fila['folio'].'</td>   
            <td>'.$fila['correo'].'</td>
            <td>'.$fila['cod_art'].'</td>   
			<td>'.$fila['titulo'].'</td>
			<td>'.$fila['descripcion'].'</td>
			<td>'.$fila['precio'].'</td>
			<td>'.$fila['unidades'].'</td>
			<td><img src="../img/'.$fila['imagen_art'].'" style="width: 6rem;"></td>
		 </tr>
		';
	}
} else
	{
		$tabla="No se hay articulos";
	}
	echo $tabla;
?>