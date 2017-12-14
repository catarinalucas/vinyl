<?php
include 'db.php';

$ConfirmAlbum = $_POST['update_name'];
$ConfirmArtist = $_POST['update_artist'];
$NewPrice = $_POST['new_price'];

$update = "UPDATE album SET price = '$NewPrice' WHERE title = '$ConfirmAlbum' AND band_name = '$ConfirmArtist'";



if (mysqli_query($conn,$update)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();