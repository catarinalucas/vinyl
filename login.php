<?php include("server.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("head.html"); ?>
    <link rel="stylesheet" href="style_forms.css">
</head>
<body>

    <h2>Vinyl Records</h2>

    <form id="login_form" method="post" action="login.php">
        <?php include('errors.php'); ?>
        <div class="popup_login">
            <input class="input" id="username" name="username"  type="text" placeholder="Username"/>

            <input class="input" id="password" name="password"  type="password" placeholder="Password"/>

            <button type="submit" value="login" class="login_button" name="login">Log in</button>
            <p class="already_log">
                Not yet a member? <a href="signup.php">Sign up</a>
            </p>
        </div>
    </form>
</body>
</html>
