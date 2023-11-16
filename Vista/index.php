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
    <div class="form-container">
        <div class="form-box">
        <h2>Registro de Usuario</h2>
        <form action="php/registro_usuario_bd.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
            </div>
            <div class="form-group">
                <label for="clave">Contraseña:</label>
                <input type="password" class="form-control" id="clave" name="clave" required>
                <small id="passwordHelpBlock" class="form-text  text-dark" >
                    La contraseña debe tener al menos 8 caracteres, una mayúscula, una minúscula y un carácter especial.
                </small>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="cel">Teléfono:</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="form-group">
                <label for="fechadenacimiento">Fecha de Nacimiento:</label>
                <input type="date" class="form-control" id="fechadenacimiento" name="fechadenacimiento" required>
            </div>
           
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" id="direccion" name="direccion" required>
            </div>
            <div class="form-group">
                <label>Género:</label>     
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="hombre" name="genero" value="hombre" required>
                <label class="form-check-label" for="hombre">Hombre</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="mujer" name="genero" value="mujer">
                <label class="form-check-label" for="mujer">Mujer</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="otro" name="genero" value="otro">
                <label class="form-check-label" for="otro">Otro</label>
            </div>

            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
        </div>  
    
    
        <div class="form-box inicio">
        <h2>Iniciar Sesión</h2>
        <form action="procesar_login.php" method="post">
            <div class="form-column">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="clave">Contraseña:</label>
                <input type="password" class="form-control" id="clave" name="clave" required>
                <small id="passwordHelpBlock" class="form-text text-dark">
                    La contraseña debe tener al menos 8 caracteres, una mayúscula, una minúscula y un carácter especial.
                </small>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </form>
        </div>
    </div>

    
    
</body>
</html>