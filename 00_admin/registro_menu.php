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
                <!--li><a href="../00_admin/reporte_ventas.php">Reporte de Ventas</a></!--li-->
            </ul>
        </nav>
    </header>

    <br><br>
    <section class="section">
        <h1 class="tit_input" >Regsitra Nuevos Platos</h1>
        <br>
        <form method="post" action="../00_admin/controler_registro_menu.php">
            <div class="form-control">
                <input type="text" name="nombre" placeholder="Nombre del plato" required>
                <input type="text" name="precio" placeholder="Precio referido" required>
                <input type="text" name="descripcion" placeholder="Descripción" required>
                <input type="text" name="stok" placeholder="Stok Dispible" min="0" max="500" required>
            </div>
            <br><br>
            <input type="submit" value="Agregar" class="btn">
        </form>
    </section>
    <style>
        .tit_input{
            color: white;
        }
    </style>


    <section class="contenedores">

        <form action="./btn_reporte_menu.php" method="post">

            <input type="submit" value="Generar Reporte" />
        </form>

        <style>
            .contenedores {
                display: flex;
                flex-direction: column;

                & form>input {
                    position: absolute;
                    top: 5.5em;
                    right: 3em;
                    border-radius: .3em;
                    border: none;
                    padding: .2em 2em;
                    cursor: pointer;
                    background-color: #1d3557;
                    color: #fff;
                }
            }
        </style>

        <table class="tabala_crud">
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
                    echo "<td><button class='btn_act' onclick='mostrarModalAct(" . $row["id_menu"] .")'>  <img src='./Data/editar_logo.png' alt='' class='img_edit'>  </button> <button class='btn_eli' onclick='mostrarModal(" . $row["id_menu"] . ")'>  <img src='./Data/basura_logo.png' alt='' class='img_edit' >  </button></td>";

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
            .btn_act{
                cursor: pointer;
                display: inline-block;
                width: 40%;
                background-color: transparent;
                padding: 10px;
                font-family: inherit;
                border: transparent;
                border-radius: 5px;
            }
            .img_edit{
                width: 100%;
                height: 100%;
            }
            .btn_eli{
                cursor: pointer;
                display: inline-block;
                width: 40%;
                background-color: transparent;
                padding: 10px;
                font-family: inherit;
                border: transparent;
                border-radius: 5px;
            }
            .img_edit{
                width: 100%;
                height: 100%;
            }
        </style>
    </section>

     <!--------------------------------------------------------------------------------------------------->
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
    <!--------------------------------------------------------------------------------------------------->

    <div id="actualizarModal" class="modal_crud">
        <div class="modal-contenido-actu">
            <span class="cerrar" onclick="cerrarModalAct()">&times;</span>
            <h1>Actualizar Usuario</h1>

            <form method="post" action="../00_admin/controllers/actualizar_crud.php">

                <div class="formm">
                    <input type="text" name="id_usuario" placeholder="Id" required >

                    <input type="text" name="nombre" placeholder="Nombre" required>
                    <input type="text" name="direc" placeholder="Precio" required>
                    <input type="text" name="celular" placeholder="Descripción" required>
                    <input type="password" name="contraseña" placeholder="Stock" required>


                </div>
                
                    <input type="submit" value="Actualizar" class="btn_act_input">
            </form>
        </div>
    </div>



    <style>
        /*--------------------------------VENTANA MODAL--------------------------------------------*/
.modal_crud {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
}

.modal-contenido-crud {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 25%;
    height: 50%;
    justify-content: center;
    text-align: center;
}
h3{
    color: #1d3557;
    font-size: 18px;
}

.cerrar {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;

}

.cerrar:hover,
.cerrar:focus {
    color: red;
    text-decoration: none;
    cursor: pointer;
}
.btn_eli_crud{
    cursor: pointer;
    display: inline-block;
    width: 100%;
    background: #1d3557;
    color: white;
    padding: 15px;
    font-family: inherit;
    font-size: 16px;
    border: transparent;
    border-radius: 5px;
}
.btn_act_input{
    cursor: pointer;
    display: inline-block;
    width: 100%;
    background: #1d3557;
    color: white;
    padding: 15px;
    font-family: inherit;
    font-size: 16px;
    border: transparent;
    border-radius: 5px;
}
/*------------------------------------------------------------------------------*/
.modal-contenido-actu{
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 30%;
    height: 60%;
    justify-content: center;
    text-align: center;
}

.text {
    margin-top: 30px;
}
.formm {
    margin: 20px 0 40px;
    width: 390px;

}
h1{
    color: #1d3557;
    font-size: 18px;
}
.formm input {
    outline: none;
    background-color: transparent;
    border: 0;
    border-bottom: 2px #1d3557 solid;
    display: block;
    width: 90%;
    padding: 10px;
    color: #1d3557;
}

.formm input:focus .formm input:valid {
    outline: 0;
    border-bottom-color: #219ebc;
}

.formm label {

    position: absolute;
    pointer-events: none;

}

.formm label span {

    display: inline-block;
    font-size: 20px;
    min-width: 5px;
    transition: 0.3s cubic-bezier(0.68, -0.55, 0265, 1.55);
}

.formm input{
    font-size: 14px;
}
    </style>

</body>

</html>