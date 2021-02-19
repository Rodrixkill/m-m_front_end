<?php
    session_start();
    session_destroy();
    header("Location: ../login_mym.php");
    //header("Location: ../Pages/index.html");
    //header("Authorization: ".base64_encode($_SESSION['CI']).":".base64_encode($_SESSION['Contrasena'])."");
    ?>