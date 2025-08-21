<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <title>Resultado Vista Usuarios</title>
</head>
<body class="bg-dark bg-gradient vh-100">
    <div class="container bg-light p-5 rounded mt-4">
        <h1 class="display-4 mb-3 fw-bold">Usuarios Registrados</h1>
        <table class="table table-striped table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>    <!-- En caso de querer eliminar una columna eliminar esta linea e ir a controlador y bottar el <td></td> tmnb-->
                    <th>Usuario</th>
                    <th>Cargo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once '../../controlador/ControladorUsuario.php';
                $controlador = new ControladorUsuario();
                $controlador->obtenerUsuarios();
                ?>
            </tbody>
        </table>
        <a href="vistaPrincipal.php" class=" btn text-light " style="background: #6a0dad; ">Regresar</a>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>