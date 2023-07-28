<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            require "main/head.php";
        ?>
    <title>Evento</title>
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
                <p class="text-secondary">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. </p>
                <div class="row conte-fecha p-4">
                    <div class="col-1">
                        <div class="fecha_mes align-middle">Ene</div>
                        <div class="fecha_num">12</div> 
                    </div>
                    <div class="col-1">
                        <div class="ratio ratio-1x1">
                            <img src="/img/zoom.png" alt="">
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="">zoom</div>
                        <div class="">Tema a tratar</div>
                        <div style="display: inline-flex;">
                            <div class="horario me-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" class="jsx-1364132950 eapp-events-calendar-time-icon"><path d="M6 12A6 6 0 1 0 6 0a6 6 0 0 0 0 12zm.984-4.97a.454.454 0 0 1-.07.154l-.026.038a.5.5 0 0 1-.655.148L3.55 5.857a.454.454 0 0 1-.149-.655.551.551 0 0 1 .722-.164l1.877 1.059V2.9a.5.5 0 1 1 1 0v4a.5.5 0 0 1-.017.13z" class="jsx-1364132950"></path></svg>15:00 - 17:00
                            </div>
                            <div class="presenta">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 10 12" class="jsx-654471426 eapp-events-calendar-location-icon"><path d="M5 12C1.667 9.174 0 6.84 0 5a5 5 0 1 1 10 0c0 1.84-1.667 4.174-5 7zm0-6a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" class="jsx-654471426"></path></svg>AT&amp;T Park – San Francisco Giants
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"> Ver más</button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="text-center h2">zoom</div>
                                        <div class="text-center h3">Tema a tratar</div>
                                        <hr class="mt-4 mb-4">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="h4"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" class="jsx-1364132950 eapp-events-calendar-time-icon"><path d="M6 12A6 6 0 1 0 6 0a6 6 0 0 0 0 12zm.984-4.97a.454.454 0 0 1-.07.154l-.026.038a.5.5 0 0 1-.655.148L3.55 5.857a.454.454 0 0 1-.149-.655.551.551 0 0 1 .722-.164l1.877 1.059V2.9a.5.5 0 1 1 1 0v4a.5.5 0 0 1-.017.13z" class="jsx-1364132950"></path></svg>Caundo</div>
                                                Sunday, December 01 15:00 - 17:00
                                            </div>
                                            <div class="col-6">
                                                <div class="h4"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 10 12" class="jsx-654471426 eapp-events-calendar-location-icon"><path d="M5 12C1.667 9.174 0 6.84 0 5a5 5 0 1 1 10 0c0 1.84-1.667 4.174-5 7zm0-6a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" class="jsx-654471426"></path></svg>Donde</div>
                                                AT&T Park – San Francisco Giants24 Willie Mays Plaza, San Francisco, CA 94107, USA
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Registrate</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <h3>Contenido relacionado</h3>
                <hr>
                <ul>
                    <li class="text-secondary"><a href="#"><p class="text-secondary"><strong>3 Aspectos clave de la Balanza de Comprobación</strong></p><p class="text-secondary    ">Leer más </p></a></li>
                </ul>
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