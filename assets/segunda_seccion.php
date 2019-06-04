<?php 
require_once('../PHP/Clases/conexion.php');
$conn = abrirBD();
$sql = 'select distinct categoria from articulos';
$mostrar = 'select * from editar_categorias';
$categorias = $conn->query($mostrar);

?>
<head>
    <script src="js/editarCategoria.js"></script>
</head>
<h2>Categorias</h2>
<div class="row">
<?php while($fila = $categorias->fetch_assoc()){?>
   <div class="col-md-4">
        <div class="card">
            <img class="card-img-top" src="TiendaOnline/images/categorias/<?php echo $fila['imagen'];?>" id="<?php echo $fila['numero'];?>Imagen"alt="Card image cap" style="height:400px; width:100%;">
            <div class="card-body">
                <h5 class="card-title text-center" id="<?php echo $fila['numero'];?>Texto"><?php echo $fila['categoria'];?></h5>
                <input type="file" name="<?php echo $fila['numero'];?>" class="btn btn-success" style="width:100%;">
                <select name="" id="<?php echo $fila['numero'];?>Select" style="width:100%; height:45px;">
                    <?php $resultado = $conn->query($sql);?>
                    <?php while($row = $resultado->fetch_assoc()){?>
                        <option value="<?php echo $row['categoria'];?>" <?php if($fila['categoria']==$row['categoria']){echo "selected";}?>><?php echo $row['categoria'];?></option>
                    <?php }
                    ?>
                </select>
                <button class="btn btn-primary cambio" data-id="<?php echo $fila['numero'];?>" style="width:100%;">Cambiar</button>
            </div>
        </div>
   </div>
   <?php }?> 
</div>

<div class="site-section site-blocks-2">
    <div class="container">
        <div class="row">
            <?php while($fila = $categorias->fetch_assoc()){?>
            <div class="col-sm-4 col-md-3 col-xs-12">
                <a class="block-2-item" href="#">
                    <figure class="image">
                        <img src="TiendaOnline/images/categorias/<?php echo $fila['imagen'];?>" alt="" class="img-fluid" style="max-width: 400px; max-height: 400px">
                    </figure>
                    <div class="text">
                        <span class="text-uppercase">Categoria</span>
                        <h3><?php echo $fila['categoria']?></h3>
                    </div>
                </a>
                <div class="form-group">
                <select name="" id="">
                    <?php $resultado = $conn->query($sql);?>
                    <?php while($row = $resultado->fetch_assoc()){?>
                        <option value=""><?php echo $row['categoria'];?></option>
                    <?php }
                    ?>
                </select>
                    </div>
            </div>
            <?php }?>
            <?php $conn->close();?>
        </div>
    </div>
</div>