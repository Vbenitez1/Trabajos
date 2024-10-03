<?php
// index.php

include 'conexion.php';
include 'vars.php';

// Manejo del envío de mensajes
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['mensaje'])) {
    $usuario = $_SESSION['usuario'] ?? 'Anónimo';
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $stmt = $pdo->prepare("INSERT INTO blog (usuario, mensaje) VALUES (?, ?)");
    $stmt->execute([$usuario, $mensaje]);
}

// Recuperar mensajes
$stmt = $pdo->query("SELECT * FROM blog ORDER BY id DESC");
$mensajes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Simple</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .mensaje { margin-bottom: 20px; }
    </style>
</head>
<body>

<h1>Blog Simple</h1>

<?php if (!isset($_SESSION['usuario'])): ?>
    <form method="POST">
        <input type="text" name="nombre_usuario" placeholder="Tu nombre" required>
        <button type="submit">Iniciar sesión</button>
    </form>
<?php else: ?>
    <h2>Bienvenido, <?= $_SESSION['usuario'] ?></h2>
    <form method="POST">
        <textarea name="mensaje" placeholder="Escribe tu mensaje aquí..." required></textarea>
        <button type="submit">Enviar</button>
    </form>
    <form method="POST">
        <button type="submit" name="logout">Cerrar sesión</button>
    </form>
<?php endif; ?>

<h2>Mensajes</h2>
<div id="mensajes">
    <?php foreach ($mensajes as $msg): ?>
        <div class="mensaje">
            <strong><?= htmlspecialchars($msg['usuario']) ?></strong>: <?= htmlspecialchars($msg['mensaje']) ?>
            
        </div>
    <?php endforeach; ?>
</div>

<button onclick="location.reload();">Refrescar</button>

</body>
</html>
