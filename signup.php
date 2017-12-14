<?php include("server.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("head.html"); ?>
    <link rel="stylesheet" href="style_forms.css">
</head>
<body>

    <h2>Vinyl Records</h2>

    <form id="signup_form" method="post" action="signup.php">
        <!-- display validation errors here -->
        <?php include('errors.php'); ?>
        <div class="popup_signup">
            <input class="input" id="username" name="username"  type="text" placeholder="Username" value="<?php echo $username; ?>"/>

            <input class="input" id="email" name="email"  type="text" placeholder="Email" value="<?php echo $email; ?>"/>

            <input class="input" id="password" name="password_1"  type="password" placeholder="Password"/>

            <input class="input" id="double_password" name="password_2"  type="password" placeholder="Confirm password"/>

            <button type="submit" name="register" class="signup_button">Sign Up</button>

            <p class="already" >Already a member? <a href="login.php">Log in</a>
            </p>
        </div>
    </form>
</body>
</html>
