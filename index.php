<?php
require __DIR__ . "/config.php";

if (!isset($_SESSION["user_id"])) {
  header("Location: login.php");
  exit;
}
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Zona privada</title>
</head>
<body>
  <h1>Zona privada</h1>
  <p>Bienvenido, <b><?= htmlspecialchars($_SESSION["username"]) ?></b>.</p>
  <p>Si ves esto, el login funciona y tienes acceso a la web.</p>
  <p><a href="logout.php">Cerrar sesión</a></p>
</body>
</html>

