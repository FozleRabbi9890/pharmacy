<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.blade.php" class="logo"><b>DASH<span>IO</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.blade.php#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.blade.php#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.blade.php#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.blade.php#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.blade.php#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.blade.php#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.blade.php#">
                  <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.blade.php#">
                  <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.blade.php#">
                  <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.blade.php#">
                  <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.blade.php#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.blade.php#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.blade.php#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.blade.php#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.blade.php#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.blade.php#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.blade.php#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.blade.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.blade.php"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Sam Soffes</h5>
          <li class="mt">
            <a href="index.blade.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>UI Elements</span>
              </a>
            <ul class="sub">
              <li><a href="general.blade.php">General</a></li>
              <li><a href="buttons.blade.php">Buttons</a></li>
              <li><a href="panels.blade.php">Panels</a></li>
              <li><a href="font_awesome.blade.php">Font Awesome</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Components</span>
              </a>
            <ul class="sub">
              <li><a href="grids.blade.php">Grids</a></li>
              <li><a href="calendar.blade.php">Calendar</a></li>
              <li><a href="gallery.blade.php">Gallery</a></li>
              <li><a href="todo_list.blade.php">Todo List</a></li>
              <li><a href="dropzone.blade.php">Dropzone File Upload</a></li>
              <li><a href="inline_editor.blade.php">Inline Editor</a></li>
              <li><a href="file_upload.blade.php">Multiple File Upload</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Extra Pages</span>
              </a>
            <ul class="sub">
              <li><a href="blank.blade.php">Blank Page</a></li>
              <li><a href="login.blade.php">Login</a></li>
              <li><a href="lock_screen.blade.php">Lock Screen</a></li>
              <li><a href="profile.blade.php">Profile</a></li>
              <li><a href="invoice.blade.php">Invoice</a></li>
              <li><a href="pricing_table.blade.php">Pricing Table</a></li>
              <li><a href="faq.blade.php">FAQ</a></li>
              <li><a href="404.blade.php">404 Error</a></li>
              <li><a href="500.blade.php">500 Error</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Forms</span>
              </a>
            <ul class="sub">
              <li><a href="form_component.blade.php">Form Components</a></li>
              <li><a href="advanced_form_components.blade.php">Advanced Components</a></li>
              <li><a href="form_validation.blade.php">Form Validation</a></li>
              <li><a href="contactform.blade.php">Contact Form</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Data Tables</span>
              </a>
            <ul class="sub">
              <li><a href="basic_table.blade.php">Basic Table</a></li>
              <li><a href="responsive_table.blade.php">Responsive Table</a></li>
              <li><a href="advanced_table.blade.php">Advanced Table</a></li>
            </ul>
          </li>
          <li>
            <a class="active" href="inbox.blade.php">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">3</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Charts</span>
              </a>
            <ul class="sub">
              <li><a href="morris.blade.php">Morris</a></li>
              <li><a href="chartjs.blade.php">Chartjs</a></li>
              <li><a href="flot_chart.blade.php">Flot Charts</a></li>
              <li><a href="xchart.blade.php">xChart</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li><a href="lobby.blade.php">Lobby</a></li>
              <li><a href="chat_room.blade.php"> Chat Room</a></li>
            </ul>
          </li>
          <li>
            <a href="google_maps.blade.php">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!-- page start-->
        <div class="row mt">
          <div class="col-sm-3">
            <section class="panel">
              <div class="panel-body">
                <a href="mail_compose.blade.php" class="btn btn-compose">
                  <i class="fa fa-pencil"></i>  Compose Mail
                  </a>
                <ul class="nav nav-pills nav-stacked mail-nav">
                  <li class="active"><a href="inbox.blade.php"> <i class="fa fa-inbox"></i> Inbox  <span class="label label-theme pull-right inbox-notification">3</span></a></li>
                  <li><a href="#"> <i class="fa fa-envelope-o"></i> Send Mail</a></li>
                  <li><a href="#"> <i class="fa fa-exclamation-circle"></i> Important</a></li>
                  <li><a href="#"> <i class="fa fa-file-text-o"></i> Drafts <span class="label label-info pull-right inbox-notification">8</span></a></a>
                  </li>
                  <li><a href="#"> <i class="fa fa-trash-o"></i> Trash</a></li>
                </ul>
              </div>
            </section>
            <section class="panel">
              <div class="panel-body">
                <ul class="nav nav-pills nav-stacked labels-info ">
                  <li>
                    <h4>Friends Online</h4>
                  </li>
                  <li>
                    <a href="#">
                        <img src="img/friends/fr-10.jpg" class="img-circle" width="20">Laura
                        <p><span class="label label-success">Available</span></p>
                      </a>
                  </li>
                  <li>
                    <a href="#">
                        <img src="img/friends/fr-05.jpg" class="img-circle" width="20">David
                        <p><span class="label label-danger"> Busy</span></p>
                      </a>
                  </li>
                  <li>
                    <a href="#">
                        <img src="img/friends/fr-01.jpg" class="img-circle" width="20">Mark
                        <p>Offline</p>
                      </a>
                  </li>
                  <li>
                    <a href="#">
                        <img src="img/friends/fr-03.jpg" class="img-circle" width="20">Phillip
                        <p>Offline</p>
                      </a>
                  </li>
                  <li>
                    <a href="#">
                        <img src="img/friends/fr-02.jpg" class="img-circle" width="20">Joshua
                        <p>Offline</p>
                      </a>
                  </li>
                </ul>
                <a href="#"> + Add More</a>
                <div class="inbox-body text-center inbox-action">
                  <div class="btn-group">
                    <a class="btn mini btn-default" href="javascript:;">
                      <i class="fa fa-power-off"></i>
                      </a>
                  </div>
                  <div class="btn-group">
                    <a class="btn mini btn-default" href="javascript:;">
                      <i class="fa fa-cog"></i>
                      </a>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="col-sm-9">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case">
                    View Message
                    <form action="#" class="pull-right mail-src-position">
                      <div class="input-append">
                        <input type="text" class="form-control " placeholder="Search Mail">
                      </div>
                    </form>
                  </h4>
              </header>
              <div class="panel-body ">
                <div class="mail-header row">
                  <div class="col-md-8">
                    <h4 class="pull-left"> Dashio, New Admin Dashboard & Front-end </h4>
                  </div>
                  <div class="col-md-4">
                    <div class="compose-btn pull-right">
                      <a href="mail_compose.blade.php" class="btn btn-sm btn-theme"><i class="fa fa-reply"></i> Reply</a>
                      <button class="btn  btn-sm tooltips" data-original-title="Print" type="button" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-print"></i> </button>
                      <button class="btn btn-sm tooltips" data-original-title="Trash" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-trash-o"></i></button>
                    </div>
                  </div>
                </div>
                <div class="mail-sender">
                  <div class="row">
                    <div class="col-md-8">
                      <img src="img/ui-zac.jpg" alt="">
                      <strong>Zac Doe</strong>
                      <span>[zac@youremail.com]</span> to
                      <strong>me</strong>
                    </div>
                    <div class="col-md-4">
                      <p class="date"> 10:15AM 02 FEB 2014</p>
                    </div>
                  </div>
                </div>
                <div class="view-mail">
                  <p>As he bent his head in his most courtly manner, there was a secrecy in his smiling face, and he conveyed an air of mystery to those words, which struck the eyes and ears of his nephew forcibly. At the same time, the thin straight lines
                    of the setting of the eyes, and the thin straight lips, and the markings in the nose, curved with a sarcasm that looked handsomely diabolic. </p>
                  <p>"Yes," repeated the Marquis. "A Doctor with a daughter. Yes. So commences the new philosophy! You are fatigued. Good night!"</p>
                  <p>It would have been of as much avail to interrogate any stone face outside the chateau as to interrogate that face of his. The nephew looked at him, in vain, in passing on to the door. </p>
                  <p>"Good night!" said the uncle. "I look to the pleasure of seeing you again in the morning. Good repose! Light Monsieur my nephew to his chamber there!--And burn Monsieur my nephew in his bed, if you will," he added to himself, before
                    he rang his little bell again, and summoned his valet to his own bedroom.</p>
                </div>
                <div class="attachment-mail">
                  <p>
                    <span><i class="fa fa-paperclip"></i> 2 attachments — </span>
                    <a href="#">Download all attachments</a> |
                    <a href="#">View all images</a>
                  </p>
                  <ul>
                    <li>
                      <a class="atch-thumb" href="#">
                        <img src="img/instagram.jpg">
                        </a>
                      <a class="name" href="#">
                        IMG_001.jpg
                        <span>20KB</span>
                        </a>
                      <div class="links">
                        <a href="#">View</a> -
                        <a href="#">Download</a>
                      </div>
                    </li>
                    <li>
                      <a class="atch-thumb" href="#">
                        <img src="img/weather.jpg">
                        </a>
                      <a class="name" href="#">
                        IMG_001.jpg
                        <span>20KB</span>
                        </a>
                      <div class="links">
                        <a href="#">View</a> -
                        <a href="#">Download</a>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="compose-btn pull-left">
                  <a href="mail_compose.blade.php" class="btn btn-sm btn-theme"><i class="fa fa-reply"></i> Reply</a>
                  <button class="btn btn-sm "><i class="fa fa-arrow-right"></i> Forward</button>
                  <button class="btn  btn-sm tooltips" data-original-title="Print" type="button" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-print"></i> </button>
                  <button class="btn btn-sm tooltips" data-original-title="Trash" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-trash-o"></i></button>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="mail_view.blade.php#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->

</body>

</html>