<!DOCTYPE html>
<?php
require_once('../../php/Clases/conexion.php');
session_start();
if(!isset($_SESSION['ingresar'])){
  $correo="";
  } else{
  require_once('../../php/Clases/usuario.php');
  $usuario = new Usuario();
  $user = $_SESSION['username'];
  $usuario->ObtenerDatos($user,$usuario);
  $name = $usuario;
  $nombre = utf8_encode($usuario->Nombre);
  $appat = utf8_encode($usuario->Ap_Pat);
  $apmat = utf8_encode($usuario->Ap_Mat);
  $correo = utf8_encode($usuario->Correo);
  }
$cod = $_GET["cod"];
$conn = abrirBD();
$sql = "SELECT codigo,titulo,categoria,autor,descripcion,precio,unidades,imagen FROM articulos where codigo = '$cod'";
$conn = abrirBD();
$resultado = $conn->query($sql);
while($resul = mysqli_fetch_array($resultado)){ 
    $cod = $resul[0];
    $tit = utf8_encode($resul[1]);
    $cat = utf8_encode($resul[2]);
    $aut = utf8_encode($resul[3]);
    $des = utf8_encode($resul[4]);
    $prec = utf8_encode($resul[5]);
    $uni = utf8_encode($resul[6]);
    $imagenes = $resul[7];
    }
$conn->close();
if(!isset($_SESSION['carrito'])){
  $num = 0;
}else{
  $arreglo = $_SESSION['carrito'];
  $num = count($arreglo);
}
$conn = abrirBD();
$sql = "SELECT copyright, contacto, redessociales FROM footer";
$conn = abrirBD();
$resultado = $conn->query($sql);
while($resul = mysqli_fetch_array($resultado)){ 
    $copy = $resul[0];
    $contactos = utf8_encode($resul[1]);
    $redes = utf8_encode($resul[2]);
    }
$conn->close();
?>
<html lang="en">
  <head>
    <title>Proyecto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index" class="js-logo-clone">Tienda En Linea</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                  <?php echo $correo?><span class="icon icon-person"></span></a>
                  <div class="dropdown-menu">
                      <button class="dropdown-item"><a href="#" data-toggle="modal" data-target="#modal">Registrarme</a></button>
                      <?php
                      if(isset($_SESSION['ingresar'])){
                        echo '<button class="dropdown-item"><a data-toggle="modal" data-target="#cerrar" >CerrarSesion</a></button>';
                      }
                        
                      else{
                        echo '<button class="dropdown-item"><a href="../../log.php" >Ingresar</a></button>';
                      }
                      
                      
                      ?>
                    </div>
                  </li>
                  <li>
                    <a href="cart" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count" id="cars"><?php echo $num?></span>
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
            </div>
          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="nav-item">
              <a href="http://localhost/ProgWeb/assets/TiendaOnline/">Inicio</a>
            </li>
            <li class="active"><a href="shop">Compras</a></li>
            <li class="nav-item"><a href="cart">Carrito</a></li>
            <li class="nav-item"><a href="miscompras">Mis Compras</a></li>
            <li class="nav-item">
              <a href="nav-item">Acerca de</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index">Inicio</a> <span class="mx-2 mb-0">/</span><a href="shop">Compras</a><span class="mx-2 mb-0">/</span> <strong class="text-black"><?php echo $tit ?></strong></div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="../img/<?php echo $imagenes?>" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $tit?></h2>
            <p><?php echo utf8_decode($aut);?></p>
            <p class="mb-4"><?php echo utf8_decode($des);?></p>
            <p><strong class="text-primary h4">$<?php echo $prec?></strong></p>
        
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              <input id="cantidad" type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
            </div>

            </div>
            <p><a id="carrito" data-id="<?php echo $cod?>" class="buy-now btn btn-sm btn-primary">Añadir al carrito</a></p>

          </div>
        </div>
      </div>
    </div>
    <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigation</h3>
              </div>
              <div class="col-md-6 col-lg-3">
                <ul class="list-unstyled">
                  <li><a href="http://localhost:8088/ProgramacionWeb/assets/TiendaOnline/">Home</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-3">
                <ul class="list-unstyled">
                  <li><a href="shop">Shop</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-3">
                <ul class="list-unstyled">
                  <li><a href="about">About</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Redes Sociales</h3>
              <img src="images/redes.jpg" alt="Image placeholder" class="img-fluid rounded mb-4">
              <h2 class="font-weight-light  mb-0"><?php echo $redes?></h2>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Información de contacto</h3>
              <ul class="list-unstyled">
              <p class="mb-4"style="color:black"><?php echo $contactos?></p>
              </ul>
            </div>

          
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <h6>Copyright ©2019 All rights reserved | <?php echo $copy?></h6>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
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

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>
  <script src="js/agregarcarrito.js"></script>
  <script src="js/Registrar.js"></script>
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
</div>
<div class="modal fade bd-example-modal-lg animated rubberBand" id="modal" tabindex="-1" role="dialog"
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
    </div>
  </div>
</div>
</body>
</html>