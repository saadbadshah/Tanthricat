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
    <meta name="author" content="Tanthricat Solutions" >
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

        <script type="text/javascript" src="jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="jquery.autocomplete.js"></script>

        
 <script type="text/javascript" src="/js/jquery.js"></script>
 <script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>
 <script type="text/javascript" class="include" type="text/javascript" src="/js/jquery.dcjqaccordion.2.7.js"></script>
 <script type="text/javascript" src="/js/jquery.scrollTo.min.js"></script>
 <script type="text/javascript" src="/js/jquery.nicescroll.js" type="text/javascript"></script>
 <script type="text/javascript" src="/js/jquery.customSelect.min.js" ></script>
 <script type="text/javascript" src="/js/respond.min.js" ></script>
 <script type="text/javascript" src="/js/common-scripts.js"></script>



 <script> 
 jQuery(function(){ 
 $("#search").autocomplete("search.php");
 });
 </script>


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
            <div class="row">
                <!-- Devices Table -->
                    <div class="col-lg-6">
                        <section class="card">
                            <header class="card-header">
                                Search Our Database:
                            </header>
                            <div class="devices-add-form">

                                <form action="devices-add-new.php">
                                    <div class="form-group">
                                        <label for="device-name">Enter your device name:</label>
                                        <input type="text" class="form-control" id="search" name="q">
                                        <button class="btn btn-primary" style="margin-top:190px;">Add Device</button>
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


    



<?php


// Variable Names
include 'db.php';
$search=$_GET['q'];

$data = "SELECT DeviceName,EnergyPH,Model,ManufaName from Dummyy WHERE DeviceName like '%".$search."%'LIMIT 1";
$result = $conn->query($data);

 while($row = $result->fetch_assoc()) {
  
  ?>

                            <div class="devices-add-form">
                                <form action="adddevicephp.php" method="post">
                                    <div class="form-group">
                                        <label for="device-nickname">Device Nickname(Must Be Unique):</label>
                                        <input type="text" class="form-control" id="devicenickname" name="devicenickname">
                                    </div>

                                    <div class="form-group">
                                        <label for="device-name">Device Name:</label>
                                        <input type="text" class="form-control" id="devicename" name="devicename" value="<?php echo $row['DeviceName']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="manufacturer-name">Manufacturer Name:</label>
                                        <input type="text" class="form-control" id="manufacturername" name="manufacturername" value="<?php echo $row['ManufaName']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="model">Model:</label>
                                        <input type="text" class="form-control" id="model" name="model" value="<?php echo $row['Model']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="energy-rating">Energy Rating:</label>
                                        <input type="number" class="form-control" id="energyrating" name="energyrating" value="<?php echo $row['EnergyPH']?>">
                                    </div>
 <?php
}
?>

 
                                    <div class="form-group">
                                        <label for="Room">Room:</label>
                                        <select class="custom-select mb-3" id="Room" name="Room">
                                         <option selected>- Select Room -</option>
                                         <?php
                                         include 'db.php';

                                          if (isset($_SESSION['HomeID'])) {

                                        $sql = '
                                        SELECT * FROM RoomsTanthricat WHERE KeyID="'.$_SESSION['HomeID'].'";
                                                ';
                                        
                                        // query db
                                        $result = mysqli_query($conn, $sql);

                                        // if the query worked then set userid to a variable
                                        if ($result) {

                                              while ($row = mysqli_fetch_assoc($result)) {
                                                $room = $row['Room'];
                                                          echo'
                                                                 <option value="'.$room.'">'.$room.'</option>


                                                          ';

                                                          }
                                                   
                                                

                                          // free the variable and connection for next statement
                                          mysqli_free_result($result);
                                          
                                          
                                            }
                                        }
                                         ?>
                                        </select>
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




  </body>
</html>
