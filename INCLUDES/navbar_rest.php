<?php
    //require '../DataBase/modelo.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLaza de Comidas</title>
    <link rel="stylesheet" href="../CSS/navbar.css">

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
                <li><a href="../View/sucursales.php">Sucursales</a></li>
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
</body>
</html>