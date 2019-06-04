<?php 
require_once('Clases/Conexion.php');
$conn = abrirBD();
$sql = "SELECT * FROM EDITAR_CARRUSEL";
$resultado = $conn->query($sql);
?>
<?php while($fila = $resultado->fetch_assoc()){?>
          <div class="item">
            <div class="block-5 text-center">
              <figure class="block-5-image">
              </figure>
                <img src="TiendaOnline/images/carrusel/<?php echo $fila['id_img'];?>" id="<?php echo $fila['id']."Carrusel";?>" alt="Image placeholder" style="height: 400px !important;">
              <div class="block-5-text p-5">
                <h3><a href="#" id="<?php echo $fila['id']."Titulo";?>"><?php echo $fila['titulo_libro'];?></a></h3>
                <p class="mb-0" id="<?php echo $fila['id']."Autor";?>"><?php echo $fila['autor'];?></p>
                <p class="text-primary font-weight-bold" id="<?php echo $fila['id']."Precio";?>"><?php echo $fila['precio'];?></p>
                <button class="btn btn-primary selec" data-id="<?php echo $fila['id'];?>">Cambiar</button>
              </div>
            </div>
          </div>
<?php }?>