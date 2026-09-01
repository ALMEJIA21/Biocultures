<?php
require_once 'conexion.php'; // IMPORTAR CONEXIÓN AQUÍ

$id = filter_var($_GET['id'] ?? null, FILTER_VALIDATE_INT);
$ensayoEncontrado = null;

if ($id) {
    // Buscar en MySQL el ensayo por ID
    $stmt = $pdo->prepare("SELECT * FROM ensayos WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $ensayoEncontrado = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Ensayo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <?php if ($ensayoEncontrado): ?>
        <h2>Detalle del Ensayo #<?= $ensayoEncontrado['id'] ?></h2>
        <p><strong>Microorganismo:</strong> <?= htmlspecialchars($ensayoEncontrado['microorganismo']) ?></p>
        <p><strong>Resultado:</strong> <?= htmlspecialchars($ensayoEncontrado['resultado']) ?></p>
    <?php else: ?>
        <p>El ensayo no existe.</p>
    <?php endif; ?>
    <a href="index.php" class="btn btn-secondary">Volver</a>
</div>
</body>
</html>