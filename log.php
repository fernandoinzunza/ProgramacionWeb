<!doctype html>
<html lang="en">
<?php
session_start();
if(isset($_SESSION['loguear']))
{
    if($_SESSION['loguear']=='SI'){
            header("Location: log.php");
        }
}
elseif(isset($_SESSION['ingresar']))
{
    if($_SESSION['ingresar']=='SI'){
        header("Location: assets/TiendaOnline/index.html ");
    }
}
?>
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Proyecto</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">
    <link rel="stylesheet" href="log.css">
    <link rel="stylesheet" href="style.css">
    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />
    <script src="vue.js"></script>
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>

<body class="container">
    <div class="row justify-content-center animated zoomIn" style="margin-top:10%">
        <div class="card w-50">
            <div class="header">
                <h4 class="title">Login</h4>
            </div>
            <div class="content">
                <form action="php/Loguear.php" method="post">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" placeholder="Username" name="usuario">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" class="form-control" placeholder="Password" name="contra">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" rel="pulse-shrink" class="btn btn-info btn-fill w-75 hvr-pulse">Ingresar</button>
                    </div>
                </form>
                <div class="row mt-3">
                    <div class="col-md-6 col-sm-12 mt-2">
                        <div class="row justify-content-center">
                            <button class="btn btn-link hvr-pulse">Olvide mi contraseña</button>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <div class="row justify-content-center">
                            <input type="button" class="btn btn-link hvr-pulse" data-target="#exampleModalCenter"
                                data-toggle="modal" value="Registrar">
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg animated rubberBand" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Registrarme</h5>
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
                                            <h4 class="title">Crear cuenta</h4>
                                        </div>
                                        <div class="content">
                                            <form id="form" class="needs-validation" novalidate>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                                <label>Username</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Username" id="user" required>
                                                                <div class="invalid-feedback">Ingresa tu nombre!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">

                                                                <label for="exampleInputEmail1">Password</label>
                                                                <input type="password" class="form-control"
                                                                    placeholder="Password" id="pass" required>
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
                                                                id="email" required>
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
                                                                id="nombre" required>
                                                                <div class="invalid-feedback">Ingresa tu nombre!
                                                                    </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Apellido Paterno</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Apellido Paterno" id="appat" required>
                                                                <div class="invalid-feedback">Ingresa tu apellido paterno!
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Apellido Materno</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Apellido Materno" id="apmat" required>
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
                            <button type="submit" id="crear" class="btn btn-outline-success hvr-pulse-shrink">Crear cuenta</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
</body>

<!--   Core JS Files   -->

<script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
    crossorigin="anonymous"></script>
<script src="js/Registrar.js"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>