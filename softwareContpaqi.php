<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            require "main/head.php";
        ?>
    <title>Contabilidad</title>
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
                    <h3 class="text-light text-center mt-3 mb-3">Beneficios de Contabilidad -Contpaqi</h3>
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active text-light" style="height: 350px !important;">
                                <div class="text-center">
                                    <img src="/img/icon/estampilla.png" style="width: 150px;" class="mb-3" alt="">
                                    <h3>Cumplimiento Fiscal</h3>
                                    <p>
                                        Estos programas a menudo están actualizados con las leyes fiscales vigentes, lo que facilita la presentación de declaraciones fiscales precisas y oportunas.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item text-light" style="height: 350px !important;">
                                <div class="text-center">
                                    <img src="/img/icon/analisis-de-mercado.png" style="width: 150px;" class="mb-3" alt="">
                                    <h3>Análisis Financiero</h3>
                                    <p>
                                        Con las capacidades de generación de informes y la capacidad de rastrear diferentes aspectos de las finanzas de una empresa.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item text-light" style="height: 350px !important;">
                                <div class="text-center">
                                    <img src="/img/icon/adaptacion.png" style="width: 150px;" class="mb-3" alt="">
                                    <h3>Escalabilidad</h3>
                                    <p>
                                        Estos programas suelen ser escalables, lo que significa que pueden adaptarse a las necesidades cambiantes de una empresa a medida que crece.
                                    </p>
                                </div>
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
                <div class="row mt-3 mb-3">
                    <div class="col-6">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/PBf5tzobbkU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col-6">
                        <div class="h1 text-center">Contactanos</div>
                        <div class="row">
                            <div class="col-2">
                                <div class="">
                                    <i class="fa-brands fa-whatsapp ico-size hove-whats" style="color: #9a9996; font-size: 70px;"></i>
                                </div>
                                <div class="">
                                    <i class="fa-regular fa-envelope hove-email" style="color: #9a9996; font-size: 70px;"></i>
                                </div>
                                <div class="">
                                        <i class="fas fa-phone-alt hove-tel fa-rotate-90" style="color: #9a9996; font-size: 70px;" ></i>
                                </div>
                            </div>
                            <div class="col-9">
                                <form action="" method="post">
                                    <label for="Nombre" class="me-2">Ingrese su nombre</label>
                                    <input type="text" name="nombre" id="" class="mb-3">
                                    <label for="Nombre" class="me-2">Ingrese su número</label>
                                    <input type="text" name="numero" id="">
                                    <button type="button" class="btn btn-success">Success</button>
                                </form>
                            </div>

                        </div>
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
<script src="/js/oculpar.js"></script>
<footer class="footer mt-3">
    <?php
        require "main/footer.php";
    ?>
</footer>
</html>