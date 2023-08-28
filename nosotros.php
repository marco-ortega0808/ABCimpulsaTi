<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            require "main/head.php";
        ?>
    <title>Nosotros</title>
</head>
<body>
    <div class="container-fluid contenedor-body">
        <?php
            require "main/header.php";
        ?>
        <div class="row">
            <h1>
                Nosotros
            </h1>
            <p class="text-secondary text-justify">
                Somos una empresa distribuidora de <strong>software Contpaqi y soluciones tecnológicas</strong> para empresas. 
            </p>
            <div class="col-6">
                <p class="text-secondary text-justify">
                    Brindamos soluciones innovadoras y eficientes a nuestros clientes en el ámbito de la gestión empresarial. Ya que estamos comprometidos con el objetivo de ayudar a las organizaciones a optimizar sus operaciones, simplificar sus procesos y alcanzar el éxito en un mundo cada vez más digitalizado.
                </p>
                <p class="text-secondary text-justify">
                    Nuestro enfoque principal se centra en la distribución de software Contpaqi, una reconocida y poderosa suite de herramientas de gestión empresarial, lo que nos permite ofrecer a nuestros clientes una amplia gama de soluciones adaptadas a sus necesidades específicas. Ya sea que estén buscando herramientas de contabilidad, administración de inventarios, facturación electrónica o cualquier otro aspecto vital para su empresa, estamos aquí para ayudarles.
                </p>
            </div>
            <div class="col-6">
                <img src="/img/11641780_4783003.svg" alt="">
            </div>
            <p class="text-secondary text-justify">
                En <Strong>ABC Impulsa Ti</Strong>, entendemos que cada negocio es único y tiene requisitos individuales. Por eso, trabajamos en estrecha colaboración con nuestros clientes para comprender sus desafíos y objetivos comerciales. Nuestro equipo de profesionales altamente capacitados y con amplia experiencia en el campo de los sistemas Conp está dedicado a brindar un servicio personalizado y asesoramiento experto para garantizar que nuestros clientes obtengan el máximo beneficio de las soluciones que ofrecemos.
            </p>
            <?php
                require "main/redes.php";
            ?>
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