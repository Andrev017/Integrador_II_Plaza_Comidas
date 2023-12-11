<?php
    require '../00_admin/Data/modelo.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>

    <link rel="stylesheet" href="../00_admin/css/report_ventas.css">

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


    <table class="tabala_ventas" >
        <tr>
            <th>ID</th>
            <th>Monto total</th>
            <th>Fecha</th>


        </tr>

        <?php 

        $sql = "SELECT * FROM venta";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_venta"] . "</td>";
                echo "<td>" . $row["monto_total_venta"] . '<p>Bs</p>' . "</td>";
                echo "<td>" . $row["fecha_venta"] . "</td>";
                
                echo "</tr>";                                                          
            }
        } else {
            echo "No hay registros en la base de datos.";
        }
        $conn->close();
        ?>
    </table>

    
    <button class="btn_ventas" >
        Generar Reporte
    </button>

</body>
</html>