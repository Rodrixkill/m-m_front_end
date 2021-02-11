<?php
    session_start();
    session_destroy();

    session_start();
    session_set_cookie_params(0);
    $permisos = $_POST['Permisos'];
    $nombre= $_POST['Nombre'];
    $token = $_POST['Token'];


    $_SESSION['PERMISOS'] = $permisos;
    $_SESSION['NOMBRE']= $nombre;
    $_SESSION['TOKEN']= $token;

    exit(json_encode(array("msg"=>$_SESSION['PERMISOS']." ".$_SESSION['TOKEN'])));


?>