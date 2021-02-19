<?php
    session_start();
    session_destroy();

    session_start();
    session_set_cookie_params(0);
    $permisos = $_POST['Permisos'];
    $nombre= $_POST['Nombre'];
    $token = $_POST['Token'];
    $empresa=$_POST['Empresa'];


    $_SESSION['PERMISOS'] = $permisos;
    $_SESSION['NOMBRE']= $nombre;
    $_SESSION['TOKEN']= $token;
    $_SESSION['EMPRESA']= $empresa;

    exit(json_encode(array("msg"=>$_SESSION['PERMISOS']." ".$_SESSION['TOKEN'])));


?>