<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="ARCHIVOS/estilos.css">
</head>

<body>
<div class="contenedor-principal">
  <form method="POST" action="CONTROLADOR/login.php">
    <h2 class="titulo-login">Login</h2>
    <p>Usuario:
      <input type="text" id="usuario" name="usuario" required>
    </p>
    <p>Clave:
      <input type="password" id="clave" name="clave" required>
    </p>
    <p>
      <button type="submit">Iniciar sesión</button>
    </p>
  </form>
  <a href="VISTA/registro.php">
  <button> Registrarse</button>
  </a></div>
</body>
</html>
