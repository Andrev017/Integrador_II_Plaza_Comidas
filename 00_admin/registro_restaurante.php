<?php
    require '../DataBase/modelo.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurantes</title>

    <link rel="stylesheet" href="../00_admin/css/restaurant_registro.css">

    <link rel="icon" href="../img/icono_plaza.png" type="image/x-icon">
    <link rel="shortcut icon" href="../img/icono_plaza.png" type="image/x-icon">
</head>
<body>
    
    <header class="header" >       
        <div class="logo">
            <div class="bn">
                <a href="../00_admin/index_admin.php">
                    <img src="../img/logo_plaza.png" alt="Logo del Proyecto">
                </a>
                    
            </div>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="../00_admin/registro_restaurante.php">Restaurantes</a></li>
                <li><a href="../00_admin/registro_menu.php">Menu</a></li>
                <li><a href="../00_admin/crud_clientes.php">Registros</a></li>
                <li><a href="../00_admin/reporte_ingredientes.php">Reporte de Ingrdientes</a></li>
                <li><a href="../00_admin/reporte_ventas.php">Reporte de Ventas</a></li>
            </ul>
        </nav>
    </header>

    <br><br>
    <section class="section" >
        <h1>Regsitra de los Restaunrantes</h1>
        <br>
        <form method="post" action="../00_admin/controler_registro_restaurante.php" >
                <div class="form-control">
                    <input type="text" name="nombre" placeholder="Nombre del Restaurante" required>
                    <input type="text" name="direc" placeholder="Direccion" required>
                    <input type="text" name="telf" placeholder="Numero Celular" required>
                    <input type="text" name="contra" placeholder="Contraseña" required>
                    <input type="text" name="descrip" placeholder="Descripción" required>
                </div>
                <br><br>
            <input type="submit" value="Agregar" class="btn">
        </form>
    </section>


    <table class="tabala_crud" >
    <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Telefono</th>
            <th>Contraseña</th>
            <th>Descripción</th>
            <th>Botones</th>
        </tr>

        <?php
        $sql = "SELECT * FROM retaurantes";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_res"] . "</td>";
                echo "<td>" . $row["nombre_res"] . "</td>";
                echo "<td>" . $row["direc_res"] . "</td>";
                echo "<td>" . $row["telefono_res"] . "</td>";
                echo "<td>" . $row["contraseña_res"] . "</td>";
                echo "<td>" . $row["descrip_res"] . "</td>";
                echo "<td><button  class='btn_act'" . $row["id_res"] . "'>Actualizar</button> <button class='btn_eli'>" . $row["id_res"] . "'>Eliminar</button></td>";
                echo "</tr>";                                                          
            }
        } else {
            echo "No hay registros en la base de datos.";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>