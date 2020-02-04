<?php

include 'db.php';

$id = $_GET['q'];
$sql = "select DeviceName from Dummy where DeviceName like '%".$id."%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
 echo $row["DeviceName"]. "\n";
 }
} else {
 echo "0 results";
}
$conn->close();
?> 
