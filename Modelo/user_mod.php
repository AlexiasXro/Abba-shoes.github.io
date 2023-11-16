<?php

include 'Conexion_bd.php';

class Usuario {
    private $id;
    private $nombre;
    private $email;
    private $contrasena;
    private $direccion;

    public function __construct($nombre, $email, $contrasena, $direccion) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->contrasena = $contrasena;
        $this->direccion = $direccion;
    }

    public function registrarUsuario() {
        // Lógica para insertar el usuario en la base de datos
        // Implementación simplificada para el ejemplo
        // Debes utilizar PDO o algún ORM para la interacción con la base de datos
        // Aquí se asume que ya hay una conexión establecida ($pdo)

        try {
            $hashedPassword = password_hash($this->contrasena, PASSWORD_DEFAULT);
            $sql = "INSERT INTO usuarios (nombre, email, contrasena, direccion) VALUES (?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$this->nombre, $this->email, $hashedPassword, $this->direccion]);
            return true;
        } catch (PDOException $e) {
            // Manejo de errores
            return false;
        }
    }

    public function iniciarSesion($email, $contrasena) {
        // Lógica para verificar las credenciales del usuario e iniciar sesión
        // Implementación simplificada para el ejemplo
        // Debes consultar la base de datos para obtener los datos del usuario y verificar la contraseña

        // Suponiendo que ya tienes una conexión a la base de datos ($pdo)
        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($contrasena, $usuario['contrasena'])) {
            // Iniciar sesión (puede ser mediante sesiones o tokens)
            return true;
        } else {
            return false;
        }
    }

    public function actualizarDatos($nuevosDatos) {
        // Lógica para actualizar los datos del usuario
        // Implementación simplificada para el ejemplo
        // Aquí deberías actualizar los datos en la base de datos según la lógica de tu aplicación

        // Suponiendo que $nuevosDatos es un array con los nuevos datos a actualizar
        $this->nombre = $nuevosDatos['nombre'];
        $this->direccion = $nuevosDatos['direccion'];

        // Actualización en la base de datos (utilizando PDO o algún ORM)
        // ...

        return true;
    }

    public function eliminarCuenta() {
        // Lógica para eliminar la cuenta del usuario
        // Implementación simplificada para el ejemplo
        // Aquí deberías eliminar el usuario y sus datos


?>