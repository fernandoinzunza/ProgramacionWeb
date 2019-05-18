<!doctype html>
<?php
session_start();
if($_SESSION['loguear']!='SI'){
    header("Location: log.php");
}
require_once('../php/Clases/conexion.php');
require_once('../php/Clases/admin.php');
$admin = new Admin();
$user = $_SESSION['usuario'];
$admin->ObtenerDatos($user,$admin);
$name = $user;
$nombre = utf8_encode($admin->Usuario);
echo $nombre;

?>
<?php include('modal.php');?>
<?php include('modal2.php');?>
<html lang="en" ng-app='rutas'>
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Proyecto</title>
    <base href="/ProgWeb/assets/"/>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

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
    <script src="../js/custom.js"></script>
    <script src="../js/modificar.js"></script>
    <script src="../js/regart.js"></script>
    <script src="../js/eliminar.js"></script>
    <script src="../js/modalarticulo.js"></script>
    <script src="../js/modificararticulo.js"></script>
    <script src="../js/eliminararticulo.js"></script>
    <script src="js/style.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="blue">

            <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
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
                            <a href="#/articulos" class="hvr-wobble-horizontal dropdown-toggle">
                                <i class="pe-7s-wallet"></i>
                                <p>Articulos</p>
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
                    <p class="copyright pull-right">
                        &copy;
                        <script>document.write(new Date().getFullYear())</script> <a
                            href="http://www.creative-tim.com">Copyright</a>, made with love for a better web
                    </p>
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
        <div class="modal fade" id="mensaje" tabindex="-1" role="dialog" aria-label="modalLabel" aria-hidden="true">
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
                                <div class="modal-body" id="mens">
                                </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-primary lead" id="" name="" data-dismiss="modal">Aceptar</button>
                                  </div>
                                </div>
                            </div>
                        </div>
            
        </div>
<div class="modal fade bd-example-modal-lg animated rubberBand" id="regisart" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Articulos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
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
                                            <form id="form" class="needs-validation" novalidate>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                                <label>Codigo</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Codigo" id="codi" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                                <label>Titulo</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Titulo" id="titu" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label >Categoria</label>
                                                            <input type="text" class="form-control" placeholder="Categoria"
                                                                id="cate" required>
                                                                
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Autor</label>
                                                            <input type="text" class="form-control" placeholder="Autor"
                                                                id="auto" required>
                                                                
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Descripcion</label>
                                                            <br>
                                                            <textarea name="descripcion" id="descrip" form="form" rows="4" cols="110">

                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Precio</label>
                                                            <input type="text" class="form-control" placeholder="Precio"
                                                                id="prec" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Unidades</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Unidades" id="unid" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-12">
                                                            <label>Imagen</label>
                                                            <input type="file" class="btn btn-info"
                                                                name="uploadedfile" id="imagenes" required>
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
        </div>
</div>
</body>



</html>