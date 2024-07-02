<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Registro</title>
<link rel="stylesheet" href="../ARCHIVOS/estilos.css">
</head>

<body>
<form method="POST" action="../CONTROLADOR/registro.php">
  <div class="contenedor-registro">
    <h2>Registro</h2>
    <p>Ingrese sus datos a continuación:</p>
    <div class="contenedor-flex">
      <div class="contenedor-info">
        <p>Nombre:
          <input type="text" id="nombre" name="nombre" required>
        </p>
        <p>Apellido:
          <input type="text" id="apellido" name="apellido" required>
        </p>
        <p>Usuario:
          <input type="text" id="usuario" name="usuario" required>
        </p>
        <p>Clave:
          <input type="password" id="clave" name="clave" required>
        </p>
      </div>
      <div class="contenedor-preguntas">
        <p>Pregunta 1: Cual es tu color Favorito:</p>
        <p>Respuesta:
          <input type="text" id="respuesta1" name="respuesta1" required>
        </p>
        <p>Pregunta 2: Cual es tu comida favorita:</p>
        <p>Respuesta:
          <input type="text" id="respuesta2" name="respuesta2" required>
        </p>
        <p>Pregunta 3: Nombre de una mascota:</p>
        <p>Respuesta:
          <input type="text" id="respuesta3" name="respuesta3" required>
        </p>
        <p>Pregunta 4: 2do apellido de tu madre:</p>
        <p>Respuesta:
          <input type="text" id="respuesta4" name="respuesta4" required>
        </p>
        <p>Pregunta 5: Cantante Favorito:</p>
        <p>Respuesta:
          <input type="text" id="respuesta5" name="respuesta5" required>
        </p>
      </div>
    </div>
    <button type="submit">Registrar</button>
  </div>
</form>
</body>
</html>
