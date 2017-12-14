<?php
    session_start();

    //variable declaration
    $username = "";
    $email = "";
    $errors = array();
    $_SESSION['success'] = "";

    //connect to the database
    include 'db.php';

    //SIGN UP
    //if the register button is clicked
    if(isset($_POST['register'])) {
        //receive all input values from the form
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

        //ensure that form fields are filled properly
        if (empty($username)) {
            array_push($errors, "Username is required"); //add error to errors array
        }
        if (empty($email)) {
            array_push($errors, "Email is required"); //add error to errors array
        }
        if (empty($password_1)) {
            array_push($errors, "Password is required"); //add error to errors array
        }

        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
        }

        //if there are no errors, save user to database
        if (count($errors) == 0) {
            //$password = md5($password_1); //encrypt password before storing in database (security)
            $password = $password_1;
            $query = "INSERT INTO client (username, email, password) 
                      VALUES ('$username', '$email', '$password')";
            mysqli_query($conn, $query);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in (client)";
            header('location: index_client.php'); //redirecionar para a pag inicial
        }
    }

    //LOGIN
    if (isset($_POST['login'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            //$password = md5($password);
            $query = "SELECT * FROM client WHERE username='$username' AND password='$password'";
            $results = mysqli_query($conn, $query);

            $query_admin = "SELECT * FROM admin WHERE nome='$username' AND password='$password'";
            $results_admin = mysqli_query($conn, $query_admin);

            if (mysqli_num_rows($results) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in (client)";
                header('location: index_client.php');
            }else {
                array_push($errors, "Wrong username/password combination");
            }

            if (mysqli_num_rows($results_admin) == 1) {
                $_SESSION['username_admin'] = $username;
                $_SESSION['success'] = "You are now logged in (admin)";
                header('location: index_admin.php');
            }else {
                array_push($errors, "Wrong username/password combination");
            }
        }
    }

?>