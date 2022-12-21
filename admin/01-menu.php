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
            <h2 class="title-form text-center p-2 my-5">01 - Menú: Superior</h2>
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
                    <form action="" method="POST">
                        <?php $options = listMenu($conx); ?>
                        <table class="w-100">
                            <?php $cont = 1; ?>
                            <?php foreach($options as $option): ?>
                            <tr class="border-bottom">
                                <td class="py-3">
                                    <label class="form-label"><strong>Texto Enlace <?php echo $cont; ?>:</strong></label>
                                    <input type="text" class="form-control" name="text[]"    value="<?php echo $option['text']; ?>" required>
                                </td>
                                <td class="py-3">
                                    <label class="form-label"><strong>Dirección Enlace <?php echo $cont; ?>:</strong></label>
                                    <input type="text" class="form-control" name="url[]"    value="<?php echo $option['url']; ?>" required>
                                </td>
                                <td class="py-3">
                                    <label class="form-label"><strong>Opciones Enlace <?php echo $cont; ?>:</strong></label>
                                    <input type="text" class="form-control" name="option[]"    value='<?php echo $option["options"]; ?>' placeholder="Opcional">
                                </td>
                            </tr>
                            <input type="hidden" name="id[]" value="<?php echo $option["id"]; ?>">
                            <?php $cont++ ?>
                        <?php endforeach ?>
                        </table>
                        <div class="my-4 button text-center">
                            <button class="btn btn-lg bg-confec rounded-5 px-5">GUARDAR</button>
                        </div>
                    </form>
                    <?php
                        if($_POST) {
                            $data = $_POST;

                            //var_dump($data);

                            if (updateMenu($conx, $data)) {
                                echo "<script>
                                        window.location.replace('index.php')
                                      </script>";
                            } else {
                                echo "<div class='alert alert-danger'>No se pudo modificar el Menú!</div>";
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