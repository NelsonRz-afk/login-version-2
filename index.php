<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página Principal</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <label>
        <p>Nombre de Usuario</p>
        <p><input type="text" id="usuario" placeholder="Usuario" required></p>
    </label>
    <label>
        <p>Contraseña</p>
        <p><input type="password" id="password" placeholder="Contraseña" required></p>
    </label>
    <p><button onclick="confirmar()">Iniciar Sesión</button></p>
    <p><span id="result"></span></p>
    <script>
    function confirmar() {
        var user = $('#usuario').val();
        var pass = $('#password').val();
        $.ajax({
            url: 'validar.php',
            type: 'POST',
            data: { usuario: user, password: pass },
            success: function(resp) {
                if (resp == 1) location.href = './principal_avanzado.php';
                else if (resp == 2) location.href = './principal_medio.php';
                else if (resp == 3) location.href = './principal_basico.php';
                else $("#result").html("<strong>¡Error!</strong> Usuario o contraseña incorrectos.");
            }
        });
    }
    </script>
</body>
</html>
