<?php
    $_SESSION['message_print'] = "";
    $db = mysqli_connect('localhost', 'root', '', 'vinyl');

    $query_read = "SELECT mess FROM message WHERE read_msg=0";
    $read_results = mysqli_query($db, $query_read);


if (mysqli_num_rows($read_results) > 0) {
    $_SESSION['message_print'] = $read_results;


    foreach ($read_results as $item) {

        $me = $item['mess'];

        echo '
            <div class="caixa_msg">
            <p class="title_msg">Mensagem</p>
            <p class="corpo_msg">'.$me.' </p>
            </div>';

    }
?>
    <form method="post" action="display_message.php">
                <input class="mark_read" type="submit" name="mark_read" value="Mark as read"/>
            </form>
<?php
 if (isset($_POST['mark_read'])) {
    $query_mark = "UPDATE message SET read_msg = 1 WHERE read_msg = 0";
    $mark_result = mysqli_query($db, $query_mark);
    header('location: index_client.php');
}

}
?>






