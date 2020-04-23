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

    <title>Edit Device</title>

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
                    <div class="col-lg-6">
                          <section class="card">
                            <header class="card-header">
                                Edit Device:
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
                                }
                               ?>
                            <?php

                            require'db.php'; 

                            
                            // if all the relevant information for the form has been entered and passed into the URL then proceed
                            if ( isset($_GET['Model']) and isset($_GET['Nickname']) and isset($_GET['Name']) and isset($_GET['ManufacturerName'] ) and isset($_GET['EnergyRating'] ) and isset($_GET['Category'] ) and isset($_GET['State'] ) and isset($_GET['Room'] )) {

                                if($_GET['State'] == 0){
                                    echo '
                                 <div class="devices-add-form">

                                <hr>

                                <h5>Device Name:</h5>
                                <p>'.$_GET['Name'].'</p>

                                <h5>Model:</h5>
                                <p>'.$_GET['Model'].'</p>

                                <h5>Manufacturer:</h5>
                                <p>'.$_GET['ManufacturerName'].'</p>

                                <hr>

                                <form action="updatedevice.php" method="post" id="updatedevice">
                                    <div class="form-group">
                                        <label for="Sate">State:</label>
                                        <input type="checkbox" class="js-switch id="Statedb" name="Statedb"" unchecked />
                                    </div>
                                    <div class="form-group">
                                        <label for="device-nickname">Device Nickname(Must Be Unique ):</label>
                                        <input type="text" class="form-control" value="'.$_GET['Nickname'].'" id="Nickname" name="Nickname">
                                    </div>
                                    <div class="form-group">
                                        <label for="energy-rating">Energy Rating (KW/h):</label>
                                        <input type="number" class="form-control" value="'.$_GET['EnergyRating'].'" id="EnergyRating" name="EnergyRating">
                                    </div>
                                    <div class="form-group">
                                        <label for="device-Room">Room:</label>
                                        <select class="custom-select mb-3" id="Room" name="Room">
                                            <option selected>'.$_GET['Room'].'</option>
                                    ';
                                    

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



                                    echo'
                                      </select>
                                    </div>

                                    

                                    <div class="form-group">
                                        <label for="email">Category:</label>
                                        <select class="custom-select mb-3" id="Category" name="Category">
                                            <option selected>'.$_GET['Category'].'</option>
                                            <option value="General Electronic">General Electronics</option>
                                            <option value="General Appliances">General Appliances</option>
                                            <option value="kitchen">Kitchen</option>
                                            <option value="TV / Entertainment">TV / Entertainment</option>
                                            <option value="Lighting">Lighting</option>
                                            <option value="heating-appliances">Heating</option>
                                            <option value="cooling-appliances">Cooling</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary" id="Update" name="Update">Update</button>
                                    <button type="submit" class="btn btn-danger" id="Delete" name="Delete">Delete Device</button>
                                    <input type="hidden" value="'.$_GET['Name'].'" id="Name" name="Name">
                                    <input type="hidden" value="'.$_GET['Model'].'" id="Model" name="Model">
                                    <input type="hidden" value="'.$_GET['ManufacturerName'].'" id="ManufacturerName" name="ManufacturerName">
                                </form>

                                </div>
                                ';  

                                }

                                else {
                                    echo '
                                 <div class="devices-add-form">

                                <hr>

                                <h5>Device Name:</h5>
                                <p>'.$_GET['Name'].'</p>

                                <h5>Model:</h5>
                                <p>'.$_GET['Model'].'</p>

                                <h5>Manufacturer:</h5>
                                <p>'.$_GET['ManufacturerName'].'</p>

                                <hr>

                                <form action="updatedevice.php" method="post" id="updatedevice">
                                    <div class="form-group">
                                        <label for="Sate">State:</label>
                                        <input type="checkbox" class="js-switch id="Statedb" name="Statedb"" checked />
                                    </div>
                                    <div class="form-group">
                                        <label for="device-nickname">Device Nickname(Must Be Unique ):</label>
                                        <input type="text" class="form-control" value="'.$_GET['Nickname'].'" id="Nickname" name="Nickname">
                                    </div>
                                    <div class="form-group">
                                        <label for="energy-rating">Energy Rating (KW/h):</label>
                                        <input type="number" class="form-control" value="'.$_GET['EnergyRating'].'" id="EnergyRating" name="EnergyRating">
                                    </div>
                                    <div class="form-group">
                                        <label for="device-Room">Room:</label>
                                        <select class="custom-select mb-3" id="Room" name="Room">
                                            <option selected>'.$_GET['Room'].'</option>
                                    ';

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
                                    

                                    echo'
                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Category:</label>
                                        <select class="custom-select mb-3" id="Category" name="Category">
                                            <option selected>'.$_GET['Category'].'</option>
                                            <option value="General Electronic">General Electronics</option>
                                            <option value="General Appliances">General Appliances</option>
                                            <option value="kitchen">Kitchen</option>
                                            <option value="TV / Entertainment">TV / Entertainment</option>
                                            <option value="Lighting">Lighting</option>
                                            <option value="heating-appliances">Heating</option>
                                            <option value="cooling-appliances">Cooling</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary" id="Update" name="Update">Update</button>
                                    <button type="submit" class="btn btn-danger" id="Delete" name="Delete">Delete Device</button>
                                    <input type="hidden" value="'.$_GET['Name'].'" id="Name" name="Name">
                                    <input type="hidden" value="'.$_GET['Model'].'" id="Model" name="Model">
                                    <input type="hidden" value="'.$_GET['ManufacturerName'].'" id="ManufacturerName" name="ManufacturerName">
                                </form>

                                </div>
                                ';  

                                }
                                  
                            }

                            else{
                              header("Location: http://www2.macs.hw.ac.uk/~jw97/CitiRentals/rent-car.php?error=EnterAllValues");
                              exit();
                            }

                            ?>
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
