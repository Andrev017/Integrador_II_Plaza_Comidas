<?php
require './00_admin/Data/modelo.php';

echo 'holasasa';

$id_usuario = $nombre = $apellido = $email = $contraseña = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id_usuario = $_POST['id_usuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    $sql = "UPDATE usuario SET nombre_usuario = '$nombre', apellido_usuario = '$apellido', email_usuario = '$email', contraseña_usuario = '$contraseña' WHERE id_usuario = $id_usuario";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../00_admin/crud_clientes.php");
        exit();
    } else {
        echo "Error al actualizar registro: " . $conn->error;
    }

    $stmt->close();
} 

$conn->close();

?>