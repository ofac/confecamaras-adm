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
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <main class="container-fluid">
        <!--  -->
        <section class="form row my-5">
            <h2 class="title-form text-center p-2 my-5">Administración de Contenido</h2>
            <div class="col-md-4 offset-md-4">
                <?php if (!isset($_SESSION['uid'])):?>
                <form class="row my-5" method="POST" action="">
                    <div class="col-md-8 offset-md-2">
                        <div class="mb-4">
                            <input type="text" class="form-control rounded-5" name="username" placeholder="Nombre de Usuario" required>
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-control rounded-5" name="password" placeholder="Contraseña" required>
                        </div>
                        <div class="mb-4 button text-center">
                            <button class="btn btn-lg bg-confec rounded-5 px-5">INGRESAR</button>
                        </div>
                    </div>
                </form>
                <?php
                    if($_POST) {
                        $username = $_POST['username'];
                        $pass     = md5($_POST['password']);

                        if (loginUser($conx, $username, $pass)) {
                            echo "<script>
                                    window.location.replace('index.php')
                                  </script>";
                        } else {
                            echo "<div class='alert alert-danger'>Nombre de Usuario/Contraseña Incorrectas!</div>";
                        }

                    }
                ?>
                <?php else: ?>
                    <a href="exit.php" class="btn btn-danger d-flex flex-row justify-content-center align-items-center w-50 mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>

                        Cerrar Sesión
                    </a>
                    <hr>
                    <div class="mb-2">
                        <a href="https://confecamaras.up.railway.app" target="_blank" class="btn btn-lg bg-yellow w-100">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>

                            Visitar Sitio
                        </a>
                    </div>
                    <div class="mb-2">
                        <a href="01-menu.php" class="btn btn-lg bg-confec w-100 text-start"> 01 - Menú: Superior</a>
                    </div>
                    <div class="mb-2">
                        <a href="02-video.php" class="btn btn-lg bg-confec w-100 text-start"> 02 - Sección: Video</a>
                    </div>
                    <div class="mb-2">
                        <a href="03-carousel.php" class="btn btn-lg bg-confec w-100 text-start"> 03 - Sección: Carousel</a>
                    </div>
                    <div class="mb-2">
                        <a href="04-businessman.php" class="btn btn-lg bg-confec w-100 text-start"> 04 - Sección: Empresarios</a>
                    </div>
                    <div class="mb-2">
                        <a href="05-institutions.php" class="btn btn-lg bg-confec w-100 text-start"> 05 - Sección: Instituciones</a>
                    </div>
                    <div class="mb-2">
                        <a href="06-students.php" class="btn btn-lg bg-confec w-100 text-start"> 06 - Sección: Estudiantes</a>
                    </div>
                    <div class="mb-2">
                        <a href="07-contacts.php" class="btn btn-lg bg-confec w-100 text-start"> 07 - Formulario: Contacto</a>
                    </div>

                    <?php
                        if (isset($_SESSION['message'])) {
                            echo "<div class='mt-5 alert alert-success'>".$_SESSION['message']."</div>";
                        }
                        unset($_SESSION['message']);
                    ?>

                <?php endif ?>
            </div>
        </section>
    </main>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>