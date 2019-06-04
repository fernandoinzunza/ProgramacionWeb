<?php
require_once('../PHP/Clases/conexion.php');
$conn = abrirBD();
$sql = "SELECT principal, secundario, facebook, instagram, twitter FROM about";
$conn = abrirBD();
$resultado = $conn->query($sql);
while($resul = mysqli_fetch_array($resultado)){ 
    $quisom = $resul[0];
    $mivi = utf8_encode($resul[1]);
    $fb = utf8_encode($resul[2]);
    $ig = utf8_encode($resul[3]);
    $tw = utf8_encode($resul[4]);
    }
$conn->close();  
?>
<h1>About</h1>

<head>
    <script src="../js/abouta.js"></script>
</head>
<div>
    <form id="seccion" method="post" enctype="multipart/form-data" role="form" data-toggle="validator">
        <div class="form-row filtros">
            <div class="md-form">
                <div class="row">
                    <div class="form-group col-md-12 has-feedback">
                        <h4 class="lead">
                            ¿Quienes somos?
                            <textarea type="text" class="form-control" name="quiensom" id="quiensom"
                            placeholder="Ingresar" required onkeypress="return soloLetras(event)"><?php echo $quisom?></textarea>
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12 has-feedback">
                        <h4 class="lead">
                            Misión y Visión
                            <textarea type="text" class="form-control" name="misionvision" id="misivisi"
                            placeholder="Ingresar" required onkeypress="return soloLetras(event)"><?php echo $mivi?></textarea>
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4 has-feedback">
                        <h4 class="lead">
                            Facebook
                            <input data-error="Ingresa un dato" type="text" class="form-control" name="facebook" id="face" placeholder="Ingresar" value="<?php echo $fb?>" required onkeypress="return soloLetras(event)">
                            
                        </h4>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-md-4 has-feedback">
                        <h4 class="lead">
                            Instagram
                            <input data-error="Ingresa un dato" type="text" class="form-control" name="instagram" id="insta" placeholder="Ingresar" value="<?php echo $ig?>" required onkeypress="return soloLetras(event)">
                            
                        </h4>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-md-4 has-feedback">
                        <h4 class="lead">
                            Twitter
                            <input data-error="Ingresa un dato" type="text" class="form-control" name="twitter" id="twitter" placeholder="Ingresar" value="<?php echo $tw?>" required onkeypress="return soloLetras(event)">
                            
                        </h4>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="row">
                    <div style="width: 18rem; margin: 0 auto;">
                        <button type="submit" class="btn btn-success" id="buttonguardar">Guardar Cambios</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>