<?php
$servername = "localhost";
$nome = "root";
$pass = "";
$bd = "vinyl";

//conexao a base de dados
$conn = mysqli_connect($servername,$nome,$pass,$bd);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>