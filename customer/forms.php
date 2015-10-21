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
    <link href="../assets/global/plugins/dropzone/dropzone.min.css" rel="stylesheet">
    <link href="../assets/global/plugins/input-text/style.min.css" rel="stylesheet">
    <!-- END PAGE STYLE -->
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
        include("includes/sidebar.php");
      ?>
      <!-- END SIDEBAR -->
      <div class="main-content">
        <!-- BEGIN TOPBAR -->
        <?php
        include("includes/toolbar.php");
      ?>
        <!-- END TOPBAR -->
        <!-- BEGIN PAGE CONTENT -->
        <div class="page-content">
          <div class="header">
            <h2><strong>Forms</strong> Elements</h2>
            <div class="breadcrumb-wrapper">
              <ol class="breadcrumb">
                <li><a href="#">Make</a>
                </li>
                <li><a href="#">Forms</a>
                </li>
                <li class="active">Form Elements</li>
              </ol>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="icon-check"></i> <strong>Checkbox</strong> <small>css, images and jquery design</small></h3>
                </div>
                <div class="panel-content">
                  <p>We have added the famous jquery plugin Icheck that permit to create beautiful checkbox design with CSS, Jquery and images.</p>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="skin skin-square">
                        <h3><strong>Square</strong> Skin</h3>
                        <form role="form">
                          <div class="form-body">
                            <div class="form-group">
                              <div class="input-group">
                                <ul class="icheck-colors">
                                  <li>
                                  </li>
                                  <li class="red">
                                  </li>
                                  <li class="green">
                                  </li>
                                  <li class="blue active">
                                  </li>
                                  <li class="aero">
                                  </li>
                                  <li class="grey">
                                  </li>
                                  <li class="orange">
                                  </li>
                                  <li class="pink">
                                  </li>
                                  <li class="purple">
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <div class="form-group">
                              <p><strong>Checkbox List</strong>
                              </p>
                              <div class="input-group">
                                <div class="icheck-list">
                                  <label>
                                  <input type="checkbox" data-checkbox="icheckbox_square-blue"> Checkbox 1</label>
                                  <label>
                                  <input type="checkbox" checked data-checkbox="icheckbox_square-blue"> Checkbox 2</label>
                                  <label>
                                  <input type="checkbox" data-checkbox="icheckbox_square-blue"> Checkbox 3</label>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <p><strong>Inline Checkboxes</strong>
                              </p>
                              <div class="input-group">
                                <div class="icheck-inline">
                                  <label>
                                  <input type="checkbox" data-checkbox="icheckbox_square-blue"> Checkbox 1</label>
                                  <label>
                                  <input type="checkbox" checked data-checkbox="icheckbox_square-blue"> Checkbox 2</label>
                                  <label>
                                  <input type="checkbox" data-checkbox="icheckbox_square-blue"> Checkbox 3</label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="skin skin-flat">
                        <h3><strong>Flat</strong> Skin</h3>
                        <form role="form">
                          <div class="form-body">
                            <div class="form-group">
                              <div class="input-group">
                                <ul class="icheck-colors">
                                  <li>
                                  </li>
                                  <li class="red">
                                  </li>
                                  <li class="green">
                                  </li>
                                  <li class="blue active">
                                  </li>
                                  <li class="aero">
                                  </li>
                                  <li class="grey">
                                  </li>
                                  <li class="orange">
                                  </li>
                                  <li class="pink">
                                  </li>
                                  <li class="purple">
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <div class="form-group">
                              <p><strong>Checkbox List</strong>
                              </p>
                              <div class="input-group">
                                <div class="icheck-list">
                                  <label>
                                  <input type="checkbox" data-checkbox="icheckbox_flat-blue"> Checkbox 1</label>
                                  <label>
                                  <input type="checkbox" checked data-checkbox="icheckbox_flat-blue"> Checkbox 2</label>
                                  <label>
                                  <input type="checkbox" data-checkbox="icheckbox_flat-blue"> Checkbox 3</label>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <p><strong>Inline Checkboxes</strong>
                              </p>
                              <div class="input-group">
                                <div class="icheck-inline">
                                  <label>
                                  <input type="checkbox" data-checkbox="icheckbox_flat-blue"> Checkbox 1</label>
                                  <label>
                                  <input type="checkbox" checked data-checkbox="icheckbox_flat-blue"> Checkbox 2</label>
                                  <label>
                                  <input type="checkbox" data-checkbox="icheckbox_flat-blue"> Checkbox 3</label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="skin skin-minimal">
                        <h3><strong>Minimal</strong> Skin</h3>
                        <form role="form">
                          <div class="form-body">
                            <div class="form-group">
                              <div class="input-group">
                                <ul class="icheck-colors">
                                  <li>
                                  </li>
                                  <li class="red">
                                  </li>
                                  <li class="green">
                                  </li>
                                  <li class="blue active">
                                  </li>
                                  <li class="aero">
                                  </li>
                                  <li class="grey">
                                  </li>
                                  <li class="orange">
                                  </li>
                                  <li class="pink">
                                  </li>
                                  <li class="purple">
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <div class="form-group">
                              <p><strong>Checkbox List</strong>
                              </p>
                              <div class="input-group">
                                <div class="icheck-list">
                                  <label>
                                  <input type="checkbox" data-checkbox="icheckbox_minimal-blue"> Checkbox 1</label>
                                  <label>
                                  <input type="checkbox" data-checkbox="icheckbox_minimal-blue" checked> Checkbox 2</label>
                                  <label>
                                  <input type="checkbox" data-checkbox="icheckbox_minimal-blue"> Checkbox 3</label>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <p><strong>Inline Checkboxes</strong>
                              </p>
                              <div class="input-group">
                                <div class="icheck-inline">
                                  <label>
                                  <input type="checkbox" data-checkbox="icheckbox_minimal-blue"> Checkbox 1</label>
                                  <label>
                                  <input type="checkbox" data-checkbox="icheckbox_minimal-blue"> Checkbox 2</label>
                                  <label>
                                  <input type="checkbox" data-checkbox="icheckbox_minimal-blue"> Checkbox 3</label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="icon-check"></i> <strong>Radio</strong> <small>css, images and jquery design</small></h3>
                </div>
                <div class="panel-content">
                  <p>You can easily change radio skin and color by changing class name.</p>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="skin skin-minimal">
                        <h3><strong>Minimal</strong> Skin</h3>
                        <form role="form">
                          <div class="form-body">
                            <div class="form-group">
                              <div class="input-group">
                                <ul class="icheck-colors">
                                  <li>
                                  </li>
                                  <li class="red">
                                  </li>
                                  <li class="green">
                                  </li>
                                  <li class="blue active">
                                  </li>
                                  <li class="aero">
                                  </li>
                                  <li class="grey">
                                  </li>
                                  <li class="orange">
                                  </li>
                                  <li class="pink">
                                  </li>
                                  <li class="purple">
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <div class="form-group">
                              <p><strong>Radio List</strong></p>
                              <div class="input-group">
                                <div class="icheck-list">
                                  <label><input type="radio" name="radio1" data-radio="iradio_minimal-blue"> Radio Button 1</label>
                                  <label><input type="radio" name="radio1" checked data-radio="iradio_minimal-blue"> Radio Button 2</label>
                                  <label><input type="radio" name="radio1" data-radio="iradio_minimal-blue"> Radio Button 3</label>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <p><strong>Inline Radios</strong></p>
                              <div class="input-group">
                                <div class="icheck-inline">
                                  <label><input type="radio" name="radio2" data-radio="iradio_minimal-blue"> Radio Button 1</label>
                                  <label><input type="radio" name="radio2" checked data-radio="iradio_minimal-blue"> Radio Button 2</label>
                                  <label><input type="radio" name="radio2" data-radio="iradio_minimal-blue"> Radio Button 3</label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="skin skin-square">
                        <h3><strong>Square</strong> Skin</h3>
                        <form role="form">
                          <div class="form-body">
                            <div class="form-group">
                              <div class="input-group">
                                <ul class="icheck-colors">
                                  <li>
                                  </li>
                                  <li class="red">
                                  </li>
                                  <li class="green">
                                  </li>
                                  <li class="blue active">
                                  </li>
                                  <li class="aero">
                                  </li>
                                  <li class="grey">
                                  </li>
                                  <li class="orange">
                                  </li>
                                  <li class="pink">
                                  </li>
                                  <li class="purple">
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <div class="form-group">
                              <p><strong>Radio List</strong>
                              </p>
                              <div class="input-group">
                                <div class="icheck-list">
                                  <label><input type="radio" name="radio1" data-radio="iradio_square-blue"> Radio Button 1</label>
                                  <label><input type="radio" name="radio1" checked data-radio="iradio_square-blue"> Radio Button 2</label>
                                  <label><input type="radio" name="radio1" data-radio="iradio_square-blue"> Radio Button 3</label>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <p><strong>Inline Radios</strong>
                              </p>
                              <div class="input-group">
                                <div class="icheck-inline">
                                  <label><input type="radio" name="radio2" data-radio="iradio_square-blue"> Radio Button 1</label>
                                  <label><input type="radio" name="radio2" checked data-radio="iradio_square-blue"> Radio Button 2</label>
                                  <label><input type="radio" name="radio2" data-radio="iradio_square-blue"> Radio Button 3</label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="skin skin-flat">
                        <h3><strong>Flat</strong> Skin</h3>
                        <form role="form">
                          <div class="form-body">
                            <div class="form-group">
                              <div class="input-group">
                                <ul class="icheck-colors">
                                  <li>
                                  </li>
                                  <li class="red">
                                  </li>
                                  <li class="green">
                                  </li>
                                  <li class="blue">
                                  </li>
                                  <li class="aero">
                                  </li>
                                  <li class="grey active">
                                  </li>
                                  <li class="orange">
                                  </li>
                                  <li class="pink">
                                  </li>
                                  <li class="purple">
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <div class="form-group">
                              <p><strong>Radio List</strong>
                              </p>
                              <div class="input-group">
                                <div class="icheck-list">
                                  <label><input type="radio" name="radio1" data-radio="iradio_flat-blue"> Radio Button 1</label>
                                  <label><input type="radio" name="radio1" checked data-radio="iradio_flat-blue"> Radio Button 2</label>
                                  <label><input type="radio" name="radio1" data-radio="iradio_flat-blue"> Radio Button 3</label>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <p><strong>Inline Radios</strong>
                              </p>
                              <div class="input-group">
                                <div class="icheck-inline">
                                  <label><input type="radio" name="radio2" data-radio="iradio_flat-blue"> Radio Button 1</label>
                                  <label><input type="radio" name="radio2" checked data-radio="iradio_flat-blue"> Radio Button 2</label>
                                  <label><input type="radio" name="radio2" data-radio="iradio_flat-blue"> Radio Button 3</label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="icon-close"></i> <strong>Switch</strong> Button Design</h3>
                </div>
                <div class="panel-content">
                  <p>You can choose between various switch style. It's better to have choice!</p>
                  <div class="row">
                    <div class="col-md-4">
                      <h3><strong>Modern</strong> Look</h3>
                      <label class="switch m-r-20">
                      <input type="checkbox" class="switch-input">
                      <span class="switch-label" data-on="On" data-off="Off"></span>
                      <span class="switch-handle"></span>
                      </label>
                      <label class="switch m-r-20">
                      <input type="checkbox" class="switch-input" checked>
                      <span class="switch-label" data-on="On" data-off="Off"></span>
                      <span class="switch-handle"></span>
                      </label>
                      <label class="switch switch-green">
                      <input type="checkbox" class="switch-input" checked>
                      <span class="switch-label" data-on="On" data-off="Off"></span>
                      <span class="switch-handle"></span>
                      </label>
                    </div>
                    <div class="col-md-4">
                      <h3><strong>Android</strong> Look</h3>
                      <div class="onoffswitch">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox"  id="myonoffswitch1" checked>
                        <label class="onoffswitch-label" for="myonoffswitch1">
                        <span class="onoffswitch-inner">
                        <span class="onoffswitch-active"><span class="onoffswitch-switch">ON</span></span>
                        <span class="onoffswitch-inactive"><span class="onoffswitch-switch">OFF</span></span>
                        </span>
                        </label>
                      </div>
                      <div class="onoffswitch">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch2">
                        <label class="onoffswitch-label" for="myonoffswitch2">
                        <span class="onoffswitch-inner">
                        <span class="onoffswitch-active"><span class="onoffswitch-switch">ON</span></span>
                        <span class="onoffswitch-inactive"><span class="onoffswitch-switch">OFF</span></span>
                        </span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <h3><strong>Clean</strong> Look</h3>
                      <div class="onoffswitch2">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch3" checked>
                        <label class="onoffswitch-label" for="myonoffswitch3">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                        </label>
                      </div>
                      <div class="onoffswitch2">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch4">
                        <label class="onoffswitch-label" for="myonoffswitch4">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="icons-arrows-17"></i> <strong> IOS Switch</strong> Button</h3>
                </div>
                <div class="panel-content">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="m-b-40 clearfix">
                        <p class="m-b-30">You can change ON / OFF color with <code>data-color</code>.</p>
                        <div class="col-md-3">
                          <input type="checkbox" class="js-switch" checked/>
                        </div>
                        <div class="col-md-3">
                          <input type="checkbox" class="js-switch" data-color-on="red" checked/>
                        </div>
                        <div class="col-md-3">
                          <input type="checkbox" class="js-switch" data-color-on="blue" checked/>
                        </div>
                        <div class="col-md-3">
                          <input type="checkbox" class="js-switch" data-color-on="yellow" checked/>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="icon-cloud-upload"></i> File <strong>Upload</strong></h3>
                </div>
                <div class="panel-content">
                  <div class="row">
                    <div class="col-sm-7">
                      <h3><strong>Dropzone</strong> : multiple files upload</h3>
                      <p>DropzoneJS is an open source library that provides drag'n'drop file uploads with image previews.</p>
                      <form action="#" class="dropzone">
                        <div class="fallback">
                          <input name="file" type="file" multiple />
                        </div>
                      </form>
                    </div>
                    <div class="col-sm-5">
                      <h3>File &amp; Image <strong>Upload</strong></h3>
                      <form enctype="multipart/form-data">
                        <div class="form-group">
                          <p><strong>File selector</strong>
                          </p>
                          <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                            <div class="form-control" data-trigger="fileinput">
                              <i class="glyphicon glyphicon-file fileinput-exists"></i><span class="fileinput-filename"></span>
                            </div>
                            <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Choose...</span><span class="fileinput-exists">Change</span>
                            <input type="file" name="...">
                            </span>
                            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                          </div>
                        </div>
                        <hr>
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                          <p><strong>Image uploader</strong></p>
                          <div class="fileinput-new thumbnail">
                            <img data-src="" src="../assets/global/images/gallery/3.jpg" class="img-responsive" alt="gallery 3">
                          </div>
                          <div class="fileinput-preview fileinput-exists thumbnail"></div>
                          <div>
                            <span class="btn btn-default btn-file"><span class="fileinput-new">Select image...</span><span class="fileinput-exists">Change</span>
                            <input type="file" name="...">
                            </span>
                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="icon-target"></i> <strong>Select</strong> Inputs</h3>
                </div>
                <div class="panel-content">
                  <form role="form">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Select with search</label>
                          <select class="form-control" data-search="true">
                            <option value="United States">United States</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-bissau">Guinea-bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                            <option value="Korea, Republic of">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Helena">Saint Helena</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-leste">Timor-leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Select with Image includes</label>
                          <select multiple class="form-control" data-placeholder="Choose a country...">
                            <optgroup label="North America">
                              <option value="image-USA">USA</option>
                              <option value="image-CANADA">Canada</option>
                              <option value="image-MEXICO">Mexico</option>
                            </optgroup>
                            <optgroup label="Europe">
                              <option value="image-SPANISH">Spain</option>
                              <option value="image-FRENCH">France</option>
                              <option value="image-UNITED-KINGDOM">United Kingdom</option>
                              <option value="image-italy">Italy</option>
                            </optgroup>
                            <optgroup label="Africa">
                              <option value="image-botswana">Botswana</option>
                              <option value="image-cameroon">Cameroon</option>
                              <option value="image-niger">Niger</option>
                            </optgroup>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row m-t-10">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Loading Data Example</label>
                          <div>
                            <input type="text" class="form-control" id="demo-loading-data">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Multiple Select</label>
                          <select multiple class="form-control" data-placeholder="Choose one or various country...">
                            <optgroup label="North America">
                              <option value="USA">USA</option>
                              <option value="CANADA">Canada</option>
                              <option value="MEXICO">Mexico</option>
                            </optgroup>
                            <optgroup label="South America">
                              <option value="USA">Brazil</option>
                              <option value="peru">Peru</option>
                              <option value="argentina">Argentina</option>
                            </optgroup>
                            <optgroup label="Europe">
                              <option value="SPANISH">Spain</option>
                              <option value="FRENCH">France</option>
                              <option value="UNITED-KINGDOM">United Kingdom</option>
                              <option value="ITALY">Italy</option>
                              <option value="SPANISH">Deutshland</option>
                              <option value="FRENCH">France</option>
                              <option value="Belgium">Belgium</option>
                            </optgroup>
                            <optgroup label="Africa">
                              <option value="Angola">Angola</option>
                              <option value="Botswana">Botswana</option>
                              <option value="Cameroon">Cameroon</option>
                              <option value="Ghana">Ghana</option>
                            </optgroup>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row m-t-10">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Tags Input</label>
                          <div>
                            <input class="select-tags form-control" value="brown,red,green">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>White Look</label>
                          <select class="form-control form-white" data-style="white" data-placeholder="Select a country...">
                            <option value="USA">USA</option>
                            <option value="CANADA">Canada</option>
                            <option value="MEXICO">Mexico</option>
                            <option value="SPANISH">Spain</option>
                            <option value="FRENCH">France</option>
                            <option value="UNITED-KINGDOM">United Kingdom</option>
                            <option value="ITALY">Italy</option>
                            <option value="SPANISH">Deutshland</option>
                            <option value="FRENCH">France</option>
                            <option value="Belgium">Belgium</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </form>
                  <label class="form-label">Modal Example</label>
                  <div>
                    <button class="btn btn-dark" data-toggle="modal" data-target="#modal-select">Show in modal</button>
                  </div>   
                </div>
              </div>
            </div>
            <div class="col-md-6 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="icon-target"></i> <strong>Innovative</strong> Text Inputs</h3>
                </div>
                <div class="panel-content">
                  <div class="row">
                    <div class="col-lg-12">
                      <p class="m-b-30">We want to share with you inspirational text input design, ideas for enhancing text input interactions.</p>
                      <div class="tabs tabs-linetriangle">
                        <ul class="nav nav-tabs">
                          <li class="width-20p active"><a href="#hoshi" data-toggle="tab"><span class="text-center">Hoshi</span></a></li>
                          <li class="width-20p"><a href="#kuro" data-toggle="tab"><span class="text-center">Kuro</span></a></li>
                          <li class="width-20p"><a href="#jiro" data-toggle="tab"><span class="text-center">Jiro</span></a></li>
                          <li class="width-20p"><a href="#ichiro" data-toggle="tab"><span class="text-center">Ichiro</span></a></li>
                          <li class="width-20p"><a href="#juro" data-toggle="tab"><span class="text-center">Juro</span></a></li>
                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane fade in active" id="hoshi">
                            <div class="row">
                              <div class="col-md-4">
                                <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="input-4" />
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                                <span class="input__label-content input__label-content--hoshi">Name</span>
                                </label>
                                </span>
                              </div>
                              <div class="col-md-4">
                                <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="input-5" />
                                <label class="input__label input__label--hoshi input__label--hoshi-color-2" for="input-5">
                                <span class="input__label-content input__label-content--hoshi">Street</span>
                                </label>
                                </span>
                              </div>
                              <div class="col-md-4">
                                <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="input-6" />
                                <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="input-6">
                                <span class="input__label-content input__label-content--hoshi">Town</span>
                                </label>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="kuro">
                            <div class="row">
                              <div class="col-md-4">
                                <span class="input input--kuro">
                                <input class="input__field input__field--kuro" type="text" id="input-7" />
                                <label class="input__label input__label--kuro" for="input-7">
                                <span class="input__label-content input__label-content--kuro">Username</span>
                                </label>
                                </span>
                              </div>
                              <div class="col-md-4">
                                <span class="input input--kuro">
                                <input class="input__field input__field--kuro" type="text" id="input-8" />
                                <label class="input__label input__label--kuro" for="input-8">
                                <span class="input__label-content input__label-content--kuro">Website</span>
                                </label>
                                </span>
                              </div>
                              <div class="col-md-4">
                                <span class="input input--kuro">
                                <input class="input__field input__field--kuro" type="text" id="input-9" />
                                <label class="input__label input__label--kuro" for="input-9">
                                <span class="input__label-content input__label-content--kuro">Invitation Code</span>
                                </label>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="jiro">
                            <div class="row">
                              <div class="col-md-4">
                                <span class="input input--jiro">
                                <input class="input__field input__field--jiro" type="text" id="input-10" />
                                <label class="input__label input__label--jiro" for="input-10">
                                <span class="input__label-content input__label-content--jiro">Cat's Name</span>
                                </label>
                                </span>
                              </div>
                              <div class="col-md-4">
                                <span class="input input--jiro">
                                <input class="input__field input__field--jiro" type="text" id="input-11" />
                                <label class="input__label input__label--jiro" for="input-11">
                                <span class="input__label-content input__label-content--jiro">Dog's Name</span>
                                </label>
                                </span>
                              </div>
                              <div class="col-md-4">
                                <span class="input input--jiro">
                                <input class="input__field input__field--jiro" type="text" id="input-12" />
                                <label class="input__label input__label--jiro" for="input-12">
                                <span class="input__label-content input__label-content--jiro">Hamster's Name</span>
                                </label>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="ichiro">
                            <div class="row">
                              <div class="col-md-4">
                                <span class="input input--ichiro">
                                <input class="input__field input__field--ichiro" type="text" id="input-25" />
                                <label class="input__label input__label--ichiro" for="input-25">
                                <span class="input__label-content input__label-content--ichiro">Bird's Color</span>
                                </label>
                                </span>
                              </div>
                              <div class="col-md-4">
                                <span class="input input--ichiro">
                                <input class="input__field input__field--ichiro" type="text" id="input-26" />
                                <label class="input__label input__label--ichiro" for="input-26">
                                <span class="input__label-content input__label-content--ichiro">Wing Span</span>
                                </label>
                                </span>
                              </div>
                              <div class="col-md-4">
                                <span class="input input--ichiro">
                                <input class="input__field input__field--ichiro" type="text" id="input-27" />
                                <label class="input__label input__label--ichiro" for="input-27">
                                <span class="input__label-content input__label-content--ichiro">Beak Length</span>
                                </label>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="juro">
                            <div class="row">
                              <div class="col-md-4">
                                <span class="input input--juro">
                                <input class="input__field input__field--juro" type="text" id="input-28" />
                                <label class="input__label input__label--juro" for="input-28">
                                <span class="input__label-content input__label-content--juro">First Name</span>
                                </label>
                                </span>
                              </div>
                              <div class="col-md-4">
                                <span class="input input--juro">
                                <input class="input__field input__field--juro" type="text" id="input-29" />
                                <label class="input__label input__label--juro" for="input-29">
                                <span class="input__label-content input__label-content--juro">Last Name</span>
                                </label>
                                </span>
                              </div>
                              <div class="col-md-4">
                                <span class="input input--juro">
                                <input class="input__field input__field--juro" type="text" id="input-30" />
                                <label class="input__label input__label--juro" for="input-30">
                                <span class="input__label-content input__label-content--juro">Maiden Name</span>
                                </label>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="icon-target"></i> <strong>Text</strong> Inputs</h3>
                </div>
                <div class="panel-content">
                  <div class="row">
                    <form class=" form-horizontal">
                      <div class="col-md-4">
                        <h3>Input <strong>Sizes</strong></h3>
                        <p>You can choose various sizes: small, medium and large input.</p>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Small</label>
                          <div class="col-sm-9">
                            <input class="form-control input-sm" type="text" placeholder="input-sm class">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Normal</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" placeholder="no class needed">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Large</label>
                          <div class="col-sm-9">
                            <input class="form-control input-lg" type="text" placeholder="input-lg class">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <h3>Input <strong>Color</strong></h3>
                        <p>You can change background color if you want.</p>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="col-sm-3 control-label">White</label>
                              <div class="col-sm-9">
                                <input class="form-control form-white" type="text" placeholder=".form-white class">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Default</label>
                              <div class="col-sm-9">
                                <input class="form-control" type="text" placeholder="no class needed">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Dark</label>
                              <div class="col-sm-9">
                                <input class="form-control form-dark" type="text" placeholder=".form-dark class">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Aero</label>
                              <div class="col-sm-9">
                                <input class="form-control bg-aero" type="text" placeholder="bg-aero class">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Primary</label>
                              <div class="col-sm-9">
                                <input class="form-control bg-primary" type="text" placeholder="bg-primary class">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Purple</label>
                              <div class="col-sm-9">
                                <input class="form-control bg-purple" type="text" placeholder="bg-purple class">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="row">
                    <form class=" form-horizontal">
                      <div class="col-md-12">
                        <h3><strong>Append / Prepend</strong> Icons</h3>
                        <p>Add icons inside your input to explain which type of data is required.</p>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Prepend</label>
                              <div class="col-sm-9 prepend-icon">
                                <input type="text" class="form-control" placeholder="Enter your name here...">
                                <i class="icon-user"></i>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Append</label>
                              <div class="col-sm-9 append-icon">
                                <input type="email" class="form-control" placeholder="Enter your password...">
                                <i class="icon-lock"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="col-sm-3 control-label">White</label>
                              <div class="col-sm-9 prepend-icon">
                                <input type="text" class="form-control form-white" placeholder="Enter your name here...">
                                <i class="icon-user"></i>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Dark</label>
                              <div class="col-sm-9 prepend-icon">
                                <input type="text" class="form-control form-dark" placeholder="Your email">
                                <i class="icon-envelope"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Before Addon</label>
                              <div class="col-sm-9">
                                <div class="input-group">
                                  <span class="input-group-addon">@</span>
                                  <input type="email" class="form-control form-white" placeholder="Email">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">After Addon</label>
                              <div class="col-sm-9">
                                <div class="input-group">
                                  <input type="text" class="form-control form-white" placeholder="Recipient's username">
                                  <span class="input-group-addon"><i class="icon-user p-0"></i></span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="row m-t-40">
                    <div class="col-md-8">
                      <h3>Various <strong>Type</strong></h3>
                      <p>Text input variation can be defined. For example, email or password.</p>
                      <div class="row">
                        <form class="form-horizontal">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Password</label>
                              <div class="col-sm-9">
                                <input class="form-control input-sm" type="password" placeholder="Protected content">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Email</label>
                              <div class="col-sm-9">
                                <input class="form-control input-sm" type="email" placeholder="Email type">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Number</label>
                              <div class="col-sm-9">
                                <input class="form-control input-sm" type="number" placeholder="Type a number">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Week</label>
                              <div class="col-sm-9">
                                <input class="form-control input-sm" type="week">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Month</label>
                              <div class="col-sm-9">
                                <input class="form-control input-sm" type="month">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Time</label>
                              <div class="col-sm-9">
                                <input class="form-control input-sm" type="time">
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <h3><strong>Tooltip</strong> Option</h3>
                      <p>You can add a tooltip inside, after or before input.</p>
                      <div class="row">
                        <form class=" form-horizontal">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Inside Tooltip</label>
                              <div class="col-sm-9 inside-tooltip">
                                <input type="text" name="name" class="form-control input-sm" placeholder="help me please :-)">
                                <i class="fa fa-question-circle c-blue" rel="popover" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Support Title"></i>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">After Tooltip</label>
                              <div class="col-sm-9 after-tooltip">
                                <input type="text" name="name" class="form-control input-sm" placeholder="help me please :-)">
                                <i class="icon-info" rel="popover" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Support Title"></i>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Before Tooltip</label>
                              <div class="col-sm-9 before-tooltip">
                                <input type="text" name="name" class="form-control input-sm" placeholder="help me please :-)">
                                <i class="icon-info" rel="popover" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Support Title"></i>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
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

      <!-- BEGIN MODAL SELECT -->
      <div class="modal fade" id="modal-select" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icons-office-52"></i></button>
              <h4 class="modal-title"><strong>Select Input</strong> inside modal</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                  <form role="form">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Select with search</label>
                          <select class="form-control" data-search="true">
                            <option value="United States">United States</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-bissau">Guinea-bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                            <option value="Korea, Republic of">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Helena">Saint Helena</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-leste">Timor-leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Multiple Select</label>
                          <select multiple class="form-control" data-placeholder="Choose one or various country...">
                            <optgroup label="North America">
                              <option value="USA">USA</option>
                              <option value="CANADA">Canada</option>
                              <option value="MEXICO">Mexico</option>
                            </optgroup>
                            <optgroup label="South America">
                              <option value="USA">Brazil</option>
                              <option value="peru">Peru</option>
                              <option value="argentina">Argentina</option>
                            </optgroup>
                            <optgroup label="Europe">
                              <option value="SPANISH">Spain</option>
                              <option value="FRENCH">France</option>
                              <option value="UNITED-KINGDOM">United Kingdom</option>
                              <option value="ITALY">Italy</option>
                              <option value="SPANISH">Deutshland</option>
                              <option value="FRENCH">France</option>
                              <option value="Belgium">Belgium</option>
                            </optgroup>
                            <optgroup label="Africa">
                              <option value="Angola">Angola</option>
                              <option value="Botswana">Botswana</option>
                              <option value="Cameroon">Cameroon</option>
                              <option value="Ghana">Ghana</option>
                            </optgroup>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row m-t-10">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Tags Input</label>
                          <div>
                            <input class="select-tags form-control" value="brown,red,green">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>White Look</label>
                          <select class="form-control form-white" data-style="white" data-placeholder="Select a country...">
                            <option value="USA">USA</option>
                            <option value="CANADA">Canada</option>
                            <option value="MEXICO">Mexico</option>
                            <option value="SPANISH">Spain</option>
                            <option value="FRENCH">France</option>
                            <option value="UNITED-KINGDOM">United Kingdom</option>
                            <option value="ITALY">Italy</option>
                            <option value="SPANISH">Deutshland</option>
                            <option value="FRENCH">France</option>
                            <option value="Belgium">Belgium</option>
                          </select>
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
      <!-- END MODAL SELECT -->

      <!-- BEGIN BUILDER -->
      
      <!-- END BUILDER -->
    </section>
    <!-- BEGIN QUICKVIEW SIDEBAR -->
   <?php
        include("includes/chat.php");
      ?>
    <!-- BEGIN SEARCH -->
    
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
    <script src="../assets/global/plugins/bootstrap/js/jasny-bootstrap.min.js"></script>
    
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
    <script src="../assets/global/plugins/switchery/switchery.min.js"></script> <!-- IOS Switch -->
    <script src="../assets/global/plugins/bootstrap-tags-input/bootstrap-tagsinput.min.js"></script> <!-- Select Inputs -->
    <script src="../assets/global/plugins/dropzone/dropzone.min.js"></script>  <!-- Upload Image & File in dropzone -->
    <script src="../assets/global/js/pages/form_icheck.js"></script>  <!-- Change Icheck Color - DEMO PURPOSE - OPTIONAL -->
    <!-- END PAGE SCRIPT -->
    <script src="../assets/admin/layout2/js/layout.js"></script>
  </body>
</html>