<!doctype html>
<html lang="en">

<head>
  <title>Inicio sesión</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link rel="stylesheet" href="../css/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<style>
 h1{
    text-align: center;
    
}
</style>

<body>
<h1>AislaHome</h1>
    <?php
        include "../conexionbd/conexion.php";
        include "../controlador/controlador_login_trabajador.php";
    ?>
    <div class="login-container">
        <div class="custom-title">Login Trabajador</div>
        <form action="" method="post">

            <label for="username">Correo:</label>
            <input type="email" id="username" name="correo" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="contrasena" required>


            
            <input name="btningresar",class="login-button" type="submit", value="Iniciar Sesion">


            
            

        </form>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
