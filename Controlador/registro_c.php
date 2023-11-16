<?php

class RegistroController {
    public function registrarUsuario($username, $email, $password) {
        // Validar los datos recibidos
        if (empty($username) || empty($email) || empty($password)) {
            return "Por favor, complete todos los campos.";
        }

        // Hashear la contraseña
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        // Crear una instancia del modelo de usuario
        $userModel = new UserModel();

        // Crear el usuario utilizando el modelo
        $registroExitoso = $userModel->createUser($username, $email, $passwordHash);

        if ($registroExitoso) {
            return "Usuario registrado correctamente";
        } else {
            return "No se pudo registrar al usuario";
        }
    }
}
?>