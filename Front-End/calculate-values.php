<?php
require 'db.php';

// Retrieve the nickname, energy rating, and last on date of all currently active devices (State is 1/ON).
$sql = "SELECT Nickname, EnergyRating, LastOnDate FROM test WHERE State = 1";

$result = mysqli_query($conn, $sql);
$data = array();

// For each active device, store its data as an object inside the array.
// If no devices are active, then nothing will be sent.
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
}
else {
    echo "No devices are currently active.";
    exit();
}

// Convert the array into a string to prepare for the AJAX call in morris-script.js
echo json_encode($data);

?>