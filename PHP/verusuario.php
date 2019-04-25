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
    
	$tabla.= 
	'<table class="table table-hover table-striped">
    <thead class="encabezado">
    <tr>
        <th class="lead">UserName</th>
        <th class="lead">Contraseña</th>
        <th class="lead">Correo</th>
        <th class="lead">Nombre</th>
        <th class="lead">Apellido_Paterno</th>
		<th class="lead">Apellido_Materno</th>
        <th class="lead">Modificar</th>
        <th class="lead">Borrar</th>
    </tr>
</thead>';
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
			<td><div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
			<div class="font-icon-detail"><i class="pe-7s-diskette"></i>
			</div></td>
			<td><div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
			<div class="font-icon-detail"><i class="pe-7s-delete-user"></i>
			</div><td>
		 </tr>
		';
		
		
	}
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}
	echo $tabla;
?>