<?php
    require '../INCLUDES/navbar_rest.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurantes</title>
    <link rel="stylesheet" href="../CSS/restaurante.css">

</head>
<body>
    <br><br>
    <div class="titulo-kk" >
        <h1 class="tit" >
            TODOS NUESTROS RESTAURANTES
        </h1>
    </div>
    <style>
        .titulo-kk{
            height: 70px;
            font-size: 34;
            background-color: #1d3557;
            color: white;
        }
        .tit{
            position: relative;
            top: 25px;
            font-size: 30;
        }
        .section {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            grid-gap: 30px;
            position: relative;
            top: 10px;
            left: 45px;

        }

    </style>
    
    <section class="section">

        <div class="card">
            <div class="card-header">
                <h3>Ensartados</h3>
            </div>
            <div class="card-body">
                <img src="../img/ensartados.png" alt="">
                <p>Carnes a la parrilla y almuerzos</p>
            </div>
            <div class="card-footer">
                <button class="btn_1">
                    <a href="../01_ensartados.php/ensartados.php">Visitar</a>
                </button>
            </div>
        </div>


        <style>
            .btn_1{
                font-weight: 700;
                padding: 8px 20px;
                background: #1d3557;
                border: none;
                border-radius: 50px;
                transition: all 0.3s ease 0s;
                text-align: center;

            }
            .btn_1 a{
                color: #ccc;
                text-decoration: none;
            }
            .btn_1 :hover{
                background-color: #1d3557;
                color: #ffff;
                transform: scale(1.2);
                font-size: 19px;
            }
        </style>

        <div class="card">
            <div class="card-header">
                <h3>Pizza Hot</h3>
            </div>
            <div class="card-body">
                <img src="../img/pizza_fuego.jpg" alt="">
                <p>Las mejores pizzas</p>
            </div>
            <div class="card-footer">
                <button class="btn_1">
                    <a href="../05_pizza_fuego/pizza_fuego.php">Visitar</a>
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>El Gordo</h3>
            </div>
            <div class="card-body">
                <img src="../img/el_gordito_icono.png" alt="">
                <p>Lo que le gusta al Cochalo</p>
            </div>
            <div class="card-footer">
                <button class="btn_1">
                    <a href="../03_El_gordito/el_gordo.php">Visitar</a>
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>La Pecera</h3>
            </div>
            <div class="card-body">
                <img src="../img/la_pecerita_icono.png" alt="">
                <p>Gustos de pocos</p>
            </div>
            <div class="card-footer">
                <button class="btn_1">
                    <a href="../04_pecerita/pecerita.php">Visitar</a>
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>Fired Chiken</h3>
            </div>
            <div class="card-body">
                <img src="../img/pollo_reducido.png" alt="">
                <p>Pollos crocantes</p>
            </div>
            <div class="card-footer">
                <button class="btn_1">
                    <a href="../06_pollo/pollo.php">Visitar</a>
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>Sillpancho Don Pancho</h3>
            </div>
            <div class="card-body">
                <img src="../img/sillpancho_icono.png" alt="">
                <p>Los mas ricos de Cocha</p>
            </div>
            <div class="card-footer">
                <button class="btn_1">
                    <a href="../02_sillpancho/sillpancho.php">Visitar</a>
                </button>
            </div>
        </div>

    </section>

    <br><br><br>


        <footer class="pie_pagina" >

        </footer>


</body>
</html>

<?php
    
?>