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
      href="gentellaadvancedforms/colorlib.com/polygon/vendors/bootstrap/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <link
      href="gentellaadvancedforms/colorlib.com/polygon/vendors/font-awesome/css/font-awesome.min.css"
      rel="stylesheet"
    />

    <link href="gentellaadvancedforms/colorlib.com/polygon/vendors/nprogress/nprogress.css" rel="stylesheet" />

    <link href="gentellaadvancedforms/colorlib.com/polygon/vendors/iCheck/skins/flat/green.css" rel="stylesheet" />

    <link
      href="gentellaadvancedforms/colorlib.com/polygon/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"
      rel="stylesheet"
    />

    <link href="gentellaadvancedforms/colorlib.com/polygon/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />

    <link
      href="gentellaadvancedforms/colorlib.com/polygon/vendors/bootstrap-daterangepicker/daterangepicker.css"
      rel="stylesheet"
    />

    <link href="gentellaadvancedforms/colorlib.com/polygon/build/css/custom.min.css" rel="stylesheet" />
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
            <div class="x_panel">
                <div class="x_title">
                    <h2>Evaluaciones</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">  
                    <div class="col-md-6">
                        <label for="empresa">Empresa:</label>
                        <select id="empresa" class="form-control" required>
                            <option value="">2020</option>
                            <option value="press">Press</option>
                            <option value="net">Internet</option>
                            <option value="mouth">Word of mouth</option>
                        </select>
                    </div>
                    
                    <br></br>
                    <br></br>
                    
                    <div class="col-md-12">
                        <button type="button" class="btn btn-info gg">
                            2018
                        </button>
                        <button type="button" class="btn btn-info gg">
                            2019
                        </button>
                        <button type="button" class="btn btn-info gg">
                            <i class="fa fa-plus-circle"></i>
                            Habilitar Gestión
                        </button>
                    </div>
                    
                    

                    <table id="datatable-checkbox"
                    class="table table-bordered bulk_action"
                    style="width:100%">
                    <thead>
                        <tr>
                            <th>Modificar</th>
                            <th>Activo</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-info btn-sm">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button type="button" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                            <td>Hola</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td><button type="button" class="btn btn-info btn-sm">
                                <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </button></td>
                            <td>Hola</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                        </tr>
                        <tr>
                            <td><button type="button" class="btn btn-info btn-sm">
                                <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </button></td>
                            <td>Hola</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td>$86,000</td>
                        </tr>
                        
                    </tbody>
                </table>



                    
                </div>
                
            </div>
                    
                  
                
          
          
    </div>

    <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/jquery/dist/jquery.min.js"></script>

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

    <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/DateJS/build/date.js"></script>
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

    <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>

    <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/moment/min/moment.min.js"></script>
    <script src="gentellaadvancedforms/colorlib.com/polygon/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src="gentellaadvancedforms/colorlib.com/polygon/build/js/custom.min.js"></script>
  </body>

</html>
