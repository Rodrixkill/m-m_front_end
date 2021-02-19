<?php
session_start();
//header("Authorization: ".base64_encode($_SESSION['CI']).":".base64_encode($_SESSION['Contrasena'])."");
session_set_cookie_params(0);
if (!(isset($_SESSION['TOKEN']))) {
    header("Location: login_mym.php");
} else {
    $opts = array(
        'http' => array(
            'method' => "GET",
            'header' => "X-JWT-Token: " . $_SESSION['TOKEN']
        )
    );

    $context = stream_context_create($opts);
    $x = file_get_contents("http://sistema.mym.com.bo:4000/empresa/", false, $context);
    $someArray = json_decode($x, true);
    if (!$x) {
        session_start();
        session_destroy();
?>
        <script language="javascript">
            alert("Expiro tu tiempo de session expiro vuelva a logearse");
            window.location.href = "login_mym.php";
        </script>
    <?php
    }
}
$time = $_SERVER['REQUEST_TIME'];

$timeout_duration = 3600;

if (
    isset($_SESSION['LAST_ACTIVITY']) &&
    ($time - $_SESSION['LAST_ACTIVITY']) > $timeout_duration
) {
    session_unset();
    session_destroy();
    ?>
    <script language="javascript">
        alert("Expiro tu tiempo de session expiro vuelva a logearse");
        window.location.href = "login_mym.php";
    </script>
<?php
}
$_SESSION['LAST_ACTIVITY'] = $time;
