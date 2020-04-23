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

    <title>Reports</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">

    <!-- Custom CSS for this page -->

    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!--External CSS -->

        <!-- Font Awesome -->
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

        <!-- MorrisJS Graph CSS -->
       <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
		
       
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  
		<!-- JQuery Multi Select -->
		<link rel="stylesheet" type="text/css" href="assets/jquery-multi-select/css/multi-select.css" />

		
		

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

          		<div class="row">
          			<div class="col-lg-8">
          				<section class="card">
                          	<header class="card-header">
                              	Energy Consumption
                          	</header>
                          	<div class="card-body">
                              	<div id="line-chart"></div>
                              	<br>
                              	<div class="text-center">
                          			<button type="button" class="btn btn-default">Weekly</button>
                          			<button type="button" class="btn btn-default">Monthly</button>
                          			<button type="button" class="btn btn-default">Yearly</button>
                          		</div>
                          	</div>
                      	</section>
                  	</div>
                  	<div class="col-lg-4">
          				<section class="card">
                          	<header class="card-header">
                              	Recommendations
                          	</header>
                          	<div class="card-body">
                              	<p>This is a recommendation</p>
                          	</div>
                      	</section>
                  	</div>
              	</div>

              	<div class="row">

          			<div class="col-lg-6">
          				<section class="card">
                          	<header class="card-header">
                              	Device Filters
                          	</header>
                          	<div class="card-body">
                          		<div class="col-lg-12" style="background-color: #F1F1F1; border-radius:5px; color:black; padding:20px; margin-bottom:15px">
                          			<p>💡 Select the <strong>Devices</strong> that you would like to view the energy consumption for on the graph above.</p>
                          			<button type="button" class="btn btn-info" style="margin-bottom: 5px" onclick="enableFiltByDevice()">Click to Filter By Device</button>
                          		</div>
                          		<form action="#" class="form-horizontal tasi-form">
	                              	<div class="form-group row last">
	                                    <div class="col-md-9">
		                                    <select name="country" class="multi-select" multiple="" id="my_multi_select3" disabled="disabled">
		                                   		<option value="AF">Samsung TV</option>
		                                      	<option value="AL">Kitchen Lights</option>
                                     			<option value="DZ">Living Room Lights</option>
		                                      	<option value="AS">Bathroom Lights</option>
		                                      	<option value="AD">Cooker</option>
		                                      	<option value="AO">TV 2</option>
	                                    	</select>
                              			</div>
	                              	</div>
                          		</form>
                          	</div>
                      	</section>
                  	</div>

                  	<div class="col-lg-6">
          				<section class="card">
                          	<header class="card-header">
                              	Device Category Filters
                          	</header>
                          	<div class="card-body">
                          		<div class="col-lg-12" style="background-color: #F1F1F1; border-radius:5px; color:black; padding:20px; margin-bottom:15px">
                          			<p>💡 Select the <strong>Device Categories</strong> that you would like to view the energy consumption for on the graph above.</p>
                          			<button type="button" class="btn btn-info" style="margin-bottom: 5px" onclick="enableFiltByCategory()">Click to Filter By Category</button>
                          		</div>
                              	<form action="#" class="form-horizontal tasi-form">
	                              	<div class="form-group row">
	                                  	<div class="col-md-9">
	                                      	<select multiple="multiple" class="multi-select" id="my_multi_select1" name="my_multi_select1[]" disabled='disabled'>
	                                          	<option>Kitchen</option>
	                                          	<option>General Applicances</option>
	                                          	<option>Entertainment</option>
	                                          	<option>Lights</option>
	                                      	</select>
	                                  	</div>
	                              	</div>
                          		</form>
                          	</div>
                      	</section>
                  	</div>

              	</div>


         
          </section>
        </section>
        <!--main content end-->
<?php
 // Connects to Our Database 
require 'db.php';
// Retrieve the nickname, energy rating, and last on date of all currently active devices (State is 1/ON).
$sql = "SELECT Duration, EnergyUsed, EnergyRating FROM DevicesTanthricat";

$result = mysqli_query($conn, $sql);
$chart_data = '';

while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ Duration:'".$row["Duration"]."', EnergyUsed:".$row["EnergyUsed"].",EnergyRating:".$row["EnergyRating"]."}, ";
}
//$chart_data = substr($chart_data, 0, -2);
// For each active device, store its data as an object inside the array.
// If no devices are active, then nothing will be sent.

// Convert the array into a string to prepare for the AJAX call in morris-script.js
?>

 <script>
    $(document).ready(function() {
    lineChart();
 
  $(window).resize(function() {
   
    window.lineChart.redraw();
    
  });
});

function lineChart() {
  window.lineChart = Morris.Line({
    element: 'line-chart',
   data:[<?php echo $chart_data;?>],
    xkey: 'Duration',
    ykeys: ['EnergyUsed','EnergyRating'],
    labels: ['EnergyUsed','EnergyRating'],
    lineColors: ['#1e88e5','#ff3321'],
    lineWidth: '3px',
    resize: true,
    redraw: true
  });
}


</script>



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

    

		<!-- Multi-Select and QuickSearch -->
	    
	    <script type="text/javascript" src="assets/jquery-multi-select/js/jquery.multi-select.js"></script>

  		<script type="text/javascript" src="assets/jquery-multi-select/js/jquery.quicksearch.js"></script>

  		<script src="js/advanced-form-components.js"></script>
  		

    <!-- EXTRA JS CODE FOR THIS PAGE -->

    <script>
    	function enableFiltByDevice(){
			// document.getElementById("my_multi_select3").setAttribute("disabled", "disabled");
			$('#my_multi_select3').removeAttr('disabled');
			$('#my_multi_select3').multiSelect('refresh');
			$('#my_multi_select1').attr('disabled', 'disabled');
			$('#my_multi_select1').multiSelect('refresh');
    	}

    	function enableFiltByCategory(){
			// document.getElementById("my_multi_select3").setAttribute("disabled", "disabled");
			$('#my_multi_select1').removeAttr('disabled');
			$('#my_multi_select1').multiSelect('refresh');

			$('#my_multi_select3').attr('disabled', 'disabled');
			$('#my_multi_select3').multiSelect('refresh');
    	}

    </script>

  </body>
</html>
