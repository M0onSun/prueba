<?php 
// Incluye el archivo de configuracion que contiene las constantes de conexion a la base de datos
require_once 'config.php';

class Database {
    // Propiedad publica para almacenar la conexion a la base de datos
    public $conn;

    public function __construct($server, $username, $password, $dbname) {
        //Crear una nueva conexión a la base de datos usando las constantes definidas en config.php
        $this->conn = new mysqli($server, $username, $password, $dbname);

        if ($this->conn->connect_error) {
            // verifica si la conexion ha fallado
            die("Conexión fallida: ". $this->conn->connect_error);
        }
    }  
}              //1CENTRALIZAR LA CONEXION proporciona un punto centralizado para manejar la conexion a la base de datos
//lo que facilita el mantenimiento y la reutilizacion del código
//2 ENCAPSULAR LA LOGICA DE CONEXION a la base de datos,permite q otras partes de la aplicacion interactuen con la base de datos 
// sin preocuparse por los detalles de la conexion
//3 MANEJO DE ERRORES facilita el manejo de errores relacionados con la conexion a la base de datos,proporcionando
//un mecanismo para detectar y manejar problemas de conexion de manera centralizada
?> 

