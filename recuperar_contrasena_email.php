<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>M&M</title>

  <link href="mym/polygon/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />

  <link href="mym/polygon/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
  <link href="mym/polygon/vendors/pnotify/dist/pnotify.css" rel="stylesheet" />
  <link href="mym/polygon/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet" />
  <link href="mym/polygon/vendors/nprogress/nprogress.css" rel="stylesheet" />

  <link href="mym/polygon/vendors/animate.css/animate.min.css" rel="stylesheet" />

  <link href="mym/polygon/build/css/custom.min.css" rel="stylesheet" />
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
              <input type="text" class="form-control" placeholder="Correo" required="" id="mail" />
            </div>
            <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
              Ingresa un correo electrónico registrado
            </div>
            <input type="button" value="Send Email" id="buttonMail">
            <div>
              <a class="btn btn-default submit" href="index.html">Confirmar</a>
            </div>
            <div class="clearfix"></div>
            <div class="separator">
              <div class="clearfix"></div>
              <br />
              <div>
                <p>©2021 Todos los derechos reservados, empresa M&M </p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>

    <script type="text/javascript">
      window.scrollTo(0, document.body.scrollHeight);
      var button = document.getElementById("buttonMail");
      button.addEventListener("click", function () {
        var emailIn = document.getElementById("mail").value;
        $.ajax({
          method: "POST",
          contentType: "application/json",
          url: "http://sistema.mym.com.bo:4000/contrasena",
          data: JSON.stringify({ email: emailIn}),
          }).done(function (data) {
            
            if(data.token){
              var linkSend = "http://sistema.mym.com/recuperar_contrasena?token=" + data.token;
              $.ajax({
                method: "POST",
                contentType: "application/json",
                url: "http://sistema.mym.com.bo:4000/contrasena/sendMail",
                data: JSON.stringify({ 
                  email: emailIn, 
                  link: linkSend }),
                }).done(function (data) {
                  alert("Mail enviado");
                }).fail(function (data) {
            console.log(data);
            alert("Ocurrio un problema con el servidor contactenos");
          });;
            }else{
              alert(data);
            }
          })
          .fail(function (data) {
            console.log(data);
            alert("Ocurrio un problema con el servidor contactenos");
          });
      });
    </script>
    <script src="mym/polygon/vendors/jquery/dist/jquery.min.js"></script>
    <script src="mym/polygon/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="mym/polygon/build/js/custom.min.js"></script>
  </body>
</html>

