

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plaza Lincoln</title>

    <link rel="stylesheet" href="../CSS/navbar.css">

</head>

<body>
    
    <header class="header" >

        <div class="logo">
            <div class="btn">
                <a href="index.php">
                    <img src="../img/logo_plaza.png" alt="Logo del Proyecto">
                </a>
                    
            </div>
        </div>

            <nav>
                <ul class="nav-links">
                    <!--li><a href="menu.php">Menú</a></!--li-->
                    <li><a href="../View/restaurantes.php">Restaurantes</a></li>
                    <li><a href="../View/ubicacion.php">Ubicación</a></li>
                    <li><a id="btn-modal">Ver compra</a></li>
                </ul>
            </nav>

            <button class="Btn">
                <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
                
                <div class="text" >
                <a href="../View/inicio_sesion_clientes.php" class="as"  >Cerar Sesión</a>
                </div>
            </button>



        <?php if (!empty($user)) : ?>
            <br class="mensaje"> Bienvenido <?= $user['nombre']; ?>

            <a href="logout.php" class="logout">
                Cerrar Sesión
            </a>
        <?php else : ?>


        <?php endif; ?>
        
        </div>



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