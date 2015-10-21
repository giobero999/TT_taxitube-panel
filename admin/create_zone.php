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
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section>
      <!-- BEGIN SIDEBAR -->
      <?php
      include ("includes/sidebar.php")
      ?>
      <!-- END SIDEBAR -->
      <div class="main-content">
        <!-- BEGIN TOPBAR -->
        <?php
        include ("includes/toolbar.php")
        ?>
        <!-- END TOPBAR -->
        <!-- BEGIN PAGE CONTENT -->
        <div class="page-content">
          <div class="header">
            <h2><strong>Choose</strong> zone</h2>
          </div>
         
          <div class="modal fade " id="modal-bootstrap-timepicker" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> <i class="icons-office-52"></i>
                  </button>
                  <h4 class="modal-title"> <strong>create</strong>
                  zone
                  </h4>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-12">
                      <form action="" method="POST" role="form">
                         <p><strong>Set Radius</strong>(Max per 100m)</p>
                      <div style="width:300px" class="primary m-b-20">
                        <div class="slide-ios" data-slider-max="100" data-postfix="" data-slider-value="56"></div>
                      </div>
                        <div class="form-group">
                          <label for="">name</label>
                          <input type="text" class="form-control" id="" placeholder="Input field">
                        </div>
                        
                        <div class="form-group">
                          <label for="">min price ad play</label>
                          <input type="text" class="form-control" id="" placeholder="Input field">
                        </div>
                      </form>
                      
                    </div>
                    
                  </div>
                  <div class="modal-footer bg-gray-light">
                    <button type="button" class="btn btn-default btn-embossed" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-embossed" data-dismiss="modal">Save changes</button>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <label for="inputSearch" class="col-sm-2 control-label"></label>
              <div class="col-lg-12">
                <input type="search" name="search" id="inputSearch" class="form-control" value="" required="required" title="">
              </div>
            </div>
          </div>
          
          <div class="col-md-12">
            <div class="panel panel-default map-panel" data-toggle="modal" data-target="#modal-bootstrap-timepicker">
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="map" id="cluster-map"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- <div class="row">
            <div class="col-lg-12">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Radius</th>
                    <th>minimum price</th>
                    <th>view on the map</th>
                    <th>delete</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>saburtalo zone</td>
                    <td>saburtalo</td>
                    <td>100m</td>
                    <td>25$</td>
                    <th><a href="zone_view.php"><button type="button" class="btn btn-default btn-circle btn-sm">view/edit</button></a></th>
                    <th><button type="button" class="btn btn-danger btn-sm">X</button></th>
                  </tr>
                  <tr>
                    <td>saburtalo zone</td>
                    <td>saburtalo</td>
                    <td>100m</td>
                    <td>25$</td>
                    <th><a href="zone_view.php"><button type="button" class="btn btn-default btn-circle btn-sm">view/edit</button></a></th>
                    <th><button type="button" class="btn btn-danger btn-sm">X</button></th>
                  </tr>
                  <tr>
                    <td>saburtalo zone</td>
                    <td>saburtalo</td>
                    <td>100m</td>
                    <td>25$</td>
                    <th><a href="zone_view.php"><button type="button" class="btn btn-default btn-circle btn-sm">view/edit</button></a></th>
                    <th><button type="button" class="btn btn-danger btn-sm">X</button></th>
                  </tr>
                  <tr>
                    <td>saburtalo zone</td>
                    <td>saburtalo</td>
                    <td>100m</td>
                    <td>25$</td>
                    <th><a href="zone_view.php"><button type="button" class="btn btn-default btn-circle btn-sm">view/edit</button></a></th>
                    <th><button type="button" class="btn btn-danger btn-sm">X</button></th>
                  </tr>
                  <tr>
                    <td>saburtalo zone</td>
                    <td>saburtalo</td>
                    <td>100m</td>
                    <td>25$</td>
                    <th><a href="zone_view.php"><button type="button" class="btn btn-default btn-circle btn-sm">view/edit</button></a></th>
                    <th><button type="button" class="btn btn-danger btn-sm">X</button></th>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div> -->
          
          
          <?php
          include("includes/footer.php");
          ?>
        </div>
        <!-- END PAGE CONTENT -->
      </div>
    </div>
    <!-- END MAIN CONTENT -->
    
    
  </section>
  <!-- BEGIN QUICKVIEW SIDEBAR -->
  <?php
  include("includes/chat.php");
  ?>
  <!-- END QUICKVIEW SIDEBAR -->
  <!-- BEGIN PRELOADER -->
  <div class="loader-overlay">
    <div class="spinner">
      <div class="bounce1"></div>
      <div class="bounce2"></div>
      <div class="bounce3"></div>
    </div>
  </div>
  <!-- END PRELOADER -->
  <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
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
  <!-- BEGIN PAGE SCRIPTS -->
  <script src="../assets/global/plugins/maps-amcharts/ammap/ammap.min.js" type="text/javascript"></script>
  <script src="../assets/global/plugins/maps-amcharts/ammap/maps/js/worldLow.min.js" type="text/javascript"></script>
  <script src="../assets/global/plugins/maps-amcharts/ammap/maps/js/usaLow.min.js" type="text/javascript"></script>
  <script src="../assets/global/plugins/maps-amcharts/ammap/themes/black.min.js" type="text/javascript"></script>
  <script src="../assets/global/plugins/maps-amcharts/ammap/maps/js/continentsLow.js" type="text/javascript"></script>
  <script src="../assets/global/plugins/timepicker/jquery-ui-timepicker-addon.min.js"></script>
  <!-- Time Picker -->
  <script src="../assets/global/plugins/timepicker/jquery-ui-timepicker-addon.min.js"></script> <!-- Time Picker -->
  <script src="../assets/global/plugins/multidatepicker/multidatespicker.min.js"></script> <!-- Multi dates Picker -->
  <script src="../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> <!-- >Bootstrap Date Picker -->
  <script src="../assets/global/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js"></script> <!-- >Bootstrap Date Picker in Spanish (can be removed if not use) -->
  <script src="../assets/global/plugins/colorpicker/spectrum.min.js"></script> <!-- Color Picker -->
  <script src="../assets/global/plugins/rateit/jquery.rateit.min.js"></script> <!-- Rating star plugin -->
  <script src="../assets/global/js/pages/form_plugins.js"></script>
  <script src="../assets/global/plugins/bootstrap-slider/bootstrap-slider.js"></script> <!-- Bootstrap Input Slider -->
  <script src="../assets/global/plugins/ion-slider/ion.rangeSlider.min.js"></script> <!-- Range Input Slider -->
  <script src="//maps.google.com/maps/api/js?sensor=true"></script> <!-- Google Maps -->
  <script src="../assets/global/plugins/google-maps/markerclusterer.min.js"></script> <!-- Google Maps Marker Clusterer -OPTIONAL -->
  <script src="../assets/global/plugins/google-maps/gmaps.min.js"></script> <!-- Google Maps Easy -->
  <script src="../assets/global/js/pages/maps-google.js"></script>
  <!-- END PAGE SCRIPTS -->
  <script src="../assets/admin/layout2/js/layout.js"></script>
  <script>
  $('.colors-list li').click(function() {
  var self = $(this);
  var portlet_header = self.parent().parent().parent().prev();
  var portlet_footer = self.parent().parent().parent().next();
  var portlet_full = self.parent().parent().parent().parent();
  if (!self.hasClass('active')) {
  self.siblings().removeClass('active');
  if (self.parent().hasClass('color-footer')) {
  var classes = portlet_footer.attr('class').split(/\s+/);
  }
  if (self.parent().hasClass('color-header')) {
  var classes = portlet_header.attr('class').split(/\s+/);
  }
  if (self.parent().hasClass('color-full')) {
  var classes = portlet_full.attr('class').split(/\s+/);
  }
  var pattern = /^bg-/;
  for (var i = 0; i < classes.length; i++) {
  var className = classes[i];
  if (className.match(pattern)) {
  if (self.parent().hasClass('color-footer')) portlet_footer.removeClass(className);
  if (self.parent().hasClass('color-header'))  portlet_header.removeClass(className);
  if (self.parent().hasClass('color-full'))  portlet_full.removeClass(className);
  }
  }
  var color = self.attr('class');
  bg_color = 'bg-' + color;
  if (self.parent().hasClass('color-footer')) portlet_footer.addClass(bg_color);
  if (self.parent().hasClass('color-header')) portlet_header.addClass(bg_color);
  if (self.parent().hasClass('color-full')) portlet_full.addClass(bg_color);
  self.addClass('active');
  };
  });
  </script>
</body>
</html>