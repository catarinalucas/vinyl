<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("head.html"); ?>
</head>

<body>

<?php
include 'header_admin.php';
?>

<?php
include 'search_field.php';
?>

<div class="container_back">
    <div class="fixed_back"></div>
    <div class="vinyl_3"><img src="vinyl_red3.png" width="100%" height="auto"></div>
</div>



<div class="container_landing">
    <a class="cat new_rel" href="newrel.php">New Releases</a>
    <a class="sub_cat sub_new_rel">The most recent vinyls on the store</a>
    <a class="cat most_wan">Most Wanted</a>
    <a class="sub_cat sub_most_wan">Our store’s best sellers</a>
    <a class="cat surprise">Surprise Me</a>
    <a class="sub_cat sub_surprise">Choose five vinyls randomly</a>
    <a class="cat genres">Genres</a>
    <a href='album_landing.php?genre=jazz' class="sub_genres">Jazz</a>
    <a href='album_landing.php?genre=classical' class="sub_genres">Classical</a>
    <a href='album_landing.php?genre=pop' class="sub_genres">Pop</a>
    <a href='album_landing.php?genre=metal' class="sub_genres">Metal</a>
    <a href='album_landing.php?genre=eletronic' class="sub_genres">Electro/Dance</a>
    <a href='album_landing.php?genre=rb' class="sub_genres">R&B</a>
    <a href='album_landing.php?genre=soul' class="sub_genres">Soul</a>
    <a href='album_landing.php?genre=punk' class="sub_genres">Punk</a>
    <a href='album_landing.php?genre=blues' class="sub_genres">Blues</a>
    <a href='album_landing.php?genre=folk' class="sub_genres">Folk</a>
</div>
</body>
</html>