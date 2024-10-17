<?php
    include_once 'layout.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Floristeria DaPaz</title>
    <link rel="shortcut icon" type="image/png" href="images/Dapaz.jpg" />

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
                        <h2 class="text-center">Registrar Usuario</h2>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="username" name="username" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo electrónico</label>
                        <input type="text" class="form-control" id="correo" name="correo" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <a href="./index.php" class="btn btn-primary w-100 py-8 fs-4 mb-4">Registrarse</a>

                    <div class="d-flex align-items-center justify-content-center">
                        <p class="fs-4 mb-0 fw-bold">¿Tienes una Cuenta?</p>
                        <a class="text-primary fw-bold ms-2" href="inicioSesion.php">Iniciar sesión</a>
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
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>