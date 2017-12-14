<?php
include 'db.php';
session_start();

$title = $_POST['title'];
$artist = $_POST['artist'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$date = $_POST['date'];
$descr = $_POST['description'];
$genre= $_POST['genre'];
$lista_musica= $_POST['tracklist'];




echo "Submited";
$_files = $_FILES['file'];

$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
//separar o ponto do nome
$fileExt = explode('.',$fileName);
//por em caixa baixa
$fileActualExt = strtolower(end($fileExt));


$allowedExt = array('jpg','jpeg','png');
//verificar se esta numa extensao correta
if(in_array($fileActualExt, $allowedExt)){
    //verificar se nao tem outros erros
    if($fileError === 0){
        //verificar se o tamanho é aceitavel
        if($fileSize < 1000000){
            $fileNameNew = uniqid('',true).".".$fileActualExt;
            $fileDestination = 'uploads/'.$fileNameNew;
            move_uploaded_file($fileTmpName,$fileDestination);
            $album = mysqli_query($conn,"INSERT INTO album (title,band_name,genre,descr,release_date,price,stock,album_img) VALUES ('$title','$artist','$genre','$descr','$date','$price','$stock','$fileDestination')");
            $id = mysqli_query($conn,"SELECT album_id FROM album WHERE title = '$title' AND band_name = '$artist'");
            $music = mysqli_query($conn,"INSERT INTO musicas (musica_title) VALUE ('$lista_musica') WHERE album_album_id = '$id'");
        }else{
            echo "The file is too big!";
        }
    }else{
        echo "There was an error uploading the file";
    }
}else{
    echo "File extension has to be .jpg, .jpeg or .png";
}



if($album === TRUE){
    echo "New Regist";
} else {
    echo "Error:" . $album . "<br>" . $conn->error;
}

?>