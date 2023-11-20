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
                <div class="card-header">
                    <h1>Pique Macho</h1>
                </div>
                <div class="card-body">
                    <img src="https://i.pinimg.com/originals/12/e5/b5/12e5b58bd517b03c4f38ad1446e23a4d.jpg" alt="" class="img_ens" >
                    <p>110 Bs, para 4 personas</p>
                </div>
                <br>
                <div class="card-footer">
                    <button class="btn_1">
                        <a href="">Añadir a su compra</a>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h1>Charque</h1>
                </div>
                <div class="card-body">
                    <img src="https://4.bp.blogspot.com/-RB-D_97fDIQ/Wt6umrRbydI/AAAAAAAAAJc/d-4NyzJ_m0ceJATiD8zOmLoDvr-f7rIjACLcBGAs/s1600/descarga%2B%25284%2529.jpg" alt="" class="img_ens" >
                    <p>80 Bs </p>
                </div>
                <br>
                <div class="card-footer">
                    <button class="btn_1">
                        <a href="">Añadir a su compra</a>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h1>Sopa de mani</h1>
                </div>
                <div class="card-body">
                    <img src="https://th.bing.com/th/id/OIP.cTj1lFeacGurixcYT1kdiwHaE8?rs=1&pid=ImgDetMain" alt="" class="img_ens" >
                    <p>20 Bs</p>
                </div>
                <br>
                <div class="card-footer">
                    <button class="btn_1">
                        <a href="">Añadir a su compra</a>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h1>Hamburguesa</h1>
                </div>
                <div class="card-body">
                    <img src="https://4.bp.blogspot.com/-aheuid9WAfY/UJbEfckPVjI/AAAAAAAAAZg/0bX7Z7Y5fp0/s1600/hamburguesa.jpg" alt="" class="img_ens" >
                    <p>27 Bs, con porciones de papas</p>
                </div>
                <br>
                <div class="card-footer">
                    <button class="btn_1">
                        <a href="">Añadir a su compra</a>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h1>Hamburguesa Doble</h1>
                </div>
                <div class="card-body">
                    <img src="https://th.bing.com/th/id/OIP.vvwJ07VnzuiCvgM8ZydlJgHaFj?rs=1&pid=ImgDetMain" alt="" class="img_ens" >
                    <p>35 Bs, con porciones de papas</p>
                </div>
                <br>
                <div class="card-footer">
                    <button class="btn_1">
                        <a href="">Añadir a su compra</a>
                    </button>
                </div>
            </div>
    </section>

</body>
</html>