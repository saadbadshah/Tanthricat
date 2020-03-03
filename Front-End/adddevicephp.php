
<?php
    
    session_start();
  
  // If the Register buttton is pressed..
  if(isset($_POST['AddDevice'])){

      // file to connect to the db
      require('db.php');

      //set all the text box values to variables
      $HomeID = $_SESSION['HomeID'];
      $Nickname = $_POST['devicenickname'];
      $Name = $_POST['devicename'];
      $Manufacturer = $_POST['manufacturername'];
      $Model = $_POST['model'];
      $EnergyRating = $_POST['energyrating'];
      $Category = $_POST['Category'];
      $Room = $_POST['Room'];
      // if all the text boxes are empty send the user back to the page with an error message
      if(empty($HomeID) || empty($Name) || empty($Manufacturer) || empty($Model) || empty($EnergyRating) || $Category == '- Select Device Category -' || $Room == '- Select Room -') {

      header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/devices-add-new.php?error=emptyfields");
      exit();
      }
      else {

            // select query using a prepared statment to prevent SQL injections, The query is to see if the username is already taken
            $sql = "SELECT Model FROM DevicesTanthricat WHERE Model=?";
            // connection from db file
            $stmt = mysqli_stmt_init($conn);

            // if the user has tried to perform an SQL injection they will be sent back to the page with an error message or if the connection  has failed they will be sent back wirth an error message
            if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/devices-add-new.php?error=sqlerror");
            exit();
            }
            else{
                // changes the '?' in the prepared statment to the username and makes sure that the values are suitable to that of a string or "s"
                mysqli_stmt_bind_param($stmt, "i", $Model);
                // executes the statement
                mysqli_stmt_execute($stmt);

                // The results are then stored in a variable named result check
                mysqli_stmt_store_result($stmt);
                $resultcheck = mysqli_stmt_num_rows($stmt);

                // If the resultcheck equals 0, then the HouseID is not valid
                if($resultcheck == 1) {
                header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/devices-add-new.php?error=devicealreadythere");
                exit();
                }
                else{

                    $sql = "INSERT INTO DevicesTanthricat (KeyID, Model, Nickname, Name, ManufacturerName, EnergyRating, Category, Room) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    // if the user has tried to perform an SQL injection they will be sent back to the page with an error message or if the connection  has failed they will be sent back wirth an error message
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/devices-add-new.php?error=sqlerror");
                    exit();
                    }    

                    else {
                    // changes the '?' in the prepared statment to the username and password and makes sure that the values are suitable to that of a string or "s"
                    mysqli_stmt_bind_param($stmt, "issssiss", $HomeID, $Model, $Nickname, $Name, $Manufacturer, $EnergyRating, $Category, $Room);
                    // the statment is the executed runing the quering and saving the information to the db, the user is then sent to the Login page with a success message
                    mysqli_stmt_execute($stmt);
                    header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/devices-add-new.php?error=deviceadded");
                    exit();
                    }   
                    // Closing the statment and the SQL connection
                    mysqli_stmt_close($stmt);
                    mysqli_close($conn);    
                }
              }
               
          }
  }
  // if nothing has been entered taked the user back to the page
  else {
  header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/devices-add-new.php?error=101");
  exit();
  }
?>



