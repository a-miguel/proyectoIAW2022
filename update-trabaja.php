<?php
  $conn = new mysqli("localhost", "root", "", "mobile-repair");
  $id = $_POST['id'];
  $idUsuario = $_POST['idUsuario'];
  $asunto = $_POST['asunto'];
  $problema = $_POST['problema'];
  $fecha = $_POST['fecha'];
  $hora = $_POST['hora'];
  $foto = $_POST['foto'];
  
  $sql = "update citas set asunto='$asunto', problema='$problema',idUsuario='$idUsuario', fecha='$fecha', hora='$hora', foto='$foto' where id=$id";
  $result = $conn->query($sql);
  $conn->close();
  header("location: citastrabajadores.php");
?>