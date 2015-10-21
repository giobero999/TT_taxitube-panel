<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Themes Lab - Creative Laborator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="" name="description" />
        <meta content="themes-lab" name="author" />
        <link rel="shortcut icon" href="../assets/global/images/favicon.png">
       <link href="../assets/global/css/style-admin.css" rel="stylesheet">
        <link href="../assets/global/css/ui.css" rel="stylesheet">
        <link href="../assets/global/plugins/icheck/skins/all.css" rel="stylesheet"/>
        <link href="../assets/global/plugins/bootstrap-loading/lada.min.css" rel="stylesheet">
    </head>
    <body class="sidebar-condensed account separate-inputs boxed" data-page="signup">
        <!-- BEGIN LOGIN BOX -->
        <div class="container" id="login-block">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3">
                    <div class="account-wall">
                        <i class="user-img icons-faces-users-03"></i>
                        <form class="form-signup" action="dashboard.php" role="form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="append-icon">
                                        <input type="text" name="name" id="name" class="form-control form-white firstname" placeholder="Customer Name" required autofocus>
                                        <i class="icon-user"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="append-icon">
                                        <input type="text" name="Customer_Id" id="Customer_Id" class="form-control form-white lastname" placeholder="Customer Id" required>
                                        <i class="icon-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="append-icon">
                                <input type="text" name="Username" id="Username" class="form-control form-white email" placeholder="Username" required>
                                <i class="icon-user"></i>
                            </div>
                            <div class="append-icon">
                                <input type="email" name="email" id="email" class="form-control form-white email" placeholder="Email" required>
                                <i class="icon-envelope"></i>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="append-icon">
                                        <input type="password" name="password" id="password" class="form-control form-white password" placeholder="Password" required> <i class="icon-lock"></i>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="append-icon m-b-20">
                                        <input type="password" name="password" id="password2" class="form-control form-white password2" placeholder="Repeat Password" required> <i class="icon-lock"></i>
                                    </div>
                                </div>
                            </div>
                           <div class="row">
                                <div class="col-md-6">
                                    <div class="append-icon">
                                        <input type="text" name="Phone" id="Phone" class="form-control form-white" placeholder="Phone" required> <i class="icon-phone"></i>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="append-icon m-b-20">
                                        <input type="text" name="director" id="director" class="form-control form-white " placeholder="director" required> <i class="icon-phone"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="append-icon">
                                <input type="file" name="Username" id="Username" class="form-control form-white email" placeholder="Username" required>
                                <i class="icon-file"></i>
                            </div>

                            <div class="terms option-group">
                                <label  for="terms" class="m-t-10">
                                <input type="checkbox" name="terms" id="terms" data-checkbox="icheckbox_square-blue" required/>
                                I agree with terms and conditions
                                </label>  
                            </div>
                            <button type="submit" id="submit-form" class="btn btn-lg btn-dark m-t-20" data-style="expand-left">Register</button>
                            <div class="social-btn">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <button type="button" class="btn btn-lg btn-block btn-primary"><i class="fa fa-facebook pull-left"></i>Sign In with Facebook</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="button" class="btn btn-lg btn-block btn-danger"><i class="fa fa-google pull-left"></i>Sign In with Google</button>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">
                                <p class="pull-right m-t-20"><a href="signin.php">Already have an account? Sign In</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <p class="account-copyright">
                <span>Copyright © 2015 </span><span>All rights reserved.</span>
            </p>
            <!-- <div id="account-builder">
                <form class="form-horizontal" role="form">
                    <div class="row">
                        <div class="col-md-12">
                            <i class="fa fa-spin fa-gear"></i> 
                            <h3><strong>Customize</strong> Login Page</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-xs-8 control-label">Social Login</label>
                                <div class="col-xs-4">
                                    <label class="switch m-r-20">
                                    <input id="social-cb" type="checkbox" class="switch-input" checked>
                                    <span class="switch-label" data-on="On" data-off="Off"></span>
                                    <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-8 control-label">Boxed Form</label>
                                <div class="col-xs-4">
                                    <label class="switch m-r-20">
                                    <input id="boxed-cb" type="checkbox" class="switch-input" checked>
                                    <span class="switch-label" data-on="On" data-off="Off"></span>
                                    <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-xs-8 control-label">Background Image</label>
                                <div class="col-xs-4">
                                    <label class="switch m-r-20">
                                    <input id="image-cb" type="checkbox" class="switch-input" checked>
                                    <span class="switch-label" data-on="On" data-off="Off"></span>
                                    <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-xs-8 control-label">Background Slides</label>
                                <div class="col-xs-4">
                                    <label class="switch m-r-20">
                                    <input id="slide-cb" type="checkbox" class="switch-input">
                                    <span class="switch-label" data-on="On" data-off="Off"></span>
                                    <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-xs-8 control-label">Terms Checkbox</label>
                                <div class="col-xs-4">
                                    <label class="switch m-r-20">
                                    <input id="terms-cb" type="checkbox" class="switch-input" checked>
                                    <span class="switch-label" data-on="On" data-off="Off"></span>
                                    <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-xs-8 control-label">User Image</label>
                                <div class="col-xs-4">
                                    <label class="switch m-r-20">
                                    <input id="user-cb" type="checkbox" class="switch-input">
                                    <span class="switch-label" data-on="On" data-off="Off"></span>
                                    <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div> -->
        </div>
        <!-- END LOCKSCREEN BOX -->
        <script src="../assets/global/plugins/jquery/jquery-1.11.1.min.js"></script>
        <script src="../assets/global/plugins/jquery/jquery-migrate-1.2.1.min.js"></script>
        <script src="../assets/global/plugins/gsap/main-gsap.min.js"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/global/plugins/icheck/icheck.min.js"></script>
        <!-- <script src="../assets/global/plugins/backstretch/backstretch.min.js"></script> -->
        <script src="../assets/global/plugins/bootstrap-loading/lada.min.js"></script>
        <script src="../assets/global/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="../assets/global/plugins/jquery-validation/additional-methods.min.js"></script>
        <script src="../assets/global/js/plugins.js"></script>
        <script src="../assets/global/js/pages/login-v1.js"></script>
      <script src="../assets/admin/layout2/js/layout.js"></script>
  </body>
</html>