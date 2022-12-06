
<?php
    session_start();

    // Valido que me envian el campo
    if (!isset($_REQUEST['asunto']) or $_REQUEST['asunto']==''){
        $error = 'Asunto incompleto';
    }else if (!isset($_REQUEST['problema']) or $_REQUEST['problema']==''){
        $error = 'Apartado de problemas incompletos';
    }

    if (isset($error)){
        $_SESSION['asunto'] = $_REQUEST['asunto'];
        $_SESSION['problema'] = $_REQUEST['problema'];
        $_SESSION['error'] = $error;
        Header("Location: pagina-usuario.php");
    }else{

        $idUsuario = $_SESSION["idUsuario"];

        $ASUNTO = $_REQUEST['asunto'];
        $PROBLEMA = $_REQUEST['problema'];
        $FECHA = $_REQUEST['date'];
        $HORA = $_REQUEST['hora'];
        $idProfesional = $_REQUEST['trabajadores'];
        
    
        $server_name = "localhost";
        $database = "mobile-repair";
        $username = "root";
        $password = "";

        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Esto me lo da el formulario al subir el archivo. foto es el name del input.
            $fichero_subido = "fotitos/" . basename($_FILES["foto"]["name"]); 

            // Muevo el archivo de la carpeta temporal a la definitiva
            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $fichero_subido)) {
$foto = $fichero_subido;
    
        $enlace = mysqli_connect($server_name, $username, $password, $database);
        if(!$enlace) {
            die("<p>Error en la conexion</p>" .mysqli_connect_error());
        } else {
                $insert = "INSERT INTO citas (idProfesional, idUsuario, asunto, problema, fecha, hora, foto) VALUES ('$idProfesional', '$idUsuario', '$ASUNTO', '$PROBLEMA', '$FECHA', '$HORA' ,'$foto')";
                $enlace->query($insert);
                $enlace->close();
        }
        Header("Location: pagina-usuario.php");
    }



                // INSERT INTO Productos value ($id, $titulo,$fichero_subido )
                // <img src="$nombre_archov">
            } else {
                // Mensaje de error: ¿Límite de tamaño? ¿Ataque?
                echo '<p>¡Ups! Algo ha pasado.</p>';
            }
        


        $conn = new mysqli("localhost", "root", "", "mobile-repair");
        $ASUNTO = $_REQUEST['asunto'];
        $PROBLEMA = $_REQUEST['problema'];
        $FECHA = $_REQUEST['date'];
        $HORA = $_REQUEST['hora'];
        $idProfesional = $_REQUEST['trabajadores'];
        $foto = $fichero_subido;
        $idUsuario = $_SESSION["idUsuario"];
      

        $sql = "insert into citas () values ('$idProfesional', '$idUsuario', '$ASUNTO', '$PROBLEMA', '$FECHA', '$HORA' ,'$foto')";
        $conn->query($sql);
        $conn->close();
        Header("Location: miscitas.php");
    }

?>