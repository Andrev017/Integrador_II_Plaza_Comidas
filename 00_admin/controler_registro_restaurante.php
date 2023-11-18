<?php
    require '../00_admin/Data/modelo.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //$id = $_POST['id_res'];
        
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direc'];
        $telefono = $_POST['telf'];
        $contraseña = $_POST['contra'];
        $descripcion = $_POST['descrip'];



        $sql = "INSERT INTO retaurantes (nombre_res,direc_res,telefono_res,contraseña_res,descrip_res) 
        VALUES ('$nombre', '$direccion','$telefono','$contraseña','$descripcion')";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../00_admin/registro_restaurante.php"); 
        } else {
            echo "Error al insertar registro: " . $conn->error;
        }

        $conn->close();
    }


?>