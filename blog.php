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
        <h1>Blog</h1>
        <div class="row">
            <li class="col-3 h4">Articulos</li> 
            <hr class="col-7" style="margin: auto 0;"> 
            <a class="col-2">Ver más</a>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <img src="/img/evento.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nuestro proximo evento</h5>
                        <p class="card-text text-secondary">Esta tiene que ser una descripción sobre el evento o del blog.</p>
                        <a href="#" class="btn color-btn">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="/img/evento.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nuestro proximo evento</h5>
                        <p class="card-text text-secondary">Esta tiene que ser una descripción sobre el evento o del blog.</p>
                        <a href="#" class="btn color-btn">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="/img/evento.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nuestro proximo evento</h5>
                        <p class="card-text text-secondary">Esta tiene que ser una descripción sobre el evento o del blog.</p>
                        <a href="#" class="btn color-btn">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- -------------------------Eventos---------------------------- -->
        <div class="row mt-3 mb-2">
            <li class="col-3 h4">Eventos</li> 
            <hr class="col-7" style="margin: auto 0;"> 
            <a class="col-2">Ver más</a>
        </div>
        
        <div class="row mt-3">
            <div class="col-4">
                <div class="card">
                    <img src="/img/evento.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nuestro proximo evento</h5>
                        <p class="card-text text-secondary">Esta tiene que ser una descripción sobre el evento o del blog.</p>
                        <p class="text-card">
                            <small class="text-muted">Fecha 13/07/2023</small>
                        </p>
                        <div class="cart-text">
                            <label for="preci">$550</label>
                        </div>    
                        <p class="text-card">
                            <small class="text-muted">1 disponibles</small>
                        </p>
                        <a href="#" class="btn color-btn">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="/img/evento.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nuestro proximo evento</h5>
                        <p class="card-text text-secondary">Esta tiene que ser una descripción sobre el evento o del blog.</p>
                        <p class="text-card">
                            <small class="text-muted">Fecha 13/07/2023</small>
                        </p>
                        <div class="cart-text">
                            <label for="preci">$550</label>
                        </div>   
                        <p class="text-card">
                            <small class="text-muted">1 disponibles</small>
                        </p>
                        <a href="#" class="btn color-btn">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="/img/evento.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nuestro proximo evento</h5>
                        <p class="card-text text-secondary">Esta tiene que ser una descripción sobre el evento o del blog.</p>
                        <p class="text-card">
                            <small class="text-muted">Fecha 13/07/2023</small>
                        </p>
                        <div class="cart-text">
                            <label for="preci">$550</label>
                        </div>    
                        <p class="text-card">
                            <small class="text-muted">1 disponibles</small>
                        </p>
                        <a href="#" class="btn color-btn">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
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