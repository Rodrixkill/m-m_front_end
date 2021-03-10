<?php
require("phpFiles/sessionVerify.php");
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="images/favicon.ico" type="image/ico" />
  <title>M&M</title>

  <link href="mym/polygon/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />

  <link href="mym/polygon/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />

  <link href="mym/polygon/vendors/nprogress/nprogress.css" rel="stylesheet" />

  <link href="mym/polygon/vendors/iCheck/skins/flat/green.css" rel="stylesheet" />

  <link href="mym/polygon/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" />

  <link href="mym/polygon/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />

  <link href="mym/polygon/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />

  <link href="mym/polygon/build/css/custom.min.css" rel="stylesheet" />


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0">
            <a href="index.html" class="site_title"><i class="fa fa-home"></i> <span>Módulo M&M Admin</span></a>
          </div>
          <div class="clearfix"></div>



          <br />

          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">

              <?php
              require("side_bar_mym.php");
              ?>

            </div>

          </div>

          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="phpFiles/logOut.php">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
        </div>
      </div>

      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>

          <nav class="nav navbar-nav">
            <ul class="navbar-right">


            </ul>
          </nav>
        </div>
      </div>

      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Administrar Usuarios<small></small></h3>
            </div>

          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="col-md-6">
                  <label for="empresa">Empresa:</label>
                  <select id="empresa" class="form-control">
                    <option value="0">Escoger una empresa primero</option>
                    <?php

                    foreach ($someArray as $key => $value) {
                      if ($_SESSION["PERMISOS"] != "ADMIN_MM") {
                        if ($_SESSION["EMPRESA"] == $value["id"]) {
                          echo "<option value=\"" . $value["id"] . "\">" . $value["razon_social"] . "</option>";
                        }
                      } else {
                        echo "<option value=\"" . $value["id"] . "\">" . $value["razon_social"] . "</option>";
                      }
                    }
                    ?>
                  </select>
                </div>


                <div class="x_content">
                  <div>
                    <a class="btn btn-app" data-toggle="modal" data-target="#nuevoModalLong"> <i class="fa fa-plus-circle"></i> Agregar nuevo usuario</a>
                  </div>
                  <table id="usuarios" class="table table-striped projects">
                    <thead>
                      <tr>
                        <th>N° Documento</th>
                        <th style="width: 20%">Nombres y Apellidos</th>
                        <th>Correo electrónico</th>
                        <th>Tipo</th>
                        <th>Estado</th>
                        <th style="width: 20%">Editar</th>
                      </tr>
                    </thead>
                    <tbody>


                    </tbody>
                  </table>
                  <!-- Button trigger modal -->


                  <!-- Modal -->
                  <div class="modal fade bd-example-modal-lg" id="nuevoModalLong" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Agregar Usuario</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="">
                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Numero de documento<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <input class="form-control" id="ciA" data-validate-length-range="6" name="ci" placeholder="" required="required" />
                              </div>
                            </div>


                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Nombre<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <input class="form-control" id="nombreA" data-validate-length-range="8" data-validate-words="2" name="nombre" placeholder="" required="required" />
                              </div>
                            </div>

                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Usuario<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <input class="form-control" id="usuarioA" data-validate-length-range="6" data-validate-words="1" name="apellido_paterno" placeholder="" required="required" />
                              </div>
                            </div>
                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Contraseña<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <input class="form-control" id="contrasenaA" data-validate-length-range="8" data-validate-words="1" name="apellido_materno" placeholder="" required="required" />
                              </div>
                            </div>
                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Fecha de nacimiento<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <input class="form-control" id="fnacA" class='date' type="date" name="date" required='required'>
                              </div>
                            </div>
                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Tipo<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <input class="form-control" id="tipoA" class='optional' name="sexo" data-validate-length-range="5,15" type="text" />
                              </div>
                            </div>

                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Correo electrónico<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <input class="form-control" name="email" class='email' required="required" type="email" />
                              </div>
                            </div>
                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Activo<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <select class="form-control" id="activoA">
                                  <option value="0">Inactivo</option>
                                  <option value="1">Activo</option>
                                </select>
                              </div>
                            </div>
                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Empresa<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <select class="form-control" id="empresaA">
                                  <option value="0">Escoger una empresa primero</option>
                                  <?php
                                  foreach ($someArray as $key => $value) {

                                    if ($_SESSION["PERMISOS"] != "ADMIN_MM") {
                                      if ($_SESSION["EMPRESA"] == $value["id"]) {
                                        echo "<option value=\"" . $value["id"] . "\">" . $value["razon_social"] . "</option>";
                                      }
                                    } else {
                                      echo "<option value=\"" . $value["id"] . "\">" . $value["razon_social"] . "</option>";
                                    }
                                  }
                                  ?>
                                </select>
                              </div>
                            </div>

                            <div class="ln_solid">
                              <div class="form-group">
                                <div class="col-md-6 offset-md-3">
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                          <button type="button" class="btn btn-primary" id="nuevo_usuario">Guardar</button>
                        </div>
                      </div>
                    </div>
                  </div>


                  <!-- Modal -->
                  <div class="modal fade bd-example-modal-lg" id="editModalLong" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Editar Usuario</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="">
                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Numero de documento<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <input class="form-control" id="ci" data-validate-length-range="6" name="ci" placeholder="" required="required" disabled />
                              </div>
                            </div>


                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Nombre<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <input class="form-control" id="nombre" data-validate-length-range="8" data-validate-words="2" name="nombre" placeholder="" required="required" disabled />
                              </div>
                            </div>

                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Contraseña<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <input class="form-control" id="contrasena" data-validate-length-range="8" data-validate-words="1" name="apellido_materno" placeholder="" required="required" />
                              </div>
                            </div>


                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Correo electrónico<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <input class="form-control" id="correo" name="email" class='email' required="required" type="email" />
                              </div>
                            </div>

                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Activo<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <select class="form-control" id="activo">
                                  <option value="0">Inactivo</option>
                                  <option value="1">Activo</option>
                                </select>
                              </div>
                            </div>


                            <div class="ln_solid">
                              <div class="form-group">
                                <div class="col-md-6 offset-md-3">
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                          <button type="button" class="btn btn-primary" id="editar_usuario">Guardar</button>
                        </div>
                      </div>
                    </div>
                  </div>






                </div>
              </div>
            </div>
          </div>
        </div>

      </div>


      <script src="mym/polygon/vendors/jquery/dist/jquery.min.js"></script>
      <script src="mym/polygon/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
      <script src="mym/polygon/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
      <script src="mym/polygon/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
      <script src="mym/polygon/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
      <script src="mym/polygon/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
      <script src="mym/polygon/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
      <script src="mym/polygon/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
      <script src="mym/polygon/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
      <script src="mym/polygon/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
      <script src="mym/polygon/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
      <script src="mym/polygon/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
      <script src="mym/polygon/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>



      <script language="JavaScript">
        $(document).ready(function() {
          var token = "<?php echo $_SESSION['TOKEN']; ?>";
          $.ajaxSetup({
            error: function(xhr, status, err) {
              if (xhr.status == 401) {
                alert("Expiro tu tiempo de session expiro vuelva a logearse");
                window.location.href = "login_mym.php";
              } else {
                alert("Ocurrio un problema con el servidor contactenos");
              }

            }
          });
          $.extend(true, $.fn.dataTable.defaults, {
            "language": {
              "decimal": ",",
              "thousands": ".",
              "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
              "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
              "infoPostFix": "",
              "infoFiltered": "(filtrado de un total de _MAX_ registros)",
              "loadingRecords": "Cargando...",
              "lengthMenu": "Mostrar _MENU_ registros",
              "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
              },
              "processing": "Procesando...",
              "search": "Buscar:",
              "searchPlaceholder": "Término de búsqueda",
              "zeroRecords": "No se encontraron resultados",
              "emptyTable": "Ningún dato disponible en esta tabla",
              "aria": {
                "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sortDescending": ": Activar para ordenar la columna de manera descendente"
              },
              //only works for built-in buttons, not for custom buttons
              "buttons": {
                "create": "Nuevo",
                "edit": "Cambiar",
                "remove": "Borrar",
                "copy": "Copiar",
                "csv": "fichero CSV",
                "excel": "tabla Excel",
                "pdf": "documento PDF",
                "print": "Imprimir",
                "colvis": "Visibilidad columnas",
                "collection": "Colección",
                "upload": "Seleccione fichero...."
              },
              "select": {
                "rows": {
                  _: '%d filas seleccionadas',
                  0: 'clic fila para seleccionar',
                  1: 'una fila seleccionada'
                }
              }
            }
          });
          var empresa = 0;
          var tabla = $("#usuarios").DataTable({
            "ajax": {
              "url": "phpFiles/usuarios.php?EMPRESA=" + empresa,
              "type": "GET",
              dataSrc: ''
            },
            "columns": [{
                "data": "ci"
              },
              {
                "data": "nombre"
              },
              {
                "data": "correo_electronico"
              },
              {
                "data": "tipo"
              },
              {
                "data": "activo"
              },
              {
                "data": "usuario"
              }
            ],
            "columnDefs": [{
              "targets": 5,
              "data": null,
              render: function(data, type, row, meta) {
                return "<button type=\"button\" class=\"btn btn-info btn-sm\">Editar <i class=\"fa fa-edit\"></i></button><button type=\"button\" class=\"btn btn-danger btn-sm\">Eliminar <i class=\"fa fa-trash\"></i></button>";
              }
            }]
          });

          $('#empresa').on('change', function() {
            empresa = $(this).val();
            console.log(empresa);
            if (empresa != 0) {
              console.log("peticion de tabla");
              var newUrl = "phpFiles/usuarios.php?EMPRESA=" + empresa;
              tabla.ajax.url(newUrl).load();
            }
          });
          $('#usuarios tbody').on('click', '.btn-info', function(event) {
            var ci = tabla.row($(this).parents('tr')).data().ci;
            var nombre = tabla.row($(this).parents('tr')).data().nombre;
            var activo = tabla.row($(this).parents('tr')).data().activo;
            var correo = tabla.row($(this).parents('tr')).data().correo_electronico;

            $("#ci").val(ci);
            $("#nombre").val(nombre);
            $("#activo").val(activo);
            $("#correo").val(correo);
            $("#editModalLong").modal("show");

            console.log("edit");
          });
          $('#usuarios tbody').on('click', '.btn-danger', function(event) {
            var ci = tabla.row($(this).parents('tr')).data().ci;
            var url = "https://sistema.mym.com.bo:8443/usuario/" + ci;

            $.ajax({
              type: "DELETE",
              url: url,
              headers: {
                'X-JWT-Token': token
              }
            }).done(function(data) {
              console.log(data);
              alert("La empresa fue eliminado exitosamente");
              location.reload();
            })
            console.log("delete");
          });


          $('#edit_usuario').on('click', function(event) {
            var ci = $("#ci").val();
            var nombre = $("#nombre").val();
            var activo = $("#activo").val();
            var correo = $("#correo").val();

            var url = "https://sistema.mym.com.bo:8443/usuario/" + ci;

            $.ajax({
              type: "PUT",
              url: url,
              headers: {
                'X-JWT-Token': token
              },
              contentType: "application/json",
              data: JSON.stringify({
                nombre: nombre,
                codigo: codigo,
                activo: activo,
                correo_electronico: correo
              }),
            }).done(function(data) {
              console.log(data);
              alert("La empresa fue editada exitosamente");
              location.reload();
            })
          });

          $('#nuevo_usuario').on('click', function(event) {

            var ci = $("#ciA").val();
            var nombre = $("#nombreA").val();
            var usuario = $("#usuarioA").val();
            var contrasena = $("#contrasenaA").val();
            var fnac = $("#fnacA").val();
            var activo = $("#activoA option:selected").val();
            var correo = $("#correoA").val();
            var tipo = $("#tipoA").val();
            var url = "https://sistema.mym.com.bo:8443/empresa";
            var permisos = "";

            $.ajax({
              type: "POST",
              url: url,
              headers: {
                'X-JWT-Token': token
              },
              contentType: "application/json",
              data: JSON.stringify({
                ci: ci,
                nombre: nombre,
                fecha_nacimiento: fnac,
                usuario: usuario,
                contrasena: contrasena,
                correo_electronico: correo,
                activo: activo,
                permisos: permisos,
                tipo: tipo
              }),
            }).done(function(data) {
              console.log(data);
              alert("La empresa fue creada exitosamente");
              location.reload();
            })
          });


        });

        function toggle(source) {
          checkboxes = document.getElementsByName('table_records');
          for (var i = 0, n = checkboxes.length; i < n; i++) {
            checkboxes[i].checked = source.checked;
          }
        }
      </script>

      <script src="mym/polygon/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

      <script src="mym/polygon/vendors/fastclick/lib/fastclick.js"></script>

      <script src="mym/polygon/vendors/nprogress/nprogress.js"></script>

      <script src="mym/polygon/vendors/Chart.js/dist/Chart.min.js"></script>

      <script src="mym/polygon/vendors/gauge.js/dist/gauge.min.js"></script>

      <script src="mym/polygon/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

      <script src="mym/polygon/vendors/iCheck/icheck.min.js"></script>

      <script src="mym/polygon/vendors/skycons/skycons.js"></script>

      <script src="mym/polygon/vendors/Flot/jquery.flot.js"></script>
      <script src="mym/polygon/vendors/Flot/jquery.flot.pie.js"></script>
      <script src="mym/polygon/vendors/Flot/jquery.flot.time.js"></script>
      <script src="mym/polygon/vendors/Flot/jquery.flot.stack.js"></script>
      <script src="mym/polygon/vendors/Flot/jquery.flot.resize.js"></script>

      <script src="mym/polygon/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
      <script src="mym/polygon/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
      <script src="mym/polygon/vendors/flot.curvedlines/curvedLines.js"></script>

      <script src="mym/polygon/vendors/DateJS/build/date.js"></script>

      <script src="mym/polygon/vendors/jqvmap/dist/jquery.vmap.js"></script>
      <script src="mym/polygon/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
      <script src="mym/polygon/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>

      <script src="mym/polygon/vendors/moment/min/moment.min.js"></script>
      <script src="mym/polygon/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

      <script src="mym/polygon/build/js/custom.min.js"></script>
</body>

</html>