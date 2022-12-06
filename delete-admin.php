<?php
  $conn = new mysqli("localhost", "root", "", "mobile-repair");
  $id = $_GET['id'];
  $sql = "delete from citas where id=$id";
  $conn->query($sql);
  $conn->close();
  header("location: pagina-admin.php");
?>