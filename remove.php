<?php
include 'db.php';

$ValidName = $_POST['remove_name'];
$ValidArtist = $_POST['remove_artist'];

$remove = "DELETE FROM album WHERE title = '$ValidName' AND band_name = '$ValidArtist' AND state = '0' ";

if (mysqli_query($conn,$remove)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();