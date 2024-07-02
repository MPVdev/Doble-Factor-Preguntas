<?php
include( "../MODELO/conexion.php" );

if ( !empty( $_POST ) ) {
  $nombre = mysqli_real_escape_string( $conn, $_POST[ 'nombre' ] );
  $apellido = mysqli_real_escape_string( $conn, $_POST[ 'apellido' ] );
  $usuario = mysqli_real_escape_string( $conn, $_POST[ 'usuario' ] );
  $clave = mysqli_real_escape_string( $conn, $_POST[ 'clave' ] );
  $respuestas = array();

  $respuestas[ 1 ] = mysqli_real_escape_string( $conn, $_POST[ 'respuesta1' ] );
  $respuestas[ 2 ] = mysqli_real_escape_string( $conn, $_POST[ 'respuesta2' ] );
  $respuestas[ 3 ] = mysqli_real_escape_string( $conn, $_POST[ 'respuesta3' ] );
  $respuestas[ 4 ] = mysqli_real_escape_string( $conn, $_POST[ 'respuesta4' ] );
  $respuestas[ 5 ] = mysqli_real_escape_string( $conn, $_POST[ 'respuesta5' ] );

	$hashclave = hash('sha256', $clave);

  $sql = "INSERT INTO usuarios (nombre, apellido, usuario, clave) VALUES ('$nombre','$apellido','$usuario', '$hashclave')";

  $resultado = $conn->query( $sql );

  if ( $resultado ) {
    $id = $conn->insert_id;
    for ( $i = 1; $i < 6; $i++ ) {
      $sqlR = "INSERT INTO preguntas (usuario, Pregunta, Respuesta) VALUES ('$id', '$i', '" . $respuestas[ $i ] . "')";
      $conn->query( $sqlR );
    }
    echo "<script>
			alert('Registro Exitoso');
            window.location = '../index.php';
        </script>";
  } else {

    echo "<script>
            alert('Error al registrar el usuario');
            window.location = '../VISTA/registro.php';
        </script>";
  }
} else {

  echo "<script>
        alert('Error de envio de datos');
        window.location = '../VISTA/registro.php';
    </script>";
}
?>
