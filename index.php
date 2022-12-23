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
    <link rel="stylesheet" href="css/govco.css">
    <link rel="stylesheet" href="css/landing.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <!--  -->
    <?php include_once 'header-govco.inc'; ?>
    <!--  -->
    <main class="container-fluid" id="top">
        <!-- Header -->
        <header class="row bg-white">
            <!-- <div class="logos col-md-12 d-flex justify-content-between align-items-center">
                <img class="logo-min" src="images/logo-min-comercio.png" width="320px">
            </div> -->
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
                        <a href="<?php echo $sec['urllink']; ?>"  <?php echo $sec['optlink']; ?> class="btn btn-lg bg-confec my-2">
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
        <div class="btn-animation">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z" />
            </svg>
            Animación Activada
        </div>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>   
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
        <?php
            $min  = 1;
            $max  = 50;
            $num1 = rand( $min, $max );
            $num2 = rand( $min, $max );
            $sum  = $num1 + $num2;
        ?>
        <section class="form row">
            <h2 class="title-form text-center p-2 mt-5 mb-5">Formulario de Contacto</h2>
            <div class="col-md-6 offset-md-3">
                <form class="row mb-5" method="POST" action="">
                    <div class="col-md-12">
                        <div class="mb-4">
                            <input type="text" name="institution" class="form-control rounded-5" placeholder="Institución" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <input type="text" name="firstname" class="form-control rounded-5" placeholder="Nombre" required>
                        </div>
                        <div class="mb-4">
                            <input type="text" name="department" class="form-control rounded-5" placeholder="Departamento" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <input type="text" name="lastname" class="form-control rounded-5" placeholder="Apellido" required>
                        </div>
                        <div class="mb-4">
                            <input type="text" name="city" class="form-control rounded-5" placeholder="Ciudad" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-4">
                            <input type="email" name="email" class="form-control rounded-5" placeholder="Correo Electrónico" required>
                        </div>
                        <div class="mb-4">
                            <input type="text" name="phone" class="form-control rounded-5" placeholder="Celular" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-4 col-md-6">
                            <input type="text" name="sum" class="form-control rounded-5" value="<?php echo $num1 . ' + ' . $num2; ?> =" disabled>
                        </div>
                        <div class="mb-4 col-md-6">
                            <input type="number" name="quiz" class="form-control quiz rounded-5" placeholder="Respuesta Suma" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-4 button text-center">
                            <button class="btn btn-contact btn-lg bg-confec rounded-5 px-5" data-res="<?php echo $sum; ?>" disabled>¡CONTACTANOS!</button>
                        </div>
                    </div>
                </form>
                <?php
                    if($_POST) {
                        $institution = $_POST['institution'];
                        $firstname   = $_POST['firstname'];
                        $lastname    = $_POST['lastname'];
                        $department  = $_POST['department'];
                        $city        = $_POST['city'];
                        $email       = $_POST['email'];
                        $phone       = $_POST['phone'];
                        $status      = 0;

                        if (addContact($conx, $institution, $firstname, $lastname, $department, $city, $email, $phone, $status)) {
                            echo "<div class='mb-5 alert alert-success'>Datos de formulario enviados con exito.</div>";
                        } else {
                            echo "<div class='mb-5 alert alert-danger'>No se pudo enviar los datos de formulario de contacto!</div>";
                        }
                    }
                ?>
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
            <!-- <nav>
                <ul class="list-unstyled p-0 mt-3 mb-5 mx-auto d-flex justify-content-center align-items-center">
                    <li><a href="#" target="_blank">Aviso de Privacidad</a></li>
                    <li><a href="https://www.mincit.gov.co/servicio-ciudadano/politicas-de-tratamiento-de-datos-personales" target="_blank">Politica de Tratamiento de Datos Personales</a></li>
                    <li><a href="#" target="_blank">Términos y Condiciones</a></li>
                </ul>
            </nav> -->
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
    

        <div id="myModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Formulario de Contacto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class='mb-5 alert alert-success'>Datos de formulario enviados con exito.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
                </div>
            </div>
        </div>
        <!--  -->
        <aside class="navbar-accessibility">
            <div class="options">
                <a href="javascript:;" class="btn-contrast">
                    <img src="images/ico-contrast.svg" alt="">
                    Contraste
                </a>
                <a href="javascript:;" class="btn-text-decrease">
                    <img src="images/ico-text-decrease.svg" alt="">
                    Reducir letra
                </a>
                <a href="javascript:;" class="btn-text-increase">
                    <img src="images/ico-text-increase.svg" alt="">
                    Aumentar letra
                </a>
            </div>
        </aside>
        <aside class="goto-top">
            <div class="options">
                <a href="#top" class="btn-gototop">
                    <img src="images/ico-gototop.svg" alt="">
                    Volver Arriba
                </a>
            </div>
        </aside>
        <!--  -->
    </main>
    <!--  -->
    <?php include_once 'footer-govco.inc'; ?>
    <!--  -->

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/landing.js"></script>
    <script>
        $(document).ready(function() {
            <?php if (isset($_SESSION['message'])):  ?>
                $("#myModal").modal('show');
            <?php unset($_SESSION['message']) ?>
            <?php endif ?>
        })
    </script>
</body>
</html>