<?php

require 'db.php';

// Retrieve the nickname, energy rating, and last on date of all currently active devices
$sql = "SELECT Nickname, EnergyRating, LastOnDate FROM DevicesTanthricat WHERE State = 1";

$result = mysqli_query($conn, $sql);
$data = array();

// For each active device, store the data as an array inside the main array
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
}
else {
    echo "No devices are currently active."
}

echo json_encode($data);

?>