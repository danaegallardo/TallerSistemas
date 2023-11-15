<?php
if (!empty($_POST["btnconsulta"])) {
    if (!empty($_POST["consulta"]) and (!empty($_POST["correo"]))) {
        $consulta = $_POST["consulta"];
        $correo = $_POST["correo"];
        

        // Establecer la conexión a la base de datos (asegúrate de haberlo definido previamente).
        $conexion = mysqli_connect("localhost", "root", "", "aislahome");

        if (!$conexion) {
            die("Error al conectar a la base de datos: " . mysqli_connect_error());
        }

        // Crear la consulta SQL para insertar datos en la tabla "usuarios".
        $sql = "INSERT INTO consultas (consulta, correo) VALUES ('$consulta', '$correo')";

        // Ejecutar la consulta.
        if (mysqli_query($conexion, $sql)) {
            echo "<div class='alert alert-success'>Consulta Enviada</div>";
            header("location: ../src/index_sesion.php");
        } else {
            echo "Error al registrar la consulta: " . mysqli_error($conexion);
        }

        // Cerrar la conexión a la base de datos.
        mysqli_close($conexion);
    } else {
        echo "Escribe tu consulta";
    }
}
?>
