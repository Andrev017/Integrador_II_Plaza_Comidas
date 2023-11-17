<?php
require "../DataBase/modelo.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id_usuario'];
        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];


    $sql = "UPDATE usuario SET nombre='$nombre', apellido='$apellido', email='$email', contraseña='$contraseña' WHERE ID=$id";
    echo $sql;

    if ($conn->query($sql) === TRUE) {
        header("Location: ../View/crud_clientes.php"); 
    } else {
        echo "Error al actualizar registro: " . $conn->error;
    }

} else {
    $id = $_GET["id_ususrio"];
    $sql = "SELECT * FROM usuario WHERE  ID=$id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $nombre = $row["nombre"];
        $apellido = $row["apellido"];
        $email = $row["email"];
        $contraseña = $row["contraseña"];
        
    } else {
        echo "Registro no encontrado.";
    }
}

$conn->close();
?>