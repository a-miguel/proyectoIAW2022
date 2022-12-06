<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />

    <link rel="stylesheet" href="css/tiny-slider.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/style.css" />

    <title>
      Property &mdash; Free Bootstrap 5 Website Template by Untree.co
    </title>
  </head>
  <body>
  <?php session_start(); 
          $server_name = "localhost";
          $database = "mobile-repair";
          $username = "root";
          $password = "";
      
          $con = mysqli_connect($server_name, $username, $password, $database);
    
    ?>
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <?php include 'menu.php'; ?> 

    <div
      class="hero page-inner overlay"
      style="background-image: url('images/hero_bg_1.jpg')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">Bienvenid@ <?php echo $_SESSION["idUsuario"] ?></h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                  Bienvenida
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div
            class="col-lg-4 mb-5 mb-lg-0"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="contact-info">
              <div class="address mt-2">
                <i class="icon-room"></i>
                <h4 class="mb-2">Nuestra Localizacion:</h4>
                <p>
                  P. Sherman, calle Wallaby, 42, <br />
                  Sydney
                </p>
              </div>

              <div class="open-hours mt-4">
                <i class="icon-clock-o"></i>
                <h4 class="mb-2">Nuestro Horario de Apertura:</h4>
                <p>
                  Lunes-Viernes:<br />
                  10:00  - 20:00 
                </p>
              </div>

              <div class="email mt-4">
                <i class="icon-envelope"></i>
                <h4 class="mb-2">Nuestro Email:</h4>
                <p>sigue@nadando.com</p>
              </div>

              <div class="phone mt-4">
                <i class="icon-phone"></i>
                <h4 class="mb-2">Nuestro Teléfono:</h4>
                <p>+1 1234 5678 90</p>
              </div>
          <div class="links" id="links">  
              <div class="link2 mt-4" id= "citas">
                <i class="icon-user" background="#600707"></i>
                <h4 class="mb-2" ><a href='miscitas.php'>Mis citas</a></h4>
              
              </div>


</br>

              <div class="links2 mt-4" id= "cerrarsesion" >
                <i class="icon-user" ></i>
                <h4 class="mb-2"><a href='cerrarSesion.php' >Cerrar sesion</a></h4>
                
              </div>
          </div>  

            </div>
          </div>
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

         <h2>Rellena los campos si quieres una cita </h2>

         <?php
						if (isset($_SESSION['error'])){    
							echo  "<p >".$_SESSION['error']."</p>";
						};
					?>

            <form action="validacitas.php" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-12 mb-3">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Asunto"
                    id="asunto" 
                    name="asunto"
                    value="<?php if (isset($_SESSION['asunto'])) echo $_SESSION['asunto'];?>"
                  />

                </div>
                
                <div class="col-12 mb-3">
                  <textarea
                    type="text"
                    cols="30"
                    rows="7"
                    class="form-control"
                    placeholder="Explica el problema que tienes"
                    id="problema" 
                    name="problema"
                    value="<?php if (isset($_SESSION['problema'])) echo $_SESSION['problema'];?>"
                  ></textarea>
                </div>
                <!--HAY QUE HACER EL DESPLEGABLE DE LOS TRABAJADORES COGIENDOLO DE LA BASE DATOS-->
               <div class="col-12 mb-3">
                <p >Elige un trabajador</p>
                <select class="form-control" id="trabajadores" name="trabajadores">
                <?php
                  $sql = "SELECT * FROM trabajadores";
                  $ejec = $con->query($sql);
                  while ($row = mysqli_fetch_array($ejec)) {
                      echo "<option value = ";
                      echo $row['id'];
                      echo ">";
                      echo $row['nombre'];
                      echo "</option>";
                  }
                  ?>
                  
                </select>
			      	  </div>

                <div class="col-12 mb-3">
			      			<label  for="foto">Foto del dispositivo</label>
                  <input type="file" class="form-control" id="foto" name="foto" value="<?php if (isset($_SESSION['foto'])) echo $_SESSION['foto'];?>">
			      	  </div>

 
                  
                <div class="col-6 mb-3">
                  <p>Elige una fecha</p>
                  <input
                    type="date" name="date" id="date" placeholder="dd-mm-yyyy"
                    min="<?= date('y-m-d'); ?>" max="" value="<?= date ('y-m-d'); ?>"
                    class="form-control"
                    value="<?php if (isset($_SESSION['date'])) echo $_SESSION['date'];?>"
                   
                  /> 
                </div>          
                  </br>
                  <div class="col-6 mb-3">
                    <p>Elige una hora </p>
                  <input
                    type="time" name="hora" id="hora" min="10:00" max="20:00" step="3600"
                    class="form-control"
                    value="<?php if (isset($_SESSION['hora'])) echo $_SESSION['hora'];?>"
                  />
                </div>
</br>
                <div class="col-12">
                  <input
                    type="submit"
                    value="Enviar mensaje"
                    class="btn btn-primary"
                  />
                </div>

                
              </div>
            </form>
           
          </div>
        </div>
      </div>
    </div>
    <!-- /.untree_co-section -->


    <?php include 'piepagina.php'; ?>

    <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
