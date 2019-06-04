<?php
require_once('../PHP/Clases/conexion.php');
$conn = abrirBD();
$sql = "SELECT titulo_pag,encabezado_img,descripcion_img,img_principal FROM encabezado";
$conn = abrirBD();
$resultado = $conn->query($sql);
while($resul = mysqli_fetch_array($resultado)){ 
    $titulopag = $resul[0];
    $encimg = utf8_encode($resul[1]);
    $descrimg = utf8_encode($resul[2]);
    $imagenes = $resul[3];
    }
$conn->close();
?>
<h1>Encabezado</h1>
<head>
    <script src="../js/primeraseccion.js"></script>
</head>
<div>
    <form id="seccion" method="post" enctype="multipart/form-data" role="form" data-toggle="validator">
        <div class="form-row filtros" >
            <div class="md-form">
                <div class="row">
                    <div class="form-group col-md-6 has-feedback">
                        <h4 class="lead">
                            Titulo de la página:
                        </h4>
                        <input data-error="Ingresa un titulo a la pagina" type="text" class="form-control" name="busqueda" id="tituloenc" placeholder="Ingresar" value="<?php echo $titulopag?>" onkeypress="return soloLetras(event)" required>
                            <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-md-6 has-feedback">
                        <h4 class="lead">
                            Encabezado de imagen:
                        </h4>
                        <input data-error="Ingresa un Encabezado" type="text" class="form-control" name="busqueda" id="encimg" placeholder="Ingresar"value="<?php echo $encimg?>" required onkeypress="return soloLetras(event)">
                            <div class="help-block with-errors"></div>
                    </div>
                </div>
                <!-- Comentario-->
                <div class="row">
                    <div class="form-group col-md-12 has-feedback">
                        <h4 class="lead">
                            Descripcion de imagen:
                        </h4>
                        <textarea data-error="Ingresa una Descripcion" type="text" class="form-control" name="busqueda" id="descrimg"
                                placeholder="Ingresar" required onkeypress="return soloLetras(event)" required><?php echo $descrimg?></textarea>
                                <div class="help-block with-errors"></div>
                    </div>
                </div>
                    <div class="card text-center" style="width: 18rem; margin: 0 auto;">
                        <img class="card-img-top" style="width: 18rem;" src="img/<?php echo $imagenes?>"
                            alt="Card image cap" id="referencia">
                        <div class="card-body">
                            <h5 class="card-title">Imagen principal</h5>
                            <label class="custom-file" id="customFile">
                                <input  type="file" class="form-control" name="imagen" id="imagen">
                                <span class="custom-file-control form-control-file"></span>
                            </label>
                        </div>
                    </div>
            </div>
        </div>
        <div class ="justify-content-center">
            <button type="submit" class="btn btn-success" id="btnencabezado">Guardar</button>
        </div>
    </form>
</div>