<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <title>Resultado Vista biblioteca</title>
</head>
<body class="bg-dark bg-gradient vh-100">
    <div class="container bg-light p-5 rounded mt-4">
        <h1 class="display-4 mb-3 fw-bold">Registro de los lectores de la biblioteca</h1>
        <table class="table table-striped table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Título del Libro</th>
                    <th>Fecha de Prestamo</th>
                    <th>Fecha de Devolución</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once '../../controlador/ControladorUsuario.php';
                $controlador = new ControladorBiblioteca();
                $controlador->obtenerPrestamo();
                ?>
            </tbody>
        </table>
        <a href="vistaPrincipal.php" class=" btn text-light " style="background: #6a0dad; ">Regresar</a>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>