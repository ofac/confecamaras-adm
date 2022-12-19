<?php require '../config/app.php' ?>
<?php include '../config/database.php'  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confecámaras - [Educación y Formación Dual]</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        html {
            font-size: 16px;
            scroll-behavior: smooth;
        }
        @font-face {
            font-family: SourceSans;
            src: url("../fonts/SourceSans-Roman.otf") format("opentype");
        }
        @font-face {
            font-family: 'Montserrat-Light';
            src: url("../fonts/Montserrat-Light.ttf") format("opentype");
        }
        @font-face {
            font-family: 'Montserrat-Medium';
            src: url("../fonts/Montserrat-Medium.ttf") format("opentype");
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
        main .bg-yellow {
            color: #134989;
            background-color: #ffb528;
        }

        svg {
            width: 20px;
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
            padding: 0.2rem;
            font-size: 1rem;
            text-indent: 0.4rem;
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
        main footer .confecamaras {
            background-color: #f8f7ff;
        }
        main footer .colors {
            background: linear-gradient(to right, #ffb528 40%, #134989 40% 70%, #e01313 70%);
            height: 10px;
        }
    </style>
</head>
<body>
    <main class="container-fluid">
        <!--  -->
        <section class="form row my-5">
            <h2 class="title-form text-center p-2 my-5">06 - Sección: Estudiantes</h2>
            <div class="col-md-8 offset-md-2">
                <?php if (!isset($_SESSION['uid'])):?>
                <?php 
                    echo "<script>
                            alert('Debe iniciar sesión!');
                            window.location.replace('index.php');
                          </script>";    
                ?>
                <?php else: ?>
                    <a href="index.php" class="btn btn-dark d-flex flex-row justify-content-center align-items-center w-50 mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg> &nbsp;
                        Regresar Menú Admin
                    </a>
                    <hr>
                    <form action="" method="POST">
                        
                        
                        <div class="my-4 button text-center">
                            <button class="btn btn-lg bg-confec rounded-5 px-5">GUARDAR</button>
                        </div>
                    </form>
                    <?php
                        if($_POST) {
    
                        }
                    ?>
                <?php endif ?>
            </div>
        </section>
        <!--  -->
        <footer class="footer row mt-5 position-absolute bottom-0 w-100">
            <h3 class="title-social text-center p-2 mt-5">
                &copy; Todos los derechos reservados
            </h3>
            <div class="confecamaras py-2">
                <img class="float-end" src="../images/logo-confecamaras.png" alt="Confecámaras" width="360px">
            </div>
            <div class="colors"></div>
        </footer>
        <!--  -->
    </main>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>