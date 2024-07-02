<?php
session_start();

if ( !isset( $_SESSION[ 'id' ] ) ) {
  header( 'Location: ../index.php' );
  exit();
}

$random = rand( 1, 5 );
$_SESSION[ "pregunta" ] = $random;
if ( $random == 1 ) {
  $pregunta = "Cual es color Favorito";
} else if ( $random == 2 ) {
  $pregunta = "Cual es tu comida favorita";
} else if ( $random == 3 ) {
  $pregunta = "Nombre de una mascota";
} else if ( $random == 4 ) {
  $pregunta = "2do apellido de tu madre";
} else if ( $random == 5 ) {
  $pregunta = "Cantante Favorito";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Pregunta</title>
<link rel="stylesheet" href="../ARCHIVOS/estilos.css">
</head>

<body>
<form method="POST" action="../CONTROLADOR/Pregunta.php">
  <h2>Pregunta de Seguridad</h2>
  <p><?php echo $pregunta?></p>
  <p>Respuesta:
    <input type="text" id="respuesta" name="respuesta" required>
  </p>
  <p>
    <button type="submit">Iniciar sesión</button>
  </p>
</form>
</body>
</html>
