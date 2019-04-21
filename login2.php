<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Iniciar Sesion</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form action="Loguear.php" method="post" >
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Usuario" name="user">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="contraseña" name="contra">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Recordar
					</div>
					<div class="form-group">
						<input type="submit" value="Entrar" class="btn float-right login_btn">	
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					¿No tienes una Cuenta?<a href="registrar.html">Registrate</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="recuperarcontraseña.html">¿Olvidaste tu contraseña?</a>
				</div>
			</div>
		</div>
	</div>
</div> 
</body>
</html>