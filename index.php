<?php require 'config/app.php' ?>
<?php include 'config/database.php'  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confecámaras - [Educación y Formación Dual]</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        html {
            font-size: 16px;
            scroll-behavior: smooth;
        }
        @font-face {
            font-family: SourceSans;
            src: url("fonts/SourceSans-Roman.otf") format("opentype");
        }
        @font-face {
            font-family: 'Montserrat-Light';
            src: url("fonts/Montserrat-Light.ttf") format("opentype");
        }
        @font-face {
            font-family: 'Montserrat-Medium';
            src: url("fonts/Montserrat-Medium.ttf") format("opentype");
        }
        body {
            font-family: 'Montserrat-Light';
        }
        h1, h2, h3 {
            font-family: SourceSans;
        } 
        main .bg-confec {
            color: #fff;
            background-color: #134989;
        }
        main header div.logos {
            height: 114px;
        }
        main header img.logo-min {
            margin-left: -12px;
        }
        main header nav.menu {
            background-color: #ffb528;
            font-size: 1rem;
            min-height: 60px;
        }
        main header nav ul li {
            border-left: 2px solid #134989;
            padding-left: 2rem;
        }
        main header nav ul li:nth-of-type(5) {
            border-right: 2px solid #134989;
            padding-right: 2rem;
        }
        main header nav a:is(:link, :focus, :visited) {
            color: #134989;
            text-decoration: none;
        }
        main section.hero p {
            font-family: 'Montserrat-Light';
            color: #131313;
        }
        main section.hero .button {
            color: #134989;
        }
        main section.hero h2 {
            background: url(images/corner-left-red.svg) no-repeat top left, url(images/corner-right-red.svg) no-repeat bottom right;
            color: #134989;
            font-size: 3.2rem;
            font-weight: bold;
            padding: 0.2rem 0 0.4rem 0.6rem;
            width: 24.2rem;
        }
        main section.hero p.description {
            background: url(images/corner-left-yellow.svg) no-repeat top left, url(images/corner-right-yellow.svg) no-repeat bottom right;
            font-size: 1.2rem;
            padding: 0.2rem 0 0.4rem 0.6rem;
            width: 24.2rem;
        }
        main section.hero p.info {
            font-weight: bold;
            font-size: 1.2rem;
            padding: 0.4rem 0 0.4rem 0.8rem;
            width: 24.2rem;
        }
        main section.hero div.button {
            padding: 0.4rem 0 0.4rem 0.8rem;
            width: 23.2rem;
        }

        .navbar-toggler-icon {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgb%2819, 73, 137' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        @media (max-width: 990px) {
            main header nav ul.gap-5 {
                gap: 0 !important;
            }
            main header nav ul li {
                border-left: none;
                padding-left: 0;
                border-top: 1px solid #134989;
                width: 100%;
            }
            main header nav ul li:nth-of-type(1) {
                margin-top: 4rem;
            }
            main header nav ul li:nth-of-type(5) {
                border-right: none;
                padding-right: 0;
                border-bottom: 1px solid #134989;
                margin-bottom: 1rem;
            }
            main header nav ul li a:is(:link, :focus, :visited) {
                display: block;
                padding: 1rem;
            }
        }
        /* section.carousel */
        main section.carousel {
            color: #134989;
        }
        main section.carousel h2 {
            background: url(images/questions.png) no-repeat center bottom;
            display: flex;
            flex-direction: column;
            font-size: 3.8rem;   
            font-weight: bold;
            padding-bottom: 1rem;
            width: 440px;
        }
        main section.carousel h2 strong {
            font-weight: bold;
            font-size: 3.8rem;
        }
        main section.carousel p {
            font-size: 1.2rem;
            color: #131313;
            width: 410px;
        
        }
        button.carousel-control-prev:hover img,
        button.carousel-control-next:hover img {
            transition: transform 0.2s ease-in;
            transform: scale(1.1);
        }
        button.carousel-control-prev,
        button.carousel-control-prev:hover {
            background-color: transparent;
            opacity: 1;
        }
        button.carousel-control-next,
        button.carousel-control-next:hover {
            background-color: transparent;
            opacity: 1;
        }
        main section.carousel h2.title-carousel2 {
            font-size: 2.2rem; 
        }
        /* section.businessman */
        main .title-h3 {
            background-color: #ffb528;
            font-size: 1.6rem;
            color: #fff;
        }
        main .title-h3 strong {
            background: url(images/corner-left-blue.svg) no-repeat top left, url(images/corner-right-blue.svg) no-repeat bottom right;
            padding: 0 0.6rem 0 0.6rem;
        }

        main .cont-left {
            width: 440px;
        }
        main .cont-right {
            width: 480px;
        }

        main h5,
        main h5 a:is(:link, :visited, :focus) {
            color: #134989;
            font-weight: bold;
        }

        main section.businessman .button,
        main section.institutions .button,
        main section.students .button {
            color: #134989;
        }

        main section.businessman ul li,
        main section.institutions ul li,
        main section.students ul li {
            background: url(images/bullet-red.svg) no-repeat 0 10px;
            font-size: 1.1rem;
            color: #373737;
            margin-bottom: 1rem;
            padding-left: 1.4rem;
        }
        /* section.form */
        main section.form h2 {
            font-size: 2.8rem;
            font-weight: bold;
            color: #134989;
        }
        main section.form .button {
            color: #134989;
        }
        main section.form .form-control {
            background-color: #e8e8e8;
            color: #134989;
            padding: 0.6rem;
            font-size: 1.2rem;
            text-indent: 1rem;
            border: none;
        } 
        main section.form .form-control::placeholder {
            color: #aeaeae;
        }
        main section.form button {
            font-weight: bold;
        }
        /* footer.footer */
        main footer h3.title-social {
            background-color: #134989;
            font-weight: normal;
            font-size: 0.8rem;
            line-height: 2rem;
            color: #fff;
        }
        main footer nav ul li {
            padding-left: 1rem;
            padding-right: 1rem;
        }
        main footer nav ul li:nth-of-type(2) {
            border-left: 1px solid #134989;
            border-right: 1px solid #134989;
        }
        main footer nav a:is(:link, :focus, :visited) {
            color: #134989;
            font-size: 0.8rem;
            text-decoration: none;
        }
        main footer .confecamaras {
            background-color: #f8f7ff;
        }
        main footer .colors {
            background: linear-gradient(to right, #ffb528 40%, #134989 40% 70%, #e01313 70%);
            height: 10px;
        }
        main .modal ul li {
            margin-bottom: 0.6rem;
            /* border-bottom: 1px solid #134989; */
            padding: 0.2rem;
        }
        main .modal ul li a:is(:link, a:visited, a:focus) {
            color: #134989;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <main class="container-fluid">
        <!-- Header -->
        <header class="row bg-white">
            <div class="logos col-md-12 d-flex justify-content-between align-items-center">
                <img class="logo-min" src="images/logo-min-comercio.png" width="320px">
            </div>
            <nav class="navbar navbar-expand-lg bg-confec m-0 p-0 menu">
                    <div class="container-fluid">
                        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="list-unstyled p-0 my-0 mx-auto d-flex flex-lg-row flex-column justify-content-center align-items-center gap-5">
                                <?php $options = listMenu($conx) ?>
                                <?php foreach($options as $option): ?>
                                    <li>
                                        <a href="<?php echo $option['url']; ?>" <?php echo $option['options']?> ><?php echo $option['text']; ?></a>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                    </nav>
        </header>
        <!-- Hero -->
        <section class="hero row" id="hero">
            <div class="col-md-6">
                <?php $section = showSection($conx, 1); ?>
                <?php foreach($section as $sec): ?>
                    <h2 class="title-hero text-start my-5 mx-auto">
                        <?php echo $sec['title']; ?>
                    </h2>
                    <p class="description mx-auto">
                        <?php echo $sec['content']; ?>
                    </p>
                    <p class="info mx-auto text-start">
                    <?php echo $sec['contentalt']; ?>
                    </p>
                    <div class="button mx-auto">
                        <a href="<?php echo $sec['urlink']; ?>"  <?php echo $sec['optlink']; ?> class="btn btn-lg bg-confec my-2">
                            <?php echo $sec['textlink']; ?>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="col-md-6 text-center mt-5">
                <video src="video/educacion.mp4" class="ratio" controls></video>
            </div>
        </section>
        <!--  -->
        <section id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php 
                    $sliders = showSliders($conx);
                ?>
                <?php foreach($sliders as $slider): ?>
                <div class="carousel-item <?php if($slider['id'] == 1): ?>active<?php endif ?>">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <img src="<?php echo $slider['image']; ?>" width="400px">
                        </div>
                        <div class="col-md-6 text-center">
                            <h2 class="<?php if($slider['id'] == 2): ?>title-carousel2<?php else: ?>title-carousel1<?php endif ?> mx-auto">
                                <?php echo $slider['title']; ?>
                                <strong class="">Sabías Qué</strong>
                            </h2>
                            <p class="info mx-auto my-4 text-start">
                                <?php echo $slider['text']; ?>
                            </p>
                            <div class="button mx-auto">
                                <a href="<?php echo $slider['urllink']; ?>" class="btn btn-lg bg-confec my-2"><?php echo $slider['textlink']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <img src="images/btn-prev.svg" alt="">
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <img src="images/btn-next.svg" alt="">
            </button>
            </section>
        <!--  -->
        <section class="businessman row" id="businessman">
            <?php $section = showSection($conx, 2); ?>
            <?php foreach($section as $sec): ?>
            <h3 class="title-h3 text-center p-2">
                <strong><?php echo $sec['title']; ?></strong>
            </h3>
            <div class="col-md-6 mt-5">
                <div class="cont-left mx-auto">
                    <h5 class="mb-3">
                        <?php echo $sec['subtitle']; ?>
                    </h5>
                    <ul class="list-unstyled">
                        <?php echo $sec['content']; ?>
                    </ul>
                    <h5 class="mt-3">
                        <?php echo $sec['contentalt']; ?>
                    </h5>
                    <div class="button">
                        <a href="<?php echo $sec['urllink']; ?>" target="_blank" class="btn btn-lg bg-confec my-4">
                            <?php echo $sec['textlink']; ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center mt-5">
                <img src="<?php echo $sec['image']; ?>" width="400px">
            </div>
            <?php endforeach ?>
        </section>
        <!--  -->
        <section class="institutions row" id="institutions">
            <?php $section = showSection($conx, 3); ?>
            <?php foreach($section as $sec): ?>
            <h3 class="title-h3 text-center p-2">
                <strong><?php echo $sec['title']; ?></strong>
            </h3>
            <div class="col-md-6 text-center mt-5">
                <img src="<?php echo $sec['image']; ?>" width="400px">
            </div>
            <div class="col-md-6 mt-5">
                <div class="cont-left mx-auto">
                    <ul class="list-unstyled">
                    <?php echo $sec['content']; ?>
                    </ul>
                    <h5 class="mt-3">
                        <?php echo $sec['contentalt']; ?>
                    </h5>
                    <div class="button">
                        <a href="<?php echo $sec['urllink']; ?>" target="_blank" class="btn btn-lg bg-confec my-4">
                            <?php echo $sec['textlink']; ?>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </section>
        <!--  -->
        <section class="students row" id="students">
            <?php $section = showSection($conx, 4); ?>
            <?php foreach($section as $sec): ?>
            <h3 class="title-h3 text-center p-2">
                <strong><?php echo $sec['title']; ?></strong>
            </h3>
            <div class="col-md-6 mt-5">
                <div class="cont-right mx-auto">
                    <ul class="list-unstyled">
                        <?php echo $sec['content']; ?>
                    </ul>
                    <h5 class="mt-3">
                        <a href="<?php echo $sec['urllink']; ?>" target="_blank">
                            <?php echo $sec['textlink']; ?>
                        </a>
                    </h5>
                </div>
            </div>
            <div class="col-md-6 text-center mt-5">
                <img src="<?php echo $sec['image']; ?>" width="400px">
            </div>
            <?php endforeach ?>
        </section>
        <!--  -->
        <section class="form row">
            <h2 class="title-form text-center p-2 mt-5 mb-5">Formulario de Contacto</h2>
            <div class="col-md-6 offset-md-3">
                <!-- <form class="row mb-5" method="POST" action="">
                    <div class="col-md-6">
                        <div class="mb-4">
                            <input type="text" class="form-control rounded-5" placeholder="Nombre">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control rounded-5" placeholder="Departamento">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <input type="text" class="form-control rounded-5" placeholder="Apellido">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control rounded-5" placeholder="Ciudad">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-4">
                            <input type="text" class="form-control rounded-5" placeholder="Correo Electrónico">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control rounded-5" placeholder="Celular">
                        </div>
                        <div class="mb-4 button text-center">
                            <button class="btn btn-lg bg-confec rounded-5 px-5">¡CONTACTANOS!</button>
                        </div>
                    </div>
                </form> -->
                <div class="text-center mb-5">
                    <a href="https://forms.office.com/r/Z7pDLTbJDM" target="_blank" class="btn btn-lg bg-confec rounded-5 px-5">¡CONTACTANOS!</a>
                </div>
            </div>
        </section>
        <!--  -->
        <footer class="footer row mt-2">
            <div class="col-md-12">
                <div class="universities text-center">
                    <a href="https://www.uniempresarial.edu.co/" target="_blank"><img src="images/logo-uniempresarial.png" alt="Uniempresarial"></a>
                    <a href="https://www.cue.edu.co/" target="_blank"><img src="images/logo-alexander.png" alt="Alexander von Humboldt"></a>
                    <a href="https://unab.edu.co/unab-dual/" target="_blank"><img src="images/logo-unab.png" alt="Universidad Autonoma de Bucaramanga"></a>
                    <a href="https://www.uao.edu.co/programa/administracion-de-empresas-modalidad-dual/" target="_blank"><img src="images/logo-autonoma.png" alt="Universidad Autonoma de Occidente"></a>
                </div> 
            </div>
            <h3 class="title-social text-center p-2 mt-5">
                <span class="float-start">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://www.facebook.com/Confecamaras/" target="_blank"><img src="images/ico-facebook.svg" alt="Facebook"></a>
                    <a href="https://www.linkedin.com/company/16244464/admin/" target="_blank"><img src="images/ico-linkedin.svg" alt="Instagram"></a>
                    <a href="https://twitter.com/Confecamaras" target="_blank"><img src="images/ico-twitter.svg" alt="Twitter"></a>
                </span>
                &copy; Todos los derechos reservados
            </h3>
            <nav>
                <ul class="list-unstyled p-0 mt-3 mb-5 mx-auto d-flex justify-content-center align-items-center">
                    <li><a href="#" target="_blank">Aviso de Privacidad</a></li>
                    <li><a href="https://www.mincit.gov.co/servicio-ciudadano/politicas-de-tratamiento-de-datos-personales" target="_blank">Politica de Tratamiento de Datos Personales</a></li>
                    <li><a href="#" target="_blank">Términos y Condiciones</a></li>
                </ul>
            </nav>
            <div class="confecamaras py-2">
                <img class="float-end" src="images/logo-confecamaras.png" alt="Confecámaras" width="360px">
            </div>
            <div class="colors"></div>
        </footer>
        <!--  -->
        <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="exampleModalLabel">Documentos y Enlaces</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li><a href="https://hecaa.mineducacion.gov.co/consultaspublicas/ies" target="_blank">Sistema Nacional de Información para la Educación superior en Colombia</a></li>
                    <li><a href="https://especiales.colombiaaprende.edu.co/mnc/catalogo.html" target="_blank">Catálogo Nacional de Cualificaciones</a></li>
                    <li><a href="https://www.mineducacion.gov.co/portal/normativa/Decretos/387348:Decreto-1330-de-julio-25-de-2019" target="_blank">Decreto 1330 de julio 25 de 2019</a></li>
                    <li><a href="https://www.mineducacion.gov.co/sistemasdeinformacion/1735/propertyvalue-41698.html" target="_blank">Sistema de Aseguramiento de la Calidad en Educación Superior</a></li>
                    <li><a href="https://eurosocial.eu/wp-content/uploads/2022/07/Herramienta_110_PS_Colombia_Estrategia-de-formacion-dual.pdf" target="_blank">Estrategia nacional para el fomento de la formación dual en las empresas de Colombia</a></li>
                    <li><a href="https://www.mintrabajo.gov.co/web/guest/subsistema-de-formación-para-el-trabajo-y-su-aseguramiento-de-la-calidad" target="_blank">Subsistema de Formación para el Trabajo y su Aseguramiento de la Calidad</a></li>
                </ul>
                <h5>Empresarios</h5>
                <ul>
                    <li>
                        <a href="pdf/guia-vinculacion-empresas.pdf" target="_blank">Guía para la vinculación de empresas en programas de educación y formación dual
                        </a>
                    </li>
                </ul>
                <h5>Instituciones Educativas</h5>
                <ul>
                    <li>
                        <a href="pdf/procedimiento-obtencion-registros.pdf" target="_blank">Procedimiento para la obtención de registros para programas de educación y formación dual</a>
                    </li>
                </ul>
                <h5>Estudiantes</h5>
                <ul>
                    <li><a href="pdf/listado-modalidad-dual.pdf" target="_blank">Listado de instituciones de educación con programas bajo modalidad dual</a></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-confec" data-bs-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>
        <!--  -->
    </main>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>