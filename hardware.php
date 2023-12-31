<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            require "main/head.php";
        ?>
    <title>Hardware</title>
</head>
<body>
    <div class="container-fluid contenedor-body">
        <?php
            require "main/header.php";
        ?>

        <section>
            <div class="row">
                <div class="col-sm-12 col-md-5 col-lg-5 mt-2">
                    <div>
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="img/procesador.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="img/proamd.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="img/procesa.jpg" class="d-block w-100" alt="...">
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

                <div class="col-sm-12 col-md-7 col-lg-7">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="col-md-12">
                            <div class="card-body">
                                <h1 class="card-title text-center">Procesador AMD Ryzen 5 3600</h1>
                                <div class="card-body">
                                    <p>Boost / TDP 65W / Wraith Stealth (Requiere Tarjeta de Video) / 100-100000031BOX </p>
                                    <ul class="card-text text-dark">
                                        <li>Gráficos discretos memoria del adaptador: 6 GB</li>
                                        <li>Ancho de datos: 192 bit, Tipo de memoria: GDDR6</li>
                                        <li>Frecuencia Boost: 1860 MHz</li>
                                        <li>Tipo de interfaz: PCI Express x16 3.0</li>
                                        <li>HDMI: 1x, DVI-I: 0x, DisplayPort: 1x</li>
                                    </ul>
                                    <div class="card-texto">
                                        <h6 class="text-decoration-line-through">$7200</h6>
                                        <label for="preci">
                                            $4501.70                                        </label>
                                    </div>
                                </div>
                                                                    <p class="card-text"><small class="text-muted">5 disponibles</small></p>
                                    <form action="add-car.php" method="post">
                                        <input type="text" name="id" value="1" style="display: none;">
                                        <input type="text" name="name" value="Procesador AMD Ryzen 5 3600" style="display: none;">
                                        <input type="text" name="img" value="img/procesador.jpg" style="display: none;">
                                        <input type="text" name="price" value="4501.70" style="display: none;">
                                        <button type="submit" name="sesion" class="btn btn-primary mb-1"><i class="fas fa-shopping-cart"></i> Agregar al carrito</button>
                                    </form>
                                                                                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 card p-2 mb-3">        
                        <div class="mb-3">
                            <h5 class="text-center">Contáctanos</h5>
                            <label for="exampleFormControlInput1" class="form-label">Correo eléctronico</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Escribenos</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                          <button type="button" class="btn btn-secondary">Enviar  <i class="far fa-paper-plane"></i></button>
                    </div>
                </div>
            </div>
            <?php
                require "main/redes.php";
            ?>
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