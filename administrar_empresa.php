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
              <h3>Administrar Empresas<small></small></h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Empresas</h2>

                  <div class="clearfix"></div>
                </div>
                <a class="btn btn-app" data-toggle="modal" data-target="#nuevoModalLong"> <i class="fa fa-plus-circle"></i> Agregar nueva empresa</a>
                <div class="x_content">

                  <table id="datatable-empresas" class="table table-striped projects">
                    <thead>
                      <tr>
                        <th style="width: 20%">Razón Social</th>
                        <th>NIT</th>
                        <th>Ciudad</th>
                        <th>Estado</th>
                        <th style="width: 20%">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                  <!-- 
                    <span class="badge badge-success">Activa</span>
                     <span class="badge badge-danger">Inactiva</span>
                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                        -->
                </div>
              </div>
            </div>

            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" id="editModalLong" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Editar Empresa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="">
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Razón Social<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" id="razon_social" name="razon_social" placeholder="" disabled />
                        </div>

                      </div>

                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Dirección<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" id="direccion" data-validate-length-range="100" name="direccion" placeholder="" />
                        </div>
                      </div>

                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Número de teléfono <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" id="telefono" type="number" class='number' name="number" data-validate-minmax="10,100" required='required'>
                        </div>
                      </div>

                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">CI representante legal <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" id="ci_representante_legal" type="number" class='number' name="ci_representante_legal" data-validate-minmax="10,100" required='required'>
                        </div>
                      </div>

                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Representante legal<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" id="representante_legal" data-validate-length-range="20" data-validate-words="3" name="representante_legal" placeholder="" required="required" />
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
                    <button type="button" class="btn btn-primary" id="edit_empresa">Guardar</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" id="nuevoModalLong" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Nueva Empresa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="">
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Razón Social<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" id="razon_socialA" name="razon_social" placeholder="" />
                        </div>

                      </div>

                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Sigla<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" id="siglaA" name="razon_social" placeholder="" />
                        </div>

                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">NIT<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" id="nitA" data-validate-length-range="100" name="direccion" placeholder="" />
                        </div>
                      </div>

                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Dirección<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" id="direccionA" data-validate-length-range="100" name="direccion" placeholder="" />
                        </div>
                      </div>

                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Ciudad<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" id="direccionA" data-validate-length-range="30" name="direccion" placeholder="" />
                        </div>
                      </div>

                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Número de teléfono <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" id="telefonoA" type="number" class='number' name="number" data-validate-minmax="10,100" required='required'>
                        </div>
                      </div>

                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">CI representante legal <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" id="ci_representante_legalA" type="number" class='number' name="ci_representante_legal" data-validate-minmax="10,100" required='required'>
                        </div>
                      </div>

                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Representante legal<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" id="representante_legalA" data-validate-length-range="20" data-validate-words="3" name="representante_legal" placeholder="" required="required" />
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
                    <button type="button" class="btn btn-primary" id="nueva_empresa">Guardar</button>
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


    <script type="text/javascript">
      $(document).ready(function() {
        var token = "<?php echo $_SESSION['TOKEN']; ?>";
        $.ajaxSetup({
            error: function(xhr, status, err) {
              if (xhr.status == 401) {
                alert("Expiro tu tiempo de session expiro vuelva a logearse");
                window.location.href = "login_mym.php";
              }else{
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

        var tabla = $("#datatable-empresas").DataTable({
          "ajax": {
            "url": "phpFiles/empresas.php",
            dataSrc: ''
          },
          "columns": [{
              "data": "razon_social"
            },
            {
              "data": "nit"
            },
            {
              "data": "ciudad"
            },
            {
              "data": "activo"
            },
            {
              "data": "telefono"
            }
          ],
          "columnDefs": [{
              "targets": 4,
              "data": null,
              render: function(data, type, row, meta) {
                return "<button type=\"button\" class=\"btn btn-info btn-sm\">Editar <i class=\"fa fa-edit\"></i></button><button type=\"button\" class=\"btn btn-danger btn-sm\">Eliminar <i class=\"fa fa-trash\"></i></button>";
              }
            }

          ]
        });

        $('#nueva_empresa').on('click', function(e) {
          var id = $("#idA").val();
          var razon_social = $("#razon_socialA").val();
          var direccion = $("#direccionA").val();
          var telefono = $("#telefonoA").val();
          var sigla = $("#siglaA").val();
          var nit = $("#nitA").val();
          var ciudad = $("#ciudadA").val();
          var representante_legal = $("#representante_legalA").val();
          var ci_representante_legal = $("#ci_representante_legalA").val();
          var activo = $('#activoA option:selected').val();

          var now = new Date();

          var day = ("0" + now.getDate()).slice(-2);
          var month = ("0" + (now.getMonth() + 1)).slice(-2);

          var fecha = now.getFullYear() + "-" + (month) + "-" + (day);
          e.preventDefault();
          var answer = confirm('Estas seguro de crear un nuevo trabajador?');
          if (answer) {
            var url = "http://sistema.mym.com.bo:4000/empresa/";

            $.ajax({
              type: "POST",
              url: url,
              headers: {
                'X-JWT-Token': token
              },
              contentType: "application/json",
              data: JSON.stringify({
                sigla: sigla,
                nit: nit,
                ciudad: ciudad,
                razon_social: razon_social,
                direccion: direccion,
                representante_legal: representante_legal,
                telefono: telefono,
                ci_representante_legal: ci_representante_legal,
                activo: activo,
                fecha_alta: fecha
              }),
            }).done(function(data) {
              console.log(data);
              alert("La empresa fue editada exitosamente");
              location.reload();
            })

          } else {
            alert('Operación abortada');
          }
        });


        $('#datatable-empresas tbody').on('click', '.btn-info', function(event) {
          var id = tabla.row($(this).parents('tr')).data().id;
          var razon_social = tabla.row($(this).parents('tr')).data().razon_social;
          var direccion = tabla.row($(this).parents('tr')).data().direccion;
          var telefono = tabla.row($(this).parents('tr')).data().telefono;
          var representante_legal = tabla.row($(this).parents('tr')).data().representante_legal;
          var ci_representante_legal = tabla.row($(this).parents('tr')).data().ci_representante_legal;
          var activo = tabla.row($(this).parents('tr')).data().activo;


          $("#id").val(id);
          $("#razon_social").val(razon_social);
          $("#direccion").val(direccion);
          $("#telefono").val(telefono);
          $("#representante_legal").val(representante_legal);
          $("#ci_representante_legal").val(ci_representante_legal);
          $("#activo").val(activo);
          $("#editModalLong").modal("show");

          console.log("edit");
        });
        $('#datatable-empresas tbody').on('click', '.btn-danger', function(event) {
          var id = tabla.row($(this).parents('tr')).data().id;
          var url = "http://sistema.mym.com.bo:4000/empresa/" + id;

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
        $('#nuevoModalLong').on('hidden.bs.modal', function() {
          $('#nuevoModalLong form')[0].reset();
        });

        $('#edit_empresa').on('click', function(event) {
          var id = $("#id").val();
          var razon_social = $("#razon_social").val();
          var direccion = $("#direccion").val();
          var telefono = $("#telefono").val();
          var representante_legal = $("#representante_legal").val();
          var ci_representante_legal = $("#ci_representante_legal").val();
          var activo = $('#activo option:selected').val();

          var url = "http://sistema.mym.com.bo:4000/empresa/" + id;

          $.ajax({
            type: "PUT",
            url: url,
            headers: {
              'X-JWT-Token': token
            },
            contentType: "application/json",
            data: JSON.stringify({
              razon_social: razon_social,
              direccion: direccion,
              representante_legal: representante_legal,
              telefono: telefono,
              ci_representante_legal: ci_representante_legal,
              activo: activo
            }),
          }).done(function(data) {
            console.log(data);
            alert("La empresa fue editada exitosamente");
            location.reload();
          })
        });

        $('#nueva_empresa').on('click', function(event) {

          var ci = $("#ciA").val();
          var expedido = $("#expedidoA").val();
          var nombre = $("#nombreA").val();
          var apmat = $("#apmatA").val();
          var appat = $("#appatA").val();
          var fnac = $("#fnacA").val();
          var sexo = $("#sexoA").val();
          var telefono = $("#telefonoA").val();
          var correo = $("#correoA").val();
          var url = "http://sistema.mym.com.bo:4000/empresa";

          $.ajax({
            type: "POST",
            url: url,
            headers: {
              'X-JWT-Token': token
            },
            contentType: "application/json",
            data: JSON.stringify({
              expedido: expedido,
              nombre: nombre,
              fecha_nacimiento: fnac,
              sexo: sexo,
              telefono: telefono,
              correo_electronico: correo
            }),
          }).done(function(data) {
            console.log(data);
            alert("La empresa fue creada exitosamente");
            location.reload();
          })
        });


      });
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