<?php  

  session_start();

if (isset($_POST['Edit'])){
      
      // File to connect to the db
      require 'db.php';

      $nickname = $_POST['Nickname'];

       $sql = 'SELECT * FROM DevicesTanthricat WHERE KeyID="'.$_SESSION['HomeID'].'" AND Nickname="'.$nickname.'"; ';
            
            // query db
            $result = mysqli_query($conn, $sql);

            // if the query worked then set userid to a variable
            if ($result) {

                  while ($row = mysqli_fetch_assoc($result)) {

                              $Model = $row['Model'];
                              $Nickname = $row['Nickname'];
                              $Name = $row['Name'];
                              $ManufacturerName = $row['ManufacturerName'];
                              $EnergyRating = $row['EnergyRating'];
                              $Category = $row['Category'];
                              $State = $row['State'];
                              $Room = $row['Room'];

                              // send the user to the next opage with the info tehy submitted in the URL
                                    header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/devices-edit.php?success=yes&Model=$Model&Nickname=$Nickname&Name=$Name&ManufacturerName=$ManufacturerName&EnergyRating=$EnergyRating&Category=$Category&State=$State&Room=$Room");
                                    exit();



                  }

                  }

else{
      header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/devices.php");
      exit();
}
      
      
}
?>