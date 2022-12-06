<?php
session_start();

if (!isset($_REQUEST['user']) or $_REQUEST['user']==''){
    $error = 'Usuario incompleto';
}else if (!isset($_REQUEST['passwd']) or $_REQUEST['passwd']==''){
    $error = 'Contraseña incompleta';
}

if (isset($error)){
    $_SESSION['user'] = $_REQUEST['user'];
    $_SESSION['passwd'] = $_REQUEST['passwd'];
    $_SESSION['error'] = $error;
    Header("location: index.php");
}else {
    
    $user = $_REQUEST['user'];
    $passwd = $_REQUEST['passwd'];

    $server_name = "localhost";
    $database = "mobile-repair";
    $username = "root";
    $password = "";
}


    $enlace = mysqli_connect($server_name, $username, $password, $database);
    $select = "SELECT * FROM usuarios WHERE user= ('$user') and passwd =('$passwd')";
    $ejec = $enlace ->query($select);
    if(mysqli_num_rows($ejec) == 0) {

        $error = "Has introducido mal un dato";
        $_SESSION['error'] =$error;
        header("Location: index.php");
    } else {
        $_SESSION['idUsuario'] = $_REQUEST['user'];
        Header("Location: ../pagina-usuario.php");
}   
?>