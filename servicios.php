<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            require "main/head.php";
        ?>
    <title>Servicios</title>
</head>
<body>
    <div class="container-fluid contenedor-body">
        <?php
            require "main/header.php";
        ?>
        <section>
            <div class="row">
                <div class="col-6">
                    <img src="/img/7421188_3641600.svg" alt="">
                </div>
                <div class="col-6">
                    <h1>
                        Asistencia completa a los sistemas completas
                    </h1>
                    <p class="text-secondary">Resolvemos cualquier incidencia con tus equipos de cómputo o software Contpaqi de manera presencial o vía remota.</p>
                    <div class="row">
                        <div class="col-4 text-center"> <img src="img/mantenimiento.png" class="img-icono" alt=""></div>
                        <div class="col-4 text-center"> <img src="img/colaborativo.png" class="img-icono" alt=""></div>
                        <div class="col-4 text-center"> <img src="img/incidente.png" class="img-icono" alt=""></div>
                    </div>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col-lg-4 col-sm-12 text-center">
                        <img src="img/operador.png" alt="" class="img-icono">
                        <h3 class="titulo-card">Asesorias</h3>
                        <p style="margin-bottom: 0px;" class="text-secondary">Resolveremos cualquier</p>
                        <p class="text-secondary">duda o pregunta</p>
                    </div>
                    <div class="col-lg-4 col-sm-12 text-center">
                        <img src="img/apoyo-tecnico.png" alt="" class="img-icono">
                        <h3 class="titulo-card">Soporte técnico</h3>
                        <p style="margin-bottom: 0px;" class="text-secondary">Solucionaremos cualquier</p>
                        <p class="text-secondary">error o problema del sistema.</p>
                    </div>
                    <div class="col-lg-4 col-sm-12 text-center">
                        <img src="img/capacitacion.png" alt="" class="img-icono">
                        <h3 class="titulo-card">Capacitación</h3>
                        <p style="margin-bottom: 0px;" class="text-secondary">Su personal sera</p>
                        <p class="text-secondary">capacitado por especialistas.</p>
                    </div>
                    <div class="col-6 text-center"> 
                        <img src="img/software.png" alt="" class="img-icono">
                        <h3 class="titulo-card">Instalación de<br> los sistemas Contpaqi</h3>
                        <p style="margin-bottom: 0px;" class="text-secondary">Su personal sera</p>
                        <p class="text-secondary">capacitado por especialistas.</p>
                    </div>
                    <div class="col-6 text-center">
                        <img src="img/carga-en-la-nube.png" alt="" class="img-icono">
                        <h3 class="titulo-card">Recuperación o <br>Respaldos de información</h3>
                        <p style="margin-bottom: 0px;" class="text-secondary">Realizaremos respaldos a su base</p>
                        <p class="text-secondary"> de datos periodicamente para facil recuperación.</p>
                    </div>
                </div>
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
                            <label for="validationCustom04" class="form-label">Servicios</label>
                            <select class="form-select" id="validationCustom04" required>
                            <option selected disabled value="">Opciones...</option>
                                <option>Asesorias</option>
                                <option>Soporte técnico</option>
                                <option>Capacitación</option>
                                <option>Instalación de los sistemas Contpaqi</option>
                                <option>Recuperación o Respaldos de información</option>
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
                    <img src="" alt="">
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