<?php
session_start();

//Verify if the user is already logged in
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>

<?php if (isset($_SESSION['success'])) : ?>
    <div class="content">
        <!-- notification message -->
            <div class="error success">
                <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <!-- Logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
            <p class="logo">Vinyl Records</p>
            <p class="user"><?php echo $_SESSION['username']; ?></p>
            <p class="mybox">My box</p>
            <img class="box" src="vinyl_box.png" width="25px" height="25px">
            <p class="logout"> <a href="index_client.php?logout='1'">Logout</a></p>

            <?php include("display_message.php") ?>
    </div>
<?php endif ?>
