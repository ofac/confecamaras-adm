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
            <h2 class="title-form text-center p-2 my-5">07 - Formulario: Contacto</h2>
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
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Institución</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Departamento</th>
                                    <th>Ciudad</th>
                                    <th>Correo Electrónico</th>
                                    <th>Teléfono</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $options = listContacts($conx); ?>
                                <?php foreach($options as $option): ?>
                                <tr>
                                    <td><?php echo $option['institution']; ?></td>
                                    <td><?php echo $option['firstname']; ?></td>
                                    <td><?php echo $option['lastname']; ?></td>
                                    <td><?php echo $option['department']; ?></td>
                                    <td><?php echo $option['city']; ?></td>
                                    <td><?php echo $option['email']; ?></td>
                                    <td><?php echo $option['phone']; ?></td>
                                    <td>
                                        <?php if ($option['status'] == 0): ?>
                                            <button class="btn btn-sm btn-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                                </svg>
                                            </button>
                                        <?php else: ?>
                                            <button class="btn btn-sm btn-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </button>
                                        <?php endif ?>
                                        
                                    </td>
                                </tr>
                                <?php endforeach ?>
                                </tbody>
                        </table>
                    </div>
                    <?php
                        if($_POST) {
                            if($_POST) {
                                $id         = 4;
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
                                    echo "<div class='alert alert-danger'>No se pudo modificar la Sección Instituciones!</div>";
                                }
                            }
                        }
                    ?>
                <?php endif ?>
            </div>
        </section>
        <!--  -->
    </main>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>