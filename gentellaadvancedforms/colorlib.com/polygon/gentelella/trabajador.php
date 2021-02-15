<?php
  require("phpFiles/sessionVerify.php");
?>
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
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                <h3><?php echo $_SESSION['NOMBRE'];?></h3>
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
                          $opts = array(
                              'http' => array(
                                  'method' => "GET",
                                  'header' => "X-JWT-Token: " . $_SESSION['TOKEN']
                              )
                          );
                          
                          $context = stream_context_create($opts);
                          $x = file_get_contents("http://sistema.mym.com.bo:4000/empresa/", false, $context);
                          $someArray = json_decode($x, true);
                          foreach ($someArray as $key => $value) {
                              echo "<option value=\"" . $value["id"] . "\">" . $value["razon_social"] . "</option>";
                          }
                          ?>
                        </select>
                    </div>
                    
                    <br></br>
                    <br></br>

                    <a class="btn btn-app" data-toggle="modal" data-target="#exampleModalLong"> <i class="fa fa-plus-circle"></i> Agregar </a>
                    <a class="btn btn-app"> <i class="fa fa-file-pdf-o"></i> Export </a>
                    <button type="button" class="btn btn-round btn-info right" data-toggle="modal" data-target="#exampleModalLong2">
                    Crear Cuentas
                    </button>
                    <button type="button" class="btn btn-round btn-warning right">
                    Inactivar Cuentas
                    </button>
                    <div class="table-div">
                      <table id="datatable-checkbox"
                      class="table table-bordered bulk_action"
                      style="width:100%">
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
              <div class="modal-dialog modal-lg" >
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
                          <input class="form-control" class='date' type="date" name="date" required='required'></div>
                      </div>
                      <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Sexo<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                      <input class="form-control" class='optional' name="sexo" data-validate-length-range="5,15" type="text" /></div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Número de teléfono <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="number" class='number' name="number" data-validate-minmax="10,100" required='required'></div>
                        </div>
            
                      <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Correo electrónico<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                      <input class="form-control" name="email" class='email' required="required" type="email" /></div>
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
            
            
            
            
            
            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" >
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
    
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>

    <script type="text/javascript">
      $( document ).ready(function() {
        
        $('#empresa').on('change', function() {
          var empresa = $(this).val();
          console.log(empresa);
          if(empresa!=0){
            console.log("peticion de tabla");
            $.ajax({
              type: 'POST',
              url: "phpFiles/trabajadores.php", // call your php file
              data: {EMPRESA:empresa}// pass the parameters needed in php, select option values
            }).done(function(data) {
              $("#datatable-checkbox").DataTable();
              $("#datatable-checkbox tbody").html(data);
              
            }).fail(function (data) {
            console.log(data);
            alert("Ocurrio un problema con el servidor contactenos");
          });
          }
          
        });

        $('#datatable-checkbox tbody').on('click','.btn-info', function(event){
          
          console.log($(this).closest('tr').children('td.edad').text());
          console.log("edit");            
        });
        $('#datatable-checkbox tbody').on('click','.btn-danger', function(event){
          
          console.log($('#datatable-checkbox').row($(this).closest('tr')).data() );
          console.log("delete");            
        });
        
          
            
      });

    </script>

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
    <script src="../vendors/switchery/dist/switchery.min.js"></script>

    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src="../build/js/custom.min.js"></script>
  </body>

</html>
