<?php
require_once ("conexion.php");
$conn = abrirBD();
if (! (isset($_GET['PaginaNumero']))) {
    $PaginaNumero = 1;
} else {
    $PaginaNumero = $_GET['PaginaNumero'];
}
$categoria = $_GET['categoria'];

$CantidadPagina = 9;

$sql = "SELECT * FROM articulos where categoria ='$categoria'";

if ($result = mysqli_query($conn, $sql)) {
    $rowCount = mysqli_num_rows($result);
    mysqli_free_result($result);
}

$pagesCount = ceil($rowCount / $CantidadPagina);

$lowerLimit = ($PaginaNumero - 1) * $CantidadPagina;

// Controlar las tildes y ñ en los resultados desde MySQL
mysqli_set_charset($conn,"utf8");

$sqlQuery = " SELECT * FROM ARTICULOS where categoria='$categoria' limit " . ($lowerLimit) . " ,  " . ($CantidadPagina) . " ";
$results = mysqli_query($conn, $sqlQuery);

?>

    <?php foreach ($results as $data) { ?>
        <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" >
        <div class="block-4 text-center border">
          <figure class="block-4-image">
            <a href="shop_articulo?cod=<?php echo $data['codigo'] ?>"><img src="../img/<?php echo $data['imagen']?>" alt="Image placeholder" class="img-fluid" style="width: 18rem; height: 18rem;"></a>
          </figure>
          <div class="block-4-text p-4">
            <h3><a href="shop_articulo?cod='<?php echo $data['codigo'] ?>'"><?php echo $data['titulo']?></a></h3>
            <p class="text-primary font-weight-bold"><?php echo $data['precio']?></p>
            <button class="btn btn-info codigo" data-id="<?php echo $data['codigo']?>">Ver descripcion</button>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
<table width="100%" align="center">
    <tr>

        <td valign="top" align="left"></td>


        <td valign="top" align="center">
 <ul class="pagination">
 
	<?php
	for ($i = 1; $i <= $pagesCount; $i ++) {
    if ($i == $PaginaNumero) {
        ?> <li class="page-item active">
	      <a href="javascript:void(0);" class="page-link"><?php echo $i ?></a></li>
<?php
    } else {
        ?>
        
	    <li class="page-item">  <a href="#" class="pages page-link"
           onclick="showRecords('<?php echo $CantidadPagina;  ?>', '<?php echo $i; ?>');"><?php echo $i ?></a></li>
<?php
    } // endIf
} // endFor
?>
</ul>
</td>
        <td align="right" valign="top">
	     Pagina <?php echo $PaginaNumero; ?> de <?php echo $pagesCount; ?>
	</td>
    </tr>
</table>