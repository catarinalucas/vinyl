<DOCTYPE html>
    <html>
    <?php
    include 'head.html';
    include 'db.php';
    session_start();

    ?>
    <body>
    <h1>Statistics</h1>
    <?php
    //Total Users
    $client_list = "SELECT * FROM client;";
    $result_Client = mysqli_query($conn, $client_list);
    $resultCheck_Client = mysqli_num_rows($result_Client);
    if($resultCheck_Client > 0) {
        echo "<h3>Total Users </h3>".$resultCheck_Client;
    }else{
        echo "<h3>Total Users </h3>"."0";
    }

    //Total Records
    $album_list = "SELECT * FROM album;";
    $result_Album = mysqli_query($conn, $album_list);
    $resultCheck_Album = mysqli_num_rows($result_Album);
    if($resultCheck_Album > 0) {
        echo "<h3>Total Records </h3>".$resultCheck_Album;
    }else{
        echo "<h3>Total Records </h3>"."0";
    }

    //Total Records Value
    $total = 0;
    $records_list = "SELECT price FROM album";
    $result_records = mysqli_query($conn,$records_list);

    foreach ($result_records as $item) {
        $total += $item['price'];
    }
    echo "<h3>Total Records Value</h3>".$total;


    //Total Sale Value
    $total_sale = 0;
    $sale_value = "SELECT total_price FROM purchase";
    $result_sale = mysqli_query($conn,$sale_value);

    foreach ($result_sale as $item_sale) {
        $total_sale += $item_sale['total_price'];
    }
    echo "<h3>Total Sale Value</h3>".$total_sale;

    //Total Musicas
    $music_list = "SELECT * FROM musicas";
    $result_music = mysqli_query($conn,$music_list);
    $resultCheck_music = mysqli_num_rows($result_music);
    if($resultCheck_music > 0){
        echo "<h3>Music Total</h3>.$resultCheck_music";
    }else{
        echo "<h3>Music Total</h3>"."0";
    }

    ?>

    <h1>Total Records by Genre</h1>
    <?php
    //Jazz
    $jazz_list = "SELECT * FROM album WHERE genre = 'jazz'";
    $result_jazz = mysqli_query($conn,$jazz_list);
    $resultCheck_jazz = mysqli_num_rows($result_jazz);
    if($resultCheck_jazz > 0) {
        echo "<h3>Jazz</h3>".$resultCheck_jazz;
    }else{
        echo "<h3>Jazz</h3>"."0";
    }

    //Classical
    $class_list = "SELECT * FROM album WHERE genre = 'classical';";
    $result_Class = mysqli_query($conn, $class_list);
    $resultCheck_Class = mysqli_num_rows($result_Class);
    if($resultCheck_Class > 0) {
        echo "<h3>Classical</h3>".$resultCheck_Class;
    }else{
        echo "<h3>Classical</h3>"."0";
    }

    //Pop
    $pop_list = "SELECT * FROM album WHERE genre = 'pop';";
    $result_Pop = mysqli_query($conn, $pop_list);
    $resultCheck_Pop = mysqli_num_rows($result_Pop);
    if($resultCheck_Pop > 0) {
        echo "<h3>Pop</h3>".$resultCheck_Pop;
    }else{
        echo "<h3>Pop</h3>"."0";
    }
    //Metal
    $metal_list = "SELECT * FROM album WHERE genre = 'metal';";
    $result_Metal = mysqli_query($conn, $metal_list);
    $resultCheck_Metal = mysqli_num_rows($result_Metal);
    if($resultCheck_Metal > 0) {
        echo "<h3>Metal</h3>".$resultCheck_Metal;
    }else{
        echo "<h3>Metal</h3>"."0";
    }

    //Hip-Hop
    $hiphop_list = "SELECT * FROM album WHERE genre = 'hiphop';";
    $result_HipHop = mysqli_query($conn, $hiphop_list);
    $resultCheck_HipHop = mysqli_num_rows($result_HipHop);
    if($resultCheck_HipHop> 0) {
        echo "<h3>Hip-Hop</h3>".$resultCheck_HipHop;
    }else{
        echo "<h3>Hip-Hop</h3>"."0";
    }
    //Electro/Dance
    $eletronic_list = "SELECT * FROM album WHERE genre = 'eletronic';";
    $result_Eletronic = mysqli_query($conn, $eletronic_list);
    $resultCheck_Eletronic = mysqli_num_rows($result_Eletronic);
    if($resultCheck_Eletronic > 0) {
        echo "<h3>Eletronic/Dance</h3>".$resultCheck_Eletronic;
    }else{
        echo "<h3>Eletronic/Dance</h3>"."0";
    }

    //R&B
    $rb_list = "SELECT * FROM album WHERE genre = 'rb';";
    $result_rb = mysqli_query($conn, $rb_list);
    $resultCheck_rb = mysqli_num_rows($result_rb);
    if($resultCheck_rb> 0) {
        echo "<h3>R&B</h3>".$resultCheck_rb;
    }else{
        echo "<h3>R&B</h3>"."0";
    }

    //Soul
    $soul_list = "SELECT * FROM album WHERE genre = 'soul';";
    $result_soul = mysqli_query($conn, $soul_list);
    $resultCheck_soul = mysqli_num_rows($result_soul);
    if($resultCheck_soul> 0) {
        echo "<h3>Soul</h3>".$resultCheck_soul;
    }else{
        echo "<h3>Soul</h3>"."0";
    }

    ?>

    </body>

    </html>