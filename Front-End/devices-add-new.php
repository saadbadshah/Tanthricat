<?php 
  
  session_start();

  if (!isset($_SESSION['HomeID'])){
        header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/login.php");
    } else {
        
    }

?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Home Automation Web Application">
    <meta name="author" content="Tanthricat Solutions">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Devices-Add New</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">

    <!-- Custom CSS for this page -->

    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!--External CSS -->

        <!-- Switchery-->
        <link rel="stylesheet" type="text/css" href="assets/switchery/switchery.css" />

        <!-- Font Awesome -->
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

</head>



<body class="light-sidebar-nav">

    <section id="container">
        <!--header start-->
        <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <i class="fa fa-bars"></i>
            </div>
            <!--logo start-->
            <a href="index.html" class="logo"><span>Tanthricat</span></a>
            <!--logo end-->


            <div class="nav notify-row" id="top_menu">

                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- Tasks Dropdown start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge badge-success">6</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 6 pending tasks</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Dashboard v1.3</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Iphone Development</div>
                                        <div class="percent">87%</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                            <span class="sr-only">87% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Mobile App</div>
                                        <div class="percent">33%</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                                            <span class="sr-only">33% Complete (danger)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Dashboard v1.3</div>
                                        <div class="percent">45%</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Tasks Dropdown end -->

                    <!-- Inbox Dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge badge-danger">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-red"></div>
                            <li>
                                <p class="red">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jonathan Smith</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is an example msg.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jhon Doe</span>
                                    <span class="time">10 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, Jhon Doe Bhai how are you ?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jason Stathum</span>
                                    <span class="time">3 hrs</span>
                                    </span>
                                    <span class="message">
                                        This is awesome dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jondi Rose</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is metrolab
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Inbox Dropdown end -->

                    <!-- Notification Dropdown start-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge badge-warning">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-yellow"></div>
                            <li>
                                <p class="yellow">You have 7 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    Server #3 overloaded.
                                    <span class="small italic">34 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="fa fa-bell"></i></span>
                                    Server #10 not respoding.
                                    <span class="small italic">1 Hours</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    Database overloaded 24%.
                                    <span class="small italic">4 hrs</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="fa fa-plus"></i></span>
                                    New user registered.
                                    <span class="small italic">Just now</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-info"><i class="fa fa-bullhorn"></i></span>
                                    Application error.
                                    <span class="small italic">10 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Notification Dropdown end -->
                </ul>
                <!--  notification end -->

            </div>

            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="img/avatar1_small.jpg">
                            <?php
                                if (isset($_SESSION['HomeID'])){
                                    echo '<span class="username">'.$_SESSION['First Name'].' '. $_SESSION['Last Name'].'</span>';
                                } else {

                                }

                            ?>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout dropdown-menu-right">
                            <div class="log-arrow-up"></div>
                            <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                            <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->


        <!--sidebar start-->
        <aside>
          <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a class="active" href="devices.php">
                        <i class="fa fa-desktop"></i>
                        <span>Devices</span>
                    </a>
                </li>

                <li>
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                        <span>House Map</span>
                    </a>
                </li>

                <li>
                    <a href="index.html">
                        <i class="fa fa-bar-chart-o"></i>
                        <span>Reports</span>
                    </a>
                </li>

                <li>
                    <a href="index.html">
                        <i class="fa fa-gears"></i>
                        <span>Settings</span>
                    </a>
                </li>    
            </ul>
              <!-- sidebar menu end-->
          </div>
        </aside>
        <!--sidebar end-->


        <!--main content start-->
        <section id="main-content">
          <section class="wrapper">
            <div class="row">
                <!-- Devices Table -->
                    <div class="col-lg-6">
                        <section class="card">
                            <header class="card-header">
                                Search Our Database:
                            </header>
                            <div class="devices-add-form">

                                <form action="/action_page.php">
                                    <div class="form-group">
                                        <label for="device-name">Enter your device name:</label>
                                        <input type="text" class="form-control" id="device-name">
                                    </div>
                                </form>

                            </div>
                        </section>
                    </div>
                    <div class="col-lg-6">
                        <section class="card">
                            <header class="card-header">
                                Add Manually:
                            </header>
                <?php 

                // when the user types something incorrect into the text boxes an error message will be dispaled 
                // telling them what they did wrong

                if (isset($_GET['error'])) {
                  
                  if ($_GET['error'] == "emptyfields") {
                    echo '<p style="color:red; font-size:20px;">   Fill in all fields!</p> ';
                  }
                  else if ($_GET['error'] == "sqlerror") {
                    echo '<p style="color:red; font-size:20px;">   SQL Error (Systems are Currently Down)</p> ';
                  }
                  else if ($_GET['error'] == "devicealreadythere") {
                    echo '<p style="color:red; font-size:20px;">   Device Has Already Been Added</p> ';
                  }
                  else if ($_GET['error'] == "deviceadded") {
                    echo '<p style="color:green; font-size:20px;">   Device Has Been Added</p> ';
                  }
                }
               ?>
                            <div class="devices-add-form">
                                <form action="adddevicephp.php" method="post">
                                    <div class="form-group">
                                        <label for="device-nickname">Device Nickname:</label>
                                        <input type="text" class="form-control" id="devicenickname" name="devicenickname">
                                    </div>
                                    <div class="form-group">
                                        <label for="device-name">Device Name:</label>
                                        <input type="text" class="form-control" id="devicename" name="devicename">
                                    </div>
                                    <div class="form-group">
                                        <label for="manufacturer-name">Manufacturer Name:</label>
                                        <input type="text" class="form-control" id="manufacturername" name="manufacturername">
                                    </div>
                                    <div class="form-group">
                                        <label for="model">Model:</label>
                                        <input type="text" class="form-control" id="model" name="model">
                                    </div>
                                    <div class="form-group">
                                        <label for="energy-rating">Energy Rating:</label>
                                        <input type="number" class="form-control" id="energyrating" name="energyrating">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Category:</label>
                                        <select class="custom-select mb-3" id="Category" name="Category">
                                            <option selected>- Select Device Category -</option>
                                            <option value="General Electronic">General Electronics</option>
                                            <option value="General Appliances">General Appliances</option>
                                            <option value="kitchen">Kitchen</option>
                                            <option value="TV / Entertainment">TV / Entertainment</option>
                                            <option value="Lighting">Lighting</option>
                                            <option value="heating-appliances">Heating</option>
                                            <option value="cooling-appliances">Cooling</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary" id="AddDevice" name="AddDevice">Submit</button>
                                </form>

                            </div>
                        </section>
                    </div>
        </section>
        <!--main content end-->


        <!--footer start-->
        <footer class="site-footer">
            <div class="text-center">
                2020 &copy; Tanthricat Solutions.
                <a href="#" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
    </section>


    <!-- LOADING JS FILES -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/jquery.customSelect.min.js" ></script>
    <script src="js/respond.min.js" ></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>



  </body>
</html>
