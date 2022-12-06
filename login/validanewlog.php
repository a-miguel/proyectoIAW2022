<?php
session_start();

if (!isset($_REQUEST['new-user']) or $_REQUEST['new-user']==''){
    $error = 'Usuario incompleto';
}else if (!isset($_REQUEST['newpswd']) or $_REQUEST['newpswd']==''){
    $error = 'Contraseña incompleta';
}else if (strlen($_REQUEST['newpswd']) < 3){
    $error = 'La contraseña tiene un mínimo de 3 caracteres';
}else if (!isset($_REQUEST['email']) or $_REQUEST['email']==''){
    $error = 'Email incompleto';
}else if(!filter_var( $_REQUEST['email'], FILTER_VALIDATE_EMAIL)){
    $error = 'Debe ser un email real, ej. a@a.com';
}

if (isset($error)){
    $_SESSION['new-user'] = $_REQUEST['new-user'];
    $_SESSION['newpswd'] = $_REQUEST['newpswd'];
    $_SESSION['email'] = $_REQUEST['email'];
    $_SESSION['error'] = $error;
    Header("location: newregistro.php");
}else{
    $_SESSION['idUsuario'] = $_REQUEST['new-user'];

    $user = $_REQUEST['new-user'];
    $email = $_REQUEST['email'];
    $passwd = $_REQUEST['newpswd'];

    $server_name = "localhost";
    $database = "mobile-repair";
    $username = "root";
    $password = "";

    $enlace = mysqli_connect($server_name, $username, $password, $database);
    if(!$enlace) {
        die("<p>Error en la conexion</p>" .mysqli_connect_error());
    } else {
            $insert = "INSERT INTO usuarios (user, passwd, email) VALUES ('$user', '$passwd', '$email')";
            $enlace->query($insert);
            $enlace->close();
    }
    Header("Location: ../pagina-usuario.php");
}
?>
