<?php
require '../00_admin/Data/modelo.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración</title>

    <link rel="stylesheet" href="../00_admin/css/report_ingredient.css">

    <link rel="icon" href="../img/icono_plaza.png" type="image/x-icon">
    <link rel="shortcut icon" href="../img/icono_plaza.png" type="image/x-icon">
</head>

<body>

    <header class="header">
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

    <style>
        .btn_report1>input {
            position: absolute;
            top: 5.5em;
            right: 70%;
            border-radius: .3em;
            border: none;
            padding: .2em 2em;
            cursor: pointer;
            background-color: #1d3557;
            color: #fff;
        }
    </style>

    <article>
        <section>
            <form action="./btn_reporte_ingredientes.php" method="post" class="btn_report1">
                <input type="submit" value="Generar Reporte" />
            </form>
            <br>
            <h1>Reporte de ingrediente </h1>

            <table class="tabala_ventas">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio por Unidad</th>

                </tr>

                <?php
                $sql = "SELECT * FROM ingredientes";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id_ingre"] . "</td>";
                        echo "<td>" . $row["nombre_ingre"] . "</td>";
                        echo "<td>" . $row["cantidad_ingre"] . "</td>";
                        echo "<td>" . $row["precio_ingre"] . "<p>Bs</p>" . "</td>";


                        echo "</tr>";
                    }
                } else {
                    echo "No hay registros en la base de datos.";
                }
                $conn->close();
                ?>
            </table>
        </section>


        <style>
            .btn_report>input {
                position: absolute;
                top: 5.5em;
                right: 27%;
                border-radius: .3em;
                border: none;
                padding: .2em 2em;
                cursor: pointer;
                background-color: #1d3557;
                color: #fff;
            }
        </style>

        <section>

            <form action="./btn_reportes_ventas.php" method="post" class="btn_report">
                <input type="submit" value="Generar Reporte" />
            </form>
            <br>
            <h1>Reporte de ventas </h1>

            <table class="tabala_ventas">
                <tr>
                    <th>ID</th>
                    <th>Monto total</th>
                    <th>Fecha</th>
                </tr>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "plaza_de_comidas";
                $conn = new mysqli($servername, $username, $password, $dbname);


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

        </section>
    </article>

</body>

<style>
    article {
        display: flex;
        justify-content: center;

    }

    h1 {
        text-align: center;
        margin-top: 2em;
    }

    .tabala_ventas {
        border-collapse: collapse;
        border-spacing: 0;
        width: 40vw;
        justify-content: center;
        display: flex;
        border-radius: 5px;
        /*margin-left: 18%;/* Agregado para centrar la tabla horizontalmente */
        margin: 3em auto;

    }

    .contenedor {
        width: 100%;
        display: grid;
        place-items: center;
        margin-top: 2em;
    }

    th,
    td {
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


    .btn_ventas {
        cursor: pointer;
        display: inline-block;
        width: 200px;
        background: #1d3557;
        color: white;
        margin: auto;
        padding: 15px;
        font-family: inherit;
        font-size: 16px;
        border: transparent;
        border-radius: 5px;
    }
</style>

</html>