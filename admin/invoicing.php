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
    <!-- BEGIN PAGE STYLE -->
    <link href="../assets/global/plugins/step-form-wizard/css/step-form-wizard.min.css" rel="stylesheet">
    <!-- END PAGE STYLE -->
  </head>
  <!-- LAYOUT: Apply "submenu-hover" class to body element to have sidebar submenu show on mouse hover -->
  <!-- LAYOUT: Apply "sidebar-collapsed" class to body element to have collapsed sidebar -->
  <!-- LAYOUT: Apply "sidebar-top" class to body element to have sidebar on top of the page -->
  <!-- LAYOUT: Apply "sidebar-hover" class to body element to show sidebar only when your mouse is on left / right corner -->
  <!-- LAYOUT: Apply "submenu-hover" class to body element to show sidebar submenu on mouse hover -->
  <!-- LAYOUT: Apply "fixed-sidebar" class to body to have fixed sidebar -->
  <!-- LAYOUT: Apply "fixed-topbar" class to body to have fixed topbar -->
  <!-- LAYOUT: Apply "rtl" class to body to put the sidebar on the right side -->
  <!-- LAYOUT: Apply "boxed" class to body to have your page with 1200px max width -->

  <!-- THEME STYLE: Apply "theme-sdtl" for Sidebar Dark / Topbar Light -->
  <!-- THEME STYLE: Apply  "theme sdtd" for Sidebar Dark / Topbar Dark -->
  <!-- THEME STYLE: Apply "theme sltd" for Sidebar Light / Topbar Dark -->
  <!-- THEME STYLE: Apply "theme sltl" for Sidebar Light / Topbar Light -->
  
  <!-- THEME COLOR: Apply "color-default" for dark color: #2B2E33 -->
  <!-- THEME COLOR: Apply "color-primary" for primary color: #319DB5 -->
  <!-- THEME COLOR: Apply "color-red" for red color: #C9625F -->
  <!-- THEME COLOR: Apply "color-green" for green color: #18A689 -->
  <!-- THEME COLOR: Apply "color-orange" for orange color: #B66D39 -->
  <!-- THEME COLOR: Apply "color-purple" for purple color: #6E62B5 -->
  <!-- THEME COLOR: Apply "color-blue" for blue color: #4A89DC -->
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
        <div class="page-content shopping-cart">
          <div class="header">
            <h2>invoicing</h2>
           
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="panel">
                <div class="panel-content">                 
                  <form class="wizard-validation" data-style="sky" role="form">
                    <fieldset class="cart-summary">
                      <legend>Cart Summary</legend>
                      <div class="row">                       
                        <div class="col-md-12">
                          <div class="table-responsive shopping-cart-table">
                            <table class="table">
                              <thead>
                                <tr>
                                  <td class="text-center">
                                    Image
                                  </td>
                                  <td class="text-center">
                                    Product Details
                                  </td>
                                  <td class="text-center">
                                    Quantity
                                  </td>
                                  <td class="text-center">
                                    Price
                                  </td>
                                  <td class="text-right">
                                    Total
                                  </td>
                                  <td class="text-right">
                                    Action
                                  </td>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-center">
                                    <a href="#">
                                    <img src="../assets/global/images/shopping/camera.png" alt="camera" class="img-responsive">
                                    </a>
                                  </td>
                                  <td class="text-center">
                                    <a href="product-full.html">Camera HD</a>
                                  </td>
                                  <td class="text-center">
                                    <div class="input-group btn-block">
                                      <input type="text" name="quantity" value="1" size="1" class="quantity form-control form-white">
                                    </div>
                                  </td>
                                  <td class="text-center">
                                    $<span class="item-price">300.00</span>
                                  </td>
                                  <td class="text-right">
                                    $<span class="item-total">300.00</span>
                                  </td>
                                  <td class="text-right">
                                    <i data-rel="tooltip" data-original-title="Remove" data-placement="left" class="icons-office-52"></i>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="text-center">
                                    <a href="#">
                                    <img src="../assets/global/images/shopping/monitor.png" alt="monitor" class="img-responsive">
                                    </a>
                                  </td>
                                  <td class="text-center">
                                    <a href="product-full.html">Monitor 22"</a>
                                  </td>
                                  <td class="text-center">
                                    <div class="input-group btn-block">
                                      <input type="text" name="quantity" value="1" size="1" class="quantity form-control form-white">
                                    </div>
                                  </td>
                                  <td class="text-center">
                                    $<span class="item-price">150.00</span>
                                  </td>
                                  <td class="text-right">
                                    $<span class="item-total">150.00</span>
                                  </td>
                                  <td class="text-right">
                                    <i data-rel="tooltip" data-original-title="Remove" data-placement="left" class="icons-office-52"></i>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="text-center">
                                    <a href="#">
                                    <img src="../assets/global/images/shopping/battery.png" alt="monitor" class="img-responsive">
                                    </a>
                                  </td>
                                  <td class="text-center">
                                    <a href="product-full.html">Mobile Battery</a>
                                  </td>
                                  <td class="text-center">
                                    <div class="input-group btn-block">
                                      <input type="text" name="quantity" value="1" size="1" class="quantity form-control form-white">
                                    </div>
                                  </td>
                                  <td class="text-center">
                                    $<span class="item-price">100.00</span>
                                  </td>
                                  <td class="text-right">
                                    $<span class="item-total">100.00</span>
                                  </td>
                                  <td class="text-right">
                                    <i data-rel="tooltip" data-original-title="Remove" data-placement="left" class="icons-office-52"></i>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>Shipping Info</legend>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="row">
                            <div class="col-md-12">
                              <h3>General Info</h3>
                              <p>We need to know more about you!</p>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label for="firstname" class="required">First Name</label>
                                <input type="text" class="form-control form-white" id="firstname" name="firstname" placeholder="Enter your first name" required data-parsley-group="block1">
                              </div>
                              <div class="form-group">
                                <label for="password" class="required">Password</label>
                                <input type="password" class="form-control form-white" id="password" name="password" placeholder="Password">
                              </div>
                              <div class="form-group">
                                <label for="password2" class="required">Password again</label>
                                <input type="password" class="form-control form-white" id="password2" name="password2" placeholder="Repeat your password">
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <div class="form-group">
                                  <label for="lastname" class="required">Last Name</label>
                                  <input type="text" class="form-control form-white" id="lastname" name="lastname" placeholder="Enter your last name" required data-parsley-group="block1">
                                </div>
                                <div class="form-group">
                                  <label for="username">Username</label>
                                  <input type="text" class="form-control form-white" id="username" name="username" placeholder="Choose a username">
                                </div>
                                <div class="form-group">
                                  <label for="emailadress">Email Address</label>
                                  <input type="email" class="form-control form-white" id="emailadress" name="emailadress" placeholder="Enter your email">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="row">
                            <div class="col-md-12">
                              <h3>Shipping Details</h3>
                              <p>Fill all informations, and take care about shipping address.</p>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="address" class="required">Address</label>
                                <input type="text" class="form-control form-white" id="address" name="address" placeholder="Enter your shipping address" required data-parsley-group="block1">
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label for="country" class="required">Country</label>
                                <input type="text" class="form-control form-white" id="country" name="country" placeholder="Enter your first name" required data-parsley-group="block1">
                              </div>
                              <div class="form-group">
                                <label for="zip" class="required">Zip Code</label>
                                <input type="password" class="form-control form-white" id="zip" name="zip" placeholder="Password">
                              </div>
                              <div class="form-group">
                                <label for="state">State / Province</label>
                                <input type="password" class="form-control form-white" id="state" name="state" placeholder="Enter your state">
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <div class="form-group">
                                  <label for="city" class="required">City</label>
                                  <input type="text" class="form-control form-white" id="city" name="city" placeholder="Enter your city" required data-parsley-group="block1">
                                </div>
                                <div class="form-group">
                                  <label for="phone">Phone Number</label>
                                  <input type="text" class="form-control form-white" id="phone" name="phone" placeholder="Enter your phone">
                                </div>
                                <div class="form-group">
                                  <label for="company">Company</label>
                                  <input type="email" class="form-control form-white" id="company" name="company" placeholder="Enter your company name">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>Payment Details</legend>
                      <div class="row">
                        <div class="col-md-4">
                          <h2>Online secured payment</h2>
                          <p>We protect your data with encrypted connection and verified certificate.</p>
                          <div class="table-responsive shopping-cart-payment">
                            <table class="table">
                              <thead>
                                <tr>
                                  <td class="text-center">
                                    Product Details
                                  </td>
                                  <td class="text-center">
                                    Quantity
                                  </td>
                                  <td class="text-center">
                                    Price
                                  </td>
                                  <td class="text-right">
                                    Total
                                  </td>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-center">
                                    <a href="product-full.html">Camera HD</a>
                                  </td>
                                  <td class="text-center">
                                    1                             
                                  </td>
                                  <td class="text-center">
                                    $260.00
                                  </td>
                                  <td class="text-right">
                                    $260.00
                                  </td>
                                </tr>
                                <tr>
                                  <td class="text-center">
                                    <a href="product-full.html">Monitor 22"</a>
                                  </td>
                                  <td class="text-center">
                                    1                             
                                  </td>
                                  <td class="text-center">
                                    $150.00
                                  </td>
                                  <td class="text-right">
                                    $150.00
                                  </td>
                                </tr>
                                <tr>
                                  <td class="text-center">
                                    <a href="product-full.html">Mobile Battery</a>
                                  </td>
                                  <td class="text-center">
                                    1                           
                                  </td>
                                  <td class="text-center">
                                    $60.00
                                  </td>
                                  <td class="text-right">
                                    $60.00
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="cart-total clearfix">
                            <div>
                              <h3>Discount</h3>
                              <p>10%</p>
                            </div>
                            <div class="total text-right bg-primary">
                              <h3>Total</h3>
                              <p class="text-right">$369.00</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="row">
                            <div class="col-md-12">
                              <h2>Credit Cart Data</h2>
                              <p>To validate your shopping cart, please fill all payment information below. We will receive an email to confirm your payment.</p>
                              <div class="form-group">
                                <label for="cart-name" class="required">Credit Cart Owner</label>
                                <input type="text" class="form-control form-white" id="cart-name" name="cart-name" placeholder="Enter credit cart owner name" required data-parsley-group="block2">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="cart-number" class="required">Cart Number</label>
                                <input type="text" class="form-control form-white" id="cart-number" name="cart-number" placeholder="Enter credit cart number" required data-parsley-group="block2">
                              </div>
                            </div>
                            <div class="col-lg-6 cart-expiration">
                              <div class="form-group">
                                <label class="required">Expiration date</label><br>
                                <select class="form-white">
                                  <option value="2016">January</option>
                                  <option value="2016">February</option>
                                  <option value="2017">March</option>
                                  <option value="2018">April</option>
                                  <option value="2019">May</option>
                                  <option value="2016">June</option>
                                  <option value="2016">July</option>
                                  <option value="2017">August</option>
                                  <option value="2018">September</option>
                                  <option value="2019">Octover</option>
                                  <option value="2016">November</option>
                                  <option value="2016">December</option>
                                </select>
                                <select class="form-white">
                                  <option value="2016">2015</option>
                                  <option value="2016">2016</option>
                                  <option value="2017">2017</option>
                                  <option value="2018">2018</option>
                                  <option value="2019">2019</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <div class="form-group">
                                  <label for="cart-csc" class="required">CSC Code</label>
                                  <input type="text" class="form-control form-white" id="cart-csc" name="cart-csc" placeholder="CSC code" required data-parsley-group="block2">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="footer">
            <div class="copyright">
              <p class="pull-left sm-pull-reset">
                <span>Copyright <span class="copyright">©</span> 2015 </span>
                <span>THEMES LAB</span>.
                <span>All rights reserved. </span>
              </p>
              <p class="pull-right sm-pull-reset">
                <span><a href="#" class="m-r-10">Support</a> | <a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#" class="m-l-10">Privacy Policy</a></span>
              </p>
            </div>
          </div>
        </div>
        <!-- END PAGE CONTENT -->
      </div>
      <!-- END MAIN CONTENT -->
      <!-- BEGIN BUILDER -->
      <div class="builder hidden-sm hidden-xs" id="builder">
        <a class="builder-toggle"><i class="icon-wrench"></i></a>
        <div class="inner">
          <div class="builder-container">
            <a href="#" class="btn btn-sm btn-default" id="reset-style">reset default style</a>
            <h4>Layout options</h4>
            <div class="layout-option">
              <span> Fixed Sidebar</span>
              <label class="switch pull-right">
              <input data-layout="sidebar" id="switch-sidebar" type="checkbox" class="switch-input" checked>
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
              </label>
            </div>
            <div class="layout-option">
              <span> Sidebar on Hover</span>
              <label class="switch pull-right">
              <input data-layout="sidebar-hover" id="switch-sidebar-hover" type="checkbox" class="switch-input">
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
              </label>
            </div>
            <div class="layout-option">
              <span> Submenu on Hover</span>
              <label class="switch pull-right">
              <input data-layout="submenu-hover" id="switch-submenu-hover" type="checkbox" class="switch-input">
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
              </label>
            </div>
            <div class="layout-option">
              <span>Fixed Topbar</span>
              <label class="switch pull-right">
              <input data-layout="topbar" id="switch-topbar" type="checkbox" class="switch-input" checked>
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
              </label>
            </div>
            <div class="layout-option">
              <span>Boxed Layout</span>
              <label class="switch pull-right">
              <input data-layout="boxed" id="switch-boxed" type="checkbox" class="switch-input">
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
              </label>
            </div>
            <h4 class="border-top">Color</h4>
            <div class="row">
              <div class="col-xs-12">
                <div class="theme-color bg-dark" data-main="default" data-color="#2B2E33"></div>
                <div class="theme-color background-primary" data-main="primary" data-color="#319DB5"></div>
                <div class="theme-color bg-red" data-main="red" data-color="#C75757"></div>
                <div class="theme-color bg-green" data-main="green" data-color="#1DA079"></div>
                <div class="theme-color bg-orange" data-main="orange" data-color="#D28857"></div>
                <div class="theme-color bg-purple" data-main="purple" data-color="#B179D7"></div>
                <div class="theme-color bg-blue" data-main="blue" data-color="#4A89DC"></div>
              </div>
            </div>
            <h4 class="border-top">Theme</h4>
            <div class="row row-sm">
              <div class="col-xs-6">
                <div class="theme clearfix sdtl" data-theme="sdtl">
                  <div class="header theme-left"></div>
                  <div class="header theme-right-light"></div>
                  <div class="theme-sidebar-dark"></div>
                  <div class="bg-light"></div>
                </div>
              </div>
              <div class="col-xs-6">
                <div class="theme clearfix sltd" data-theme="sltd">
                  <div class="header theme-left"></div>
                  <div class="header theme-right-dark"></div>
                  <div class="theme-sidebar-light"></div>
                  <div class="bg-light"></div>
                </div>
              </div>
              <div class="col-xs-6">
                <div class="theme clearfix sdtd" data-theme="sdtd">
                  <div class="header theme-left"></div>
                  <div class="header theme-right-dark"></div>
                  <div class="theme-sidebar-dark"></div>
                  <div class="bg-light"></div>
                </div>
              </div>
              <div class="col-xs-6">
                <div class="theme clearfix sltl" data-theme="sltl">
                  <div class="header theme-left"></div>
                  <div class="header theme-right-light"></div>
                  <div class="theme-sidebar-light"></div>
                  <div class="bg-light"></div>
                </div>
              </div>
            </div>
            <h4 class="border-top">Background</h4>
            <div class="row">
              <div class="col-xs-12">
                <div class="bg-color bg-clean" data-bg="clean" data-color="#F8F8F8"></div>
                <div class="bg-color bg-lighter" data-bg="lighter" data-color="#EFEFEF"></div>
                <div class="bg-color bg-light-default" data-bg="light-default" data-color="#E9E9E9"></div>
                <div class="bg-color bg-light-blue" data-bg="light-blue" data-color="#E2EBEF"></div>
                <div class="bg-color bg-light-purple" data-bg="light-purple" data-color="#E9ECF5"></div>
                <div class="bg-color bg-light-dark" data-bg="light-dark" data-color="#DCE1E4"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END BUILDER -->
    </section>
    <!-- BEGIN QUICKVIEW SIDEBAR -->
    <div id="quickview-sidebar">
      <div class="quickview-header">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#chat" data-toggle="tab">Chat</a></li>
          <li><a href="#notes" data-toggle="tab">Notes</a></li>
          <li><a href="#settings" data-toggle="tab" class="settings-tab">Settings</a></li>
        </ul>
      </div>
      <div class="quickview">
        <div class="tab-content">
          <div class="tab-pane fade active in" id="chat">
            <div class="chat-body current">
              <div class="chat-search">
                <form class="form-inverse" action="#" role="search">
                  <div class="append-icon">
                    <input type="text" class="form-control" placeholder="Search contact...">
                    <i class="icon-magnifier"></i>
                  </div>
                </form>
              </div>
              <div class="chat-groups">
                <div class="title">GROUP CHATS</div>
                <ul>
                  <li><i class="turquoise"></i> Favorites</li>
                  <li><i class="turquoise"></i> Office Work</li>
                  <li><i class="turquoise"></i> Friends</li>
                </ul>
              </div>
              <div class="chat-list">
                <div class="title">FAVORITES</div>
                <ul>
                  <li class="clearfix">
                    <div class="user-img">
                      <img src="../assets/global/images/avatars/avatar13.png" alt="avatar" />
                    </div>
                    <div class="user-details">
                      <div class="user-name">Bobby Brown</div>
                      <div class="user-txt">On the road again...</div>
                    </div>
                    <div class="user-status">
                      <i class="online"></i>
                    </div>
                  </li>
                  <li class="clearfix">
                    <div class="user-img">
                      <img src="../assets/global/images/avatars/avatar5.png" alt="avatar" />
                      <div class="pull-right badge badge-danger">3</div>
                    </div>
                    <div class="user-details">
                      <div class="user-name">Alexa Johnson</div>
                      <div class="user-txt">Still at the beach</div>
                    </div>
                    <div class="user-status">
                      <i class="away"></i>
                    </div>
                  </li>
                  <li class="clearfix">
                    <div class="user-img">
                      <img src="../assets/global/images/avatars/avatar10.png" alt="avatar" />
                    </div>
                    <div class="user-details">
                      <div class="user-name">Bobby Brown</div>
                      <div class="user-txt">On stage...</div>
                    </div>
                    <div class="user-status">
                      <i class="busy"></i>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="chat-list">
                <div class="title">FRIENDS</div>
                <ul>
                  <li class="clearfix">
                    <div class="user-img">
                      <img src="../assets/global/images/avatars/avatar7.png" alt="avatar" />
                      <div class="pull-right badge badge-danger">3</div>
                    </div>
                    <div class="user-details">
                      <div class="user-name">James Miller</div>
                      <div class="user-txt">At work...</div>
                    </div>
                    <div class="user-status">
                      <i class="online"></i>
                    </div>
                  </li>
                  <li class="clearfix">
                    <div class="user-img">
                      <img src="../assets/global/images/avatars/avatar11.png" alt="avatar" />
                    </div>
                    <div class="user-details">
                      <div class="user-name">Fred Smith</div>
                      <div class="user-txt">Waiting for tonight</div>
                    </div>
                    <div class="user-status">
                      <i class="offline"></i>
                    </div>
                  </li>
                  <li class="clearfix">
                    <div class="user-img">
                      <img src="../assets/global/images/avatars/avatar8.png" alt="avatar" />
                    </div>
                    <div class="user-details">
                      <div class="user-name">Ben Addams</div>
                      <div class="user-txt">On my way to NYC</div>
                    </div>
                    <div class="user-status">
                      <i class="offline"></i>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="chat-conversation">
              <div class="conversation-header">
                <div class="user clearfix">
                  <div class="chat-back">
                    <i class="icon-action-undo"></i>
                  </div>
                  <div class="user-details">
                    <div class="user-name">James Miller</div>
                    <div class="user-txt">On the road again...</div>
                  </div>
                </div>
              </div>
              <div class="conversation-body">
                <ul>
                  <li class="img">
                    <div class="chat-detail">
                      <span class="chat-date">today, 10:38pm</span>
                      <div class="conversation-img">
                        <img src="../assets/global/images/avatars/avatar4.png" alt="avatar 4"/>
                      </div>
                      <div class="chat-bubble">
                        <span>Hi you!</span>
                      </div>
                    </div>
                  </li>
                  <li class="img">
                    <div class="chat-detail">
                      <span class="chat-date">today, 10:45pm</span>
                      <div class="conversation-img">
                        <img src="../assets/global/images/avatars/avatar4.png" alt="avatar 4"/>
                      </div>
                      <div class="chat-bubble">
                        <span>Are you there?</span>
                      </div>
                    </div>
                  </li>
                  <li class="img">
                    <div class="chat-detail">
                      <span class="chat-date">today, 10:51pm</span>
                      <div class="conversation-img">
                        <img src="../assets/global/images/avatars/avatar4.png" alt="avatar 4"/>
                      </div>
                      <div class="chat-bubble">
                        <span>Send me a message when you come back.</span>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="conversation-message">
                <input type="text" placeholder="Your message..." class="form-control form-white send-message" />
                <div class="item-footer clearfix">
                  <div class="footer-actions">
                    <i class="icon-rounded-marker"></i>
                    <i class="icon-rounded-camera"></i>
                    <i class="icon-rounded-paperclip-oblique"></i>
                    <i class="icon-rounded-alarm-clock"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="notes">
            <div class="list-notes current withScroll">
              <div class="notes ">
                <div class="row">
                  <div class="col-md-12">
                    <div id="add-note">
                      <i class="fa fa-plus"></i>ADD A NEW NOTE
                    </div>
                  </div>
                </div>
                <div id="notes-list">
                  <div class="note-item media current fade in">
                    <button class="close">×</button>
                    <div>
                      <div>
                        <p class="note-name">Reset my account password</p>
                      </div>
                      <p class="note-desc hidden">Break security reasons.</p>
                      <p><small>Tuesday 6 May, 3:52 pm</small></p>
                    </div>
                  </div>
                  <div class="note-item media fade in">
                    <button class="close">×</button>
                    <div>
                      <div>
                        <p class="note-name">Call John</p>
                      </div>
                      <p class="note-desc hidden">He have my laptop!</p>
                      <p><small>Thursday 8 May, 2:28 pm</small></p>
                    </div>
                  </div>
                  <div class="note-item media fade in">
                    <button class="close">×</button>
                    <div>
                      <div>
                        <p class="note-name">Buy a car</p>
                      </div>
                      <p class="note-desc hidden">I'm done with the bus</p>
                      <p><small>Monday 12 May, 3:43 am</small></p>
                    </div>
                  </div>
                  <div class="note-item media fade in">
                    <button class="close">×</button>
                    <div>
                      <div>
                        <p class="note-name">Don't forget my notes</p>
                      </div>
                      <p class="note-desc hidden">I have to read them...</p>
                      <p><small>Wednesday 5 May, 6:15 pm</small></p>
                    </div>
                  </div>
                  <div class="note-item media current fade in">
                    <button class="close">×</button>
                    <div>
                      <div>
                        <p class="note-name">Reset my account password</p>
                      </div>
                      <p class="note-desc hidden">Break security reasons.</p>
                      <p><small>Tuesday 6 May, 3:52 pm</small></p>
                    </div>
                  </div>
                  <div class="note-item media fade in">
                    <button class="close">×</button>
                    <div>
                      <div>
                        <p class="note-name">Call John</p>
                      </div>
                      <p class="note-desc hidden">He have my laptop!</p>
                      <p><small>Thursday 8 May, 2:28 pm</small></p>
                    </div>
                  </div>
                  <div class="note-item media fade in">
                    <button class="close">×</button>
                    <div>
                      <div>
                        <p class="note-name">Buy a car</p>
                      </div>
                      <p class="note-desc hidden">I'm done with the bus</p>
                      <p><small>Monday 12 May, 3:43 am</small></p>
                    </div>
                  </div>
                  <div class="note-item media fade in">
                    <button class="close">×</button>
                    <div>
                      <div>
                        <p class="note-name">Don't forget my notes</p>
                      </div>
                      <p class="note-desc hidden">I have to read them...</p>
                      <p><small>Wednesday 5 May, 6:15 pm</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="detail-note note-hidden-sm">
              <div class="note-header clearfix">
                <div class="note-back">
                  <i class="icon-action-undo"></i>
                </div>
                <div class="note-edit">Edit Note</div>
                <div class="note-subtitle">title on first line</div>
              </div>
              <div id="note-detail">
                <div class="note-write">
                  <textarea class="form-control" placeholder="Type your note here"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="settings">
            <div class="settings">
              <div class="title">ACCOUNT SETTINGS</div>
              <div class="setting">
                <span> Show Personal Statut</span>
                <label class="switch pull-right">
                <input type="checkbox" class="switch-input" checked>
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
                <p class="setting-info">Lorem ipsum dolor sit amet consectetuer.</p>
              </div>
              <div class="setting">
                <span> Show my Picture</span>
                <label class="switch pull-right">
                <input type="checkbox" class="switch-input" checked>
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
                <p class="setting-info">Lorem ipsum dolor sit amet consectetuer.</p>
              </div>
              <div class="setting">
                <span> Show my Location</span>
                <label class="switch pull-right">
                <input type="checkbox" class="switch-input">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
                <p class="setting-info">Lorem ipsum dolor sit amet consectetuer.</p>
              </div>
              <div class="title">CHAT</div>
              <div class="setting">
                <span> Show User Image</span>
                <label class="switch pull-right">
                <input type="checkbox" class="switch-input" checked>
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
              </div>
              <div class="setting">
                <span> Show Fullname</span>
                <label class="switch pull-right">
                <input type="checkbox" class="switch-input" checked>
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
              </div>
              <div class="setting">
                <span> Show Location</span>
                <label class="switch pull-right">
                <input type="checkbox" class="switch-input">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
              </div>
              <div class="setting">
                <span> Show Unread Count</span>
                <label class="switch pull-right">
                <input type="checkbox" class="switch-input" checked>
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
                </label>
              </div>
              <div class="title">STATISTICS</div>
              <div class="settings-chart">
                <div class="clearfix">
                  <div class="chart-title">Stat 1</div>
                  <div class="chart-number">82%</div>
                </div>
                <div class="progress">
                  <div class="progress-bar progress-bar-primary setting1" data-transitiongoal="82"></div>
                </div>
              </div>
              <div class="settings-chart">
                <div class="clearfix">
                  <div class="chart-title">Stat 2</div>
                  <div class="chart-number">43%</div>
                </div>
                <div class="progress">
                  <div class="progress-bar progress-bar-primary setting2" data-transitiongoal="43"></div>
                </div>
              </div>
              <div class="m-t-30" style="width:100%">
                <canvas id="setting-chart" height="300"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END QUICKVIEW SIDEBAR -->
    <!-- BEGIN SEARCH -->
    <div id="morphsearch" class="morphsearch">
      <form class="morphsearch-form">
        <input class="morphsearch-input" type="search" placeholder="Search..."/>
        <button class="morphsearch-submit" type="submit">Search</button>
      </form>
      <div class="morphsearch-content withScroll">
        <div class="dummy-column user-column">
          <h2>Users</h2>
          <a class="dummy-media-object" href="#">
            <img src="../assets/global/images/avatars/avatar1_big.png" alt="Avatar 1"/>
            <h3>John Smith</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="../assets/global/images/avatars/avatar2_big.png" alt="Avatar 2"/>
            <h3>Bod Dylan</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="../assets/global/images/avatars/avatar3_big.png" alt="Avatar 3"/>
            <h3>Jenny Finlan</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="../assets/global/images/avatars/avatar4_big.png" alt="Avatar 4"/>
            <h3>Harold Fox</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="../assets/global/images/avatars/avatar5_big.png" alt="Avatar 5"/>
            <h3>Martin Hendrix</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="../assets/global/images/avatars/avatar6_big.png" alt="Avatar 6"/>
            <h3>Paul Ferguson</h3>
          </a>
        </div>
        <div class="dummy-column">
          <h2>Articles</h2>
          <a class="dummy-media-object" href="#">
            <img src="../assets/global/images/gallery/1.jpg" alt="1"/>
            <h3>How to change webdesign?</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="../assets/global/images/gallery/2.jpg" alt="2"/>
            <h3>News From the sky</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="../assets/global/images/gallery/3.jpg" alt="3"/>
            <h3>Where is the cat?</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="../assets/global/images/gallery/4.jpg" alt="4"/>
            <h3>Just another funny story</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="../assets/global/images/gallery/5.jpg" alt="5"/>
            <h3>How many water we drink every day?</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="../assets/global/images/gallery/6.jpg" alt="6"/>
            <h3>Drag and drop tutorials</h3>
          </a>
        </div>
        <div class="dummy-column">
          <h2>Recent</h2>
          <a class="dummy-media-object" href="#">
            <img src="../assets/global/images/gallery/7.jpg" alt="7"/>
            <h3>Design Inspiration</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="../assets/global/images/gallery/8.jpg" alt="8"/>
            <h3>Animals drawing</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="../assets/global/images/gallery/9.jpg" alt="9"/>
            <h3>Cup of tea please</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="../assets/global/images/gallery/10.jpg" alt="10"/>
            <h3>New application arrive</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="../assets/global/images/gallery/11.jpg" alt="11"/>
            <h3>Notification prettify</h3>
          </a>
          <a class="dummy-media-object" href="#">
            <img src="../assets/global/images/gallery/12.jpg" alt="12"/>
            <h3>My article is the last recent</h3>
          </a>
        </div>
      </div>
      <!-- /morphsearch-content -->
      <span class="morphsearch-close"></span>
    </div>
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
    <script src="../assets/global/js/widgets/notes.js"></script> <!-- Notes Widget -->
    <script src="../assets/global/js/quickview.js"></script> <!-- Chat Script -->
    <script src="../assets/global/js/pages/search.js"></script> <!-- Search Script -->
    <script src="../assets/global/js/plugins.js"></script> <!-- Main Plugin Initialization Script -->
    <script src="../assets/global/js/application.js"></script> <!-- Main Application Script -->

    <!-- BEGIN PAGE SCRIPT -->
    <script src="../assets/global/plugins/step-form-wizard/plugins/parsley/parsley.min.js"></script> <!-- Step Form Validation - OPTIONAL -->
    <script src="../assets/global/plugins/step-form-wizard/js/step-form-wizard.js"></script> <!-- Step Form Validation -->
    <script src="../assets/global/js/pages/ecommerce.js"></script>
    <!-- END PAGE SCRIPT -->
    <script src="../assets/admin/layout2/js/layout.js"></script>
  </body>
</html>
