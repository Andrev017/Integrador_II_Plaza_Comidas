<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "plaza_de_comidas";

    
        $conn = new mysqli($servername, $username, $password, $dbname);

            // Verificar la conexión
        if ($conn->connect_error) {
            die("Error en la conexión a la base de datos: " . $conn->connect_error);
        }
        
?>