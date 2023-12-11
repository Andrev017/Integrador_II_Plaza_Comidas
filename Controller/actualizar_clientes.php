<?php
require '../DataBase/modelo.php';


$id_usuario = $nombre = $apellido = $email = $contraseña = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id_usuario = $_POST['id_usuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    $sql = "UPDATE usuario SET nombre_usuario = '$nombre', apellido_usuario = '$apellido', email_usuario = '$email', contraseña_usuario = '$contraseña' WHERE id_usuario = $id_usuario";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../View/crud_clientes.php");
        exit();
    } else {
        echo "Error al actualizar registro: " . $conn->error;
    }

    $stmt->close();
} 

$conn->close();

?>


<?php
/*
    $id_usuario = $_POST['id_usuario']; // supongamos que recibes el ID del usuario a actualizar por POST
    $nuevo_nombre = $_POST['nuevo_nombre']; // supongamos que recibes el nuevo nombre por POST

    // Sentencia SQL para actualizar los datos
    $sql = "UPDATE tu_tabla SET nombre = '$nuevo_nombre' WHERE id = $id_usuario";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "Datos actualizados correctamente";
    } else {
        echo "Error al actualizar datos: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();*/
?>