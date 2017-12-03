<?php

$title = $_POST['title'];
$artist = $_POST['artist'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$date = $_POST['date'];
$descr = $_POST['description'];
$genre= $_POST['genre'];



$album = mysqli_query($conn,"INSERT INTO album (title,band_name,genre,descr,release_date,price,stock) VALUES ('$title','$artist','$genre','$descr','$date','$price','$stock')");

    if($album === TRUE){
    echo "New Regist";
    } else {
    echo "Error:" . $sql . "<br>" . $conn->error;
    }
?>