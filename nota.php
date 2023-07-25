<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <?php
            require "main/head.php";
        ?>
    <title>Nombre del articulo</title>
</head>
<body>
    <div class="container-fluid contenedor-body">
        <?php
            require "main/header.php";
        ?>
        <div class="row">
            <div class="col-9">
                <h1>Nuestro proximo evento</h1>
                <img src="/img/evento.jpeg" class="img-fluid" alt="">
                <h3 class="mb-2 mt-2">¿Qué es Lorem Ipsum?</h3>
                <hr style="width: 50%; border-top: 3px solid;">
                <p class="text-secondary">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
            </div>
            <div class="col-3">

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