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
      style="background-image: url('images/fondodeladmin.jpg')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">Bienvenid@ <?php echo $_SESSION["idAdmin"] ?></h1>

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
                          
              
              <div class="links" id="links">  
              
               <div class="phone mt-4" id= "cerrarsesion">
                <i class="icon-user" background="#600707" ></i>
                <h4 class="mb-2" ><a href='cerrarSesion.php'>Cerrar sesion</a></h4>
                
              </div>
          </div>  

            </div>
          </div>
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

      <table border=1px width=100% >
        <h3>Citas pendientes</h3>
        <thead >
            <th > Asunto</th>
            <th> Problema</th>
            <th> idUsuario</th>
            <th> idProfesional</th>
            <th> Foto</th>
            <th> Fecha</th>
            <th> Hora</th>

        </thead>

        
        <tbody border:1px>
        <?php
    
        $conn = new mysqli("localhost", "root", "", "mobile-repair");
               
        $sql = "select * from citas group by idProfesional, idUsuario";

        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            echo "<tr >";echo "<br>";
            if (isset($_GET['id']) && ($row['id'] == $_GET['id'])) {
              echo '<form class="form-inline m-2" action="update-admin.php" method="POST">';
              echo '<td><input type="text" class="form-control" name="asunto" value="'.$row['asunto'].'"></td>';
              echo '<td><input type="text" class="form-control" name="problema" value="'.$row['problema'].'"></td>';
              echo '<td><input type="text" class="form-control" name="idUsuario" value="'.$row['idUsuario'].'"></td>';
              echo '<td><input type="number" class="form-control" name="idProfesional" value="'.$row['idProfesional'].'"></td>';
              echo '<td><input type="file" class="form-control" name="foto" value="'.$row['foto'].'"></td>';
              echo '<td><input type="date" class="form-control" name="fecha" value="'.$row['fecha'].'"></td>';
              echo '<td><input type="time" class="form-control" name="hora" value="'.$row['hora'].'"></td>';
             
              echo '<td><button type="submit" class="btn2 btn-primary">Save</button></td>';
              echo '<input type="hidden" name="id" value="'.$row['id'].'">';echo "<br>";
              echo '</form>';
            } else {
              echo "<td>" . $row['asunto'] . "</td>";
              echo "<td>" . $row['problema'] . "</td>";
              echo "<td>" . $row['idUsuario'] . "</td>";
              echo "<td>" . $row['idProfesional'] . "</td>";
              echo '<td><img width="45" src="' . $foto . '"></td>';
              echo "<td>" . $row['fecha'] . "</td>";
              echo "<td>" . $row['hora'] . "</td>";
              
            }
          
            echo '<td><a class="btn2 btn-danger" href="delete-admin.php?id=' . $row['id'] . '" role="button">Cancelar</a></td>';
            echo "</tr>";
          }
          
          $conn->close();
          
    ?>  
        </tbody>
   

      </table>

<br><br>

      <table border=1px width=100% height=300px >
        <h3>Trabajadores</h3>
        <thead >
            <th> Nombre</th>
            <th> Email</th>
            <th> Password</th>
            <th> Foto</th>
            <th> Especialidad</th>
            <th> Fecha</th>
            <th> Hora</th>

        </thead>

        
        <tbody border:1px>
        <?php

        $conn = new mysqli("localhost", "root", "", "mobile-repair");
               
        $sql = "select * from trabajadores";

        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            echo "<tr >";echo "<br>";
            if (isset($_GET['id']) && ($row['id'] == $_GET['id'])) {
              echo '<form class="form-inline m-2" action="update-admin-trabaja.php" method="POST">'; 
              echo '<br>';
              echo '<td><input type="text" class="form-control" name="nombre" value="'.$row['nombre'].'"></td>';
              echo '<td><input type="text" class="form-control" name="email" value="'.$row['email'].'"></td>';
              echo '<td><input type="text" class="form-control" name="pass" value="'.$row['pass'].'"></td>';
              
              echo '<td><input type="file" class="form-control" name="foto" value="'.$row['foto'].'"></td>';
              echo '<td><input type="text" class="form-control" name="especialidad" value="'.$row['especialidad'].'"></td>';

              
              echo '<td><button type="submit" class="btn2 btn-primary">Save</button></td>';
              echo '<input type="hidden" name="id" value="'.$row['id'].'">';echo "<br>";
              echo '</form>';
            } else {
              echo "<td>" . $row['nombre'] . "</td>";
              echo "<td>" . $row['email'] . "</td>";
              echo "<td>" . $row['pass'] . "</td>";
              echo '<td><img width="45" src="' . $foto . '"></td>';
              echo "<td>" . $row['especialidad'] . "</td>";
              
            }
            echo '<td><a class="btn2 btn-primary" href="pagina-admin.php?id=' . $row['id'] . '" role="button">Update</a></td>';
            
            echo '<td><a class="btn2 btn-danger" href="delete-admin-trabaja.php?id=' . $row['id'] . '" role="button">Delete</a></td>';
            echo "</tr>";
          }
          
          $conn->close();
          
    ?>  
        </tbody>
   

      </table>


      <br><br>


      <table border=1px width=100% height=200px>
        <h3>Usuarios</h3>
        <thead >
            <th> User</th>
            <th> Passwd</th>
            <th> Email</th>
            <th> Foto</th>
            <th> Administrador</th>

        </thead>

        
        <tbody border:1px>
        <?php
               

        $conn = new mysqli("localhost", "root", "", "mobile-repair");
               
        $sql = "select * from usuarios ";

        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            echo "<tr >";echo "<br>";
            if (isset($_GET['id']) && ($row['id'] == $_GET['id'])) {
              echo '<form class="form-inline m-2" action="update-admin-user.php" method="POST">';
              echo '<td><input type="text" class="form-control" name="user" value="'.$row['user'].'"></td>';
              echo '<td><input type="text" class="form-control" name="passwd" value="'.$row['passwd'].'"></td>';
              echo '<td><input type="text" class="form-control" name="email" value="'.$row['email'].'"></td>';
              echo '<td><input type="file" class="form-control" name="foto" value="'.$row['foto'].'"></td>';
              echo '<td><input type="text" class="form-control" name="administrador" value="'.$row['administrador'].'"></td>';
             
              echo '<td><button type="submit" class="btn2 btn-primary">Save</button></td>';
              echo '<input type="hidden" name="id" value="'.$row['id'].'">';echo "<br>";
              echo '</form>';
            } else {
              echo "<td>" . $row['user'] . "</td>";
              echo "<td>" . $row['passwd'] . "</td>";
              echo "<td>" . $row['email'] . "</td>";
              echo '<td><img width="45" src="' . $foto . '"></td>';
              echo "<td>" . $row['administrador'] . "</td>";
              
            }
            echo '<td><a class="btn2 btn-primary" href="pagina-admin.php?id=' . $row['id'] . '" role="button">Update</a></td>';
            echo '<td><a class="btn2 btn-danger" href="delete-admin-user.php?id=' . $row['id'] . '" role="button">Delete</a></td>';
            echo "</tr>";
          }
          
          $conn->close();
          
    ?>  
        </tbody>
   

      </table>
















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
