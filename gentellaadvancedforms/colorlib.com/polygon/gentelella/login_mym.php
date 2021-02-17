<?php header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>M&M</title>

  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />

  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />

  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet" />

  <link href="../vendors/animate.css/animate.min.css" rel="stylesheet" />

  <link href="../build/css/custom.min.css" rel="stylesheet" />
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>
    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form>
            <h1>M&M</h1>
            <div>
              <input type="text" class="form-control" placeholder="Usuario" required="" id="user" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Contraseña" required="" id="password" />
            </div>
            <div class="alert alert-danger alert-dismissible" id="alerta" role="alert" hidden>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
              Credenciales Inválidos  Ingrese su usuario y contraseña correctamente
            </div>
            <div>
              <a class="btn btn-default submit" id="buttonLogIn">Conectarse</a>
              <a class="reset_pass" href="#">Olvide mi contraseña</a>
            </div>
            <div class="clearfix"></div>
            <div class="separator">
              <div class="clearfix"></div>
              <br />
              <div>
                <p>©2021 Todos los derechos reservados, empresa M&M</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
  <script src="../vendors/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript">
    window.scrollTo(0, document.body.scrollHeight);

    var button = document.getElementById("buttonLogIn");

    button.addEventListener("click", function() {
      var token;
      var user = document.getElementById("user").value;
      var passwordU = document.getElementById("password").value;

      $.ajax({
          method: "POST",
          contentType: "application/json",
          url: "http://sistema.mym.com.bo:4000/",
          data: JSON.stringify({
            username: user,
            password: passwordU
          }),
        }).done(function(data) {
          console.log(data);
          if (data[0].token) {

            $.ajax({
              method: "POST",
              url: "phpFiles/startSession.php",
              data: {
                Permisos: data[1],
                Nombre: user,
                Token: data[0].token
              },
            }).done(function(data) {
              window.open("trabajador.php", "_self");
            }).fail(function(data) {
              console.log(data);
              
            });

            //else
          } else {
            $("#alerta").attr("hidden",false);
            
          }
          console.log(data[0].token + " " + data[1]);
        })
        .fail(function(data) {
          console.log(data);
          alert("Ocurrio un problema con el servidor contactenos");
        });
    });
  </script>

  <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../build/js/custom.min.js"></script>
</body>

</html>