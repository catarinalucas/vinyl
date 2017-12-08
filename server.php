<?php
include 'db.php';
session_start();

$username = $_POST['username'];
$email = $_POST['email'];
$password1 = $_POST['password_1'];
$password2 = $_POST['password_2'];


$insert_user = "INSERT INTO client (username,email,password) VALUES ('$username', '$email', '$password1')";

if(mysqli_query($conn,$insert_user)){
    echo "sucess";
}else{
    echo "error";
}

$conn->close();