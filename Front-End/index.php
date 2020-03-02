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

	<title>Dashboard</title>

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
	        
	        <a href="index.php" class="logo"><span>Tanthricat</span></a>
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
	                        <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
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
                    <a class="active" href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="devices.php">
                        <i class="fa fa-desktop"></i>
                        <span>Devices</span>
                    </a>
                </li>

                <li>
                    <a href="house-map.php">
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

		        <li class="sub-menu">
		            <a href="javascript:;" >
		                <i class="fa fa-laptop"></i>
		                <span>Layouts</span>
		            </a>
	                <ul class="sub">
	                    <li><a  href="boxed_page.html">Boxed Page</a></li>
	                  	<li><a  href="horizontal_menu.html">Horizontal Menu</a></li>
	                  	<li><a  href="header-color.html">Different Color Top bar</a></li>
	                  	<li><a  href="mega_menu.html">Mega Menu</a></li>
	                  	<li><a  href="language_switch_bar.html">Language Switch Bar</a></li>
	                  	<li><a  href="email_template.html" target="_blank">Email Template</a></li>
	              	</ul>
		        </li>    
            </ul>
              <!-- sidebar menu end-->
          </div>
  		</aside>
      	<!--sidebar end-->


      	<!--main content start-->
      	<section id="main-content">
          <section class="wrapper">

              <!--FIRST ROW-->
              <div class="row state-overview">
                  <div class="col-lg-4 col-sm-6">
                      <section class="card">
                          <div class="symbol green">
                              <i class="fa fa-bolt"></i>
                          </div>
                          <div class="value">
                              <h1 class="count">
                                  0
                              </h1>
                              <p>Today's Energy Consumption</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                      <section class="card">
                          <div class="symbol green">
                              <i class="fa fa-bolt"></i>
                          </div>
                          <div class="value">
                              <h1 class="count2">
                                  0
                              </h1>
                              <p>Weekly Energy Consumption</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                      <section class="card">
                          <div class="symbol green">
                              <i class="fa fa-bolt"></i>
                          </div>
                          <div class="value">
                              <h1 class="count3">
                                  0
                              </h1>
                              <p>Monthly Energy Consumption</p>
                          </div>
                      </section>
                  </div>

                  <div class="col-lg-4 col-sm-6">
                      <section class="card">
                          <div class="symbol terques">
                              <i class="fa fa-refresh"></i>
                          </div>
                          <div class="value">
                              <h1 class="count">
                                  0
                              </h1>
                              <p>Today's Energy Generation</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                      <section class="card">
                          <div class="symbol terques">
                              <i class="fa fa-refresh"></i>
                          </div>
                          <div class="value">
                              <h1 class="count2">
                                  0
                              </h1>
                              <p>Weekly Energy Generation</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                      <section class="card">
                          <div class="symbol red">
                              <i class="fa fa-lightbulb-o"></i>
                          </div>
                          <div class="value">
                              <h1 class="count3">
                                  0
                              </h1>
                              <p>Quick Recommendations</p>
                          </div>
                      </section>
                  </div>
              </div>


              <!--SECOND ROW-->
              <div class="row">
              	<!-- Devices Table -->
              	<div class="col-lg-4">
                      <!--Active Devices Table start-->
                      <section class="card devices-card">
                          <header class="card-header">
                              Active Devices
                          </header>
                          <div class="scrollable">
                          	<!-- On the table tag below I added a 'devices-table' class to align all the text of the td's -->
	                          <table class="table text-center devices-table">
	                              <thead>
	                              <tr>
	                                  <th>Device Name</th>
	                                  <th>Last Switched On</th>
	                                  <th>State</th>
	                              </tr>
	                              </thead>
	                              <tbody>
	                              <?php

                                          // php file to connect to db
                                          require'db.php'; 

                                          if (isset($_SESSION['HomeID'])) {

                                            // sSQL statement 1
                                            $sql = '
                                            SELECT * FROM DevicesTanthricat WHERE KeyID="'.$_SESSION['HomeID'].'";
                                                    ';
                                            
                                            // query db
                                            $result = mysqli_query($conn, $sql);

                                            // if the query worked then set userid to a variable
                                            if ($result) {

                                                  while ($row = mysqli_fetch_assoc($result)) {
                                                    $name = $row['Name'];
                                                    $laston = $row['LastOn'];
                                                              if ($row['State'] == 0) {
                                                                    echo'<tr>
                                                                            <td>'.$name.'</td>
                                                                            <td>'.$laston.'</td>
                                                                            <td>OFF</td>
                                                                        </tr>
                                                                         ';
                                                                }
                                                              else{
                                                                    echo'<tr>
                                                                            <td>'.$name.'</td>
                                                                            <td>'.$laston.'</td>
                                                                            <td>ON</td>
                                                                        </tr>
                                                                        ';

                                                              }

                                                              }
                                                       
                                                    

                                              // free the variable and connection for next statement
                                              mysqli_free_result($result);
                                              
                                              
                                                }
                                            }

                                        ?>
	                              </tbody>
	                          </table>
	                      </div>
                      </section>
                      <!--Active Devices Table start-->
                </div>

                <!-- Chart -->
                <div class="col-lg-8">
                      <!--custom chart start-->
                    <!-- <section class="card"> -->
                      	<header class="card-header">
                              Graph
                        </header>
                      <div class="custom-bar-chart home-bar-chart">
                          <ul class="y-axis">
                              <li><span>100</span></li>
                              <li><span>80</span></li>
                              <li><span>60</span></li>
                              <li><span>40</span></li>
                              <li><span>20</span></li>
                              <li><span>0</span></li>
                          </ul>
                          <div class="bar">
                              <div class="title">JAN</div>
                              <div class="value tooltips" data-original-title="80%" data-toggle="tooltip" data-placement="top">80%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">FEB</div>
                              <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">MAR</div>
                              <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">APR</div>
                              <div class="value tooltips" data-original-title="55%" data-toggle="tooltip" data-placement="top">55%</div>
                          </div>
                          <div class="bar">
                              <div class="title">MAY</div>
                              <div class="value tooltips" data-original-title="20%" data-toggle="tooltip" data-placement="top">20%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">JUN</div>
                              <div class="value tooltips" data-original-title="39%" data-toggle="tooltip" data-placement="top">39%</div>
                          </div>
                          <div class="bar">
                              <div class="title">JUL</div>
                              <div class="value tooltips" data-original-title="75%" data-toggle="tooltip" data-placement="top">75%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">AUG</div>
                              <div class="value tooltips" data-original-title="45%" data-toggle="tooltip" data-placement="top">45%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">SEP</div>
                              <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">OCT</div>
                              <div class="value tooltips" data-original-title="42%" data-toggle="tooltip" data-placement="top">42%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">NOV</div>
                              <div class="value tooltips" data-original-title="60%" data-toggle="tooltip" data-placement="top">60%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">DEC</div>
                              <div class="value tooltips" data-original-title="90%" data-toggle="tooltip" data-placement="top">90%</div>
                          </div>
                      </div>
                      <!--custom chart end-->
                  <!-- </section> -->
                </div>

              </div>

          </section>
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
	<script src="js/jquery.sparkline.js" type="text/javascript"></script>
	<script src="js/jquery.customSelect.min.js" ></script>
	<script src="js/respond.min.js" ></script>

	<!--common script for all pages-->
	<script src="js/common-scripts.js"></script>

	<!-- Additonal JS files -->
	<script src="assets/switchery/switchery.js"></script>
	<script src="js/sparkline-chart.js"></script>
	<script src="js/count.js"></script>

	<!-- EXTRA JS CODE FOR THIS PAGE -->
  	<script>

	  	//Switchery
		//The loop below adds the .js-switch class to all the switchery toggle switches
	    $(document).ready(function () {

	      	var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

			elems.forEach(function(html) {
			  var switchery = new Switchery(html);
			});

	    });

  	</script>

  </body>
</html>
