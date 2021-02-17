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

  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />

  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />

  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet" />

  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet" />

  <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" />

  <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />

  <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />

  <link href="../build/css/custom.min.css" rel="stylesheet" />


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
              require("side_bar_mym.html");
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
              <h3>Administrar Trabajadores<small></small></h3>
            </div>
            <div class="title_right">
              <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Empresa: </h2>
                  <div class="form-group row">
                    <div class="col-md-3 col-sm-9 ">
                      <select class="form-control">
                        <option>SOBOCE SA</option>
                        <option>Empresa 2</option>
                        <option>Empresa 3</option>
                        <option>Empresa 4</option>
                      </select>
                    </div>
                  </div>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <table class="table table-striped projects">
                    <thead>
                      <tr>
                        <th style="width: 1%">#</th>
                        <th style="width: 20%">Nombres y Apellidos</th>
                        <th>N° Documento</th>
                        <th>Correo electrónico</th>
                        <th>Teléfono</th>
                        <th>Estado</th>
                        <th style="width: 20%">Editar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>
                          <a>Juana Maria Perez Lopez</a>
                          <br />
                          <small></small>
                        </td>
                        <td>
                          <a>3434343434</a>
                        </td>
                        <td>
                          <a>jperez@gmail.com</a>
                        </td>
                        <td>
                          <a>77777777</a>
                        </td>
                        <td>
                          <span class="badge badge-success">Activa</span>
                        </td>
                        <td>
                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>
                          <a>Juana Maria Perez Lopez</a>
                          <br />
                          <small></small>
                        </td>
                        <td>
                          <a>3434343434</a>
                        </td>
                        <td>
                          <a>jperez@gmail.com</a>
                        </td>
                        <td>
                          <a>77777777</a>
                        </td>
                        <td>
                          <span class="badge badge-success">Activa</span>
                        </td>
                        <td>
                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                        </td>
                      </tr>

                      <tr>
                        <td>3</td>
                        <td>
                          <a>Juana Maria Perez Lopez</a>
                          <br />
                          <small></small>
                        </td>
                        <td>
                          <a>3434343434</a>
                        </td>
                        <td>
                          <a>jperez@gmail.com</a>
                        </td>
                        <td>
                          <a>77777777</a>
                        </td>
                        <td>
                          <span class="badge badge-success">Activa</span>
                        </td>
                        <td>
                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                        </td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>
                          <a>Juana Maria Perez Lopez</a>
                          <br />
                          <small></small>
                        </td>
                        <td>
                          <a>3434343434</a>
                        </td>
                        <td>
                          <a>jperez@gmail.com</a>
                        </td>
                        <td>
                          <a>77777777</a>
                        </td>
                        <td>
                          <span class="badge badge-success">Activa</span>
                        </td>
                        <td>
                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                        </td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>
                          <a>Juana Maria Perez Lopez</a>
                          <br />
                          <small></small>
                        </td>
                        <td>
                          <a>3434343434</a>
                        </td>
                        <td>
                          <a>jperez@gmail.com</a>
                        </td>
                        <td>
                          <a>77777777</a>
                        </td>
                        <td>
                          <span class="badge badge-success">Activa</span>
                        </td>
                        <td>
                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                        </td>
                      </tr>


                    </tbody>
                  </table>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                    Agregar Trabajador
                  </button>

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
                          <form action="">
                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Numero de documento<span class="required">*</span></label>
                              <div class="col-md-3 col-sm-3">
                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="apellido_materno" placeholder="" required="required" />
                              </div>
                              <label class="col-form-label col-md-1 col-sm-3  label-align">Expedido<span class="required">*</span></label>
                              <div class="col-md-2 col-sm-1">
                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="apellido_materno" placeholder="" required="required" />
                              </div>
                            </div>


                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Nombre<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nombre" placeholder="" required="required" />
                              </div>
                            </div>
                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Apellido Paterno<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="apellido_paterno" placeholder="" required="required" />
                              </div>
                            </div>
                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Apellido Materno<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="apellido_materno" placeholder="" required="required" />
                              </div>
                            </div>
                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Fecha de nacimiento<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <input class="form-control" class='date' type="date" name="date" required='required'>
                              </div>
                            </div>
                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Sexo<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <input class="form-control" class='optional' name="sexo" data-validate-length-range="5,15" type="text" />
                              </div>
                            </div>
                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Número de teléfono <span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="number" class='number' name="number" data-validate-minmax="10,100" required='required'>
                              </div>
                            </div>

                            <div class="field item form-group">
                              <label class="col-form-label col-md-3 col-sm-3  label-align">Correo electrónico<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6">
                                <input class="form-control" name="email" class='email' required="required" type="email" />
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
                          <button type="button" class="btn btn-primary">Guardar</button>
                        </div>
                      </div>
                    </div>
                  </div>




                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong2">
                    Crear Usuarios
                  </button>

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
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>






    <script language="JavaScript">
      function toggle(source) {
        checkboxes = document.getElementsByName('table_records');
        for (var i = 0, n = checkboxes.length; i < n; i++) {
          checkboxes[i].checked = source.checked;
        }
      }

      $("#exampleModalLong").modal("show");
      $('#exampleModalLong').on('hidden.bs.modal', function() {
        $('#exampleModalLong form')[0].reset();
      });
    </script>

    <script src="../vendors/jquery/dist/jquery.min.js"></script>

    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <script src="../vendors/fastclick/lib/fastclick.js"></script>

    <script src="../vendors/nprogress/nprogress.js"></script>

    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>

    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>

    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

    <script src="../vendors/iCheck/icheck.min.js"></script>

    <script src="../vendors/skycons/skycons.js"></script>

    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>

    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>

    <script src="../vendors/DateJS/build/date.js"></script>

    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>

    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src="../build/js/custom.min.js"></script>
</body>

</html>