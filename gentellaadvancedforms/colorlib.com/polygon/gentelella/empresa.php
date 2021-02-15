<!DOCTYPE html>
<html lang="en">
  <meta
    http-equiv="content-type"
    content="text/html;charset=UTF-8"
  />
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <title>M&M</title>

    <link
      href="../vendors/bootstrap/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <link
      href="../vendors/font-awesome/css/font-awesome.min.css"
      rel="stylesheet"
    />

    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet" />

    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet" />

    <link
      href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"
      rel="stylesheet"
    />

    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />

    <link
      href="../vendors/bootstrap-daterangepicker/daterangepicker.css"
      rel="stylesheet"
    />

    <link href="../build/css/custom.min.css" rel="stylesheet" />
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0">
              <a href="index.html" class="site_title"
                ><i class="fa fa-home"></i> <span>Módulo M&M Admin</span></a
              >
            </div>
            <div class="clearfix"></div>

            

            <br />

            <div
              id="sidebar-menu"
              class="main_menu_side hidden-print main_menu"
            >
            <!-- SIDE MENU -->
              <div class="menu_section">
                
              <?php
                  require("side_bar_mym.html");
              ?>
              </div>
            <!-- SIDE MENU -->  
              
            </div>

            <div class="sidebar-footer hidden-small">
              <a
                data-toggle="tooltip"
                data-placement="top"
                title="Logout"
                href="login.html"
              >
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
                    <h3>Nombre de la Página</h3>
                  </div>
                
                </div>
                <div class="clearfix"></div>
                <div class="row">
                  <div class="col-md-12 col-sm-12">


                    <!-- BODY -->

                    
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
