<?php  

  session_start();

if (isset($_POST['Update'])){

        require('db.php');


      $HomeID = $_SESSION['HomeID'];
      $Nickname = $_POST['Nickname'];
      $EnergyRating = $_POST['EnergyRating'];
      $Category = $_POST['Category'];
      $Name = $_POST['Name'];
      $Model = $_POST['Model'];
      $ManufacturerName = $_POST['ManufacturerName'];
      $State = $_POST['Statedb'];
      $Room = $_POST['Room'];

       // if all the text boxes are empty send the user back to the page with an error message
      if(empty($Nickname) || empty($Name) || empty($ManufacturerName) || empty($Model) || empty($EnergyRating) || $Category == '- Select Device Category -') {

      header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/devices-edit.php?error=emptyfields");
      exit();
      }

      else {

            if($State == ''){

                  $sql = ' UPDATE DevicesTanthricat SET Nickname=?, EnergyRating=?, Category=?, State=0, Room=? WHERE KeyID="'.$_SESSION['HomeID'].'" AND Name="'.$Name.'" AND Model="'.$Model.'"; ';
                  $stmt = mysqli_stmt_init($conn);

                  if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("Location:http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/devices-edit.php?error=sqlerror");
                        exit();
                  }

                  else{
                    mysqli_stmt_bind_param($stmt, "siss", $Nickname, $EnergyRating, $Category, $Room);
                    mysqli_stmt_execute($stmt);
                    header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/devices.php?error=deviceedited");
                    exit();

                  }

                  // Closing the statment and the SQL connection
                    mysqli_stmt_close($stmt);
                    mysqli_close($conn);    

            }

            elseif ($State == 'on') {

                  $sql = ' UPDATE DevicesTanthricat SET Nickname=?, EnergyRating=?, Category=?, State=1, Room=?   WHERE KeyID="'.$_SESSION['HomeID'].'" AND Name="'.$Name.'" AND Model="'.$Model.'"; ';
                  $stmt = mysqli_stmt_init($conn);

                  if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("Location:http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/devices-edit.php?error=sqlerror");
                        exit();
                  }

                  else{
                    mysqli_stmt_bind_param($stmt, "siss", $Nickname, $EnergyRating, $Category, $Room);
                    mysqli_stmt_execute($stmt);
                    header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/devices.php?error=deviceedited");
                    exit();

                  }

                  // Closing the statment and the SQL connection
                    mysqli_stmt_close($stmt);
                    mysqli_close($conn);
                  
            }



            
      }

} 

elseif (isset($_POST['Delete'])){

        require('db.php');


      $HomeID = $_SESSION['HomeID'];
      $Nickname = $_POST['Nickname'];
      $EnergyRating = $_POST['EnergyRating'];
      $Category = $_POST['Category'];
      $Name = $_POST['Name'];
      $Model = $_POST['Model'];
      $ManufacturerName = $_POST['ManufacturerName'];
      $State = $_POST['Statedb'];

      if(empty($Nickname) || empty($Name) || empty($ManufacturerName) || empty($Model) || empty($EnergyRating) || empty($Category)) {

      header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/devices-edit.php?error=emptyfields");
      exit();
      }

      else {

            $sql = ' DELETE FROM DevicesTanthricat WHERE KeyID=? AND Model=? AND Nickname=?; ';
            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
                  header("Location:http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/devices-edit.php?error=sqlerror");
                  exit();
            }

            else{
              mysqli_stmt_bind_param($stmt, "iss", $_SESSION['HomeID'], $Model, $Nickname);
              mysqli_stmt_execute($stmt);
              header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/devices.php?error=devicedeleted");
              exit();

            }

            // Closing the statment and the SQL connection
              mysqli_stmt_close($stmt);
              mysqli_close($conn);  

      }
}

else{
      header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/devices-edit.php");
      exit();
}
  
  

?>