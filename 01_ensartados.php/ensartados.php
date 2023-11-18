<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ensartado</title>
    <link rel="stylesheet" href="../01_ensartados.php/ensartados.css">

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
                    Ensartados  
                </h1>
        </div>
    </div>
<!--p>----------------------------------------------------------------------------------------------------</!--p-->
        <section class="section" >
            <div class="card">
                <div class="card-header">
                    <h1>Corte Argetino</h1>
                </div>
                <div class="card-body">
                    <img src="../img/ensartados/menu1d.jpg" alt="" class="img_ens" >
                    <p>55 Bs, con dos porciones a elección</p>
                </div>
                <br>
                <div class="card-footer">
                    <button class="btn_1">
                        <a href="../01_ensartados.php/ensartados.php">Añadir a su compra</a>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>Tira de Lomo</h3>
                </div>
                <div class="card-body">
                    <img src="../img/ensartados/menu2d.jpg" alt="" class="img_ens" >
                    <p>45 Bs, con dos porciones a elección</p>
                </div>
                <br>
                <div class="card-footer">
                    <button class="btn_1">
                        <a href="../01_ensartados.php/ensartados.php">Añadir a su compra</a>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>Bife Chorizo</h3>
                </div>
                <div class="card-body">
                    <img src="../img/ensartados/menu3d.jpg" alt="" class="img_ens" >
                    <p>50 Bs, con dos porciones a elección</p>
                </div>
                <br>
                <div class="card-footer">
                    <button class="btn_1">
                        <a href="../01_ensartados.php/ensartados.php">Añadir a su compra</a>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>Mix Churasco</h3>
                </div>
                <div class="card-body">
                    <img src="../img/ensartados/menu4.jpg" alt="" class="img_ens" >
                    <p>90 bs, , con pollo, chorizo, brochetas y sus porciones</p>
                </div>
                <br>
                <div class="card-footer">
                    <button class="btn_1">
                        <a href="../01_ensartados.php/ensartados.php">Añadir a su compra</a>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>Pacú a la Parrilla</h3>
                </div>
                <div class="card-body">
                    <img src="../img/ensartados/menu5d.jpg" alt="" class="img_ens" >
                    <p>25 Bs, solo los dias miercoles.</p>
                </div>
                <br>
                <div class="card-footer">
                    <button class="btn_1">
                        <a href="../01_ensartados.php/ensartados.php">Añadir a su compra</a>
                    </button>
                </div>
            </div>

        </section>

</body>
</html>