<DOCTYPE html>
    <html>
    <?php
    include("head.php");
    session_start();
    ?>
    <body>
    <h1>Adicionar Vinyl</h1>
    <form method="post" action="insert_album.php">
        <input class="input" id="album_title" name="title"  type="text" placeholder="Album Title"/>
        <input class="input" id="album_artist" name="artist"  type="text" placeholder="Artist"/>
        <input class="input" id="album_price" name="price"  type="number" placeholder="Price"/>
        <input class="input" id="album_stock" name="stock"  type="number" placeholder="Stock"/>
        <input class="input" id="album_date" name="date"  type="date" placeholder="Release Date"/>
        <input class="input" id="album_description" name="description"  type="text" placeholder="Add a description to the album"/>
        <input class="input" id="album_tracklist" name="tracklist"  type="text" placeholder="Add songs separed by commas"/>
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
        <button type="submit" class="done_button">Done</button>
    </form>
    </body>
    </html>