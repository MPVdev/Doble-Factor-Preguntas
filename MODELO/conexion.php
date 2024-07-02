<?php
$servername = "localhost";
$database = "seguridad";
$username = "root";
$password = "1234";

$conn = mysqli_connect( $servername, $username, $password, $database );

if ( !$conn ) {
  die( "La conexión falló: " . mysqli_connect_error() );
}
?>
