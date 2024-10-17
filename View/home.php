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

	<!-- CARRUSEL DE FOTOS -->
	<div th:fragment="carrusel-fotos" style="margin-top: 20px">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/floristeria por fuera.jpg" class="d-block w-100" height="600px" alt="Imagen1"/>
                    </div>
                    <div class="carousel-item">
					<img src="images/floristeria por dentro.jpg" class="d-block w-100" height="600px" alt="Imagen1"/>
                    </div>
                    <div class="carousel-item">
					<img src="images/floristeria por dentro1.jpg" class="d-block w-100" height="600px" alt="Imagen1"/>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
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