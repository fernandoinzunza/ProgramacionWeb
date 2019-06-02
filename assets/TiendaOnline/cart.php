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
  if(!isset($_SESSION['carrito'])){
    $num = 0;
    $total = 0;
  }else{
    $arreglo = $_SESSION['carrito'];
    $num = count($arreglo);
    $total = 0;
    foreach($arreglo as $key => $fila){
      $precio = $fila['precios'];
      $cantidad = $fila['cantidad'];
      $operacion = $precio * $cantidad;
      $total = $total + $operacion;
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tienda en Linea</title>
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
                <a href="index" class="js-logo-clone">Tienda Online</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                  <?php echo $correo?><span class="icon icon-person"></span>
                  </a>
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
                  <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
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
              <a href="index">Inicio</a>
            </li>
            <li class="nav-item"><a href="shop">Compras</a></li>
            <li class="nav-item"><a href="cart">Carrito</a></li>
            <li class="nav-item">
              <a href="about">Acerca de</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index">Inicio</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Carrito</strong></div>
        </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
              <thead class="encabezado">
                  <tr>
                    <th class="lead">Imagen</th>
                    <th class="lead">Codigo</th>
                    <th class="lead">Titulo</th>
                    <th class="lead">Descripcion</th>
                    <th class="lead">Precio</th>
                    <th class="lead">Unidades</th>
                    <th class="lead">Eliminar</th>                  
                  </tr>
                </thead>
                <tbody id="tablacarrito">

                </tbody>
              </table>
            </div>
          </form>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Total Carrito</h3>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="mx-2">$</strong><strong class="text-black"><?php echo $total?></strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button data-id="ismaputo" id="comprar" class="btn btn-primary btn-lg py-3 btn-block">Proceder a la Compra</button>
                  </div>
                </div>
              </div>
            </div>
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
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Sell online</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Shopping cart</a></li>
                  <li><a href="#">Store builder</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Mobile commerce</a></li>
                  <li><a href="#">Dropshipping</a></li>
                  <li><a href="#">Website development</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Point of sale</a></li>
                  <li><a href="#">Hardware</a></li>
                  <li><a href="#">Software</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                <li class="email">emailaddress@domain.com</li>
              </ul>
            </div>

            <div class="block-7">
              <form action="#" method="post">
                <label for="email_subscribe" class="footer-heading">Subscribe</label>
                <div class="form-group">
                  <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                  <input type="submit" class="btn btn-sm btn-primary" value="Send">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>
  <script src="js/carritodisponible.js"></script>
  <script src="js/vercompra.js"></script>
  <script src="js/Registrar.js"></script>
  <script src="js/eliminarcarrito.js"></script>
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
<div class="modal fade" id="eliminarcar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                        Seguro que desea eliminar el articulo del carrito
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-danger" name="borrarcarrito" id="borrarcarrito" data-dismiss="modal">Confirmar</button>
                        
                    </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>