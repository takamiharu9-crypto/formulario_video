<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : '';
    $apellidos = isset($_POST['apellidos']) ? htmlspecialchars($_POST['apellidos']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $telefono = isset($_POST['telefono']) ? htmlspecialchars($_POST['telefono']) : '';
    $mensaje = isset($_POST['mensaje']) ? htmlspecialchars($_POST['mensaje']) : '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¡Mensaje Enviado!</title>
    <style>
        body {
            background: linear-gradient(to right, #ffe6f0, #ffd1e8);
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
        .confirmation {
            background-color: rgba(255,255,255,0.95);
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 0 25px rgba(255, 100, 150, 0.3);
            text-align: center;
            width: 400px;
        }
        .confirmation h2 {
            color: #ff4f79;
            margin-bottom: 15px;
        }
        .confirmation p {
            font-size: 18px;
            color: #333;
            margin: 8px 0;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            background-color: #ff4f79;
            color: white;
            padding: 12px 20px;
            border-radius: 12px;
            transition: 0.3s;
        }
        a:hover {
            background-color: #ff1f55;
        }
    </style>
</head>
<body>
    <div class="confirmation">
        <h2>💖 ¡Gracias, <?php echo $nombre; ?>! 💖</h2>
        <p>Tu mensaje ha sido enviado correctamente. 📬</p>
        <p><strong>Nombre:</strong> <?php echo $nombre . " " . $apellidos; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Teléfono:</strong> <?php echo $telefono; ?></p>
        <p><strong>Mensaje:</strong> <?php echo $mensaje; ?></p>
        <a href="https://wa.me/5211234567890" target="_blank">💬 Enviar mensaje por WhatsApp</a>
        <br><br>
        <a href="form.html">🔙 Volver al formulario</a>
    </div>
</body>
</html>
<?php
} else {
    echo "<p>No se enviaron datos.</p>";
}
?>
