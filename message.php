<?php include("send_message.php") ?>
<!DOCTYPE html>
<html lang="en">

    <?php include ("head.html"); ?>

<body>

<div class="msg_popup">
    <h2 class="msg_title">Send Message</h2>
    <?php include('errors.php'); ?>
    <form method="post" action="message.php">
        <textarea id="message" name="message" placeholder="Your message will be sent to all users"></textarea>

        <button type="submit" name="send" class="send_button">Send</button>
    </form>
    <a class="back" href="header_admin.php">Back</a>
</div>

</body>
</html>