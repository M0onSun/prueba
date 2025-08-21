<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <title>Resultado Vista Ventas</title>
</head>
<body class="bg-dark bg-gradient vh-100">
    <div class="container bg-light p-5 rounded mt-4">
        <h1 class="display-4 mb-3 fw-bold">Registro del Sistema de Ventas</h1>
        <table class="table table-striped table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Cantidad</th>
                    <th>Nombre de Producto</th>
                    <th>Nombre del Cliente</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once '../../controlador/ControladorUsuario.php';
                $controlador = new ControladorVentas();
                $controlador->obtenerVentas2();
                ?>
            </tbody>
        </table>
        <a href="vistaPrincipal.php" class=" btn text-light " style="background: #6a0dad; ">Regresar</a>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>