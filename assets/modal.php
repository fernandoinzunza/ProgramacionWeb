<!-- Edit Modal-->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Editar usuario</h4></center>
				</div>
				<form id="forma" role="form" data-toggle="validator">
                <div class="modal-body">
				<div class="container-fluid">
                    <div class="form-group has-feedback">
						<label for="">Username</label>
						<input  type="text" class="form-control" id="user" disabled>
                    </div>
                    <div class="form-group  has-feedback">
						<label for="">Pass</label>
						<input data-error="Ingresa una contraseña" type="text"  class="form-control" id="pass" required>
						<div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group  has-feedback">
						<label for="">Correo</label>
						<input data-error="Ingresa un Correo y/o El Formato no es Correcto" type="text"  class="form-control" id="correo" required>
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group has-feedback">
						<label for="">Nombre</label>
						<input data-error="Ingresa un Nombre" type="text"  class="form-control" id="nombre" required onkeypress="return soloLetras(event)" required>
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group has-feedback">
						<label for="">Ap_Pat</label>
						<input data-error="Ingresa un Apellido Paterno" type="text"  class="form-control" id="appat" required onkeypress="return soloLetras(event)" required>
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group has-feedback">
						<label for="">Ap_Mat</label>
						<input data-error="Ingresa un Apellido Materno" type="text"  class="form-control" id="apmat" required onkeypress="return soloLetras(event)" required>
						<div class="help-block with-errors"></div>
					</div>					
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success" id="modificar"> Actualizar</button>
				</div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->