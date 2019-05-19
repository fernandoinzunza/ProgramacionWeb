<!-- Edit Modal-->
<div class="modal fade" id="edit2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Editar Articulo</h4></center>
				</div>
				<form enctype="multipart/form-data" method="post" id="formas">
                <div class="modal-body">
				<div class="container-fluid">
                    <div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Codigo:</span>
						<input type="text" style="width:350px;" class="form-control" id="cod" name="cod" disabled>
                    </div>
                    <div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Titulo:</span>
						<input type="text" style="width:350px;" class="form-control" id="tit" name="tit">
                    </div>
                    <div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Categoria:</span>
						<input type="text" style="width:350px;" class="form-control" id="cat" name="cat">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Autor:</span>
						<input type="text" style="width:350px;" class="form-control" id="aut" name="aut">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Descripcion:</span>
						<input type="text" style="width:350px;" class="form-control" id="des" name="des">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Precio:</span>
						<input type="text" style="width:350px;" class="form-control" id="pc" name="pc">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Unidades:</span>
						<input type="text" style="width:350px;" class="form-control" id="uni" name="uni">
					</div>
					<br>
					<div class="form-group input-group">
						<div class="card text-center" style="width: 18rem; margin: 0 auto;">
							<img class="card-img-top" style="width: 18rem;" src=""
								alt="Card image cap" id="referencia">
							<div class="card-body">
								<h5 class="card-title">Imagen principal</h5>
								<label class="custom-file" id="customFile">
								<input type="file" class="custom-file-input" name="img" id="img">
								<span class="custom-file-control form-control-file"></span>
								</label>
							</div>
						</div>
					</div>						
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success" id="modificarart"> Actualizar</button>
				</div>
				</form>
            </div>
        </div>
    </div>