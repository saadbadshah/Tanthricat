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
                    <a href="reports.php">
                        <i class="fa fa-bar-chart-o"></i>
                        <span>Reports</span>
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
                              <h1 class="count4">
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
                              <h1 class="count4">
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
                              <h1 class="count4">
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
                              Devices
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
                                                    $laston = ''.$row['LastOnDate'].' at '.$row['LastOnTime'].'';
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
                              Energy Consumption Graph
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
