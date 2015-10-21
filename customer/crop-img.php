<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="admin-themes-lab">
  <meta name="author" content="themes-lab">
  <link rel="shortcut icon" href="../assets/global/images/favicon.png" type="image/png">
  <title>Make Admin Template &amp; Builder</title>
  <link href="../assets/global/css/style.css" rel="stylesheet">
  <link href="../assets/global/css/theme.css" rel="stylesheet">
  <link href="../assets/global/css/ui.css" rel="stylesheet">
  <link href="../assets/admin/layout2/css/layout.css" rel="stylesheet">
  <!-- BEGIN PAGE STYLE -->
  <link href="../assets/global/plugins/cropper/cropper.min.css" rel="stylesheet">
  <!-- END PAGE STYLE -->
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
        <div class="header">
          <h2>
            Crop
            <strong>the image</strong>
          </h2>
           <div id="rootwizard">
                <div class="navbar">
                  <div class="navbar-inner">
                    <div class="container">
                      <ul>
                        <li>
                          <a href="#tab1" data-toggle="tab">1. upload image</a>
                        </li>
                        <li>
                          <a href="#tab2" data-toggle="tab">2. crop the image</a>
                        </li>
                        <li>
                          <a href="#tab3" data-toggle="tab">3. choose location</a>
                        </li>
                        <li>
                          <a href="#tab3" data-toggle="tab">4. max budget</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div id="bar" class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                </div>
                <div class="tab-content">
                  <div class="tab-pane" id="tab1">1</div>
                  <div class="tab-pane" id="tab2">2</div>
                  <div class="tab-pane" id="tab3">3</div>
                  <div class="tab-pane" id="tab4">4</div>
                  <div class="tab-pane" id="tab5">5</div>
                  <div class="tab-pane" id="tab6">6</div>
                  <div class="tab-pane" id="tab7">7</div>                  
                </div>
              </div>

          
        </div>
        <a href="#modal-croping" class="btn btn-embossed btn-primary pull-right m-r-0" data-toggle="modal">Show Image in Modal</a>
        <div class="row">
          <button type="button" class="btn btn-file">upload image</button>

          <a href="assets.html">
            <button type="button" class="btn btn-info">images</button>
          </a>
          <div class="col-lg-12">
            <div class="panel panel-transparent">
              <div class="panel-content">
                <div class="row">

                  <div class="col-md-9">
                    <h3 class="m-t-0">
                      <strong>Image</strong>
                    </h3>
                    <div class="img-container" style="position: relative;">
                      <img src="../assets/global/images/gallery/picture-1.jpg" alt="picture 1"></div>
                  </div>
                  <div class="col-md-3">
                    <h3 class="m-t-0">
                      <strong>Preview</strong>
                    </h3>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="img-preview img-preview-sm" style="overflow: hidden;">
                          <img src="../assets/global/images/gallery/picture-1.jpg" alt="picture 1" style="height: 113px; margin-left: -20px; margin-top: -11px; width: 200px;"></div>
                      </div>
                      <div class="col-md-4">
                        <div class="img-preview img-preview-xs" style="overflow: hidden;">
                          <img src="../assets/global/images/gallery/picture-1.jpg" alt="picture 1" style="height: 45px; margin-left: -8px; margin-top: -4px; width: 80px;"></div>
                      </div>
                    </div>
                    <hr>
               <!--      <button class="btn btn-dark btn sm" id="set-img-1" type="button">Left screen</button>
                    <button type="button" class="btn btn-primary disabled">Right screen</button> -->

                    <h3>
                      <strong>Data</strong>
                    </h3>
                    <form class="form-horizontal" role="form">
                      <div class="form-group">
                        <label for="data-x1" class="col-sm-3 control-label">X1:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control form-white" id="data-x1" placeholder="x1"></div>
                      </div>
                      <div class="form-group">
                        <label for="data-y1" class="col-sm-3 control-label">Y1:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control form-white" id="data-y1" placeholder="y1"></div>
                      </div>
                      <div class="form-group">
                        <label for="data-x2" class="col-sm-3 control-label">X2:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control form-white" id="data-x2" placeholder="x2"></div>
                      </div>
                      <div class="form-group">
                        <label for="data-y2" class="col-sm-3 control-label">Y2:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control form-white" id="data-y2" placeholder="y2"></div>
                      </div>
                      <div class="form-group">
                        <label for="data-width" class="col-sm-3 control-label">Width:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control form-white" id="data-width" placeholder="width"></div>
                      </div>
                      <div class="form-group">
                        <label for="data-height" class="col-sm-3 control-label">Height:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control form-white" id="data-height" placeholder="height"></div>
                      </div>
                    </form>
                  </div>

                </div>

               
            </div>
          </div>
        </div>

        <ul class="pager wizard">

                    <li class="previous">
                      <a href="s-upload.php">Previous</a>
                    </li>

                    <li class="next">
                      <a href="s-map.php">Next</a>
                    </li>
                  </ul>

      </div>

      <div class="modal fade" id="modal-croping" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="icons-office-52"></i>
              </button>
              <h4 class="modal-title">
                <strong>Modal Image Cropping</strong>
              </h4>
            </div>
            <div class="modal-body">
              <div class="bootstrap-modal-cropper">
                <img src="../assets/global/images/gallery/picture-2.jpg" class="img-responsive" alt="Picture 2"></div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-embossed" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
       <?php
  include("includes/footer.php");
?>
    </div>
    <!-- END PAGE CONTENT --> </div>
  <!-- END MAIN CONTENT -->
 <?php
  include("includes/chat.php");
?>
<!-- END SEARCH -->
<!-- BEGIN PRELOADER -->
<div class="loader-overlay">
  <div class="spinner">
    <div class="bounce1"></div>
    <div class="bounce2"></div>
    <div class="bounce3"></div>
  </div>
</div>
<!-- END PRELOADER -->
<a href="#" class="scrollup">
  <i class="fa fa-angle-up"></i>
</a>
<script src="../assets/global/plugins/jquery/jquery-1.11.1.min.js"></script>
<script src="../assets/global/plugins/jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="../assets/global/plugins/jquery-ui/jquery-ui-1.11.2.min.js"></script>
<script src="../assets/global/plugins/gsap/main-gsap.min.js"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/global/plugins/jquery-cookies/jquery.cookies.min.js"></script>
<!-- Jquery Cookies, for theme -->
<script src="../assets/global/plugins/jquery-block-ui/jquery.blockUI.min.js"></script>
<!-- simulate synchronous behavior when using AJAX -->
<script src="../assets/global/plugins/bootbox/bootbox.min.js"></script>
<!-- Modal with Validation -->
<script src="../assets/global/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Custom Scrollbar sidebar -->
<script src="../assets/global/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script>
<!-- Show Dropdown on Mouseover -->
<script src="../assets/global/plugins/charts-sparkline/sparkline.min.js"></script>
<!-- Charts Sparkline -->
<script src="../assets/global/plugins/retina/retina.min.js"></script>
<!-- Retina Display -->
<script src="../assets/global/plugins/select2/select2.min.js"></script>
<!-- Select Inputs -->
<script src="../assets/global/plugins/icheck/icheck.min.js"></script>
<!-- Checkbox & Radio Inputs -->
<script src="../assets/global/plugins/backstretch/backstretch.min.js"></script>
<!-- Background Image -->
<script src="../assets/global/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- Animated Progress Bar -->
<script src="../assets/global/plugins/charts-chartjs/Chart.min.js"></script>
<script src="../assets/global/js/builder.js"></script>
<!-- Theme Builder -->
<script src="../assets/global/js/sidebar_hover.js"></script>
<!-- Sidebar on Hover -->
<script src="../assets/global/js/application.js"></script>
<!-- Main Application Script -->
<script src="../assets/global/js/plugins.js"></script>
<!-- Main Plugin Initialization Script -->
<script src="../assets/global/js/widgets/notes.js"></script>
<script src="../assets/global/js/quickview.js"></script>
<!-- Chat Script -->
<script src="../assets/global/js/pages/search.js"></script>
<!-- Search Script -->
<!-- BEGIN PAGE SCRIPTS -->
<script src="../assets/global/plugins/cropper/cropper.min.js"></script>
<!-- Image Croping -->
<script src="../assets/global/js/pages/image_croping.js"></script>
<!-- END PAGE SCRIPTS -->
<script src="../assets/admin/layout2/js/layout.js"></script>
<script src="../assets/global/js/jquery.bootstrap.wizard.min.js"></script>
  <script>

      
      $(document).ready(function() {
        $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
        var $total = navigation.find('li').length;
        var $current = index+2;
        var $percent = ($current/$total) * 100;
        $('#rootwizard .progress-bar').css({width:$percent+'%'});
      }});
        
});  //end ready;
    </script>
</body>
</html>