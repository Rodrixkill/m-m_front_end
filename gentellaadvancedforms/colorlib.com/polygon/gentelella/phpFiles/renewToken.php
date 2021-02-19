<?php

$opts = array(
    'http' => array(
        'method' => "GET",
        'header' => "X-JWT-Token: " . "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJjaSI6IjIyMjIyIiwidXNlcm5hbWUiOiJqb3NlbCIsImlzc3VlZCI6MTYxMzY5NDUxNjY1MCwiZXhwaXJlcyI6MTYxMzY5NDUxNjc1MH0.G8cngyBBVxS6HbOO1JK91lYVagObydxBO6BAu7ar-ukDWX2kdHOhlBxYmjojPRhVvvziQCdXSo6vKPdUlu3ghA"
    )
);

$context = stream_context_create($opts);
$x = file_get_contents("http://sistema.mym.com.bo:4000/trabajador/", false, $context);

//$resultt = var_dump($x);

print_r($x);
?>


        