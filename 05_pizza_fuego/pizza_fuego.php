<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzas Fuego</title>

    <link rel="stylesheet" href="../05_pizza_fuego/pizza.css">

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
                    Pizzas Fuego  
                </h1>
        </div>
    </div>
<!--p>----------------------------------------------------------------------------------------------------</!--p-->
    <section class="section" >
            <div class="card">
                <div class="card-header">
                    <h1>Pizza Hawaiana</h1>
                </div>
                <div class="card-body">
                    <img src="../img/pizzas/pizza-hawaiana.jpg" alt="" class="img_ens" >
                    <p>55 Bs</p>
                </div>
                <br>
                <div class="card-footer">
                    <button class="btn_1">
                        <a href="#">Añadir a su compra</a>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h1>Pizza Jamon-Queso</h1>
                </div>
                <div class="card-body">
                    <img src="../img/pizzas/pizzajamon-queso_1.png" alt="" class="img_ens" >
                    <p>55 Bs</p>
                </div>
                <br>
                <div class="card-footer">
                    <button class="btn_1">
                        <a href="#">Añadir a su compra</a>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h1>Pizza con Champiñones</h1>
                </div>
                <div class="card-body">
                    <img src="../img/pizzas/champiñones.jpg" alt="" class="img_ens" >
                    <p>60 Bs</p>
                </div>
                <br>
                <div class="card-footer">
                    <button class="btn_1">
                        <a href="#">Añadir a su compra</a>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h1>Pizza Vegetariana</h1>
                </div>
                <div class="card-body">
                    <img src="https://th.bing.com/th/id/R.14dd8a21627ea5f496dec2934e613e2b?rik=QGlnswKickRrag&riu=http%3a%2f%2fsolorecetas.com%2fwp-content%2fuploads%2f2014%2f03%2fpizza-vegetariana-receta.jpg&ehk=qT%2bhcR8YsJV4Ld8sY7q71W9C%2fYaG7wip2%2fT2rh2qsNA%3d&risl=&pid=ImgRaw&r=0" alt="" class="img_ens" >
                    <p>60 Bs</p>
                </div>
                <br>
                <div class="card-footer">
                    <button class="btn_1">
                        <a href="#">Añadir a su compra</a>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h1>Pizza Cuatro Quesos</h1>
                </div>
                <div class="card-body">
                    <img src="https://th.bing.com/th/id/R.506fc07aa27d4a89e2828f2a199004ab?rik=IqZrRm1%2b5FxapA&riu=http%3a%2f%2fwww.confremar.com%2fimg%2fblog%2farticles%2f18-06%2fog-pizza-cuatro-quesos-antonio-y-ricardo.png&ehk=csU4VvLWx8cafnr7L%2baymQ%2fPvUA%2fgw%2b%2bk1LxUHmlWrI%3d&risl=&pid=ImgRaw&r=0" alt="" class="img_ens" >
                    <p>75 Bs,</p>
                </div>
                <br>
                <div class="card-footer">
                    <button class="btn_1">
                        <a href="#">Añadir a su compra</a>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h1>Pizza Primaveral</h1>
                </div>
                <div class="card-body">
                    <img src="https://th.bing.com/th/id/R.da2d0aa45d39e1eb366a22b7274c6364?rik=AtHhBVMZ1ept8A&pid=ImgRaw&r=0" alt="" class="img_ens" >
                    <p>55 Bs</p>
                </div>
                <br>
                <div class="card-footer">
                    <button class="btn_1">
                        <a href="#">Añadir a su compra</a>
                    </button>
                </div>
            </div>
            

    </section>


</body>
</html>