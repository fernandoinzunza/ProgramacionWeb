<?php
require_once('../PHP/Clases/conexion.php');
$conn = abrirBD();
$sql = "SELECT copyright, contacto, redessociales FROM footer";
$conn = abrirBD();
$resultado = $conn->query($sql);
while($resul = mysqli_fetch_array($resultado)){ 
    $copy = utf8_encode($resul[0]);
    $contactos = utf8_encode($resul[1]);
    $redes = utf8_encode($resul[2]);
    }
$conn->close();
?>

<h2>Footer</h2>

<head>
    <script src="../js/cuartaseccion.js"></script>
</head>
<div>
    <form id="seccion" method="post" enctype="multipart/form-data" role="form" data-toggle="validator">    
        <div class="form-row filtros" >
            <div class="md-form">
                <div class="row">
                    <div class="form-group col-md-12 has-feedback">
                        <h4 class="lead">
                            Creditos y Copyright:
                            <input data-error="Ingresa a quien(es) pertenece la página" type="text" class="form-control" name="busqueda" id="copy" placeholder="Ingresar" value="<?php echo $copy?>" onkeypress="return soloLetras(event)" required>
                        </h4>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12 has-feedback">
                        <h4 class="lead">
                            Información de contacto:
                            <textarea type="text" class="form-control" name="busqueda" id="contacto"
                            placeholder="Ingresar"><?php $contactos?></textarea>
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12 has-feedback">
                        <h4 class="lead">
                            Redes Sociales:
                            <input data-error="Ingresa las redes sociales" type="text" class="form-control" name="busqueda" id="redes" placeholder="Ingresar" value="<?php echo $redes?>" onkeypress="return soloLetras(event)" required>
                        </h4>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="row">
                    <div style="width: 18rem; margin: 0 auto;">
                        <button type="submit" class="btn btn-success" id="btnguardar">Guardar Cambios</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>