<?php
    require '../DataBase/modelo.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>

    <link rel="stylesheet" href="../00_admin/css/crud_clientes.css">

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
                <li><a href="../00_admin/reporte_ingredientes.php">Reporte de Ingrdientes</a></li>
                <li><a href="../00_admin/reporte_ventas.php">Reporte de Ventas</a></li>
            </ul>
        </nav>
    </header>


    <br><br>
    <h1 class="tituloh1">
        Registro de los Usuarios
    </h1>
    <br>
    <table class="tabala_crud">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Contraseña</th>
            <th>Botones</th>
        </tr>

        <?php
        $sql = "SELECT * FROM usuario";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_usuario"] . "</td>";
                echo "<td>" . $row["nombre_usuario"] . "</td>";
                echo "<td>" . $row["apellido_usuario"] . "</td>";
                echo "<td>" . $row["email_usuario"] . "</td>";
                echo "<td>" . $row["contraseña_usuario"] . "</td>";
                echo "<td><button class='btn_eli_act' onclick='mostrarModalAct(" . $row["id_usuario"] .")'>Actualizar</button> <button class='btn_eli' onclick='mostrarModal(" . $row["id_usuario"] . ")'>Eliminar</button></td>";
                echo "</tr>";
            }
        } else {
            echo "No hay registros en la base de datos.";
        }

        $conn->close();
        ?>

    </table>
    <br>

    <script>
        function mostrarModal() {
            document.getElementById('miModal').style.display = 'block';
        }

        function cerrarModal() {
            document.getElementById('miModal').style.display = 'none';
        }

        function eliminarDato() {
            
            alert('Dato eliminado correctamente');
            cerrarModal();

        }
    </script>

    <button onclick='mostrarModal()'></button>


    <div id="miModal" class="modal_crud">
        <div class="modal-contenido-crud">
            <span class="cerrar" onclick="cerrarModal()">&times;</span>
            <h3>Ventana de Eliminar</h3>
            <br><br>
            <p>¿Estás seguro de que quieres eliminar este usuario?</p>
            <br><br><br>
            <button onclick="eliminarDato()" class="btn_eli_crud">Eliminar</button>
        </div>
    </div>
    <!--p>-----------------------------------------------------------------------------------</!--p-->
    <script>
        function mostrarModalAct() {
            document.getElementById('actualizarModal').style.display = 'block';
        }

        function cerrarModalAct() {
            document.getElementById('actualizarModal').style.display = 'none';
        }

        function actualizarDatos() {
            alert('Datos actualizados correctamente');
            cerrarModalAct();
        }
    </script>
        <!--p>-----------------------------------------------------------------------------------</!--p-->
    <script>
        const emailValido = email => {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        }

        function validar(f) {
            var nn = f.nombre.value;

            if (!emailValido(f.email.value)) {
                alert("Por favor, escribe un correo electrónico válido");
                f.email.focus();
                return false;
            }
            if (ok == false)
                alert(msg);
            return ok;
        }
    </script>

    <div id="actualizarModal" class="modal_crud">
        <div class="modal-contenido-actu">
            <span class="cerrar" onclick="cerrarModalAct()">&times;</span>
            <h1>Actualizar Usuario</h1>

            <form method="post" action="../00_admin/controllers/actualizar_crud.php">

                <div class="form-control">
                    <input type="text" name="id_usuario" placeholder="Id" required >

                    <input type="text" name="nombre" placeholder="Nombre" required>
                    <input type="text" name="apellido" placeholder="Apellido" required>
                    <input type="text" name="email" placeholder="Email" required>
                    <input type="password" name="contraseña" placeholder="Contraseña" required>
                </div>
                <br><br>
                    <input type="submit" value="Actualizar" class="btn_act">
            </form>
        </div>
    </div>


</body>

</html>