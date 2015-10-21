<!DOCTYPE html>
<html lang="en">
<?php
  include("includes/head.php");
?>

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
                <strong>My</strong>
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
              <a href="indexup.php"><button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Create Campaign</button></a>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Campaigns</th>
                    <th>End date</th>
                    <th>Number of times played</th>
                    <th>Total spent</th>
                    <th>Max budget</th>
                    <th>active(ON/OFF)</th>
                    <th>view</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Xmas</td>
                    <td>27/10/2015</td>
                    <td>4</td>
                    <td>$57</td>
                    <td>$200</td>
                    <td>
                      <label class="switch m-r-20">
                        <input type="checkbox" class="switch-input">
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                      </label>
                    </td>
                     <th><a href="view.php"><button type="button" class="btn btn-default btn-circle btn-sm">view</button></a></th>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Summer</td>
                    <td>2/10/2015</td>
                    <td>1</td>
                    <td>$10</td>
                    <td>$225</td>
                    <td>
                      <label class="switch m-r-20">
                        <input type="checkbox" class="switch-input">
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                      </label>
                    </td>
                    <th><a href="view.php"><button type="button" class="btn btn-default btn-circle btn-sm">view</button></a></th>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>dependency day</td>
                    <td>27/8/2015</td>
                    <td>15</td>
                    <td>$200</td>
                    <td>$1000</td>
                    <td>
                      <label class="switch m-r-20">
                        <input type="checkbox" class="switch-input">
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                      </label>
                    </td>
                    <th><a href="view.php"><button type="button" class="btn btn-default btn-circle btn-sm">view</button></a></th>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Halloween</td>
                    <td>5/4/2015</td>
                    <td>7</td>
                    <td>$150</td>
                    <td>$210</td>
                    <td>
                      <label class="switch m-r-20">
                        <input type="checkbox" class="switch-input">
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                      </label>
                    </td>
                    <th><a href="view.php"><button type="button" class="btn btn-default btn-circle btn-sm">view</button></a></th>
                  </tr>
                   <tr>
                    <td>5</td>
                    <td>The Christmas Feast and Santa Claus</td>
                    <td>27/10/2015</td>
                    <td>4</td>
                    <td>$57</td>
                    <td>$200</td>
                    <td>
                      <label class="switch m-r-20">
                        <input type="checkbox" class="switch-input">
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                      </label>
                    </td>
                    <th><a href="view.php"><button type="button" class="btn btn-default btn-circle btn-sm">view</button></a></th>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>public holidays</td>
                    <td>2/12/2015</td>
                    <td>28</td>
                    <td>$80</td>
                    <td>$250</td>
                   <td>
                      <label class="switch m-r-20">
                        <input type="checkbox" class="switch-input">
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                      </label>
                    </td>
                    <th><a href="view.php"><button type="button" class="btn btn-default btn-circle btn-sm">view</button></a></th>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Mother’s Day</td>
                    <td>15/11/2015</td>
                    <td>19</td>
                    <td>$100</td>
                    <td>$500</td>
                    <td>
                      <label class="switch m-r-20">
                        <input type="checkbox" class="switch-input">
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                      </label>
                    </td>
                    <th><a href="view.php"><button type="button" class="btn btn-default btn-circle btn-sm">view</button></a></th>
                  </tr>
                   <tr>
                    <td>8</td>
                    <td>spring</td>
                    <td>7/1/2016</td>
                    <td>28</td>
                    <td>$670</td>
                    <td>$160</td>
                    <td>
                      <label class="switch m-r-20">
                        <input type="checkbox" class="switch-input">
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                      </label>
                    </td>
                    <th><a href="view.php"><button type="button" class="btn btn-default btn-circle btn-sm">view</button></a></th>
                  </tr>
                   <tr>
                    <td>9</td>
                    <td>Winter</td>
                    <td>27/5/2016</td>
                    <td>140</td>
                    <td>$300</td>
                    <td>$50</td>
                    <td>
                      <label class="switch m-r-20">
                        <input type="checkbox" class="switch-input">
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                      </label>
                    </td>
                    <th><a href="view.php"><button type="button" class="btn btn-default btn-circle btn-sm">view</button></a></th>
                  </tr>
                   <tr>
                    <td>10</td>
                    <td>autumn</td>
                    <td>30/12/2015</td>
                    <td>90</td>
                    <td>$170</td>
                    <td>$800</td>
                    <td>
                      <label class="switch m-r-20">
                        <input type="checkbox" class="switch-input">
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                      </label>
                    </td>
                    <th><a href="view.php"><button type="button" class="btn btn-default btn-circle btn-sm">view</button></a></th>
                  </tr>
                   <tr>
                    <td>11</td>
                    <td>Christmas</td>
                    <td>27/10/2015</td>
                    <td>4</td>
                    <td>$57</td>
                    <td>$200</td>
                    <td>
                      <label class="switch m-r-20">
                        <input type="checkbox" class="switch-input">
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                      </label>
                    </td>
                    <th><a href="view.php"><button type="button" class="btn btn-default btn-circle btn-sm">view</button></a></th>
                  </tr>
                   <tr>
                    <td>12</td>
                    <td>Summer</td>
                    <td>27/10/2015</td>
                    <td>4</td>
                    <td>57$</td>
                    <td>$200</td>
                    <td>
                      <label class="switch m-r-20">
                        <input type="checkbox" class="switch-input">
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                      </label>
                    </td>
                    <th><a href="view.php"><button type="button" class="btn btn-default btn-circle btn-sm">view</button></a></th>
                  </tr>
                   <tr>
                    <td>13</td>
                    <td>Mother’s Day</td>
                    <td>27/10/2015</td>
                    <td>4</td>
                    <td>$57</td>
                    <td>$200</td>
                    <td>
                      <label class="switch m-r-20">
                        <input type="checkbox" class="switch-input">
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                      </label>
                    </td>
                    <th><a href="view.php"><button type="button" class="btn btn-default btn-circle btn-sm">view</button></a></th>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <?php
        //include("includes/footer.php")
      ?>
    </div>
  </div>


  <!-- END PAGE CONTENT -->

  <!-- END MAIN CONTENT -->
  <!-- BEGIN BUILDER -->
  <?php
        include("includes/style.php")
      ?>
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
