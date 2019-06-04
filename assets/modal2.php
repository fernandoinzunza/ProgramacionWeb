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
							<div class="form-group has-feedback">
							<label>Categoria:</label>
								<select class="form-control" name="cat" id="cat"  requirerd>
									<option value="Drama">Drama</option>
									<option value="Infantil">Infantil</option>
									<option value="Misterio">Misterio</option>
									<option value="Terror">Terror</option>
									<option value="Horror">Horror</option>
									<option value="Romance">Romance</option>
									<option value="Comedia">Comedia</option>
									<option value="Ciencia Ficcion">Ciencia Ficcion</option>
									<option value="Aventura">Aventura</option>
									<option value="Cuentos">Cuentos</option>
								</select>
								<div class="help-block with-erros"></div>
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
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group has-feedback">
							<label>Unidades:</label>
								<input type="text"  data-error="Necesitas Ingresar Alguna Cantidad" class="form-control validanumericos" id="uni" name="uni"required>
								<div class="help-block with-errors"></div>
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
										<div id="archivo"></div>
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
</div>