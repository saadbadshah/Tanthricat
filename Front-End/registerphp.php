
<?php
    
	// If the Register buttton is pressed..
	if(isset($_POST['Register'])){

    	// file to connect to the db
    	require('db.php');

    	//set all the text box values to variables
    	$username = $_POST['Email'];
    	$Password = $_POST['Password1'];
    	$Password2 = $_POST['Password2'];
    	$FirstName = $_POST['FirstName'];
    	$LastName = $_POST['LastName'];
    	$HomeID = $_POST['HomeID'];

    	// if all the text boxes are empty send the user back to the page with an error message
    	if(empty($username) || empty($Password) || empty($Password2) || empty($FirstName) || empty($LastName) || empty($HomeID)) {

    	header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/registration.php?error=emptyfields");
    	exit();
    	}
   	 
    	// If the user has entered an invalid email send them back to the apge with an error message
    	else if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
    	header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/registration.php?error=invalidEmail");
    	exit();
    	}

    	// if the passwords do not match then send the user back to the page with an error message
    	else if ($Password !== $Password2) {
    	header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/registration.php?error=passsnotthesame");
    	exit();
    	}

    	// if the HouseID is not 8 chars long send the user back with and error message
    	else if (mb_strlen($HomeID) !== 8) {
    	header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/registration.php?error=invalidHouseID");
    	exit();
    	}

   	 

    	else {
   	 
    	// select query using a prepared statment to prevent SQL injections, The query is to see if the username is already taken
    	$sql = "SELECT * FROM KeysTanthricat WHERE KeyID=?";
    	// connection from db file
    	$stmt = mysqli_stmt_init($conn);
   	 
    	// select query using a prepared statment to prevent SQL injections, The query is to see if the username is already taken
    	$sql4 = "SELECT * FROM KeysTanthricat WHERE KeyID=?";
    	// connection from db file
    	$stmt4 = mysqli_stmt_init($conn);
   	 
    	// if the user has tried to perform an SQL injection they will be sent back to the page with an error message or if the connection  has failed they will be sent back wirth an error message
    	if (!mysqli_stmt_prepare($stmt, $sql)) {
    	header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/registration.php?error=sqlerror");
    	exit();
    	}
   	 
    	// if the user has tried to perform an SQL injection they will be sent back to the page with an error message or if the connection  has failed they will be sent back wirth an error message
    	else if (!mysqli_stmt_prepare($stmt4, $sql4)) {
    	header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/registration.php?error=sqlerror");
    	exit();
    	}
      else {
        // changes the '?' in the prepared statment to the username and makes sure that the values are suitable to that of a string or "s"
        mysqli_stmt_bind_param($stmt, "i", $HomeID);
        // executes the statement
        mysqli_stmt_execute($stmt);
       
        // The results are then stored in a variable named result check
        mysqli_stmt_store_result($stmt);
        $resultcheck = mysqli_stmt_num_rows($stmt);
       	
        // changes the '?' in the prepared statment to the username and makes sure that the values are suitable to that of a string or "s" 
        mysqli_stmt_bind_param($stmt4, "i", $HomeID);
        // executes the statement
        mysqli_stmt_execute($stmt4);
        // stores results in a variable
        $result = mysqli_stmt_get_result($stmt4);
       	 
       	 
       	 
        	// If the resultcheck equals 0, then the HouseID is not valid
        	if($resultcheck == 0) {
        	header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/registration.php?error=InvalidID");
        	exit();
     	    }
          // checks if the house id is already in use
    		  else if($row = mysqli_fetch_assoc($result)) {
               		 if ($row['Used']==1){
               			 header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/registration.php?error=IDinUse");
       					      exit();
               		 }
               		 
                         // If the HouseID is unique, then a query to save the username and password to the db is ran, using a prepared statment to prevent from SQL injection
                    else {

                      $sql = "INSERT INTO UsersTanthricat (KeyID, Username, Password, FirstName, LastName) VALUES (?, ?, ?, ?, ?)";
                      $stmt = mysqli_stmt_init($conn);
                       
                      // if the user has tried to perform an SQL injection they will be sent back to the page with an error message or if the connection  has failed they will be sent back wirth an error message
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/registration.php?error=sqlerror");
                        exit();
                        }    

                        else {
                           
                        // Password is hashed for security reasons before being saved to the db
                        $hashedpwd = password_hash($_POST['Password1'], PASSWORD_DEFAULT);

                        // changes the '?' in the prepared statment to the username and password and makes sure that the values are suitable to that of a string or "s"
                        mysqli_stmt_bind_param($stmt, "issss", $HomeID, $username, $hashedpwd, $FirstName, $LastName);
                           
                        // the statment is the executed runing the quering and saving the information to the db, the user is then sent to the Login page with a success message
                        mysqli_stmt_execute($stmt);
                        }

                        // update query to change the key to inuse
                        $sql2 = "UPDATE KeysTanthricat set Used=1 WHERE KeyID=?";
                        $stmt2 = mysqli_stmt_init($conn);
                       
                        // if the user has tried to perform an SQL injection they will be sent back to the page with an error message or if the connection  has failed they will be sent back wirth an error message
                        if (!mysqli_stmt_prepare($stmt2, $sql2)) {
                        header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/registration.php?error=sqlerror2");
                        exit();
                        }    

                        else {
                          // changes the '? ?' in the prepared statment to the username and password and makes sure that the values are suitable to that of a string or "ss"
                          mysqli_stmt_bind_param($stmt2, "i", $HomeID);
                           
                          // the statment is the executed runing the quering and saving the information to the db, the user is then sent to the Login page with a success message
                          mysqli_stmt_execute($stmt2);
                          header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/login.php");
                          exit();
                            }


                    }
               		 
               		 }
       	 
          }

        	}

        	// Closing the statment and the SQL connection
        	mysqli_stmt_close($stmt);
        	mysqli_close($conn);
        	}

	// if nothing has been entered taked the user back to the page
	else {
	header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/registration.php");
	exit();
	}
?>



