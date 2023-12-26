<?php

require_once("../../Conexion/Conexion_db.php");
require_once("../../Controlador/RegistroUsuario-cont.php");
require_once("../AbbaR/Modelo/user_mod.php");


if (isset($_POST["btn_registrar"])){
    $ob = new RegistroUsuario();//INSTANCIA AL CONTROLADOR
        if($ob->abrirConexion()){
            $u = new Usuario(); //INSTANCIA AL MODELO
            $u->setNombre($_POST["nombre"]);
            $u->setEmail($_POST["email"]);
            $u->setDireccion($_POST["direccion"]);
            $u->setCiudad($_POST["ciudad"]);
            $u->setCodigoPostal($_POST["codigoPostal"]);    
            $u->setDetalles($_POST["detalle"]);
            
            

            if($ob->registrarUsuario($u)){//AQUI ta el error
                header("Location: frme_inicio.php");
                exit();
             } else {
                echo "Error al ingresar";
            }
        } else {
            echo "Error de conexión";
        }
}
 

?>