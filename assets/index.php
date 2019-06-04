<!doctype html>
<?php
session_start();
if($_SESSION['loguear']!='SI'){
    header("Location: ../log.php");
}
require_once('../php/Clases/conexion.php');
require_once('../php/Clases/admin.php');
$admin = new Admin();
$user = $_SESSION['usuario'];
$admin->ObtenerDatos($user,$admin);
$name = $user;
$nombre = utf8_encode($admin->Usuario);

?>
<?php include('modal.php');?>
<?php include('modal2.php');?>
<?php include('imagenModal.php');?>
<?php include('modalCarrusel.php');?>
<?php include('modalError.php');?>
<html lang="en" ng-app='rutas'>
<head>
<meta charset="UTF-8">   
 <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Proyecto</title>
    <base href="/ProgWeb/assets/"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
          <!-- Bootstrap core CSS     -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <!--  Light Bootstrap Table core CSS    -->
    <link href="css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />
    <link href="css/animate.min.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">

    <!--   Core JS Files   -->
    <script
  src="https://code.jquery.com/jquery-3.4.0.js"
  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
  crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="js/demo.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <script src="http://code.angularjs.org/1.3.14/angular-route.min.js"></script>
    <script src="http://code.angularjs.org/1.3.14/i18n/angular-locale_es-es.js"></script>
    <script src="rutas.js"></script>
    <script src="js/SubirImagen.js"></script>
    <script src="../js/custom.js"></script>
    <script src="../js/modificar.js"></script>
    <script src="../js/regart.js"></script>
    <script src="../js/eliminar.js"></script>
    <script src="../js/eliminararticulo.js"></script>
    <script src="js/style.js"></script>
    <script src="js/imagenesCarrusel.js"></script>
    <script src="../js/modalarticulo.js"></script>
    <script src="../js/modificararticulo.js"></script>
    <script src="../js/validator.js"></script>
    
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="blue">

        <!--Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag
        -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#/" class="simple-text">
                        Tienda online
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a href="#/gestor" class="hvr-wobble-horizontal">
                            <i class="pe-7s-settings"></i>
                            <p>Gestor de contenido</p>
                        </a>
                    </li>
                    <li>
                        <a href="#/usuarios" class="hvr-wobble-horizontal">
                            <i class="pe-7s-user"></i>
                            <p>Usuarios</p>
                        </a>
                    </li>
                    <li>
                        <a href="#/articulos" class="hvr-wobble-horizontal">
                            <i class="pe-7s-wallet"></i>
                            <p>Articulos</p>
                        </a>
                    </li>
                    <li>
                        <a href="#/compras" class="hvr-wobble-horizontal">
                            <i class="pe-7s-cart"></i>
                            <p>Compras</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
                <nav class="navbar navbar-default navbar-fixed">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="">Panel de control</a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                      <a id="usuario" href=""class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <p></p><?php echo $nombre?>
                                                <b class="caret"> 
                                                
                                                </b>
                                        </a>
                                      <ul class="dropdown-menu "aria-labelledby="usuario">
                                        <li>
                                            <a  data-toggle="modal" href="#cerrar">
                                                Cerrar Session
                                            </a>
                                        </li>
                                        <li><a href="#">Ver perfil</a></li>
                                      </ul>
                                </li>
                                <li class="separator hidden-lg"></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            <div class="content">
                <div class="container-fluid">
                    <div ng-view>
                        
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>

                        </ul>
                    </nav>

                </div>
            </footer>

        </div>
    </div>
    <div class="modal fade" id="cerrar" tabindex="-1" role="dialog" aria-label="modalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="modalLabel">
                                Mensaje del Sistema
                            </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row mt-2 justify-content-center">
                                ¿Seguro que desea cerrar la sesión?
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-warning lead" href="../php/cerrarsesion.php"style="color:red;">Aceptar</a>
                            <button type="button" class="btn btn-primary lead" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
    </div>
<div class="modal fade" id="borrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Mensaje</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Seguro que desea eliminar
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-danger" name="eliminar" id="eliminar" data-dismiss="modal">Confirmar</button>
                        
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="modal fade" id="msjsis" tabindex="-1" role="dialog" aria-label="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalLabel">
                    Mensaje del Sistema
                </h4>
                <button type="button" class="close" data-dismiss="modal" id="" name="" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="msjbody">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary lead" id="" name="" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg animated rubberBand" id="regisart" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" role="form" id="forms" enctype="multipart/form-data" data-toggle="validator">
                <div class="modal-body">
                    <div class="">
                        <div class="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="header">
                                            <h4 class="title">Registrar Articulo</h4>
                                        </div>
                                        <div class="content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                                <label>Codigo</label>
                                                                <input data-error="ingrese un código de articulo" type="text" class="form-control"
                                                                    placeholder="Codigo" id="codi" required onkeypress="return soloLetrasynumeros(event)" required>
                                                                    <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                                <label>Titulo</label>
                                                                <input type="text" class="form-control" data-error="Ingrese un titulo"
                                                                    placeholder="Titulo" id="titu" required onkeypress="return soloLetras(event)" required>
                                                                    <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label >Categoria</label>
                                                            <select class="form-control" name="cate" id="cate" requirerd>
                                                                <option value="Drama" selected>Drama</option>
                                                                <option value="Infantil">Infantil</option>
                                                                <option value="Misterio">Misterio</option>
                                                                <option value="Terror">Terror</option>
                                                                <option value="Horror">Horror</option>
                                                                <option value="Romance">Romance</option>
                                                                <option value="Comedia">Comedia</option>
                                                                <option value="Ciencia Ficcion">Ciencia Ficcion</option>
                                                                <option value="Aventura">Aventura</option>
                                                                <option value="Cuentos">Cuentos</option>
                                                            </select>
                                                                <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label>Autor</label>
                                                            <input type="text" class="form-control" placeholder="Autor" data-error="Ingresa un Autor"
                                                                id="auto" required onkeypress="return soloLetras(event)" required>
                                                                <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group has-feedback">
                                                            <label>Descripcion</label>
                                                            <br>
                                                            <textarea data-error="Ingresa una Descripcion" class="form-control" name="descripcion" id="descrip" form="form" rows="4" cols="90 " required>
                                                            </textarea>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group has-feedback">
                                                            <label>Precio</label>
                                                            <input type="text" class="form-control validanumericos" placeholder="Precio" data-error="Ingresa un precio"
                                                                id="prec" required>
                                                                <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group has-feedback">
                                                            <label>Unidades</label>
                                                            <input data-error="Ingresa una Cantidad" type="text" class="form-control validanumericos"
                                                                placeholder="Unidades" id="unid" required>
                                                                <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                        <div class="col-sm-2">
                                                            <div class="form-group has-feedback">
                                                                    <label class="custom-file" id="customFile">Imagen</label>
                                                                    <input data-error="Ingresa una imagen" type="file" class="btn btn-primary" name="imagen" id="imagenes" required>
                                                                    <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary hvr-shrink" data-dismiss="modal">Cerrar</button>
                            <button type="submit" id="regart" class="btn btn-success">Registrar</button>
                        </div>
                </form>
            </div>
        </div>
</div>
</body>
<script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>
<script>
    function soloLetrasynumeros(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz1234567890";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>
<script language="javascript">
$(function(){

$('.validanumericos').keypress(function(e) {
  if(isNaN(this.value + String.fromCharCode(e.charCode))) 
   return false;
})
.on("cut copy paste",function(e){
  e.preventDefault();
});

});
</script>
</html>