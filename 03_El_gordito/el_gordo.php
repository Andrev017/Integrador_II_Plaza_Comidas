<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Gordo</title>

    <link rel="stylesheet" href="../03_El_gordito/el_gordo.css">

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
                    El Gordo  
                </h1>
        </div>
    </div>
<!--p>----------------------------------------------------------------------------------------------------</!--p-->
    <section class="section">
            <div class="card">
            <?php              
                $id_menu = 18;
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
                
                            echo "<div class='card-body'><img src='https://i.pinimg.com/originals/12/e5/b5/12e5b58bd517b03c4f38ad1446e23a4d.jpg' alt='' class='img_ens'><br>" . $row["precio_menu"] . 'Bs, ' . $row["descripcion_menu"] . "</div>";
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
                $id_menu = 19;
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
                
                            echo "<div class='card-body'><img src='https://4.bp.blogspot.com/-RB-D_97fDIQ/Wt6umrRbydI/AAAAAAAAAJc/d-4NyzJ_m0ceJATiD8zOmLoDvr-f7rIjACLcBGAs/s1600/descarga%2B%25284%2529.jpg' alt='' class='img_ens'><br>" . $row["precio_menu"] . 'Bs, ' . $row["descripcion_menu"] . "</div>";
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
                $id_menu = 20;
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
                
                            echo "<div class='card-body'><img src='https://th.bing.com/th/id/OIP.cTj1lFeacGurixcYT1kdiwHaE8?rs=1&pid=ImgDetMain' alt='' class='img_ens'><br>" . $row["precio_menu"] . 'Bs, ' . $row["descripcion_menu"] . "</div>";
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
                $id_menu = 21;
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
                
                            echo "<div class='card-body'><img src='https://4.bp.blogspot.com/-aheuid9WAfY/UJbEfckPVjI/AAAAAAAAAZg/0bX7Z7Y5fp0/s1600/hamburguesa.jpg' alt='' class='img_ens'><br>" . $row["precio_menu"] . 'Bs, ' . $row["descripcion_menu"] . "</div>";
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
                $id_menu = 22;
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
                
                            echo "<div class='card-body'><img src='https://th.bing.com/th/id/OIP.vvwJ07VnzuiCvgM8ZydlJgHaFj?rs=1&pid=ImgDetMain' alt='' class='img_ens'><br>" . $row["precio_menu"] . 'Bs, ' . $row["descripcion_menu"] . "</div>";
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