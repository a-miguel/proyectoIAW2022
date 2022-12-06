<?php
  $conn = new mysqli("localhost", "root", "", "mobile-repair");
  $id = $_POST['id'];
  $idProfesional = $_POST['idProfesional'];
  $asunto = $_POST['asunto'];
  $problema = $_POST['problema'];
  $fecha = $_POST['fecha'];
  $hora = $_POST['hora'];
  $foto = $_POST['foto'];
  
  $sql = "update citas set idProfesional='$idProfesional', asunto='$asunto', problema='$problema', fecha='$fecha', hora='$hora', foto='$foto' where id=$id";
  $result = $conn->query($sql);
  $conn->close();
  header("location: miscitas.php");
?>