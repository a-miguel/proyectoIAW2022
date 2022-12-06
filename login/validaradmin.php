<?php
session_start();

if (!isset($_REQUEST['admin']) or $_REQUEST['admin']==''){
    $error = 'Usuario incompleto';
}else if (!isset($_REQUEST['admin-pswd']) or $_REQUEST['admin-pswd']==''){
    $error = 'Contraseña incompleta';
}else if (strlen($_REQUEST['admin-pswd']) < 3){
    $error = 'La contraseña tiene un mínimo de 3 caracteres';
}else if ($_REQUEST['admin'] !='admin'){
    $error = 'Usuario incorrecto';
}else if($_REQUEST['admin-pswd']!='admin'){
    $error = 'Contraseña incorrecta';
}

if (isset($error)){
    $_SESSION['admin'] = $_REQUEST['admin'];
    $_SESSION['admin-pswd'] = $_REQUEST['admin-pswd'];
    $_SESSION['error'] = $error;
    Header("location: adminregistro.php");
}else{
    $_SESSION['idAdmin'] = $_REQUEST['admin'];
    Header("Location: ../pagina-admin.php");
}
?>
