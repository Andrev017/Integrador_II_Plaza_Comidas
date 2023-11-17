<?php
    require "../DataBase/modelo.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id_usuario'];
        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];
        $hash = password_hash($contraseña, PASSWORD_DEFAULT);


        $sql = "INSERT INTO usuario (nombre_usuario,apellido_usuario,email_usuario,contraseña_usuario) VALUES ('$nombre', '$apellido','$email','$contraseña')";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../View/index.php"); 
        } else {
            echo "Error al insertar registro: " . $conn->error;
        }

        $conn->close();
    }
    //SELECT * FROM usuario WHERE contraseña_usuario ='1234567' AND email_usuario ="adre@gmail.com"
?>






<?php
/*
    require '../DataBase/modelo.php';


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];
        $hash = password_hash($contraseña, PASSWORD_DEFAULT);


        $conn = pg_connect("host=localhost dbname=plaza_comidas user=postgres password=nico1216");
        // Crear la consulta SQL
        $sql = "INSERT INTO usuario (id_usuario, nombre_usuario, apellido_usuario, email_usuario, contraseña_usuario) VALUES ('$id';'$nombre', '$apellido', '$email', '$contraseña')";

        // Ejecutar la consulta SQL
        $resultado = pg_query($conn, $sql);

        // Comprobar el resultado de la consulta
        if ($resultado === false) {
            echo "Error al insertar registro: " . pg_last_error($conn);
        } else {
            header('Location: ../View/inicio_sesion_clientes.php');
            exit;
        }

        // Cerrar la conexión a la base de datos
        pg_close($conn);
    }
*/
?>