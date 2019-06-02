<head>
  <link rel="stylesheet" href="TiendaOnline/fonts/icomoon/style.css">

  <link rel="stylesheet" href="TiendaOnline/css/magnific-popup.css">
  <link rel="stylesheet" href="TiendaOnline/css/jquery-ui.css">
  <link rel="stylesheet" href="TiendaOnline/css/owl.carousel.min.css">
  <link rel="stylesheet" href="TiendaOnline/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">

  <link rel="stylesheet" href="TiendaOnline/css/aos.css">

  <link rel="stylesheet" href="TiendaOnline/css/style.css">
  <script src="TiendaOnline/js/jquery-ui.js"></script>
  <script src="TiendaOnline/js/owl.carousel.min.js"></script>
  <script src="TiendaOnline/js/jquery.magnific-popup.min.js"></script>
  <script src="TiendaOnline/js/aos.js"></script>
  <script src="js/imagenesCarrusel.js"></script>
  <link rel="stylesheet" href="TiendaOnline/css/animate.min.css">
  <script src="TiendaOnline/js/main.js"></script>
</head>
<h1>
  Productos Sugeridos
</h1>
<?php 
require_once('../PHP/Clases/Conexion.php');
$conn = abrirBD();
$sql = "SELECT * FROM EDITAR_CARRUSEL";
$resultado = $conn->query($sql);
?>
<div class="site-section block-3 site-blocks-2 bg-light" id="recCarrusel">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="nonloop-block-3 owl-carousel">
          <?php while($fila = $resultado->fetch_assoc()){?>
          <div class="item">
            <div class="block-5 text-center">
              <figure class="block-5-image">
                <img src="img/<?php echo $fila['id_img'];?>" id="<?php echo $fila['id']."Carrusel";?>" alt="Image placeholder" style="height: 400px !important;">
              </figure>
              <div class="block-5-text p-5">
                <h3><a href="#" id="<?php echo $fila['id']."Titulo";?>"><?php echo $fila['titulo_libro'];?></a></h3>
                <p class="mb-0" id="<?php echo $fila['id']."Autor";?>"><?php echo $fila['autor'];?></p>
                <p class="text-primary font-weight-bold" id="<?php echo $fila['id']."Precio";?>"><?php echo $fila['precio'];?></p>
                <button class="btn btn-primary selec" data-id="<?php echo $fila['id'];?>">Cambiar</button>
              </div>
            </div>
          </div>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
</div>