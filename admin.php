<DOCTYPE html>
    <html>
    <?php
    include 'head.php';
    include 'db.php';
    session_start();
    ?>
    <body>
    <h1>Dashboard</h1>
    <h5>Adicionar Vinil</h5>
    <form method="post" action="insert_album.php" enctype="multipart/form-data">
        <input class="input" id="album_title" name="title"  type="text" placeholder="Album Title"/>
        <br>
        <input type="file" name="file" id="file">
        <br>
        <input class="input" id="album_artist" name="artist"  type="text" placeholder="Artist"/>
        <br>
        <input class="input" id="album_price" name="price"  type="number" placeholder="Price"/>
        <br>
        <input class="input" id="album_stock" name="stock"  type="number" placeholder="Stock"/>
        <br>
        <input class="input" id="album_date" name="date"  type="date" placeholder="Release Date"/>
        <br>
        <input class="input" id="album_description" name="description"  type="text" placeholder="Add a description to the album"/>
        <br>
        <input class="input" id="album_tracklist" name="tracklist"  type="text" placeholder="Add songs separed by commas"/>
        <br>
        <select name="genre">
            <option value="jazz">Jazz</option>
            <option value="classical">Saab</option>
            <option value="pop">Pop</option>
            <option value="metal">Metal</option>
            <option value="hiphop">Hip-Hop</option>
            <option value="eletronic">Eletronic/Dance</option>
            <option value="rb">R&B</option>
            <option value="soul">Soul</option>
            <option value="punk">Punk</option>
            <option value="blues">Blues</option>
            <option value="folk">Folk</option>
        </select>
        <br>
        <button type="submit" class="done_button">Done</button>
    </form>
    <!--UPDATE PRICE-->
    <form action="update.php" method="post">
        <h5>Update Price</h5>
    <input type="text" name="update_name" placeholder="Insert Album Name">
    <br>
        <input type="text" name="update_artist" placeholder="Insert Artist">
        <br>
    <input type="number" name="new_price" placeholder="New Price">
    <br>
    <button type="submit" class="confirm_button">Confirm</button>
    </form>
    <!--REMOVE VINYL-->
    <form action="remove.php" method="post">
        <h5>Remover Vinil</h5>
    <!--Ver se não foi comprado ainda-->
    <input type="text" name="remove_name" placeholder="Insert Album Name">
    <br>
        <input type="text" name="remove_artist" placeholder="Insert Artist">
        <br>
    <button type="submit" class="remover">Remove</button>
    </form>
    </body>
    </html>