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
              <h3>Administrar Empresas<small></small></h3>
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
                  <h2>Empresas</h2>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <table class="table table-striped projects">
                    <thead>
                      <tr>
                        <th style="width: 1%">#</th>
                        <th style="width: 20%">Razón Social</th>
                        <th>NIT</th>
                        <th>Ciudad</th>
                        <th>Estado</th>
                        <th style="width: 20%">Editar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>
                          <a>SOBOCE SA</a>
                          <br />
                          <small></small>
                        </td>
                        <td>
                          <a>##############</a>
                        </td>
                        <td class="project_progress">
                          <a>La Paz</a>
                        </td>
                        <td>
                          <span class="badge badge-success">Activa</span>
                        </td>
                        <td>
                          <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                        </td>
                      </tr>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>
                          <a>Empresa 2</a>
                          <br />
                          <small></small>
                        </td>
                        <td>
                          <a>##############</a>
                        </td>
                        <td class="project_progress">
                          <a>La Paz</a>
                        </td>
                        <td>
                          <span class="badge badge-success">Activa</span>
                        </td>
                        <td>
                          <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                        </td>
                      </tr>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>
                          <a>Empresa 3</a>
                          <br />
                          <small></small>
                        </td>
                        <td>
                          <a>##############</a>
                        </td>
                        <td class="project_progress">
                          <a>Santa Cruz</a>
                        </td>
                        <td>
                          <span class="badge badge-success">Activa</span>
                        </td>
                        <td>
                          <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                        </td>
                      </tr>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>
                          <a>Empresa 4</a>
                          <br />
                          <small></small>
                        </td>
                        <td>
                          <a>##############</a>
                        </td>
                        <td class="project_progress">
                          <a>Cochabamba</a>
                        </td>
                        <td>
                          <span class="badge badge-danger">Inactiva</span>
                        </td>
                        <td>
                          <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                        </td>
                      </tr>


                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>










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