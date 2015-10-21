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
  <script src="../assets/global/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body class="sidebar-condensed fixed-topbar fixed-sidebar theme-sdtl color-default">

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
         <!-- modal div -->
          
            <div class="modal fade" id="modal-select" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> <i class="icons-office-52"></i>
                    </button>
                    <h4 class="modal-title">
                      <strong>Select Date</strong>
                      & Time
                    </h4>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-12">
                        <form role="form">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Date</label>
                                <select multiple class="form-control" data-placeholder="Choose one or various Date">
                                  <optgroup label="TIME">
                                    <option value="monday - friday">monday - friday</option>
                                    <option value="saturday - sunday">saturday - sunday</option>
                                  </optgroup>
                                </select>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Time</label>
                                <select multiple class="form-control" data-placeholder="Choose Time">
                                  <optgroup label="TIME">
                                    <option value="11am - 4pm">8:00 - 12:00</option>
                                    <option value="1pm - 6pm">12:00 - 18:00</option>
                                    <option value="3pm - 9pm">18:00 - 24:00</option>
                                    <option value="11pm - 10am">24:00 - 8:00</option>

                                  </optgroup>
                                </select>
                              </div>
                            </div>
                            
              
                

                          </div>
                           <div class="row">
                             <div class="form-horizontal col-md-12" >
                           
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Radius: MAx(100m.)</label> 
                                <div class="col-sm-5"><input type="text" class="form-control" id="us3-radius"/></div>  
                                          
                            </div>
                            
                            
                          </div> 
                   
                 </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer bg-gray-light">
                    <button type="button" class="btn btn-default btn-embossed" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-embossed" data-dismiss="modal">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
        <div class="header">
          <h2> <strong>Choose</strong>
            zone
          </h2>
          <!-- <div id="rootwizard">
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
 -->
        </div>
        <div class="row">


        <div class="form-horizontal" >
          
          
          <div id="us3" style=" height: 400px;" ></div>
          
                 
        </div>     

        <div class="row">
          <div class="col-lg-12">
            <table class="table table-hover dataTable" id="table-editable">
              <thead>
                <tr>
                  <th>Location</th>
                  <!-- <th>End date</th> -->
                 
                  <th>Set time and radius</th>
                  <th class="text-right">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Zone 1</td>
                  
                  <!-- <td>11/09/2015</td> -->
                 
                  <td>
                    <button type="button"  class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-select">Set Time/Radius</button>
                  </td>
                  <td class="text-right">
                    <label>
                      <input type="checkbox" id="set-time-check"   data-checkbox="icheckbox_square-blue"></label>
                  </td>
                </tr>
                <tr>
                  <td>Zone 2</td>
                  <!-- <td>2/12/2015</td> -->
                
                  <td>
                    <button type="button"  class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-select">Set Time/Radius</button>
                  </td>
                  <td class="text-right">
                    <label>
                      <input type="checkbox" id="set-time-check" checked  data-checkbox="icheckbox_square-blue"></label>
                  </td>
                </tr>
                <tr>
                  <td>Zone 3</td>
                 <!--  <td>23/9/2015</td> -->
                 
                  <td>
                    <button type="button"  class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-select">Set Time/radius</button>
                  </td>
                  <td class="text-right">
                    <label>
                      <input type="checkbox" id="set-time-check"  data-checkbox="icheckbox_square-blue"></label>
                  </td>
                </tr>

              </tbody>
            </table>


          </div>

        </div>
      </div>
      <div class="row">
        <ul class="pager wizard">

          <li class="previous">
            <a href="crop-img.php">Previous</a>
          </li>

          <li class="next">
            <a href="budget.php">Next</a>
          </li>
        </ul>


      </div>
       <?php
          include("includes/footer.php");
        ?>
     </div> 
      <!-- END PAGE CONTENT --> 
  </div>
  <!-- END MAIN CONTENT -->
  <!-- BEGIN BUILDER -->

</section>
<!-- BEGIN QUICKVIEW SIDEBAR -->
<?php
  include("includes/chat.php");
?>
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
<!-- Notes Widget -->
<script src="../assets/global/js/quickview.js"></script>
<!-- Chat Script -->
<script src="../assets/global/js/pages/search.js"></script>
<!-- Search Script -->
<script src="../assets/global/js/custom.js"></script>
<!-- Search Script -->

<script src="../assets/global/plugins/bootstrap-slider/bootstrap-slider.js"></script> <!-- Bootstrap Input Slider -->
    <script src="../assets/global/plugins/ion-slider/ion.rangeSlider.min.js"></script> <!-- Range Input Slider -->
<!-- BEGIN PAGE SCRIPTS -->
<script src="../assets/global/plugins/maps-amcharts/ammap/ammap.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/maps-amcharts/ammap/maps/js/worldLow.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/maps-amcharts/ammap/maps/js/usaLow.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/maps-amcharts/ammap/themes/black.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/maps-amcharts/ammap/maps/js/continentsLow.js" type="text/javascript"></script>
  <script src="//maps.google.com/maps/api/js?sensor=true"></script> <!-- Google Maps -->
    <script src="../assets/global/plugins/google-maps/markerclusterer.min.js"></script> <!-- Google Maps Marker Clusterer -OPTIONAL -->
    <script src="../assets/global/plugins/google-maps/gmaps.min.js"></script> <!-- Google Maps Easy -->
    <script src="../assets/global/plugins/google-maps/locationpicker.jquery.js"></script> <!-- Google Maps Easy -->
    <script src="../assets/global/js/pages/maps-google.js"></script>

<!-- END PAGE SCRIPTS -->
<script src="../assets/admin/layout2/js/layout.js"></script>
<script src="../assets/global/js/jquery.bootstrap.wizard.min.js"></script>
<script>      
      $(document).ready(function() {
        $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
        var $total = navigation.find('li').length;
        var $current = index+3;
        var $percent = ($current/$total) * 100;
        $('#rootwizard .progress-bar').css({width:$percent+'%'});
      }});
        
    });  //end ready;
    </script>


    <!-- google map -->
   <script>$('#us3, #us4').locationpicker({
        location: {latitude: 46.15242437752303,  longitude: 2.7470703125},
        zoom: 17,
        radius: 100,
        inputBinding: {
            latitudeInput: $('#us3-lat'),
            longitudeInput: $('#us3-lon'),
            radiusInput: $('#us3-radius'),
            locationNameInput: $('#us3-address')
        },
        enableAutocomplete: true,
        onchanged: function (currentLocation, radius, isMarkerDropped) {
            // Uncomment line below to show alert on each Location Changed event
            //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
        }
    });</script>
</body>
</html>