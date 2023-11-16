<?php


include '../config/Conexion_bd.php'; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $clave = $_POST['clave'];
    $claveHasheada = password_hash($clave, PASSWORD_DEFAULT);
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
    $fechadenacimiento = $_POST['fechadenacimiento'];
    $genero = $_POST['genero'];

    try {
        
        $conexion = new Conexion();

       
        $conexionExitosa = $conexion->abrirConexion(); 

        if ($conexionExitosa) { 
            
            $consulta = "INSERT INTO usuarios(nombre, apellido, clave, telefono, direccion, email, fechadenacimiento, genero) 
                    VALUES(:nombre, :apellido, :clave, :telefono, :direccion, :email, :fechadenacimiento, :genero)";

            
            $sentencia = $conexion->prepare($consulta);

            // Vincular parámetros
            $sentencia->bindParam(':nombre', $nombre);
            $sentencia->bindParam(':apellido', $apellido);
            $sentencia->bindParam(':clave', $claveHasheada);
            $sentencia->bindParam(':telefono', $telefono);
            $sentencia->bindParam(':direccion', $direccion);
            $sentencia->bindParam(':email', $email);
            $sentencia->bindParam(':fechadenacimiento', $fechadenacimiento);
            $sentencia->bindParam(':genero', $genero);

            
            $sentencia->execute();

           // Ejecutar la consulta
           if ($sentencia->execute()) {
            // Registro exitoso, mostrar mensaje de confirmación con Bootstrap modal
            echo "<script>
                    $(document).ready(function(){
                        $('#confirmacionModal').modal('show');
                    });
                  </script>";
            exit(); // Detener la ejecución del resto del código
        } else {
            // Manejar un posible error en la inserción de datos
            echo "<script>
                    $(document).ready(function(){
                        $('#errorModal').modal('show');
                    });
                  </script>";
        }

        $conexion->cerrarConexion();
    } else {
        echo "Error al conectar a la base de datos";
    }
} catch (Exception $ex) {
    echo "Error: " . $ex->getMessage();
}
}
?>