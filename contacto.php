<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            require "main/head.php";
        ?>
        <link rel="stylesheet" href="/css/contacto.css">
    <title>Contacto</title>
</head>
<body>
    <div class="container-fluid contenedor-body">
        <?php
            require "main/header.php";
        ?>
        <section>
            <div class="row">
                <div class="col-6">
                    <h1>Contacto</h1>
                    <p class="text-secondary">Déjanos tus datos y un asesor se pondrá en contacto a la brevedad.</p>
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-8">
                            <label for="validationCustom01" class="form-label">Nombre <span class="requerido">*</span></label>
                            <input type="text" class="form-control" id="validationCustom01" required>
                            <div class="invalid-feedback">
                                Sleccione un Software.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-8">
                            <label for="validationCustom02" class="form-label">Correo electrónico <span class="requerido">*</span></label>
                            <input type="text" class="form-control" id="validationCustom02" required>
                            <div class="invalid-feedback">
                                Sleccione un Software.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-8">
                            <label for="validationCustom03" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="validationCustom03">
                        </div>
                        <div class="col-md-8">
                            <label for="validationCustom04" class="form-label">Contpaqi</label>
                            <select class="form-select" id="validationCustom04" required>
                            <option selected disabled value="">Software...</option>
                                <option>Contabilidad</option>
                                <option>Nómina</option>
                                <option>Bancos</option>
                                <option>Factaura Electrónica</option>
                                <option>Comercial</option>
                                <option>Contabiliza</option>
                                <option>Personia</option>
                                <option>Vende</option>
                                <option>Decide</option>
                            </select>
                            <div class="invalid-feedback">
                                Sleccione un Software.
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="col-6">
                    <img src="/img/contacto.jpg" class="img-fluid" alt="">
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