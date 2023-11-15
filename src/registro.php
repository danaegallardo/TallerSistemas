<!doctype html>
<html lang="en">

<head>
  <title>Crear cuenta</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../css/registro.css">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <h1>AISLAHOME</h1>
        <?php
           // include "../conexionbd/conexion.php";
            include "../controlador/controlador_registro.php";
        ?>

        <div class="login-container">
            <div class="custom-title">Registrarse</div>
            <form action="registro.php" method="post">
                
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required>

                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="correo" required>

                <label for="celular">Celular:</label>
                <input type="tel" id="celular" name="telefono" required>

                <label for="direccion">Direccion:</label>
                <input type="text" id="direccion" name="direccion" required>

                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="contrasena" required>

                <input type="submit" value="Registrar" name="btnregistro">

            </form>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>