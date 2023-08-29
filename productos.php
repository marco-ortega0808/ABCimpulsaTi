<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            require "main/head.php";
        ?>
    <title>Productos</title>
</head>
<body>
    <div class="container-fluid contenedor-body">
        <?php
            require "main/header.php";
        ?>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-3 rellenoCero mt-2 mb-2">
                        <div id="titulo">
                            <h2 style="color: #ffffff; text-align: center;">Catálogo ABC Impulsa Ti</h2>
                        </div>
                        <div class="catalogo">
                                <img class="icono" src="img/computo.png" alt="">
                            <p class="fs-5 d-flex align-items-center">Cómputo (Hardware)</p>
                        </div>
                        <div class="catalogo">
                                <img class="icono" src="img/consumibles.png" alt="">
                            <p class="fs-5 d-flex align-items-center">Consumibles</p>
                        </div>
                        <div class="catalogo">
                                <img class="icono" src="img/servicios.png" alt="">
                            <p class="fs-5 d-flex align-items-center">Servicios</p>
                        </div>
                    </div>
                    <!-- ------------------------------Sistemas Contpaqi---------------------- -->
                    <div class="col-ms-12 col-md-8 col-lg-9">
                        <div class="row">
                            <div class="col-sm-12 col-lg-12 col-md-12 relleno mb-3">
                                <h1 class="titulo-productos border-bottom border-3 border-secondary row-sm mt-1">Sistemas Contpaqi</h1>
                                <div class="row">
                                    <div class="col-sm-12 col-lg-4 col-md-4 relleno mb-3">
                                        <div class="card">
                                            <a href="#">
                                                <div class="row g-0">
                                                    <div class="col-md-12 caja-img text-center">
                                                        <img src="img/Nominas.png" class="size-img" alt="GTX 1660">
                                                    </div>
                                                    <div class="col-md-12 bg-conte">
                                                        <div class="card-body">
                                                            <h3  class="card-title">Nominas - Contpaqi</h3   >
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-4 col-md-4 relleno mb-3">
                                        <div class="card">
                                            <a href="#">
                                                <div class="row g-0">
                                                    <div class="col-md-12 caja-img text-center">
                                                        <img src="img/Banco.png" class="size-img" alt="GTX 1660">
                                                    </div>
                                                    <div class="col-md-12 bg-conte">
                                                        <div class="card-body">
                                                            <h3  class="card-title">Bancos - Contpaqi</h3   >
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-4 col-md-4 relleno mb-3">
                                        <div class="card">
                                            <a href="/softwareContpaqi.php">
                                                <div class="row g-0">
                                                    <div class="col-md-12 caja-img text-center">
                                                        <img src="img/contabilidad.png" class="size-img" alt="GTX 1660">
                                                    </div>
                                                    <div class="col-md-12 bg-conte">
                                                        <div class="card-body">
                                                            <h3  class="card-title">Contabilidad - Contpaqi</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- ------------------------ Servicios -------------------------- -->
                        <div class="row">
                            <div class="col-sm-12 col-lg-12 col-md-12 relleno mb-3">
                                <h1 class="titulo-productos border-bottom border-3 border-secondary mt-1">Servicios</h1>
                                <div class="card">
                                    <a href="/servicios.php">
                                        <div class="row g-0">
                                            <div class="col-md-4 text-center">
                                                <img src="img/13184991_5138232.svg" class="img-fluid rounded-start" alt="GTX 1660">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">Nuestros servicios</h5>
                                                    <div class="card-body">
                                                        <ul class="card-text text-dark">
                                                            <li>Instalación de los sistemas Contpaqi</li>
                                                            <li>Asesorías</li>
                                                            <li>Soporte Técnico</li>
                                                            <li>Capacitación</li>
                                                            <li>Recuperación o Respaldos de información</li>
                                                        </ul>
                                                        <div class="card-texto">
                                                        </div>
                                                    </div>
                                                    <p class="card-text"><small class="text-muted">¡Solicita !</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        require "main/redes.php";
                    ?>
                </div>
            </div>
        </section>
    </div>
</body>
<?php
    require "main/scripts.php";
?>
<footer class="footer mt-3">
    <?php
        require "main/footer.php";
    ?>
</footer>
</html>