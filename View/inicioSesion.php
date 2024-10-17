<?php
    include_once 'layout.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Floristeria DaPaz</title>
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" type="image/jpg" href="images/Dapaz.jpg" />



    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Start Header/Navigation -->
    <?php
            MostrarMenu();
        ?>

    <!-- End Header/Navigation -->

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-title text-white">
                        <h2 class="text-center">Iniciar Sesión</h2>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="username" name="username" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="form-check">

                        </div>
                        <a class="text-primary fw-bold" href="recuperarAcceso.php">Recuperar acceso</a>
                    </div>
                    <a href="./index.php" class="btn btn-primary w-100 py-8 fs-4 mb-4">Iniciar
                        Sesion</a>

                    <div class="d-flex align-items-center justify-content-center">
                        <p class="fs-4 mb-0 fw-bold">Nueva en Floristeria Da Paz?</p>
                        <a class="text-primary fw-bold ms-2" href="registrarUsuario.php">Crear una
                            cuenta</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Start Footer Section -->
        <?php
            FinPagina();
        ?>
    <!-- End Footer Section -->


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>