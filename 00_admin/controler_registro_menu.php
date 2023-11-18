<?php
    require '../00_admin/Data/modelo.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id_menu'];
        
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $stok = $_POST['stok'];



        $sql = "INSERT INTO menu (nombre_menu,precio_menu,descripcion_menu,stock_menu) VALUES ('$nombre', '$precio','$descripcion','$stok')";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../00_admin/registro_menu.php"); 
        } else {
            echo "Error al insertar registro: " . $conn->error;
        }

        $conn->close();
    }


?>
