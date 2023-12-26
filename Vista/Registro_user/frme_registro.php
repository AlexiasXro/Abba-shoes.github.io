<html>
    <head>
        <title>Registro de Usuario</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
                body {
                    background-color: #161F30; /* Fondo negro */
                    color: #FFFFFF; /* Texto blanco */
                    margin: 50px;
                }
                

                .form-container {
                    display: flex;
                    justify-content: space-around;
                    max-width: 800px;
                    margin: auto;
                    padding: 20px;
                    border-radius: 10px;
                    border: 5px solid #84B026;

                }
                .form-box {
                display: flex;
                flex-direction: column;/* Ancho de cada formulario */
                padding: 20px;
                margin: 35px;
                background-color: #217373;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box;
                }
                .form-box.inicio{
                    max-height: 380px; 
                    background-color: #219373; 
                }


                .form-box form {
                display: flex;
                flex-direction: column;
                }

        </style>
    </head>
    <body>
    <!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
</head>
<body>

        <form action="RegistrarUsuario-cont.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre"><br><br>
                    
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email"><br><br>
                    
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password"><br><br>
                    
            <label for="confirm_password">Confirmar Contraseña:</label>
            <input type="password" id="confirm_password" name="confirm_password"><br><br>
                    
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion"><br><br>
                    
            <label for="ciudad">Ciudad:</label>
            <input type="text" id="ciudad" name="ciudad"><br><br>
                    
            <label for="codigo_postal">Código Postal:</label>
            <input type="text" id="codigo_postal" name="codigo_postal"><br><br>
                    
            <label for="detalles">Detalles:</label>
            <textarea id="detalles" name="detalles"></textarea><br><br>
                    
            <label for="fecha_registro">Fecha de Registro:</label>
            <input type="date" id="fecha_registro" name="fecha_registro"><br><br>
                    
            <!-- Botón para registrar el usuario -->
            <input type="submit" name="btn_registrar" value="Registrar Usuario">
        </form>

</body>
</html>

