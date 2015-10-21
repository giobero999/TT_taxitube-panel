<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="admin-themes-lab">
    <meta name="author" content="themes-lab">
    <link rel="shortcut icon" href="../assets/global/images/favicon.png" type="image/png">
    <title>Make Admin Template &amp; Builder</title>
    <!-- BEGIN PAGE STYLE -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <!-- END PAGE STYLE -->
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
        <div class="page-content page-app page-profil">
          <div class="profil-content">
            
            <div class="row">
              <div class="col-md-3">
                <div class="item ">
                  <div class="user">
                    <img src="../assets/global/images/profil_page/pics1.jpg" class="img-responsive" alt="">            
                    <img src="../assets/global/images/profil_page/friend7.jpg" class="img-user" alt="picture 2">            
                    <div class="info">
                      <div class="f-24">Coca Cola</div>
                      <div>
                        <div class="location"> <i class="icon-pointer"></i>
                          Tbilisi
                        </div>
                        <div class="date"> <!-- <i class="icon-clock"> --></i>
                          ID #51452
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="comment">
                    Perfection is not attainable, but if we chase perfection we can catch excellence.
                  </div>
                </div>

              </div>
              
              <div class="col-md-7">
                <p></p>
                <ul class="nav nav-pills">
                  <li class="active">
                    <a data-toggle="pill" href="#home">About Company</a>
                  </li>
                  <li>
                    <a data-toggle="pill" href="#phone">Phone/Mobile</a>
                  </li>
                  <li>
                    <a data-toggle="pill" href="#logo">Upload Logo</a>
                  </li>
                  <li>
                    <a data-toggle="pill" href="#passw">Update Password</a>
                  </li>
                </ul>

                <div class="tab-content">
                  <div id="home" class="tab-pane fade in active">
                    <h3>About Company</h3>
                    <p>Director Name:</p>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequatur ad nemo mollitia dolor odio ab temporibus velit a illo, delectus eius. Quod obcaecati quis enim fuga repellat harum itaque.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum aperiam, accusantium excepturi perferendis illum necessitatibus, recusandae placeat aliquam expedita similique id eius adipisci in tempore modi nostrum inventore quisquam dolore.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni asperiores quisquam ipsa facilis voluptatem placeat, nihil dolore, saepe? Praesentium magni quo eaque rem. Blanditiis maiores, doloribus quasi corporis, accusantium ad.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                  </div>
                  <div id="phone" class="tab-pane fade">
                    <h3>Phone/Mobile</h3>
                    <p>Phone: 558 55 55 55</p>
                    <p>mobile: 558 78 28 15</p>
                    <p>Tel: (0 32) 2 24 51 48</p>
                    <button type="button" class="btn btn-success">Change</button>
                  </div>
                  <div id="logo" class="tab-pane fade">
                    <div class="row">
                      <div class="col-md-6">
                        <h3>Upload Logo</h3>
                        <input type="file" name="" id="input" class="form-control" value="" required="required" pattern="" title=""></div>
                    </div>
                  </div>
                  <div id="passw" class="tab-pane fade">
                    <div class="row">
                      <div class="col-md-6">
                        <h3>Update password</h3>
                         <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="" placeholder="Old password">
                         <p></p>            
                         <p></p>            
                        <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="" placeholder="New password">            
                        <p></p>
                        <input type="text" placeholder="Repeat password" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
                        <p></p>
                          <button type="button" class="btn btn-success pull left">Change</button>      
                        </div>                  
                    </div>
                  </div>
                </div>

              </div>
               <div class="col-md-2">
                <p></p>
                  <a href="create_customer.php"><button type="button" class="btn btn-danger">create new customer</button></a>
              </div>

            </div>
           <div class="row">
              <div class="panel-content">
                <ul class="nav nav-pills">
              <li class="active"><a data-toggle="pill" href="#menu5">Campaign (add/remove)</a></li>                 
              <li><a data-toggle="pill" href="#menu6">Members (Add/Remove)</a></li>                    
            </ul>
              </div>
           </div>
           <div class="tab-content">
             <div class="panel-content tab-pane in active" id="menu5">
                <a href="g-upload.php"><button type="button" class="btn btn-primary pull-right" >Create Campaign</button></a>
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
                        <th>
                          <button type="button"  class="btn btn-block btn-success">approved</button>
                       </th>
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
                    </tbody>
                  </table>
              </div>
              <div class="panel-content tab-pane fade" id="menu6">
                <a href="#"><button type="button" class="btn btn-primary pull-right">Create User</button></a>
                <table class="table table-hover" >
                  <thead>
                    <tr>
                      <th>Username</th>
                      <th>name</th>
                      <th>Password</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>master or member</th>
                      <th>delete user</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>giobero</td>
                      <td>Mark</td>
                      <td>123456</td>
                      <td>mail@example.com</td>
                      <td>558 60 25 25</td>
                      <td>Master</td>
                      <th><button type="button" class="btn btn-danger btn-sm">X</button></th>

                    </tr>
                    <tr>
                      <td>giobero</td>
                      <td>Mark</td>
                      <td>123456</td>
                      <td>mail@example.com</td>
                      <td>558 60 25 25</td>
                      <td>member</td>   
                      <th><button type="button" class="btn btn-danger btn-sm">X</button></th>
                      </tr>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
      </div>
    </div>
<?
  include("includes/footer.php");
?>
<!-- END QUICKVIEW SIDEBAR -->
<!-- BEGIN SEARCH -->
      <!-- END MAIN CONTENT -->
      <!-- BEGIN BUILDER -->
     
    </section>
    <!-- BEGIN QUICKVIEW SIDEBAR -->
   <?
  include("includes/chat.php");
?>
<!-- END QUICKVIEW SIDEBAR -->
<!-- BEGIN SEARCH -->
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
    <script src="../assets/global/plugins/bootstrap-loading/lada.min.js"></script> <!-- Buttons Loading State -->
    <!-- BEGIN PAGE SCRIPT -->
         <script src="../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> <!-- >Bootstrap Date Picker -->

      <script src="../assets/global/js/jquery.bootstrap.wizard.min.js"></script>
    <script>      
      $(document).ready(function() {
        $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
        var $total = navigation.find('li').length;
        var $current = index+4;
        var $percent = ($current/$total) * 100;
        $('#rootwizard .progress-bar').css({width:$percent+'%'});
      }});
        
}); 
  </script>
 <script>


      $('.btn-block').click(function(){

          $(this).css({'textTransform':'none'}).addClass('btn-success');

          if($(this).hasClass('btn-success')){        
            $(this).text("approved");

          }


     });
 </script>
   
    <!-- END PAGE SCRIPT -->
    <script src="../assets/admin/layout2/js/layout.js"></script>
  </body>
</html>