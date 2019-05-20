<?php 
require_once('conexion.php');
$conn = abrirBD();
$tabla ="";
$query = "SELECT *FROM articulos";
$catalogo=$conn->query($query);
    if($catalogo->num_rows > 0)
    {
	    while($fila = $catalogo->fetch_assoc())
	    {
		$tabla.='<div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" >
        <div class="block-4 text-center border">
          <figure class="block-4-image">
            <a href="shop-single.html"><img src="../img/'.$fila['imagen'].'" alt="Image placeholder" class="img-fluid" style="width: 18rem; height: 18rem;"></a>
          </figure>
          <div class="block-4-text p-4">
            <h3><a href="shop-single.html">'.$fila['titulo'].'</a></h3>
            <p class="text-primary font-weight-bold">'.$fila['precio'].'</p>
            <button class="btn btn-info" data-id="'.$fila['codigo'].'">Ver descripcion</button>
          </div>
        </div>
      </div>';
	    }
    } 
    else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}
	echo $tabla;
?>