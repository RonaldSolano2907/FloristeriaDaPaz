<?php

function MostrarMenu()
{
    echo '
    		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Floristeria navigation bar">
<div class="container">
				<a class="nav-link" href="home.php"><img src="images/Dapaz.jpg" alt="" width="150" height="75"><span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFloristeria" aria-controls="navbarsFloristeria" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFloristeria">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item active">
							<a class="nav-link" href="home.php">Inicio</a>
						</li>
						<li><a class="nav-link" href="categorias.php">Categorías</a></li>
                        <li><a class="nav-link" href="productos.php">Productos</a></li>
                        <li><a class="nav-link" href="catalogo.php">Catalogo</a></li>
						<li><a class="nav-link" href="nosotros.php">Sobre Nosotros</a></li>
						<li><a class="nav-link" href="servicios.php">Servicios</a></li>
						<li><a class="nav-link" href="contactenos.php">Contáctenos</a></li>
                        <li><a class="nav-link" href="cart.php"><img src="images/cart.svg"></a></li>
                        <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="images/user.svg">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">My Account</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">My Task</p>
                                        </a>
                                        <a href="inicioSesion.php"
                                            class="btn btn-primary mx-3 mt-2 d-block">Iniciar Sesión</a>
                                    </div>
                                </div>
                            </li>
					</ul>
				</div>
			</div>

            </nav>
            </header>
            <div class="container-fluid">
                <div class="row">

                </div>
            </div>
        </div>
		</nav>
    ';
}

function FinPagina()
{
    echo '
<footer class="footer-section">
        <div class="container relative">
            <div class="border-top copyright">
                <div class="row pt-4">
                    <div class="col-lg-6">
                        <p class="mb-2 text-center text-lg-start">Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                            </script>. All Rights Reserved. &mdash; Designed by  Grupo #5
                        </p>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end">
                        <ul class="list-unstyled d-inline-flex ms-auto">
                            <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
    </footer>
    ';
}

?>