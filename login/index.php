<!doctype html>
<html lang="en">
  <head>
  	<title>Login user</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	<link rel="shortcut icon" href="../favicon.png" />

	</head>
	<body>
		<?php session_start(); ?>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Logueate</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(images/bg-1.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Inicia Sesión</h3>
			      		</div>
								
			      	</div>
							<form action="validacion.php" class="signin-form">
			      		<div class="form-group mt-3">
			      			<input type="text" class="form-control" id="user" name="user" value="<?php if (isset($_SESSION['user'])) echo $_SESSION['user'];?>">
			      			<label class="form-control-placeholder" for="user">Usuario</label>
			      		</div>
		            <div class="form-group">
		              <input id="password-field" type="password" class="form-control" id="passwd" name="passwd"  value="<?php if (isset($_SESSION['passwd'])) echo $_SESSION['passwd'];?>">
		              <label class="form-control-placeholder" for="passwd">Contraseña</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Inicia Sesión</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Recuerdame
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="images/meme-contraseña.jpg">Olvidaste la contraseña?</a>
									</div>
		            </div>

					<?php
					if (isset($_SESSION['error'])){    
						echo "<p>".$_SESSION['error']."</p>";
					}
					session_destroy();
					?>

		          </form>
		          <p class="text-center">¿No eres miembro? <a  href="newregistro.php">Registrate</a></p>
				  <p class="text-center">¿Eres Trabajador? <a  href="logintrabajador.php">Formulario Trabajador</a></p>
				  <p class="text-center">¿Regresar a la página Principal? <a  href="../index.php">Página Principal</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

