<?php

// Definir la interfaz Logger
interface Logger {
    public function log(string $message);
}

// Implementar la interfaz en la clase FileLogger
class FileLogger implements Logger {
    public function log(string $message) {
        // Lógica para registrar el mensaje en un archivo
        file_put_contents('log.txt', $message.PHP_EOL, FILE_APPEND);
    }
}

// Clase UserController que depende de la abstracción Logger
class UserController {
    private $logger;

    public function __construct(Logger $logger) {
        $this->logger = $logger;
    }

    public function createUser(string $username) {
        // Lógica para crear un usuario
        // ...

        // Registrar el evento
        $this->logger->log("User created: " . $username);
    }
}

// Crear instancia del logger de archivos
$fileLogger = new FileLogger();

// Pasar el logger al controlador
$userController = new UserController($fileLogger);

// Crear un usuario
$userController->createUser("john_doe");

?>
