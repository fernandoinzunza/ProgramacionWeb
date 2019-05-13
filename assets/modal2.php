<!-- Edit Modal-->
<div class="modal fade" id="edit2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Editar Articulo</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Codigo:</span>
						<input type="text" style="width:350px;" class="form-control" id="cod" disabled>
                    </div>
                    <div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Titulo:</span>
						<input type="text" style="width:350px;" class="form-control" id="tit">
                    </div>
                    <div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Categoria:</span>
						<input type="text" style="width:350px;" class="form-control" id="cat">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Autor:</span>
						<input type="text" style="width:350px;" class="form-control" id="aut">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Descripcion:</span>
						<input type="text" style="width:350px;" class="form-control" id="des">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Precio:</span>
						<input type="text" style="width:350px;" class="form-control" id="pc">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Unidades:</span>
						<input type="text" style="width:350px;" class="form-control" id="uni">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Imagen:</span>
						<input type="text" style="width:350px;" class="form-control" id="img">
					</div>						
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success" id="modificarart"> Actualizar</button>
                </div>
            </div>
        </div>
    </div>