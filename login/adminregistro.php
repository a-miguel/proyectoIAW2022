<!doctype html>
<html lang="en">
  <head>
  	<title>Login trabajador</title>
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
					<h2 class="heading-section">Logueate Admin</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(images/admin.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Inicia Sesión</h3>
			      		</div>
								
			      	</div>
							<form action="validaradmin.php" class="signin-form">
			      		<div class="form-group mt-3">
			      			<input type="text" class="form-control" id="admin" name="admin" value="<?php if (isset($_SESSION['admin'])) echo $_SESSION['admin'];?>">
			      			<label class="form-control-placeholder" for="admin">User del admin</label>
			      		</div>
		            <div class="form-group">
		              <input id="password-field" type="password" class="form-control"  id="admin-pswd" name="admin-pswd"  value="<?php if (isset($_SESSION['admin-pswd'])) echo $_SESSION['pswd'];?>">
		              <label class="form-control-placeholder" for="admin-pswd">Contraseña</label>
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
				  <p class="text-center">¿No eres Admin? <a  href="index.php">Formulario Principal</a></p>
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

