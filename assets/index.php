<!doctype html>
<html lang="en" ng-app='rutas'>
<?php
session_start();
if($_SESSION['loguear']!='SI'){
    header("Location: log.php");
}
require_once('../php/Clases/conexion.php');
require_once('../php/Clases/admin.php');
$name = "pepe";
echo $name;
$sql = "SELECT username,pass,Correo,Nombre,Ap_Pat,Ap_Mat FROM usuarios WHERE username='$name'";
$conn = abrirBD();
$resultado = $conn->query($sql);
while($resul = mysqli_fetch_array($resultado)){ 
    $name = $resul[0];
    $contraseña = $resul[1];
    $correo = $resul[2];
    $Nombrea = $resul[3];
    $Ape_pat = $resul[4];
    $Ape_mat = $resul[5];
    }
$conn->close();  
$admin = new Admin();
$usuario = $_SESSION['usuario'];
$admin->ObtenerDatos($usuario,$admin);
$user = $usuario;
$nombre = utf8_encode($admin->Usuario);
?>

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Proyecto</title>
    <base href="/proyectoweb/ProgramacionWeb/assets/"/>
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
    <script src="js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    
    <script src="js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="js/demo.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <script src="http://code.angularjs.org/1.3.14/angular-route.min.js"></script>
    <script src="http://code.angularjs.org/1.3.14/i18n/angular-locale_es-es.js"></script>
    <script src="rutas.js"></script>
    <script src="js/style.js"></script>
    <script src="../js/modificar.js"></script>
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
    <!--Modal de Modificar-->
    <div class="modal fade bd-example-modal-lg animated rubberBand" id="modificar" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modificar</h5>
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
                                            <h4 class="title">Modificar cuenta</h4>
                                        </div>
                                        <div class="content">
                                            <form id="form" class="needs-validation" novalidate>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                                <label>Username</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Username" id="user" value="<?php echo $name;?>" required>
                                                                <div class="invalid-feedback">Ingresa tu nombre!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">

                                                                <label for="exampleInputEmail1">Password</label>
                                                                <input type="password" class="form-control"
                                                                    placeholder="Password" id="pass" value="<?php echo $contraseña;?>" required>
                                                                <div class="invalid-feedback">Escoge una contraseña!
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Correo electrónico</label>
                                                            <input type="email" class="form-control" placeholder="Email"
                                                                id="email" value="<?php echo $correo;?>" required>
                                                                <div class="invalid-feedback">Ingresa un correo!
                                                                    </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Nombre(s)</label>
                                                            <input type="text" class="form-control" placeholder="Nombre"
                                                                id="nombre" value="<?php echo $Nombrea;?>" required>
                                                                <div class="invalid-feedback">Ingresa tu nombre!
                                                                    </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Apellido Paterno</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Apellido Paterno" id="appat" value="<?php echo $Ape_pat;?>" required>
                                                                <div class="invalid-feedback">Ingresa tu apellido paterno!
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Apellido Materno</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Apellido Materno" id="apmat" value="<?php echo $Ape_mat;?>" required>
                                                                <div class="invalid-feedback">Ingresa tu apellido materno!
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
                            <button type="submit" id="modificar" class="btn btn-outline-success hvr-pulse-shrink">Modificar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        <!--Modal de Eliminar-->
        <div class="modal fade" id="Eliminar" tabindex="-1" role="dialog" aria-label="modalLabel" aria-hidden="true">
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
                            <a class="btn btn-warning lead" href="#"style="color:red;">Aceptar</a>
                            <button type="button" class="btn btn-primary lead" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
    </div>
</body>



</html>