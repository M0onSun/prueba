<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Pagina Principal</title>
    <link rel="shortcut icon" type="image/x-icon" href="vista/assets/img/galeria/php2.jpg">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vista/assets/css/styles.css">
    <link rel="stylesheet" href="vista/assets/css/navbar.css">

    <!-- Custom Styles -->
    <style>
        /* Navbar with a purple background and white text */
        .navbar {
            background-color: #6a0dad; /* Soft purple */
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: white;
        }

        .navbar-nav .nav-link:hover {
            color: #d8b9ff; /* Light purple */
        }

        /* Active page link styling */
        .navbar-nav .nav-link.active {
            font-weight: bold;
            color: #e6ccff; /* Very light purple */
        }
    </style>
</head>

<body class="bg-dark bg-gradient vh-100">
<!-- Navbar-->
    <nav class="navbar navbar-expand-lg vh-100">
        <div class="container-fluid bg-black p-5 rounded mt-4">
            <h1 class="display-6 fw-bolder text-light bg-black mx-5">Bienvenido</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse display-6" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="vistaUsuarios.php">Usuario</a></li>
                    <li class="nav-item"><a class="nav-link" href="vistaTienda.php">Tienda</a></li>
                    <li class="nav-item"><a class="nav-link" href="vistaBiblioteca.php">Biblioteca</a></li>
                    <li class="nav-item"><a class="nav-link" href="vistaVentas.php">Ventas</a></li>
                    <li class="nav-item"><a class="nav-link" href="vistaVentaComputadoras.php">VComputadoras</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--End Navbar-->

    <script src="vista/assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="vista/assets/js/validaLogin.js"></script>
    <script src="vista/assets/js/validaregistros.js"></script>
</body>

</html>