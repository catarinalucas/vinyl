<DOCTYPE html>
    <html>
        <?php
            include 'head.php';
            include 'db.php';
            session_start();
        ?>

        <body>
            <h1>Vinyl List</h1>
            <h5>All Vinyls</h5>
            <div>
                <p>Title + Artist + Genre + Release Date + Price + Stock</p>
            </div>
            <?php
            $album_list = "SELECT * FROM album;";
            $result = mysqli_query($conn, $album_list);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo  $row['title']
                        .'&nbsp;'. $row['band_name']
                        .'&nbsp;'. $row['genre']
                        .'&nbsp;' . $row['release_date']
                        .'&nbsp;' . $row['price'] . "€"
                        .'&nbsp;' . $row['stock'] . "unities";
                }
            }
            ?>
        </body>
    </html>
