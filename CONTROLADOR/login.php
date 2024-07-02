<?php
session_start();
include( "../MODELO/conexion.php" );

if ( !empty( $_POST ) ) {
  $usuario = mysqli_real_escape_string( $conn, $_POST[ 'usuario' ] );
  $clave = mysqli_real_escape_string( $conn, $_POST[ 'clave' ] );
	
	$hashclave = hash('sha256', $clave);

  $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave = '$hashclave' ";
  $resultado = $conn->query( $sql );

  if ( $resultado && $resultado->num_rows > 0 ) {
    $fila = $resultado->fetch_assoc();
    $_SESSION[ "id" ] = $fila[ 'idUsuarios' ];
    $_SESSION[ "nombreC" ] = $fila[ 'nombre' ] . " " . $fila[ 'apellido' ];
    $_SESSION[ "correo" ] = $fila[ 'correo' ];
	  $_SESSION["usuario"] = $usuario;
	  $_SESSION["clave"] = $clave;

    echo "<script>
            window.location = '../VISTA/Pregunta.php';
        </script>";

  } else {
    echo "<script>
            alert('Usuario o contraseña incorrecta');
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
