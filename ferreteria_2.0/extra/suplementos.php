<?php
class Database
{
    // Propiedades que almacenan la información de conexión a la base de datos
    private $hostname = "localhost";  // Nombre del servidor de la base de datos
    private $database = "ferreteriavirtual2";  // Nombre de la base de datos
    private $username = "root";  // Nombre de usuario de la base de datos
    private $password = "";  // Contraseña de la base de datos
    private $charset = "utf8";  // Conjunto de caracteres para la conexión

    // Método para establecer una conexión a la base de datos
    function conectar()
    {
        try {
            // Crea una cadena de conexión usando las propiedades definidas
            $conexion = "mysql:host=" . $this->hostname . ";dbname=" . $this->database . ";charset=" . $this->charset;
            
            // Define opciones para la conexión PDO
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,  // Habilita el manejo de errores en PDO
                PDO::ATTR_EMULATE_PREPARES => false,  // Deshabilita la emulación de preparación de consultas
            ];
            
            // Crea una instancia de PDO y realiza la conexión a la base de datos
            $pdo = new PDO($conexion, $this->username, $this->password, $options);
            
            // Devuelve la instancia de PDO, que representa la conexión a la base de datos
            return $pdo;
        } catch (PDOException $e) {
            // En caso de error, muestra un mensaje de error y finaliza el script
            echo 'Error conexión: ' . $e->getMessage();
            exit; 
        }
    }
}
?>
