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

  <link href="gentellaadvancedforms/colorlib.com/polygon/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />

  <link href="gentellaadvancedforms/colorlib.com/polygon/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />

  <link href="gentellaadvancedforms/colorlib.com/polygon/vendors/nprogress/nprogress.css" rel="stylesheet" />

  <link href="gentellaadvancedforms/colorlib.com/polygon/vendors/iCheck/skins/flat/green.css" rel="stylesheet" />

  <link href="gentellaadvancedforms/colorlib.com/polygon/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" />

  <link href="gentellaadvancedforms/colorlib.com/polygon/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />

  <link href="gentellaadvancedforms/colorlib.com/polygon/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />

  <link href="gentellaadvancedforms/colorlib.com/polygon/build/css/custom.min.css" rel="stylesheet" />
  <link href="gentellaadvancedforms/colorlib.com/polygon/vendors/switchery/dist/switchery.min.css" rel="stylesheet" />
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
            <!-- SIDE MENU -->
            <div class="menu_section">
              <h3><?php echo $_SESSION['NOMBRE']; ?></h3>
              <?php
              require("side_bar_mym.php");
              ?>
            </div>
            <!-- SIDE MENU -->

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
        <div class="x_panel">
          <div class="x_title">
            <h2>Trabajadores</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
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

            <br></br>
            <br></br>

            <a class="btn btn-app" data-toggle="modal" data-target="#exampleModalLong"> <i class="fa fa-plus-circle"></i> Agregar </a>
            <a class="btn btn-app" data-toggle="modal" data-target="#uploadModal"> <i class="fa fa-file-pdf-o"></i> Importar Trabajadores </a>
            <button type="button" class="btn btn-round btn-info right" data-toggle="modal" data-target="#exampleModalLong2">
              Crear Cuentas
            </button>
            <button type="button" class="btn btn-round btn-warning right">
              Inactivar Cuentas
            </button>
            <div class="table-div">
              <table id="datatable-trabajadores" class="table table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>Nº Documento</th>
                    <th>Nombre y Apellidos</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <!--<td><input type="checkbox" class="js-switch" checked /></td>-->
                </tbody>
              </table>

            </div>

          </div>

        </div>


        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Agregar Trabajador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="" id="nuevoTrabajadorForm">
                  <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Número de documento<span class="required">*</span></label>
                    <div class="col-md-2 col-sm-3">
                      <input class="form-control" id="ciA" data-validate-length-range="6" data-validate-words="2" name="apellido_materno" placeholder="" required="required" />
                    </div>
                    <label class="col-form-label col-md-1 col-sm-3  label-align">Expedido<span class="required">*</span></label>
                    <div class="col-md-3 col-sm-1">
                      <select class="form-control" id="expedidoA">
                        <option>La Paz</option>
                        <option>Santa Cruz</option>
                        <option>Cochabamba</option>
                        <option>Potosí</option>
                        <option>Oruro</option>
                        <option>Chuquisaca</option>
                        <option>Tarija</option>
                        <option>Pando</option>
                        <option>Beni</option>
                      </select>
                    </div>
                  </div>


                  <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nombre<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6">
                      <input class="form-control" id="nombreA" data-validate-length-range="6" data-validate-words="2" name="nombre" placeholder="" required="required" />
                    </div>
                  </div>
                  <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Fecha de nacimiento<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6">
                      <input class="form-control" id="fnacA" class='date' type="date" name="date">

                    </div>
                  </div>
                  <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Sexo<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6">
                      <select class="form-control" id="sexoA">
                        <option>Femenino</option>
                        <option>Masculino</option>
                      </select>

                    </div>
                  </div>
                  <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Código<span class="required"></span></label>
                    <div class="col-md-6 col-sm-6">
                      <input class="form-control" id="codigoA" class='optional' name="sexo" data-validate-length-range="5,15" type="text" />
                    </div>
                  </div>
                  <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Número de teléfono <span class="required"></span></label>
                    <div class="col-md-6 col-sm-6">
                      <input class="form-control" id="telefonoA" type="number" class='number' name="number" data-validate-minmax="10,100" required='required'>
                    </div>
                  </div>

                  <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Correo electrónico<span class="required"></span></label>
                    <div class="col-md-6 col-sm-6">
                      <input class="form-control" id="correoA" name="email" class='email' required="required" type="email" />
                    </div>
                  </div>
                  <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Fecha de ingreso<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6">
                      <input class="form-control" id="fingA" class='date' type="date" name="date" required='required'>
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
                <button type="button" class="btn btn-primary" id="nuevo_trabajador">Guardar</button>
              </div>
            </div>
          </div>
        </div>


        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="editModalLong" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar Trabajador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="">
                  <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Numero de documento<span class="required">*</span></label>
                    <div class="col-md-3 col-sm-3">
                      <input class="form-control" id="ci" data-validate-length-range="6" data-validate-words="2" name="apellido_materno" placeholder="" disabled />
                    </div>
                    <label class="col-form-label col-md-1 col-sm-3  label-align">Expedido<span class="required">*</span></label>
                    <div class="col-md-2 col-sm-1">
                      <input class="form-control" id="expedido" data-validate-length-range="6" data-validate-words="2" name="apellido_materno" placeholder="" disabled />
                    </div>
                  </div>


                  <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nombre<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6">
                      <input class="form-control" id="nombre" data-validate-length-range="6" data-validate-words="2" name="nombre" placeholder="" required="required" />
                    </div>
                  </div>
                  <div class="field item form-group">

                    <label class="col-form-label col-md-3 col-sm-3  label-align">Código<span class="required">*</span></label>

                    <div class="col-md-6 col-sm-6">
                      <input class="form-control" id="codigo" data-validate-length-range="6" data-validate-words="2" name="apellido_materno" placeholder="" required="required" />
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

                  <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Número de teléfono <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6">
                      <input class="form-control" id="telefono" type="number" class='number' name="number" data-validate-minmax="10,100" required='required'>
                    </div>
                  </div>

                  <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Correo electrónico<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6">
                      <input class="form-control" id="correo" name="email" class='email' required="required" type="email" />
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
                <button type="button" class="btn btn-primary" id="edit_trabajador">Guardar</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Upload modal -->
        <div class="modal fade bd-example-modal-lg" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Carga masiva de trabajadores</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <form id='frmTarget' name='dropzone' action='phpFiles/' class='dropzone'>
                  <div class='fallback'>
                    <input name='file' type='file' />
                  </div>
                  <button type="submit" id="massive" class="btn btn-primary">Agregar</button>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar trabajadores</button>
              </div>
            </div>
          </div>
        </div>


        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Creación de cuentas individuales</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <span>Se crearán cuentas individuales para los trabajadores que cuenten con correos electrónicos registrados, ya que las contraseñas serán notificadas por ese medio a cada persona : </span>
              <div class="modal-body">

                <table class="table table-striped jambo_table bulk_action">
                  <thead>
                    <tr class="headings">
                      <th>
                        <input type="checkbox" id="check-all" class="flat" onClick="toggle(this)">
                      </th>
                      <th class="column-title">CI </th>
                      <th class="column-title">Nombre </th>
                      <th class="bulk-actions" colspan="7">
                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="even pointer">
                      <td class="a-center ">
                        <input type="checkbox" class="flat" name="table_records">
                      </td>
                      <td class=" ">121000040</td>
                      <td class=" ">Juana Maria Perez Lopez</td>
                    </tr>
                    <tr class="odd pointer">
                      <td class="a-center ">
                        <input type="checkbox" class="flat" name="table_records">
                      </td>
                      <td class=" ">121000040</td>
                      <td class=" ">Juana Maria Perez Lopez</td>
                    </tr>
                    <tr class="even pointer">
                      <td class="a-center ">
                        <input type="checkbox" class="flat" name="table_records">
                      </td>
                      <td class=" ">121000040</td>
                      <td class=" ">Juana Maria Perez Lopez</td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
              </div>
            </div>
          </div>
        </div>


      </div>

      <!--
    <script language="JavaScript">
      function toggle(source) {
       checkboxes = document.getElementsByName('table_records');
       for(var i=0, n=checkboxes.length;i<n;i++) {
         checkboxes[i].checked = source.checked;
       }
     }
     
     $("#exampleModalLong").modal("show");
     $('#exampleModalLong').on('hidden.bs.modal', function () {
         $('#exampleModalLong form')[0].reset();
         });
     
      </script>-->

      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/jquery/dist/jquery.min.js"></script>
      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>

      <script type="text/javascript">
        $(document).ready(function() {
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
          var token = "<?php echo $_SESSION['TOKEN']; ?>";
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
          var tabla = $("#datatable-trabajadores").DataTable({
            "ajax": {
              "url": "phpFiles/trabajadores.php?EMPRESA=" + empresa,
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
                "data": "telefono"
              },
              {
                "data": "sexo"
              },
              {
                "data": "edad"
              }
            ],
            "columnDefs": [{
                "targets": 4,
                "data": null,
                render: function(data, type, row, meta) {
                  return "<button type=\"button\" class=\"btn btn-info btn-sm\">Editar <i class=\"fa fa-edit\"></i></button><button type=\"button\" class=\"btn btn-danger btn-sm\">Eliminar <i class=\"fa fa-trash\"></i></button>";
                }
              },
              {
                "targets": [5],
                "visible": false
              },

            ]
          });

          $('#nuevo_trabajador').on('click', function(e) {
            e.preventDefault();
            var answer = confirm('Estas seguro de crear un nuevo trabajador?');
            if (answer) {

            } else {
              alert('Operación abortada');
            }
          });
          $('#empresa').on('change', function() {
            empresa = $(this).val();
            console.log(empresa);
            if (empresa != 0) {
              console.log("peticion de tabla");
              var newUrl = "phpFiles/trabajadores.php?EMPRESA=" + empresa;
              tabla.ajax.url(newUrl).load();


            }

          });

          $('#datatable-trabajadores tbody').on('click', '.btn-info', function(event) {
            var ci = tabla.row($(this).parents('tr')).data().ci;
            var codigo = tabla.row($(this).parents('tr')).data().codigo;
            var activo = tabla.row($(this).parents('tr')).data().activo;
            var antiguedad = tabla.row($(this).parents('tr')).data().antiguedad;
            var contrasena = tabla.row($(this).parents('tr')).data().contrasena;
            var correo_electronico = tabla.row($(this).parents('tr')).data().correo_electronico;
            var edad = tabla.row($(this).parents('tr')).data().edad;
            var empresa = tabla.row($(this).parents('tr')).data().empresa;
            var expedido = tabla.row($(this).parents('tr')).data().expedido;
            var fecha_ingreso = tabla.row($(this).parents('tr')).data().fecha_ingreso;
            var fecha_nacimiento = tabla.row($(this).parents('tr')).data().fecha_nacimiento;
            var nombre = tabla.row($(this).parents('tr')).data().nombre;
            var sexo = tabla.row($(this).parents('tr')).data().sexo;
            var telefono = tabla.row($(this).parents('tr')).data().telefono;
            var usuario = tabla.row($(this).parents('tr')).data().usuario;

            var now = new Date(fecha_nacimiento);

            var day = ("0" + now.getDate()).slice(-2);
            var month = ("0" + (now.getMonth() + 1)).slice(-2);

            var fecha = now.getFullYear() + "-" + (month) + "-" + (day);
            $("#ci").val(ci);
            $("#expedido").val(expedido);
            $("#nombre").val(nombre);
            $("#activo").val(activo);
            $("#codigo").val(codigo);
            $("#telefono").val(telefono);
            $("#correo").val(correo_electronico);
            $("#editModalLong").modal("show");

            console.log("edit");
          });
          $('#datatable-trabajadores tbody').on('click', '.btn-danger', function(event) {
            var ci = tabla.row($(this).parents('tr')).data().ci;
            var url = "http://sistema.mym.com.bo:4000/trabajador/" + ci;
            console.log(token);
            $.ajax({
              type: "DELETE",
              url: url,
              headers: {
                'X-JWT-Token': token
              }
            }).done(function(data) {
              console.log(data);
              alert("El usuario fue eliminado exitosamente");
              location.reload();
            })
            console.log("delete");
          });
          $('#exampleModalLong').on('hidden.bs.modal', function() {
            $('#exampleModalLong form')[0].reset();
          });

          $('#edit_trabajador').on('click', function(event) {
            var ci = $("#ci").val();
            var nombre = $("#nombre").val();
            var activo = $('#activo option:selected').val();
            var codigo = $("#codigo").val();
            var telefono = $("#telefono").val();
            var correo = $("#correo").val();
            var url = "http://sistema.mym.com.bo:4000/trabajador/" + ci;

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
                telefono: telefono,
                correo_electronico: correo
              }),
            }).done(function(data) {
              console.log(data);
              alert("El usuario fue editado exitosamente");
              location.reload();
            }).fail(function(data) {
              console.log(data);
              alert("Ocurrio un problema con el servidor contactenos");
            });
          });

          $('#nuevo_trabajador').on('click', function(event) {
            var fechaActual = new Date();
            var ci = document.getElementById("ciA").value;
            var expedido = $("#expedidoA").val();
            var codigo = $("#codigoA").val();
            var sexo = $("#sexoA").val();
            var empresa = $("#empresa").val();
            var telefono = $("#telefonoA").val();
            var fnac = new Date($("#fnacA").val());
            var edad = Math.round((fechaActual.getTime() - fnac.getTime()) / (1000 * 60 * 60 * 24 * 365));
            var nombre = $("#nombreA").val();
            var correo = $("#correoA").val();
            var fing = new Date($("#fingA").val());
            var antiguedad = Math.round((fechaActual.getTime() - fing.getTime()) / (1000 * 60 * 60 * 24 * 365));
            var url = "http://sistema.mym.com.bo:4000/trabajador";
            $.ajax({
              type: "POST",
              url: url,
              headers: {
                'X-JWT-Token': token
              },
              contentType: "application/json",
              data: JSON.stringify({
                ci: ci,
                expedido: expedido,
                codigo: codigo,
                sexo: sexo,
                empresa: empresa,
                telefono: telefono,
                fecha_nacimiento: fnac,
                edad: edad,
                nombre: nombre,
                correo_electronico: correo,
                usuario: "",
                contrasena: "",
                fecha_ingreso: fing,
                antiguedad: antiguedad,
                activo: 1,

              }),
            }).done(function(data) {
              console.log(data);
              alert("El usuario fue creado exitosamente");
              $('#exampleModalLong form')[0].reset();
              location.reload();
            })
          });

          Dropzone.options.frmTarget = {
            paramName: 'file',
            clickable: true,
            maxFilesize: 5,
            uploadMultiple: false,
            addRemoveLinks: true,
            autoProcessQueue: false,
            acceptedFiles: '.csv,.xlsx,.xls',
            dictDefaultMessage: 'Carga tus archivos aca',
            init: function() {
              var myDropzone = this;

              // Update selector to match your button
              $("#massive").click(function(e) {
                e.preventDefault();
                myDropzone.processQueue();
              });

              this.on('sending', function(file, xhr, formData) {
                // Append all form inputs to the formData Dropzone will POST
                var data = $('#frmTarget').serializeArray();
                $.each(data, function(key, el) {
                  formData.append(el.name, el.value);
                });
              });
            }
          };

        });
      </script>

      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/fastclick/lib/fastclick.js"></script>

      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/nprogress/nprogress.js"></script>

      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/Chart.js/dist/Chart.min.js"></script>

      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/gauge.js/dist/gauge.min.js"></script>

      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/iCheck/icheck.min.js"></script>

      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/skycons/skycons.js"></script>

      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/Flot/jquery.flot.js"></script>
      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/Flot/jquery.flot.pie.js"></script>
      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/Flot/jquery.flot.time.js"></script>
      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/Flot/jquery.flot.stack.js"></script>
      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/Flot/jquery.flot.resize.js"></script>

      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/flot.curvedlines/curvedLines.js"></script>

      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/DateJS/build/date.js"></script>


      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/jqvmap/dist/jquery.vmap.js"></script>
      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/switchery/dist/switchery.min.js"></script>

      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/moment/min/moment.min.js"></script>
      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

      <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/dropzone/dist/min/dropzone.min.js"></script>

      <script src="gentellaadvancedforms/colorlib.com/polygon/build/js/custom.min.js"></script>
</body>

</html>