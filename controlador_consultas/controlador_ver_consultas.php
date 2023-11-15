<?php



$sql = $conexion->query("SELECT * FROM consultas");

// Imprime los encabezados de las columnas
echo '<table class="table table-striped">';
echo '<thead>';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>Correo</th>';
echo '<th>Consulta</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

while ($datos = $sql->fetch_object()) {
    echo '<tr>';
    echo '<td>' . $datos->id . '</td>';
    echo '<td>' . $datos->correo . '</td>';
    echo '<td>' . $datos->consulta . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';


?>