<?php
        require("sessionVerify.php");

        $opts = array(
            'http' => array(
                'method' => "GET",
                'header' => "X-JWT-Token: " . $_SESSION['TOKEN']
            )
        );

        $context = stream_context_create($opts);
        $x = file_get_contents("http://sistema.mym.com.bo:4000/trabajador/empresa/" . $_GET['CI'], false, $context);
        $results = json_decode($x, true);
        echo json_encode($results);