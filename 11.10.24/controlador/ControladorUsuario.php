<?php
// Incluye el archivo DataBase.php que contiene la clase para la conexion a la base de datos
require_once __DIR__ . '/../modelo/Database.php';

class ControladorUsuario {
    private $db;
    //private $tienda;

    public function __construct() {
        $this->db = new Database(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    }

    public function obtenerUsuarios() {
        // Consulta SQL para seleccionar los datos de los usuarios y sus cargos
        $sql = "SELECT u.id_usuario, u.apaterno, u.amaterno, u.nombres, u.usuario, c.cargo
                FROM tbl_usuario u
                JOIN tbl_cargo c ON u.id_cargo = c.id_cargo;";

        // Ejecuta la consulta y almacena el resultado en $result
        $result = $this->db->conn->query($sql);
        // Verifica si la consulta devolvió algún resultado
        if ($result->num_rows > 0) {
            while($row= $result->fetch_assoc()) {
        // Imprime una fila de una tabla HTML con los datos de cada usuario
                echo "<tr>
                        <td>{$row['id_usuario']}</td>
                        <td>{$row['nombres']}</td>
                        <td>{$row['apaterno']}</td>
                        <td>{$row['amaterno']}</td>                            <!-- aqui se imprimen los campos de la base de datos -->
                        <td>{$row['usuario']}</td>
                        <td>{$row['cargo']}</td>
                    </tr>";
            }
        } else{
            // Si no hay resultados, imprime una fila de tabla HTML indicando que no hay resultados
            echo "<tr><td colspan='6'>0 resultados</td></tr>";
        }
    }
}
class ControladorTienda{
    private $tienda;
    public function __construct() {
        $this->tienda = new Database(DB_SERVER1, DB_USERNAME1, DB_PASSWORD1, DB_NAME1);
    }

    public function obtenerCliente() {
        // Consulta SQL para seleccionar los datos de los usuarios y sus cargos
        $sqltienda = "SELECT c.id_cliente, c.nombre, c.nor_nit, c.celular, p.id_pedido, p.fecha_solicitud, p.cantidad, p.total
                FROM clientes c
                JOIN pedidos p ON c.id_cliente = p.id_cliente;";

        // Ejecuta la consulta y almacena el resultado en $result
        $resultienda = $this->tienda->conn->query($sqltienda);
        // Verifica si la consulta devolvió algún resultado
        if ($resultienda->num_rows > 0) {
            while($row= $resultienda->fetch_assoc()) {
        // Imprime una fila de una tabla HTML con los datos de cada usuario
                echo "<tr>
                        <td>{$row['id_cliente']}</td>
                        <td>{$row['nombre']}</td>
                        <td>{$row['nor_nit']}</td>
                        <td>{$row['celular']}</td>
                        <td>{$row['id_pedido']}</td>
                        <td>{$row['fecha_solicitud']}</td>
                        <td>{$row['cantidad']}</td>
                        <td>{$row['total']}</td>
                    </tr>";
            }
        } else{
            // Si no hay resultados, imprime una fila de tabla HTML indicando que no hay resultados
            echo "<tr><td colspan='8'>0 resultados</td></tr>";
        }
    }
}

class ControladorBiblioteca{
    private $biblioteca;
    public function __construct() {
        $this->biblioteca = new Database(DB_SERVER2, DB_USERNAME2, DB_PASSWORD2, DB_NAME2);
    }

    public function obtenerPrestamo() {
        // Consulta SQL para seleccionar los datos de los usuarios y sus cargos
        $sqlbiblioteca = "SELECT le.id_lector, le.nombre, le.telefono,l.titulo, id_prestamo, fe_pres, fe_dev 
                    FROM prestamos
                    JOIN libros l ON prestamos.id_libro = l.id_libro
                    JOIN lector le ON prestamos.id_lector = le.id_lector;";

        // Ejecuta la consulta y almacena el resultado en $result
        $resultbiblioteca = $this->biblioteca->conn->query($sqlbiblioteca);
        // Verifica si la consulta devolvió algún resultado
        if ($resultbiblioteca->num_rows > 0) {
            while($row = $resultbiblioteca->fetch_assoc()) {
                $numCodigo = "";

                if ($row['id_lector'] == 1) {
                    $numCodigo = "eres el primero";
                } elseif ($row['id_lector'] == 2) {
                    $numCodigo = "eres el segundo";
                } else {
                    $numCodigo = "id: {$row['id_lector']}";
                }

                // Imprime una fila de una tabla HTML con los datos de cada usuario
                echo "<tr>
                        <td>{$numCodigo}</td>
                        <td>{$row['nombre']}</td>
                        <td>{$row['telefono']}</td>
                        <td>{$row['titulo']}</td>
                        <td>{$row['fe_pres']}</td>
                        <td>{$row['fe_dev']}</td>
                    </tr>";
            }
        } else {
            // Si no hay resultados, imprime una fila de tabla HTML indicando que no hay resultados
            echo "<tr><td colspan='6'>0 resultados</td></tr>";
        }
    }
}
class ControladorVentas{
    private $ventas;
    public function __construct() {
        $this->ventas = new Database(DB_SERVER3, DB_USERNAME3, DB_PASSWORD3, DB_NAME3);
    }

    public function obtenerVentas2() {
        // Consulta SQL para seleccionar los datos de los usuarios y sus cargos
        $sqlventas = "SELECT id_venta, cantidad, pr.nom_producto, cl.nombre
                    FROM ventas
                    JOIN productos pr ON ventas.id_producto = pr.id_producto
                    JOIN clientes cl ON ventas.id_cliente = cl.id_cliente;";

        // Ejecuta la consulta y almacena el resultado en $result
        $resultventas = $this->ventas->conn->query($sqlventas);
        // Verifica si la consulta devolvió algún resultado
        if ($resultventas->num_rows > 0) {
            while($row= $resultventas->fetch_assoc()) {
                if($row['cantidad']>0){
                    $cant='compra';
                }else{
                    $cant=$row['cantidad'];
                }
        // Imprime una fila de una tabla HTML con los datos de cada usuario
                echo "<tr>
                        <td>{$row['id_venta']}</td>
                        <td>{$cant}</td>
                        <td>{$row['nom_producto']}</td>
                        <td>{$row['nombre']}</td>
                    </tr>";
            }
        } else{
            // Si no hay resultados, imprime una fila de tabla HTML indicando que no hay resultados
            echo "<tr><td colspan='4'>0 resultados</td></tr>";
        }
    }
}

class ControladorComputadoras{
    private $ventacomputadoras;
    public function __construct() {
        $this->ventacomputadoras = new Database(DB_SERVER4, DB_USERNAME4, DB_PASSWORD4, DB_NAME4);
    }

    public function obtenerVentasComputadoras() {
        // Consulta SQL para seleccionar los datos de los usuarios y sus cargos
        $sqlventacomputadoras ="SELECT cliente.nombre, comprar.fe_compra, productos.marca, productos.precio, proveedor.nombre
        from cliente
        join comprar
        on cliente.id_cliente = comprar.id_cliente
        join productos
        on comprar.id_producto = productos.id_producto
        join suministrar
        on productos.id_producto = suministrar.id_producto
        join proveedor
        on suministrar.id_proveedor = proveedor.id_proveedor;";

        // Ejecuta la consulta y almacena el resultado en $result
        $resultventacomputadoras = $this->ventacomputadoras->conn->query($sqlventacomputadoras);
        // Verifica si la consulta devolvió algún resultado
        if ($resultventacomputadoras->num_rows > 0) {
            while($row= $resultventacomputadoras->fetch_assoc()) {
                if ($row ['marca'] == 'HP'){
                    $renom = 'compu';
                    
                }else{
                    $renom = $row['marca'];
                }
                  // Imprime una fila de una tabla HTML con los datos de cada usuario
                echo "<tr>
                        <td>{$row['nombre']}</td>
                        <td>{$row['fe_compra']}</td>
                        <td>$renom</td>
                        <td>{$row['precio']}</td>
                        <td>{$row['nombre']}</td>
                    </tr>";
            }
        } else{
            // Si no hay resultados, imprime una fila de tabla HTML indicando que no hay resultados
            echo "<tr><td colspan='5'>0 resultados</td></tr>";
        }
    }
}

?>