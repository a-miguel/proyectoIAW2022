<?php
  $conn = new mysqli("localhost", "root", "", "mobile-repair");
  $id = $_POST['id'];
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $especialidad = $_POST['especialidad'];
  $foto = $_POST['foto'];
  
  $sql = "update trabajadores set nombre='$nombre', email='$email', pass='$pass', especialidad='$especialidad', foto='$foto' where id=$id";
  $result = $conn->query($sql);
  $conn->close();
  header("location: pagina-admin.php");
?>