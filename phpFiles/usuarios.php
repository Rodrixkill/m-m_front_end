<?php
require("sessionVerifyPhp.php");
$opts = array(
    'http' => array(
        'method' => "GET",
        'header' => "X-JWT-Token: " . $_SESSION['TOKEN']
    )
);

$context = stream_context_create($opts);
$x = file_get_contents("https://sistema.mym.com.bo:8443/usuario/empresa/" . $_GET['EMPRESA'] , false, $context);
$results = json_decode($x, true);
echo json_encode($results);
?>