<?php
    session_start();

    $msg = "";
    $errors = array();
    $_SESSION['sent'] = "";

    include 'db.php';

if(isset($_POST['send'])) {
    //receive all input values from the form
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    //ensure that form fields are filled properly
    if (empty($msg)) {
        array_push($errors, "Message is required"); //add error to errors array
    }

    //if there are no errors, save message to database
    if (count($errors) == 0) {

        $query_msg = "INSERT INTO message (mess) 
                      VALUES ('$msg')";
        mysqli_query($conn, $query_msg);

        $_SESSION['message'] = $msg;
        $_SESSION['sent'] = "Your message has been sent";
        header('location: header_admin.php'); //redirecionar para a pag inicial
    }
}
?>