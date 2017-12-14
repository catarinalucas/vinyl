<?php
include 'head.html';
include 'db.php';
?>
<h1>Search Page</h1>

<div class="container">
    <?php
    if(isset($_POST['submit_search'])){
        //variavel que contem a info do form
        $search = mysqli_real_escape_string($conn,$_POST['search']);
        $sql = "SELECT * FROM album WHERE title LIKE '%$search%'
                   OR band_name LIKE '%$search%'
                   OR genre LIKE '%$search%'";
        $result = mysqli_query($conn,$sql);
        $queryResult = mysqli_num_rows($result);

        echo "There are ".$queryResult."vinyls that match your search";
        //ver se tivemos resultados
        if($queryResult > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<div><a href='album.php?title=".$row['title']."&artist=".$row['band_name']."'>
                                <h4>".$row['title']."</h4>
                                <p>by ".$row['band_name']."</p>
                            </div></a>";
            }

        }else{
            echo "Sorry, no vinyls match your search";
        }
    }
    ?>
</div>