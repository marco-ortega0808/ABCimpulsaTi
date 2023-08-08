<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            require "main/head.php";
        ?>
    <title>Document</title>
</head>
<body>
    <div class="container-fluid contenedor-body">
        <?php
            require "main/header.php";
        ?>
        <section>
            <div class="row relleno-img">
                <img src="/img/contabilidad_folleto.png" alt="Contabilidad - Contpaqi" class="img-fluid">
            </div>
            <h2 class="text-center mt-3 mb-3">Transformando números en éxitos financieros, simplificando tu gestión contable  </h2 class="text-center mt-3 mb-3">
            <div class="row ">
                <div class="col-6">
                    <img src="/img/por.png" alt="" class="img-fluid">
                </div>
                <div class="col-6 bg-azul">
                    <h3 class="text-light text-center mt-3 mb-3">Venificios de Contabilidad -Contpaqi</h3>
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active text-light" style="height: 350px !important;">
                                <ul class="text-center">
                                    <li>Recibir los archivos XML de los CFDI Factura versión 4.0,</li>
                                    <li>Además de CFDI Nóminas y CFDI Pagos</li>
                                    <li>visualizando cada tipo de comprobante en una pestaña especial en el ADD.</li>
                                </ul>
                            </div>
                            <div class="carousel-item" style="height: 350px !important;">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" style="height: 350px !important;">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <?php
                    require "main/redes.php";
                ?>
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