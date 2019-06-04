<!-- Edit Modal-->
<div class="modal fade" id="edit2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Editar Articulo <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></h4>    
				</div>
				<form enctype="multipart/form-data" method="post" role="form" id="form" data-toggle="validator">
					<div class="modal-body">
						<div class="container-fluid">
							<div class="form-group">
							<label>Codigo:</label>
								<input type="text" class="form-control" id="cod" name="cod" disabled onkeypress="return soloLetrasynumeros(event)">
							</div>
							<div class="form-group has-feedback">
							<label>Titulo:</label>
								<input data-error="Necesitas Ingresar Un Titulo" placeholder="Titulo" type="text" class="form-control" id="tit" name="titulo" onkeypress="return soloLetras(event)" required>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
							<label>Categoria:</label>
								<input  type="text"  class="form-control" id="cat" name="cat" onkeypress="return soloLetras(event)" required>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group has-feedback">
							<label>Autor:</label>
								<input type="text" data-error="Necesitas Ingresar Un Autor" class="form-control" id="aut" name="aut" onkeypress="return soloLetras(event)"required>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group has-feedback">
							<label>Descripcion:</label>
								<input type="text"  data-error="Necesitas Ingresar Una Descripcion" class="form-control" id="des" name="des" onkeypress="return soloLetrasynumeros(event)"required>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group has-feedback">
							<label>Precio:</label>
								<input type="text" data-error="Necesitas Ingresar El Precio" class="form-control validanumericos" id="pc" name="pc"required>
								<div class="help-block with-errors">Ingresa el precio</div>
							</div>
							<div class="form-group has-feedback">
							<label>Unidades:</label>
								<input type="text"  data-error="Necesitas Ingresar Alguna Cantidad" class="form-control validanumericos" id="uni" name="uni"required>
								<div class="help-block with-errors">Ingresa alguna cantidad</div>
							</div>
							<br>
							<div class="form-group has-feedback">
							<label>Imagenes:</label>
								<div class="card text-center" style="width: 18rem; margin: 0 auto;">
									<img class="card-img-top" style="width: 18rem;" src=""
										alt="Card image cap" id="referencia">
									<div class="card-body">
										<h5 class="card-title">Imagen principal</h5>
										<label class="custom-file" id="customFile">
										<input data-error="Necesitas Ingresar Una Imagen" type="file" class="btn btn-info form-control" name="img" id="img"required>
										<span class="custom-file-control form-control-file"></span>
										</label><div class="help-block with-errors"></div>
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
    </div><div class="modal fade" id="edit2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Editar Articulo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<form enctype="multipart/form-data" method="post" id="form" class="needs-validation" novalidate>
                <div class="modal-body">
				<div class="container-fluid">
                    <div class="form-group">
					<label>Codigo:</label>
						<input type="text" class="form-control" id="cod" name="cod" disabled onkeypress="return soloLetrasynumeros(event)">
                    </div>
                    <div class="form-group">
					<label>Titulo:</label>
						<input placeholder="Titulo" type="text" class="form-control" id="tit" name="titulo" onkeypress="return soloLetras(event)" required>
						<div class="help-block with-errors">Ingresa un Titulo</div>
                    </div>
                    <div class="form-group">
					<label>Categoria:</label>
						<input type="text"  class="form-control" id="cat" name="cat" onkeypress="return soloLetras(event)" required>
						<div class="invalid-feedback">Selecciona una Categoria</div>
					</div>
					<div class="form-group">
					<label>Autor:</label>
						<input type="text"  class="form-control" id="aut" name="aut" onkeypress="return soloLetras(event)"required>
						<div class="invalid-feedback">Ingresa un Autor</div>
					</div>
					<div class="form-group">
					<label>Descripcion:</label>
						<input type="text"  class="form-control" id="des" name="des" onkeypress="return soloLetrasynumeros(event)"required>
						<div class="invalid-feedback">Ingresa una Descripcion</div>
					</div>
					<div class="form-group input-group">
					<label>Precio:</label>
						<input type="text"  class="form-control validanumericos" id="pc" name="pc"required>
						<div class="invalid-feedback">Ingresa el precio</div>
					</div>
					<div class="form-group input-group">
					<label>Unidades:</label>
						<input type="text"  class="form-control validanumericos" id="uni" name="uni"required>
						<div class="invalid-feedback">Ingresa alguna cantidad</div>
					</div>
					<br>
					<div class="form-group">
					<label>Imagenes:</label>
						<div class="card text-center" style="width: 18rem; margin: 0 auto;">
							<img class="card-img-top" style="width: 18rem;" src=""
								alt="Card image cap" id="referencia">
							<div class="card-body">
								<h5 class="card-title">Imagen principal</h5>
								<label class="custom-file" id="customFile">
								<input data-error="Ingresa una Imagen" type="file" class="btn btn-info form-control" name="img" id="img"required>
								<span class="custom-file-control form-control-file"></span>
								</label><div class="invalid-feedback"></div>
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