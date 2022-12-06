<?php
  $conn = new mysqli("localhost", "root", "", "mobile-repair");
  $id = $_GET['id'];
  $sql = "delete from usuarios where id=$id";
  $conn->query($sql);
  $conn->close();
  header("location: pagina-admin.php");
?>