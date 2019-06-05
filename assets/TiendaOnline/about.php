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
    if(!isset($_SESSION['carrito'])){
      $num = 0;
    }else{
      $arreglo = $_SESSION['carrito'];
      $num = count($arreglo);
    }
    
?>
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
                <a href="index" class="js-logo-clone">Tienda en Linea</a>
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
                      <span class="count"><?php echo $num?></span>
                    </a>
                  </li>
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span
                        class="icon-menu"></span></a></li>
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
            <li class="nav-item"><a href="shop">Compras</a></li>
            <li class="nav-item"><a href="cart">Carrito</a></li>
            <li class="nav-item"><a href="miscompras">Mis Compras</a></li>
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
          <div class="col-md-12 mb-0"><a href="index">Inicio</a> <span class="mx-2 mb-0">/</span> <strong
              class="text-black">Acerca de</strong></div>
        </div>
      </div>
    </div> 

    <div class="site-section border-bottom" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6">
            <div class="block-16">
              <figure>
                <img src="images/librotecaf.png" alt="Image placeholder" class="img-fluid rounded">
              </figure>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5">
            
            
            <div class="site-section-heading pt-3 mb-4">
              <h2 class="text-black">Quienes somos?</h2>
            </div>
            <p>
              <?php echo $quisom?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section border-bottom" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6">
            <div class="block-16">
              <figure>
                <img src="images/mision-vision.png" alt="Image placeholder" class="img-fluid rounded">
              </figure>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5">
            
            
            <div class="site-section-heading pt-3 mb-4">
              <h2 class="text-black">Misión y Visión</h2>
            </div>
            <p>
              <?php echo $mivi?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
      <div class="container" data-aos="fade-up" data-aos-delay="">
        <div class="icon mr-4 align-self-start">
          <h3 class="text-black" align="center">Contactanos</h3>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-16 col-lg-5 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <img src="https://img.icons8.com/metro/52/000000/facebook-new.png">  
            </div>
            <div class="text">
              <h2 class="text-uppercase">Facebook</h2>
              <p><?php echo $fb?></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <img src="https://img.icons8.com/metro/52/000000/instagram-new.png">
            </div>
            <div class="text">
              <h2 class="text-uppercase">Instagram</h2>
              <p><?php echo $ig?></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-1 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <img src="https://img.icons8.com/metro/52/000000/twitter.png">
            </div>
            <div class="text">
              <h2 class="text-uppercase">Twitter</h2>
              <p><?php echo $tw?></p>
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

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>