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
            <h2 class="title-form text-center p-2 my-5">04 - Sección: Empresarios</h2>
            <div class="col-md-8 offset-md-2">
                <?php if (!isset($_SESSION['uid'])):?>
                <?php 
                    echo "<script>
                            alert('Debe iniciar sesión!');
                            window.location.replace('index.php');
                          </script>";    
                ?>
                <?php else: ?>
                    <a href="index.php" class="btn bg-yellow d-flex flex-row justify-content-center align-items-center w-50 mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg> &nbsp;
                        Regresar Menú Admin
                    </a>
                    <hr>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <?php $options = showSection($conx, 2); ?>
                        <?php foreach($options as $option): ?>
                            <div class="pb-3">
                                    <label class="form-label"><strong>Título Principal:</strong></label>
                                    <input type="text" class="form-control" name="title" value="<?php echo $option['title']; ?>" required>
                            </div>
                            <div class="pb-3">
                                    <label class="form-label"><strong>Título Secundario:</strong></label>
                                    <input type="text" class="form-control" name="subtitle" value="<?php echo $option['subtitle']; ?>" placeholder="Opcional">
                            </div>
                            <div class="pb-3">
                                    <label class="form-label"><strong>Contenido:</strong></label>
                                    <textarea type="text" rows="4" class="form-control" name="content" required><?php echo $option['content']; ?></textarea>
                            </div>
                            <div class="pb-3">
                                    <label class="form-label"><strong>Contenido Alternativo:</strong></label>
                                    <textarea type="text" rows="4" class="form-control" name="contentalt" placeholder="Opcional"><?php echo $option['contentalt']; ?></textarea>
                            </div>
                            <div class="pb-3">
                                    <label class="form-label"><strong>Texto Enlace:</strong></label>
                                    <input type="text" class="form-control" name="textlink" value="<?php echo $option['textlink']; ?>" required>
                            </div>
                            <div class="pb-3">
                                    <label class="form-label"><strong>Dirección Enlace:</strong></label>
                                    <input type="text" class="form-control" name="urllink" value="<?php echo $option['urllink']; ?>" required>
                            </div>
                            <div class="pb-3">
                                    <label class="form-label"><strong>Opciones Enlace:</strong></label>
                                    <input type="text" class="form-control" name="optlink" value='<?php echo $option['optlink']; ?>' placeholder="Opcional">
                            </div>
                        <?php endforeach ?>
                        <div class="my-4 button text-center">
                            <button class="btn btn-lg bg-confec rounded-5 px-5">GUARDAR</button>
                        </div>
                    </form>
                    <?php
                        if($_POST) {
                            $id         = 2;
                            $title      = $_POST['title'];
                            $subtitle   = $_POST['subtitle'];
                            $content    = $_POST['content'];
                            $contentalt = $_POST['contentalt'];
                            $textlink   = $_POST['textlink'];
                            $urllink    = $_POST['urllink'];
                            $optlink    = $_POST['optlink'];

                            if (updateSection($conx, $id, $title, $subtitle, $content, $contentalt, $textlink, $urllink, $optlink)) {
                                echo "<script>
                                        window.location.replace('index.php')
                                      </script>";
                            } else {
                                echo "<div class='alert alert-danger'>No se pudo modificar la Sección Empreasarios!</div>";
                            }
                        }
                    ?>
                <?php endif ?>
            </div>
        </section>
    </main>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>