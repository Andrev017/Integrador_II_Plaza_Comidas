<?php
    require '../DataBase/modelo.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>

    <link rel="stylesheet" href="../00_admin/css/registro_menu.css">

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
                <li><a href="#">Reporte de Ingrdientes</a></li>
                <li><a href="#">Reporte de Ventas</a></li>
            </ul>
        </nav>
    </header>

    <br><br>
    <section class="section" >
        <h1>Regsitra Nuevos Platos</h1>
        <br>
        <form method="post" action="../00_admin/controler_registro_menu.php" >
                <div class="form-control">
                    <input type="text" name="nombre" placeholder="Nombre del plato" required>
                    <input type="text" name="precio" placeholder="Precio referido" required>
                    <input type="text" name="descripcion" placeholder="Descripción" required>
                    <input type="text" name="stok" placeholder="Stok Dispible"  min="0" max="500" required>
                </div>
                <br><br>
            <input type="submit" value="Agregar" class="btn">
        </form>
    </section>


    <table class="tabala_crud" >
    <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Descripción</th>
            <th>Stok</th>
            <th>Botones</th>
        </tr>

        <?php
        $sql = "SELECT * FROM menu";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_menu"] . "</td>";
                echo "<td>" . $row["nombre_menu"] . "</td>";
                echo "<td>" . $row["precio_menu"] . '<p>Bs</p>' . "</td>";
                echo "<td>" . $row["descripcion_menu"] . "</td>";
                echo "<td>" . $row["stock_menu"] . "</td>";
                echo "<td><button  class='btn_act'" . $row["id_menu"] . "'>Actualizar</button> <button class='btn_eli'>" . $row["id_menu"] . "'>Eliminar</button></td>";
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