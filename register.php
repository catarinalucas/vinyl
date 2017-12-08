<?php
include 'db.php';
session_start();
?>
    <!DOCTYPE html>
    <html lang="en">
    <?php include 'head.php';?>
    <body>
    <h2>Sign Up</h2>
    <form id="signup_form" method="post" action="server.php">
        <!-- display validation errors here -->
        <input class="input" id="username" name="username"  type="text" placeholder="Username"/>

        <input class="input" id="email" name="email"  type="text" placeholder="Email"/>

        <input class="input" id="password" name="password_1"  type="password" placeholder="Password"/>

        <input class="input" id="double_password" name="password_2"  type="password" placeholder="Confirm password"/>

        <button type="submit" name="register" class="signup_button">Sign Up</button>
    </form>
    </body>
</html>