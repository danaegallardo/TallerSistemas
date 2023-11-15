<?php
session_start();
if (empty($_SESSION["id"])) {
    header("location: ../src/login_trabajador.php");
    

}
?>

<!doctype html>
<html lang="en">

<head>
  <title>Panel Admin</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://kit.fontawesome.com/30cecd7e3a.js" crossorigin="anonymous"></script> 
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<style>
  .center-icon {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50vh; /* 100% de la altura de la ventana */
  }

  .fa-icon {
    font-size: 10rem; /* Tamaño del ícono, ajusta según tus necesidades */
    color: #000000;
  }

  .custom-navbar {
    background-color: #F8F9FA; /* Cambia este color al que desees */
  }

  h4{
    text-align: center;
  }
</style>

<body>
  <header>
    <h1>PANEL ADMINISTRATIVO</h1>
    <!-- place navbar here -->
    <br>
    <div class="container">
      <div class="rounded-2 d-inline p-1 mb-2 bg-success text-white">
            <?php
            echo $_SESSION["nombre"]." ". $_SESSION["apellido"];     
            ?>
      </div>
      <div class="custom-navbar">
        <ul class="nav nav-pills">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"  style="color: #000000;">
              <i class="fa-solid fa-circle-user"  style="color: #000000;"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="ver_consultas_admin_test.php"><i class="fa-solid fa-clipboard-list" style="color: #ffb83d;"></i> Consultas</a></li>
              <li><a class="dropdown-item" href='#'><i class="fa-solid fa-money-bill-1" style="color: #2cba30;"></i> Pagos</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="../controlador/controlador_cerrar_trabajador.php"><i class="fa-solid fa-power-off" style="color: #ff0505;"></i> Cerrar Sesión</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>


  </header>
  <main>
    <div class="center-icon">
      <i class="fa-solid fa-gear fa-spin fa-icon"></i>
    </div>
    <div>
      <h4>DISEÑO</h4>
      <h4>EN CONSTRUCCIÓN</h4>
      
    </div>
    
    
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>