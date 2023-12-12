<?php
    require '../00_admin/Data/modelo.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>


    <link rel="icon" href="../img/icono_plaza.png" type="image/x-icon">
    <link rel="shortcut icon" href="../img/icono_plaza.png" type="image/x-icon">
    <link rel="stylesheet" href="../00_admin/css/report_ventas.css">

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
                <li><a href="../00_admin/reporte_ingredientes.php">Reportes</a></li>
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

    
    <div class="contenedor">    
        <button class="btn_ventas" >
            Generar Reporte
        </button></div>

</body>

<style>

.tabala_ventas {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    justify-content: center;
    display: flex;
    border-radius: 5px;
    /*margin-left: 18%;/* Agregado para centrar la tabla horizontalmente 
    margin-top: -30%;*/
}
.contenedor{
    width: 100%;
    display: grid;
    place-items: center;
    margin-top: 2em;
}
th, td {
    border: 1px solid #000;
    padding: 10px;
    text-align: center;
    justify-content: center;

}

th {
    background-color: #1d3557;
    font-weight: bold;
    color: #ffff;
}  
tr:nth-child(even) {
    background-color: #f2f2f2;
}


.btn_ventas{
    cursor: pointer;
    display: inline-block;
    width: 200px;
    background: #1d3557;
    color: white;
    margin:auto ;
    padding: 15px;
    font-family: inherit;
    font-size: 16px;
    border: transparent;
    border-radius: 5px;
}
</style>
</html>