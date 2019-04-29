<!-- Edit Modal-->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Editar usuario</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Username:</span>
						<input type="text" style="width:350px;" class="form-control" id="user" disabled>
                    </div>
                    <div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Pass:</span>
						<input type="text" style="width:350px;" class="form-control" id="pass">
                    </div>
                    <div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Correo:</span>
						<input type="text" style="width:350px;" class="form-control" id="correo">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Nombre:</span>
						<input type="text" style="width:350px;" class="form-control" id="nombre">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Ap_Pat:</span>
						<input type="text" style="width:350px;" class="form-control" id="appat">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Ap_Mat:</span>
						<input type="text" style="width:350px;" class="form-control" id="apmat">
					</div>					
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success" id="modificar"> Actualizar</button>
                </div>
            </div>
        </div>
    </div>
<!-- /.modal -->