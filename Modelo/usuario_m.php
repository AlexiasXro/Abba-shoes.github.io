<?php
include 'Conexion_bd.php';

// user_model.php

class UserModel {
    public function createUser($username, $email, $password) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $clave = $_POST['clave'];
            $email = $_POST['email'];
        
            try {
                // Validar los datos recibidos
                if (empty($clave) || empty($email)) {
                    echo "Por favor, complete todos los campos.";
                    exit();
                }
        
                // Hashear la contraseña
                $claveHasheada = password_hash($clave, PASSWORD_DEFAULT);
        
                // Crear una instancia de la clase Conexion (asumiendo que está bien implementada)
                $conexion = new Conexion();
        
                // Abrir la conexión a la base de datos
                $conexionExitosa = $conexion->abrirConexion();
        
                if ($conexionExitosa) {
                    // Preparar la consulta para insertar un nuevo usuario
                    $consulta = "INSERT INTO usuarios (clave, email) VALUES (:clave, :email)";
        
                    // Preparar la sentencia
                    $sentencia = $conexion->prepare($consulta);
        
                    // Vincular parámetros
                    $sentencia->bindParam(':clave', $claveHasheada); // Insertar la contraseña hasheada
                    $sentencia->bindParam(':email', $email);
        
                    // Ejecutar la consulta
                    $sentencia->execute();
        
                    // Verificar si se insertó correctamente
                    if ($sentencia->rowCount() > 0) {
                        echo "Usuario registrado correctamente";
                    } else {
                        echo "No se pudo registrar al usuario";
                    }
        
                    // Cerrar la conexión
                    $conexion->cerrarConexion();
                } else {
                    echo "Error al conectar a la base de datos";
                }
            } catch (Exception $ex) {
                echo "Error: " . $ex->getMessage();
            }
        }
        return true; // Simulación de éxito
    }

    // Otros métodos para actualizar, eliminar o recuperar usuarios
}

