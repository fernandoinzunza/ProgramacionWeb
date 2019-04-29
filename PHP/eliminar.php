<!DOCTYPE html>
<html lang="en">
<head>
    <!--asd-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
</head>
<body>
<script>
$(document).ready(function(){
$('#myModal').modal('show')
});
</script>
<?php 
    require('Clases/usuario.php');
    require_once('Clases/admin.php');
    $admin = new Admin();
    $usuario = new Usuario();
    $user = "pepe";;
        $usuario->EliminarUsuario($user);
        header("Refresh: 3; URL=../assets/index.php");
        echo '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-label="modalLabel" aria-hidden="true">
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
                   Usuario eliminado exitosamente!<br>
                   Redireccionando..
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary lead" data-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
</div>';

?>
</body>
</html>