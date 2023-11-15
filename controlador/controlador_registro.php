<?php
if (!empty($_POST["btnregistro"])) {
    if (!empty($_POST["correo"]) && !empty($_POST["contrasena"]) && !empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["telefono"]) && !empty($_POST["direccion"])) {
        $correo = $_POST["correo"];
        $contrasena = $_POST["contrasena"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $telefono = $_POST["telefono"];
        $direccion = $_POST["direccion"];

        // Establecer la conexión a la base de datos (asegúrate de haberlo definido previamente).
        $conexion = mysqli_connect("localhost", "root", "", "aislahome");

        if (!$conexion) {
            die("Error al conectar a la base de datos: " . mysqli_connect_error());
        }

        // Crear la consulta SQL para insertar datos en la tabla "usuarios".
        $sql = "INSERT INTO usuarios (correo, contrasena, nombre, apellido, telefono, direccion) VALUES ('$correo', '$contrasena', '$nombre', '$apellido', '$telefono', '$direccion')";

        // Ejecutar la consulta.
        if (mysqli_query($conexion, $sql)) {
            echo "<div class='alert alert-success'>Usuario registrado</div>";
            header("location: ../src/login.php");
        } else {
            echo "Error al insertar registro: " . mysqli_error($conexion);
        }

        // Cerrar la conexión a la base de datos.
        mysqli_close($conexion);
    } else {
        echo "Rellena todos los campos";
    }
}
?>
