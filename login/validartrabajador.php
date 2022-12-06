<?php
session_start();

if (!isset($_REQUEST['user-trabajador']) or $_REQUEST['user-trabajador']==''){
    $error = 'Usuario incompleto';
}else if (!isset($_REQUEST['pswd']) or $_REQUEST['pswd']==''){
    $error = 'Contraseña incompleta';
}else if (strlen($_REQUEST['pswd']) < 3){
    $error = 'La contraseña tiene un mínimo de 3 caracteres';
}


if (isset($error)){
    $_SESSION['user-trabajador'] = $_REQUEST['user-trabajador'];
    $_SESSION['pswd'] = $_REQUEST['pswd'];
    $_SESSION['error'] = $error;
    Header("location: logintrabajador.php");
}else{
    $_SESSION['nombrep'] = $_REQUEST['user-trabajador'];
    $nombre = $_REQUEST['user-trabajador'];
    $pass = $_REQUEST['pswd'];

    $server_name = "localhost";
    $database = "mobile-repair";
    $username = "root";
    $password = "";
}


    $enlace = mysqli_connect($server_name, $username, $password, $database);
    $select = "SELECT * FROM trabajadores WHERE nombre= ('$nombre') and pass =('$pass')";
    $ejec = $enlace ->query($select);
    if(mysqli_num_rows($ejec) == 0) {

        $error = "Has introducido mal un dato";
        $_SESSION['error'] =$error;
        header("Location: logintrabajador.php");
    }
     else {
        $_SESSION['idUsuario'] = $_REQUEST['user'];
        Header("Location: ../citastrabajadores.php");
}   
?>