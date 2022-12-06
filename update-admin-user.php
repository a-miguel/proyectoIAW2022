<?php
  $conn = new mysqli("localhost", "root", "", "mobile-repair");
  $id = $_POST['id'];
  $user = $_POST['user'];
  $passwd = $_POST['passwd'];
  $email = $_POST['email'];
  $administrador = $_POST['administrador'];
  $foto = $_POST['foto'];
  
  $sql = "update usuarios set passwd='$passwd', email='$email',  foto='$foto' where id=$id";
  $result = $conn->query($sql);
  $conn->close();
  header("location: pagina-admin.php");
?>