<?php
session_start();

//Verify if the user is already logged in
if (!isset($_SESSION['username_admin'])) {
    $_SESSION['msg'] = "You must log in first (admin)";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username_admin']);
    header("location: login.php");
}
?>
    <!-- Login Admin information -->
    <?php if (isset($_SESSION['username_admin'])) : ?>

        <div class="content">
            <!-- notification message -->
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="error success">
                    <h3>
                        <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>

            <?php if (isset($_SESSION['sent'])) : ?>
                <div class="error success">
                    <h3>
                        <?php
                        echo $_SESSION['sent'];
                        unset($_SESSION['sent']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>
                <p class="logo">Vinyl Records</p>
                <p class="user"><?php echo $_SESSION['username_admin']; ?></p>
                <a class="mybox menu_admin">My menu</a>
                <a class="box menu_admin"><img src="vinyl-record_menu.png" width="25px" height="25px"></a>
                <p class="logout"> <a href="index_client.php?logout='1'">Logout</a></p>
        </div>
        <div class="mymenu">
            <a class="add_album my_menu_item" href="admin.php">Dashboard</a>
            <a class="view_stats my_menu_item" href="stats.php">View Stats</a>
            <a class="send_message my_menu_item" href="message.php">Send Message</a>
            <a class="album_list my_menu_item" href="album_list.php">Album List</a>
        </div>
    <?php endif ?>
