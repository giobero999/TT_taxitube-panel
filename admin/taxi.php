<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="admin-themes-lab">
    <meta name="author" content="themes-lab">
    <link rel="shortcut icon" href="../assets/global/images/favicon.png" type="image/png">
    <title>Make Admin Template &amp; Builder</title>
   <link href="../assets/global/css/style-admin.css" rel="stylesheet">
    <link href="../assets/global/css/theme-admin.css" rel="stylesheet">
    <link href="../assets/global/css/ui.css" rel="stylesheet">
    <link href="../assets/admin/layout2/css/layout.css" rel="stylesheet">
    <script src="../assets/global/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <!-- BEGIN BODY -->
  <body class="sidebar-condensed fixed-topbar fixed-sidebar theme-sdtl color-default">
    <!--[if lt IE 7]>
    <p class="browsehappy">
      You are using an <strong>outdated</strong>
      browser. Please
      <a href="http://browsehappy.com/">upgrade your browser</a>
      to improve your experience.
    </p>
    <![endif]-->
    <section>
      <!-- BEGIN SIDEBAR -->
      <?php
      include ("includes/sidebar.php")
      ?>
      <!-- END SIDEBAR -->
      <div class="main-content">
        <?php
        include ("includes/toolbar.php")
        ?>
        <!-- BEGIN PAGE CONTENT -->
        <div class="page-content">
          
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-header">
                <h3>
                <i class="fa fa-table"></i>
                    Customers            
                </h3>

                <div class="row">
                  <a href="create_taxi.php"><button type="button" class="btn btn-success pull-right">Create Taxi Company</button></a>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Company Name</th>
                        <th>Address</th>
                        <th>Mobile Phone</th>
                        <th>Director</th> 
                        <th>view taxi profile</th>
                        <th>delete</th>                                         
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>21</td>                     
                        <td>your taxi</td>                        
                        <td>tbilisi</td>
                        <td>558 558 558</td>
                        <td>director name</td>                        
                        <th><a href="taxi_Profile.php"><button type="button" class="btn btn-default btn-circle btn-sm">view/edit</button></a></th>
                        <th><button type="button" class="btn btn-danger btn-sm">X</button></th>
                      </tr>

                       <tr>
                        <td>12</td>                     
                        <td>tbilisi taxi</td>                        
                        <td>tbilisi</td>
                        <td>558 558 558</td>
                        <td>director name</td>                        
                        <th><a href="taxi_Profile.php"><button type="button" class="btn btn-default btn-circle btn-sm">view/edit</button></a></th>
                        <th><button type="button" class="btn btn-danger btn-sm">X</button></th>
                      </tr>

                       <tr>
                        <td>14</td>                     
                        <td>taxi</td>                        
                        <td>tbilisi</td>
                        <td>558 558 558</td>
                        <td>director name</td>                        
                        <th><a href="taxi_Profile.php"><button type="button" class="btn btn-default btn-circle btn-sm">view/edit</button></a></th>
                        <th><button type="button" class="btn btn-danger btn-sm">X</button></th>
                      </tr>

                       <tr>
                        <td>45</td>                     
                        <td>taxify</td>                        
                        <td>tbilisi</td>
                        <td>558 558 558</td>
                        <td>director name</td>                        
                        <th><a href="taxi_Profile.php"><button type="button" class="btn btn-default btn-circle btn-sm">view/edit</button></a></th>
                        <th><button type="button" class="btn btn-danger btn-sm">X</button></th>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <?php
          include("includes/footer.php")
          ?>
        </div>
      </div>
      
      <!-- END PAGE CONTENT -->
      <!-- END MAIN CONTENT -->
      <!-- BEGIN BUILDER -->
      
      <!-- END BUILDER -->
    </section>
    <!-- BEGIN QUICKVIEW SIDEBAR -->
    <?
    include("includes/chat.php");
    ?>
    <!-- END QUICKVIEW SIDEBAR -->
    <!-- BEGIN SEARCH -->
    <!-- END PRELOADER -->
    <a href="#" class="scrollup">
      <i class="fa fa-angle-up"></i>
    </a>
    <script src="../assets/global/plugins/jquery/jquery-1.11.1.min.js"></script>
    <script src="../assets/global/plugins/jquery/jquery-migrate-1.2.1.min.js"></script>
    <script src="../assets/global/plugins/jquery-ui/jquery-ui-1.11.2.min.js"></script>
    <script src="../assets/global/plugins/gsap/main-gsap.min.js"></script>
    <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/global/plugins/jquery-cookies/jquery.cookies.min.js"></script> <!-- Jquery Cookies, for theme -->
    <script src="../assets/global/plugins/jquery-block-ui/jquery.blockUI.min.js"></script> <!-- simulate synchronous behavior when using AJAX -->
    <script src="../assets/global/plugins/bootbox/bootbox.min.js"></script> <!-- Modal with Validation -->
    <script src="../assets/global/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script> <!-- Custom Scrollbar sidebar -->
    <script src="../assets/global/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script> <!-- Show Dropdown on Mouseover -->
    <script src="../assets/global/plugins/charts-sparkline/sparkline.min.js"></script> <!-- Charts Sparkline -->
    <script src="../assets/global/plugins/retina/retina.min.js"></script> <!-- Retina Display -->
    <script src="../assets/global/plugins/select2/select2.min.js"></script> <!-- Select Inputs -->
    <script src="../assets/global/plugins/icheck/icheck.min.js"></script> <!-- Checkbox & Radio Inputs -->
    <script src="../assets/global/plugins/backstretch/backstretch.min.js"></script> <!-- Background Image -->
    <script src="../assets/global/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> <!-- Animated Progress Bar -->
    <script src="../assets/global/plugins/charts-chartjs/Chart.min.js"></script>
    <script src="../assets/global/js/builder.js"></script> <!-- Theme Builder -->
    <script src="../assets/global/js/sidebar_hover.js"></script> <!-- Sidebar on Hover -->
    <script src="../assets/global/js/application.js"></script> <!-- Main Application Script -->
    <script src="../assets/global/js/plugins.js"></script> <!-- Main Plugin Initialization Script -->
    <script src="../assets/global/js/widgets/notes.js"></script> <!-- Notes Widget -->
    <script src="../assets/global/js/quickview.js"></script> <!-- Chat Script -->
    <script src="../assets/global/js/pages/search.js"></script> <!-- Search Script -->
    <!-- BEGIN PAGE SCRIPT -->
    <script src="../assets/global/plugins/datatables/jquery.dataTables.min.js"></script> <!-- Tables Filtering, Sorting & Editing -->
    <script src="../assets/global/js/pages/table_dynamic.js"></script>
    <!-- BEGIN PAGE SCRIPT -->
    <script src="../assets/admin/layout2/js/layout.js"></script>
  </body>
</html>
