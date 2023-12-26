<?php
class RegistroUsuario extends Conexion {

    public function registrarUsuario(Usuario $par) {
        $ok = false;

        try {
            // Hash de la contraseña
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $sql = $this->prepare("INSERT INTO usuarios (nombre, email, password, direccion, ciudad, codigo_postal, detalles, fechaRegistro) 
                                    VALUES (:nombre, :email, :password, :direccion, :ciudad, :codigoPostal, :detalles, :fechaRegistro)");
                                    //utilizando marcadores de posición (':nombre',..)para evitar la inyección SQL
            $nom = $usuario->getNombre();
            $ema = $usuario->getEmail();



            $sql->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $sql->bindParam(":email", $email, PDO::PARAM_STR);
            $sql->bindParam(":password", $hashedPassword, PDO::PARAM_STR);
            $sql->bindParam(":direccion", $direccion, PDO::PARAM_STR);
            $sql->bindParam(":ciudad", $ciudad, PDO::PARAM_STR);
            $sql->bindParam(":codigoPostal", $codigoPostal, PDO::PARAM_STR);
            $sql->bindParam(":detalles", $detalles, PDO::PARAM_STR);
            $sql->bindParam(":fechaRegistro", $fechaRegistro, PDO::PARAM_STR);

            $sql->execute();
            $ok = true;
        } catch(PDOException $pdoex) {
            echo "Error al registrar el usuario: ".$pdoex->getMessage();
        }

        return $ok;
    }
}

// Uso del método:
if (isset($_POST["btn_registrar"])) {
    $registro = new RegistroUsuario();

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $direccion = $_POST["direccion"];
    $ciudad = $_POST["ciudad"];
    $codigoPostal = $_POST["codigoPostal"];
    $detalles = $_POST["detalles"];
    $fechaRegistro = $_POST["fechaRegistro"];

    $registroExitoso = $registro->registrarUsuario($nombre, $email, $password, $direccion, $ciudad, $codigoPostal, $detalles, $fechaRegistro);

    if ($registroExitoso) {
        header("Location: frme_inicio.php");
        echo "Registro exitoso";
        exit();
    } else {
        // Manejar el error si el registro falla
        echo "El registro ha fallado, por favor intenta nuevamente.";
    }
}
?>
