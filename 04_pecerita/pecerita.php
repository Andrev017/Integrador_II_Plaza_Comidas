<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pecrita</title>

    <link rel="stylesheet" href="../04_pecerita/pecerita.css">

    <link rel="icon" href="../img/icono_plaza.png" type="image/x-icon">
    <link rel="shortcut icon" href="../img/icono_plaza.png" type="image/x-icon">
</head>
<body>

    <header class="header" >       
        <div class="logo">
            <div class="bn">
                <a href="../View/index.php">
                    <img src="../img/logo_plaza.png" alt="Logo del Proyecto">
                </a>
                    
            </div>
        </div>
        <nav>
            <ul class="nav-links">
            
                <li><a href="../View/restaurantes.php">Restaurantes</a></li>
                <li><a href="../01_ensartados.php/sucursal_ens.php">Sucursales</a></li>
                <li><a href="../View/promociones.php">Promociones</a></li>
                <li><a id="btn-modal">Ver compra</a></li>
            </ul>
        </nav>
        <div id="modal" class="modal">
        <div class="modal-content">
            <label class="agregados">Todos sus Agregados</label>
            <div class="carta checkout">
                <label class="agregados">Verificar su compra</label>
                <div class="details">
                    <span>Hambuerguesa doble:</span>
                    <span>39Bs</span>
                    <span>Tacos virria:</span>
                    <span>12.50Bs</span>
                    <span>Combo pizza familiar:</span>
                    <span>90Bs</span>
                </div>
                <div class="checkout--footer">
                    <label class="price">Total</label>
                    <label class="price"><sup>Bs</sup>141.50</label>
                    <a href="../View/compra.php"><button class="checkout-btn">Comprar</button></a>
                </div>
                </div>
        </div>
        <button id="btn-cerrar" class="cerrar" type="button">×</button> 
        <!--button id="btn-cerrar">Cerrar</button-->
    </div>
    <script>
        const modal = document.getElementById("modal");
        const btnModal = document.getElementById("btn-modal");
        const btnCerrar = document.getElementById("btn-cerrar");
        btnModal.addEventListener("click", function() {
        modal.style.display = "block";
        });
        btnCerrar.addEventListener("click", function() {
        modal.style.display = "none";
        });
    </script>
    </header>
    <!--p>----------------------------------------------------------------------------------------------------</!--p-->
    
    <div>
        <div class="nom_inicio">
                <h1>
                    La Pecerita  
                </h1>
        </div>
    </div>
<!--p>----------------------------------------------------------------------------------------------------</!--p-->
    <section class="section" >
            <div class="card">
            <?php              
                $id_menu = 23;
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "plaza_de_comidas";               
                $conn = new mysqli($servername, $username, $password, $dbname);
                $sql = "SELECT * FROM menu WHERE id_menu = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $id_menu);
                $stmt->execute();
                $result = $stmt->get_result();
                
                if ($result) {
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<div class='card-header'><h1>" . $row["nombre_menu"] . "</h1></div>";
                
                            echo "<div class='card-body'><img src='https://th.bing.com/th/id/OIP.FsAPhMtEtVKzq5yChogjhQHaGR?w=748&h=634&rs=1&pid=ImgDetMain' alt='' class='img_ens'><br>" . $row["precio_menu"] . 'Bs, ' . $row["descripcion_menu"] . "</div>";
                            echo "<br>";
                            echo "<div class='card-footer'><button class='btn_1'><a href='#'>Añadir a su compra</a></button></div>";
                        }
                    } else {
                        echo "No hay registros en la base de datos.";
                    }
                } else {
                    echo "Error en la consulta: " . $conn->error;
                }
                $conn->close();           
            ?>
            </div>

            <div class="card">
            <?php              
                $id_menu = 24;
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "plaza_de_comidas";               
                $conn = new mysqli($servername, $username, $password, $dbname);
                $sql = "SELECT * FROM menu WHERE id_menu = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $id_menu);
                $stmt->execute();
                $result = $stmt->get_result();
                
                if ($result) {
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<div class='card-header'><h1>" . $row["nombre_menu"] . "</h1></div>";
                
                            echo "<div class='card-body'><img src='https://th.bing.com/th/id/OIP.s37lIY0HuFxDVV4NCQ3pyAHaFj?rs=1&pid=ImgDetMain' alt='' class='img_ens'><br>" . $row["precio_menu"] . 'Bs, ' . $row["descripcion_menu"] . "</div>";
                            echo "<br>";
                            echo "<div class='card-footer'><button class='btn_1'><a href='#'>Añadir a su compra</a></button></div>";
                        }
                    } else {
                        echo "No hay registros en la base de datos.";
                    }
                } else {
                    echo "Error en la consulta: " . $conn->error;
                }
                $conn->close();           
            ?>
            </div>


            <div class="card">
            <?php              
                $id_menu = 25;
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "plaza_de_comidas";               
                $conn = new mysqli($servername, $username, $password, $dbname);
                $sql = "SELECT * FROM menu WHERE id_menu = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $id_menu);
                $stmt->execute();
                $result = $stmt->get_result();
                
                if ($result) {
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<div class='card-header'><h1>" . $row["nombre_menu"] . "</h1></div>";
                
                            echo "<div class='card-body'><img src='https://4.bp.blogspot.com/-8dPniZpm0NY/U3zXVOHrjfI/AAAAAAAACsQ/My3GX6CaBXE/s1600/Caba%C3%B1ita'+crocante.JPG' alt='' class='img_ens'><br>" . $row["precio_menu"] . 'Bs, ' . $row["descripcion_menu"] . "</div>";
                            echo "<br>";
                            echo "<div class='card-footer'><button class='btn_1'><a href='#'>Añadir a su compra</a></button></div>";
                        }
                    } else {
                        echo "No hay registros en la base de datos.";
                    }
                } else {
                    echo "Error en la consulta: " . $conn->error;
                }
                $conn->close();           
            ?>
            </div>

                <style>
                    .btn_1 :hover{
                background-color: #1d3557;
                color: #ffff;
                transform: scale(1.2);
                font-size: 19px;
            }
                </style>

            <div class="card">
            <?php              
                $id_menu = 26;
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "plaza_de_comidas";               
                $conn = new mysqli($servername, $username, $password, $dbname);
                $sql = "SELECT * FROM menu WHERE id_menu = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $id_menu);
                $stmt->execute();
                $result = $stmt->get_result();
                
                if ($result) {
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<div class='card-header'><h1>" . $row["nombre_menu"] . "</h1></div>";
                
                            echo "<div class='card-body'><img src='https://th.bing.com/th/id/R.355868616d0fe473c226c59364939948?rik=WW0bd4uuSsYFxQ&pid=ImgRaw&r=0' alt='' class='img_ens'><br>" . $row["precio_menu"] . 'Bs, ' . $row["descripcion_menu"] . "</div>";
                            echo "<br>";
                            echo "<div class='card-footer'><button class='btn_1'><a href='#'>Añadir a su compra</a></button></div>";
                        }
                    } else {
                        echo "No hay registros en la base de datos.";
                    }
                } else {
                    echo "Error en la consulta: " . $conn->error;
                }
                $conn->close();           
            ?>
            </div>

    </section>
</body>
</html>