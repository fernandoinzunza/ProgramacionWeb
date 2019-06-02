<?php 
require_once('Conexion.php');
$conn = abrirBD();
$sql = "SELECT * FROM EDITAR_CARRUSEL";
$resultado = $conn->query($sql);
?>
<?php
 $res = '<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="nonloop-block-3 owl-carousel">';
          while($fila = $resultado->fetch_assoc()){
          $res.='<div class="item">'; 
          $res.='<div class="block-4 text-center">';
              $res.='<figure class="block-4-image">';
              $res.=  '<img src="TiendaOnline/images/carrusel/'.$fila['id_img'].'" id="'.$fila['id'].'Carrusel" alt="Image placeholder" style="height: 400px !important;">';
              $res.='</figure>';
              $res.='<div class="block-4-text p-4">';
                $res.='<h3><a href="#" id="'.$fila['id'].'Titulo">'.$fila['titulo_libro'].'</a></h3>';
                $res.='<p class="mb-0" id="'.$fila['id'].'Autor">'.$fila['autor'].'</p>';
                $res.='<p class="text-primary font-weight-bold" id="'.$fila['id'].'Precio">'.$fila['precio'].'</p>';
                $res.='<button class="btn btn-primary selec" data-id="'.$fila['id'].'">Cambiar</button>';
             $res.= '</div>
            </div>
          </div>';
          }
        $res.='</div>
      </div>
    </div>
  </div>';
  echo $res;
?>