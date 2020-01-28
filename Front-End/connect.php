<?php 
 // Connects to Our Database 
$conn =  mysqli_connect('localhost', 'root', 'password', 'appliances');

/* check connection */
if ($conn){
    echo 'connected';
    
}elseif(!$conn){
    echo 'connection error' . mysqli_connect_error();
}

$ProductID = $_POST['productid'];
$BrandName = $_POST['brandname'];
$ModelNumber = $_POST['modelnumber'];
$EnergyUsage = $_POST['energyusage'];


$sql = "INSERT INTO Devices (ProductID,BrandName,ModelNumber,EnergyUse)
VALUES ('$ProductID','$BrandName','$ModelNumber','$EnergyUsage')";

if (!mysqli_query($conn,$sql)) {
     echo "Error: " . $sql . "<br>" . $conn->error;
} else {
    echo "Device Added";
}

$conn->close();

 ?> 	