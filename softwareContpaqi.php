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
            <div class="container-fluid">
                <div class="row relleno-img">
                    <img src="/img/contabilidad_folleto.png" alt="Contabilidad - Contpaqi" class="img-fluid">
                </div>
                <h2 class="text-center mt-3 mb-3">Transformando números en éxitos financieros, simplificando tu gestión contable  </h2 class="text-center mt-3 mb-3">
                <div class="row">
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