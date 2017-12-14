<DOCTYPE html>
    <html>
    <?php
    include 'head.html';
    include 'db.php';
    ?>
    <body>
    <h2>Vinyl Page</h2>
    <div class="container">
        <?php
        $title = mysqli_real_escape_string($conn,$_GET['title']);
        $artist = mysqli_real_escape_string($conn,$_GET['artist']);
        $id = mysqli_real_escape_string($conn,$_GET['album_id']);

        $search_album = "SELECT * FROM album WHERE title = '$title' AND band_name = '$artist'";
        $search_music = "SELECT * FROM musicas WHERE album_album_id='$id'";
        $search_result = mysqli_query($conn,$search_album);
        $music_result = mysqli_query($conn,$search_music);
        $search_query_result = mysqli_num_rows($search_result);
        $search_music_result = mysqli_num_rows($music_result);

        if($search_query_result > 0){
            while($row = mysqli_fetch_assoc($search_result)){
                echo "<div>
                                <img height=50 width=50 scr=".$row['album_img'].">
                                <h4>".$row['title']."</h4>
                                <p>".$row['band_name']."</p>
                                <p>".$row['genre']."</p>
                                <p>".$row['release_date']."</p>
                                <p>".$row['descr']."</p>         
                            </div>";
            }
        }

        if($search_music_result > 0){
            while ($row = $music_result->fetch_assoc()) {
                $muc=$row['musica_title'];
                echo '<div>
                                <p>'.$muc.'</p>         
                            </div>';
            }
        }
        ?>
    </div>
    </body>
    </html>