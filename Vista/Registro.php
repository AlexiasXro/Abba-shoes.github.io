<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Modal -->
    <div class="modal fade" id="confirmacionModal" tabindex="-1" role="dialog" aria-labelledby="confirmacionModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="confirmacionModalLabel">¡Registro Exitoso!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times; </span>
        </button>
    </div>
    <div class="modal-body">
        <p>Tu registro se ha completado exitosamente. ¡Bienvenido!</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="window.location.href = 'confirmacion_registro.php'">Aceptar</button>
        </div>
        </div>
    </div>
    </div>
</body>
</html>