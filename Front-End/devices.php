<?php 
  
  session_start();

  if (!isset($_SESSION['HomeID'])){
        header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/login.php");
    } else {
        
    }
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Home Automation Web Application">
    <meta name="author" content="Tanthricat Solutions">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Devices</title>

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

              <!--SECOND ROW-->
                <div class="row">
                <!-- Devices Table -->
                    <div class="col-lg-12">
                          <section class="card devices-card">
                                <header class="card-header">
                                    <div class="row">
                                    <div class="col-lg-4">
                                        <input class="form-control" id="SearchInput" type="text" placeholder="Search...">
                                        <br>
                                    </div>
                                    <div class="col-lg-8">
                                        <button onclick="window.location.href = 'devices-add-new.php';" type="button" class="btn btn-round btn-info" >Add New Device</button>
                                        <button type="button" class="btn btn-round btn-info">Select</button>
                                    </div>
                                </div>
                                <div class="row">
                                     <?php 

                                // when the user types something incorrect into the text boxes an error message will be dispaled 
                                // telling them what they did wrong

                                if (isset($_GET['error'])) {
                                  
                                  if ($_GET['error'] == "deviceedited") {
                                    echo '<p style="color:green; font-size:20px;">Device Has Been Edited</p> ';
                                  }
                                  else if ($_GET['error'] == "devicedeleted") {
                                    echo '<p style="color:green; font-size:20px;">Device Has Been Deleted</p> ';
                                  }
                                }
                               ?>    
                                </div>
                                    
                                </header>
                            <!--Devices Table start-->
                              <div class="devices-list-scrollable">
                                <!-- On the table tag below I added a 'devices-table' class to align all the text of the td's -->
                                
                                  
                                  <table class="table text-center devices-table">
                                       <thead>
                                      <tr>
                                          <th>Nickname</th>
                                          <th>Device Name</th>
                                          <th>Category</th>
                                          <th>Last Switched On</th>
                                          <th>Room</th>
                                          <th>State</th>
                                          <th>Action</th>
                                      </tr>
                                      </thead>
                                      <tbody id="DevicesTable">

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
                                                    $Nickname = $row['Nickname'];
                                                    $category = $row['Category'];
                                                    $laston = ''.$row['LastOnDate'].' at '.$row['LastOnTime'].'';
                                                              if ($row['State'] == 0) {
                                                                    echo'<tr>
                                                                            <td>'.$row['Nickname'].'</td>
                                                                            <td>'.$name.'</td>
                                                                            <td>'.$category.'</td>
                                                                            <td>'.$laston.'</td>
                                                                            <td>'.$row['Room'].'</td>
                                                                            <td>OFF</td>
                                                                            <td>
                                                                                <form action="editdevice.php" method="post" id="editdevice">
                                                                                    <button type="submit" class="btn btn-round btn-info" id="Edit" name="Edit">Edit</button>
                                                                                    <input type="hidden" value="'.$Nickname.'" name="Nickname" id="Nickname">
                                                                                </form>
                                                                            </td>
                                                                        </tr>
                                                                         ';
                                                                }
                                                              else{
                                                                    echo'<tr>
                                                                            <td>'.$row['Nickname'].'</td>
                                                                            <td>'.$name.'</td>
                                                                            <td>'.$category.'</td>
                                                                            <td>'.$laston.'</td>
                                                                            <td>'.$row['Room'].'</td>
                                                                            <td>ON</td>
                                                                            <td>
                                                                                <form action="editdevice.php" method="post" id="editdevice">
                                                                                    <button type="submit" class="btn btn-round btn-info" id="Edit" name="Edit">Edit</button>
                                                                                    <input type="hidden" value="'.$Nickname.'" name="Nickname" id="Nickname">
                                                                                </form>
                                                                            </td>
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
                          <!--Devices Table start-->
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
    <script src="js/jquery.customSelect.min.js" ></script>
    <script src="js/respond.min.js" ></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!-- Additonal JS files -->
    <script src="assets/switchery/switchery.js"></script>

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

        //Script for table search function taken from https://www.w3schools.com/bootstrap/bootstrap_filters.asp
        $(document).ready(function(){
          $("#SearchInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#DevicesTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });

    </script>

  </body>
</html>
