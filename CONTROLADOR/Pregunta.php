<?php
session_start();
include( "../MODELO/conexion.php" );

if ( !empty( $_POST ) ) {
  $id = $_SESSION[ "id" ];
  $pregunta = $_SESSION[ "pregunta" ];
  $respuesta = mysqli_real_escape_string( $conn, $_POST[ 'respuesta' ] );

  $sql = "SELECT * FROM preguntas WHERE usuario = $id AND Pregunta = $pregunta AND Respuesta = '$respuesta'";

  $resultado = $conn->query( $sql );
  if ( $resultado && $resultado->num_rows > 0 ) {
    echo "<script>
		alert('Bienvenido');
            window.location = '../VISTA/home.php';
        </script>";

  } else {
    echo "<script>
            alert('Respuesta incorrecta');
            window.location = '../index.php';
        </script>";
  }
} else {
  echo "<script>
        alert('Error de envio de datos');
        window.location = '../index.php';
    </script>";
}
?>
