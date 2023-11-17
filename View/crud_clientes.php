<?php
    require '../DataBase/modelo.php';
    require '../INCLUDES/navbar.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link rel="stylesheet" href="../CSS/estilos.css">
    <link rel="stylesheet" href="../CSS/crud_clientes.css">
</head>
<body>
    <br><br>
    <h1>
        Registro de los Usuarios
    </h1>
    <br><br>
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
                echo "<td><button  class='btn_eli_act' onclick='mostrarModalAct()'" . $row["id_usuario"] . "'>Actualizar</button> <button class='btn_eli' onclick='mostrarModal()'>" . $row["id_usuario"] . "'>Eliminar</button></td>";
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
            // Aquí puedes agregar la lógica para eliminar el dato
            alert('Dato eliminado correctamente');
            cerrarModal();
            
        }
    </script>
            <?php
                if (isset($_GET["id_usuario"])) {
                    // Obtener el id_usuario de forma segura
                    $id = $_GET["id_usuario"];
                
                    // Consulta preparada para eliminar el registro
                    $sql = "DELETE FROM usuario WHERE ID = ?";
                    $stmt = $conn->prepare($sql);
                
                    // Vincular parámetro
                    $stmt->bind_param("i", $id);
                
                    // Ejecutar la consulta
                    if ($stmt->execute()) {
                        // Redirigir a la página de CRUD después de eliminar
                        header("Location: ../View/crud_clientes"); 
                        exit(); // Asegurar que el script se detenga después de redirigir
                    } else {
                        // Manejo de errores más robusto
                        echo "Error al eliminar registro: " . $stmt->error;
                    }
                }

            ?>
    <button onclick='mostrarModal()' ></button>
    
            
    <div id="miModal" class="modal_crud">
        <div class="modal-contenido-crud">
            <span class="cerrar" onclick="cerrarModal()">&times;</span>
            <h3>Ventana de Eliminar</h3>
            <br><br>
            <p>¿Estás seguro de que quieres eliminar este usuario?</p>
            <br><br><br>
            <button onclick="eliminarDato()" class="btn_eli_crud" >Eliminar</button>
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
        <script>
            const emailValido = email => {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
            }
            function validar(f){
                var nn = f.nombre.value;

                if (!emailValido(f.email.value)) {
                    alert("Por favor, escribe un correo electrónico válido");
                    f.email.focus();
                    return false;
                    }
                    if(ok == false)
                    alert(msg);
                return ok;
            }
        </script>

        <div id="actualizarModal" class="modal_crud">
            <div class="modal-contenido-actu">
                <span class="cerrar" onclick="cerrarModalAct()">&times;</span>
                <h1>Actualizar Registro</h1>

                <form method="post" action="../Controller/actualizar_clientes.php">
                    <div class="form-control" >
                        <input type="hidden" name="id" value="<?php echo $id_usuario; ?>">

                        <input type="text" name="nombre" required placeholder="Nombre" maxlength="100" minlength="5" value="<?php echo $nombre; ?>" >

                        <input type="text" name="apellido" required placeholder="Apellido" maxlength="250" minlength="5" value="<?php echo $apellido; ?>" >

                        <input type="text" name="email" required placeholder="Gmail" title="Debe contener @" value="<?php echo $email; ?>" >

                        <input type="password" name="contraseña" required placeholder="Contraseña" maxlength="50" minlength="6" value="<?php echo $contraseña; ?>" >
                    </div>

                    <input type="submit" value="Actualizar" class="btn_eli_crud">
                </form>

                
            </div>
        </div>


</body>
</html>