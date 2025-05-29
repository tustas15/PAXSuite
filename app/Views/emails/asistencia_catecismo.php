<!DOCTYPE html>
<html>
<head>
    <title>Asistencia de Catecismo</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { max-width: 600px; margin: 0 auto; }
        .header { background-color: #f8f9fa; padding: 20px; text-align: center; }
        .content { padding: 30px; }
        .footer { background-color: #f8f9fa; padding: 20px; text-align: center; font-size: 12px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Parroquia San Francisco de Otavalo</h1>
        </div>
        
        <div class="content">
            <h2>Registro de Asistencia</h2>
            <p>Estimado padre/madre de familia,</p>
            <p>Le informamos que <strong><?= $nombre_estudiante ?></strong> 
               estuvo <strong><?= $estado ?></strong> en la clase de catecismo 
               del día <strong><?= $fecha ?></strong>.</p>
            <p>Atentamente,<br>El equipo de catequesis</p>
        </div>
        
        <div class="footer">
            <p>© <?= date('Y') ?> Parroquia San Francisco de Otavalo, Ibarra - Ecuador</p>
            <p>Este es un mensaje automático, por favor no responda a este correo</p>
        </div>
    </div>
</body>
</html>