<DOCTYPE html>
    <html>
    <?php
    include 'head.html';
    include 'db.php';
    $genre = mysqli_real_escape_string($conn,$_GET['genre']);
    ?>
    <body>
    <h2><?php echo $genre;?>Vinyls</h2>
    <div class="container">
        <?php
        $search_album = "SELECT * FROM album WHERE genre = '$genre'";
        $search_result = mysqli_query($conn,$search_album);
        $search_query_result = mysqli_num_rows($search_result);

        if($search_query_result > 0){
            while($row = mysqli_fetch_assoc($search_result)){
                echo "<div>
                                <img height=50 width=50 scr=".$row['album_img'].">
                                <h4>".$row['title']."</h4>
                                <p>".$row['band_name']."</p>
                                <a href='album.php?title=".$row['title']."&artist=".$row['band_name']."&album_id=".$row['album_id']."'>See Vinyl</a>
                            </div>";
            }
        }else{
            echo "Sorry,there are no vinyls of this genre for now :(";
        }


        ?>
    </div>
    </body>
    </html>