<?php
$opts = array(
    'http' => array(
        'method' => "GET",
        'header' => "X-JWT-Token: " . $_SESSION['TOKEN']
    )
);

$context = stream_context_create($opts);
$x = file_get_contents("http://sistema.mym.com.bo:4000/trabajador/empresa/" . $_SESSION['CI'], false, $context);
$someArray = json_decode($x, true);
foreach ($someArray as $key => $value) {
    echo "<tr>";
    echo "<td>" . $value["IdBien"] . "</td>";
    echo "<td>" . $value["UbicacionD"] . "</td>";
    echo "<td>" . $value["ClasificacionD"] . "</td>";
    echo "<td>" . $value["EstadoD"] . "</td>";
    echo "<td>" . $value["Responsable"] . "</td>";
    echo "<td>" . $value["Calificacion"] . "</td>";
    echo "<td>" . $value["Precio"] . " </td>";
    echo "</tr>";
}
?>
