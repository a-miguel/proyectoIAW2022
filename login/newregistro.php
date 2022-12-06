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
					<h2 class="heading-section">Create un usuario</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(images/bg-3.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Crear Sesión</h3>
			      		</div>
								
			      	</div>
				<form action="validanewlog.php" class="signin-form">
			      		<div class="form-group mt-3">
			      			<input type="text" class="form-control" id="new-user" name="new-user" value="<?php if (isset($_SESSION['new-user'])) echo $_SESSION['new-user'];?>">
			      			<label class="form-control-placeholder" for="new-user">Nombre de usuario</label>
			      		</div>

                        <div class="form-group mt-3">
			      			<input type="email" class="form-control" id="email" name="email" value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email'];?>">
			      			<label class="form-control-placeholder" for="email">Email</label>
			      		</div>


		            <div class="form-group">
		              <input id="password-field" type="password" class="form-control" id="newpswd" name="newpswd"  value="<?php if (isset($_SESSION['newpswd'])) echo $_SESSION['newpswd'];?>">
		              <label class="form-control-placeholder" for="newpswd">Contraseña</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>

                    <div class="form-group mt-3">
			      			<label  for="foto">Foto del dispositivo</label>
                 			<input type="file" class="form-control" id="fotoreg" name="fotoreg" value="<?php if (isset($_SESSION['fotoreg'])) echo $_SESSION['fotoreg'];?>">
			      	  </div>
				
					<div class="error">
					<?php
						if (isset($_SESSION['error'])){    
							echo  "<p >".$_SESSION['error']."</p>";
						}
						session_destroy();
					?>
					</div>
					
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Crear Usuario</button>
		            </div>

					

		        </form>
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