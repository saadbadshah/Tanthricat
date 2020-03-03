<?php

	  session_start();
  
  // If the Register buttton is pressed..
  if(isset($_GET['name'])){
  	// file to connect to the db
      require('db.php');

      //set all the text box values to variables
      $HomeID = $_SESSION['HomeID'];
      $Room = $_GET['name'];

       	$sql = "INSERT INTO RoomsTanthricat (KeyID,Room) VALUES (?, ?)";
	    $stmt = mysqli_stmt_init($conn);
	    // if the user has tried to perform an SQL injection they will be sent back to the page with an error message or if the connection  has failed they will be sent back wirth an error message
	    if (!mysqli_stmt_prepare($stmt, $sql)) {
	    header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/house-map.php?error=sqlerror");
	    exit();
	    }    

	    else {
	    // changes the '?' in the prepared statment to the username and password and makes sure that the values are suitable to that of a string or "s"
	    mysqli_stmt_bind_param($stmt, "is", $HomeID, $Room);
	    // the statment is the executed runing the quering and saving the information to the db, the user is then sent to the Login page with a success message
	    mysqli_stmt_execute($stmt);
	    header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/house-map.php?error=Roomadded");
	    exit();
	    }   
	    // Closing the statment and the SQL connection
	    mysqli_stmt_close($stmt);
	    mysqli_close($conn);  









  } else {
  	echo"nope";
  }
?>