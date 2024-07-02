<!DOCTYPE html>
<?php
session_start();

if ( !isset( $_SESSION[ 'id' ] ) ) {
  header( 'Location: ../index.php' );
  exit();
}
?>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" href="../ARCHIVOS/estilos.css">
</head>

<body>
<h1>Bienvenido</h1>
<p><?php echo $_SESSION['nombreC'];?></p>
<p><?php echo $_SESSION['correo'];?></p>
<a href="../controlador/salir.php">Salir</a>
</body>
</html>
