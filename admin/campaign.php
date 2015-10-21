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
          <div class="col-md-12 portlets">
            <div class="panel">
              <div class="panel-header">
                <h3>
                <i class="fa fa-table"></i>
                Campaigns
                </h3>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">what package do you prefer</div>
                      <div class="modal-footer">
                        <a href="s-upload.php">
                          <button type="button" class="btn btn-primary">standart</button>
                        </a>
                        <a href="upload-img.php">
                          <button type="button" class="btn btn-primary">gold</button>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel-content">
                  <a href="indexup.php"><button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#myModal">Create Campaign</button></a>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>approve</th>
                        <th>ID</th>
                        <th>Campaign Name</th>
                        <th>Status</th>
                        <th>Creator/Author</th>
                        <th>Creation Date</th>
                        <th>End date</th>
                        <th>Number of times played</th>
                        <th>Average Cost</th>
                        <th>Total spent</th>
                        <th>Screen 1</th>
                        <th>Screen 2</th>
                        <th>selected zones</th>
                        <th>Campaign Stats</th>
                        <th>view/edit</th>
                        <th>delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>
                          <button type="button"  class="btn btn-block btn-success">approved</button>
                        </th>
                        <td>1</td>
                        <td>xmas</td>
                        <td>
                          <label class="switch m-r-20">
                            <input type="checkbox" class="switch-input">
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                          </label>
                        </td>
                        <td>coca cola</td>
                        <td>2/1/2015</td>
                        <td>27/10/2015</td>
                        <td>1 times</td>
                        <td>7$</td>
                        <td>200$</td>
                        <td><img src="../assets//global/images/gallery/10.jpg" ></td>
                        <td><img src="../assets//global/images/gallery/11.jpg" ></td>
                        <td>tbilisi: saburtalo, didube, vake</td>
                        <td>campaign stats</td>
                        <th><a href="view.php"><button type="button" class="btn btn-default btn-circle btn-sm">view/edit</button></a></th>
                        <th><button type="button" class="btn btn-danger btn-sm">X</button></th>
                        
                      </tr>
                      
                      <tr>
                        <td>
                          <button type="button"  class="btn btn-block btn-success">approved</button>
                        </td>
                        <td>1</td>
                        <td>dependence day</td>
                        <td>
                          <label class="switch m-r-20">
                            <input type="checkbox" class="switch-input">
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                          </label>
                        </td>
                        <td>adjara</td>
                        <td>7/11/2015</td>
                        <td>27/12/2016</td>
                        <td>4 times</td>
                        <td>575$</td>
                        <td>2000$</td>
                        <td><img src="../assets//global/images/gallery/10.jpg" ></td>
                        <td><img src="../assets//global/images/gallery/11.jpg" ></td>
                        <td>tbilisi: saburtalo, didube, vake</td>
                        <td>campaign stats</td>
                        <th><a href="view.php"><button type="button" class="btn btn-default btn-circle btn-sm">view/edit</button></a></th>
                        <th><button type="button" class="btn btn-danger btn-sm">X</button></th>
                      </tr>
                      <tr>
                        <th>
                          <button type="button"  class="btn btn-block btn-danger">approve</button>
                        </th>
                        <td>12</td>
                        <td>summer</td>
                        <td>
                          <label class="switch m-r-20">
                            <input type="checkbox" class="switch-input">
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                          </label>
                        </td>
                        <td>alta</td>
                        <td>6/2/2015</td>
                        <td>15/8/2015</td>
                        <td>4 times</td>
                        <td>57$</td>
                        <td>200$</td>
                        <td><img src="../assets//global/images/gallery/10.jpg" ></td>
                        <td><img src="../assets//global/images/gallery/11.jpg" ></td>
                        <td>tbilisi: saburtalo, didube, vake</td>
                        <td>campaign stats</td>
                        <th><a href="view.php"><button type="button" class="btn btn-default btn-circle btn-sm">view/edit</button></a></th>
                        <th><button type="button" class="btn btn-danger btn-sm">X</button></th>
                      </tr>
                      <tr>
                        <th>
                          <button type="button"  class="btn btn-block btn-success">approved</button>
                        </th>
                        <td>1</td>
                        <td>xmas</td>
                        <td>
                          <label class="switch m-r-20">
                            <input type="checkbox" class="switch-input">
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                          </label>
                        </td>
                        <td>coca cola</td>
                        <td>2/1/2015</td>
                        <td>27/10/2015</td>
                        <td>1 times</td>
                        <td>7$</td>
                        <td>200$</td>
                        <td><img src="../assets//global/images/gallery/10.jpg" ></td>
                        <td><img src="../assets//global/images/gallery/11.jpg" ></td>
                        <td>tbilisi: saburtalo, didube, vake</td>
                        <td>campaign stats</td>
                        <th><a href="view.php"><button type="button" class="btn btn-default btn-circle btn-sm">view/edit</button></a></th>
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
    <script>

          $('.btn-block').click(function(){

          $(this).css({'textTransform':'none'}).addClass('btn-success');

          if($(this).hasClass('btn-success')){        
            $(this).text("approved");

          }
     });
     //  $('.btn-block').click(function(){

     //      $(this).css({'textTransform':'none'}).toggleClass('btn-success').toggleClass('btn-danger');

     //      if($(this).hasClass('btn-success')){        
     //        $(this).text("approved");

     //      }
            
     //      else{
     //        $(this).text("approve");

     //      }

     // });


  </script>
  </body>
</html>