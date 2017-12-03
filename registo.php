
<!DOCTYPE html>
<html>

<?php
include 'head.php';
session_start();

//inicializar as variáveis e limpar os campos
$username = $email = $password = $double_password = '';
$erro_name= $erro_email = $erro_pass = $erro_confirm ='';


$servername = "localhost";
$nome = "root";
$pass = "";
$bd = "vinyl";

//conexao a base de dados
$conn = mysqli_connect($servername,$nome,$pass,$bd);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

//Erros - caso tenha clicado no submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($_POST["nome"]) == TRUE) {
    $erro_name = "Name is required";

} else if (!preg_match("/[A-Za-z0-9]+/",$username)) {
    $erro_name = "Only letters and numbers allowed";
} else {
    $username = $_POST['username'];
}

if (empty($_POST["email"]) == TRUE) {
    $erro_email = "Email is required";
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erro_email = "Email is invalid";
} else {
    $email = $_POST['email'];
}

if (empty($_POST["password"]) == TRUE) {
    $erro_pass = "Password is required";
} else if (strlen($password) < 6 || !preg_match("/[A-Za-z0-9]+/",$password)) {
    $erro_pass = "Password length should be superior to 6 caracters and only letters and numbers are allowed";
}else{
    $password = $_POST['password'];
}

if (empty($_POST["double_password"]) == TRUE || $_POST['password'] != $_POST['double_password']) {
    $erro_confirm= "Passwords have to match";
}
}

?>
<!--form-->
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <h1>Vinyl Records</h1>
    <h2>Regista-te</h2>
    <input id="username" name="username"  type="text" placeholder="username"/>
    <span class="error">* <?php echo $erro_name; ?></span>
        <br>
    <input id="email" name="email"  type="text" placeholder="email"/>
    <span class="error">* <?php echo $erro_email; ?></span>
        <br>
    <input id="password" name="password"  type="text" placeholder="password"/>
    <span class="error">* <?php echo $erro_pass; ?></span>
        <br>
    <input id="double_password" name="double_password"  type="text" placeholder="Confirm password"/>
    <span class="error">* <?php echo $erro_confirm; ?></span>
        <br>
    <button type="submit" value ="register" class="signup">Sign Up</button>
</form>
</body>

<?php
//Inserir dados na base
$sql = mysqli_query($conn,"INSERT INTO client (username,email,password) VALUES ('$username','$email','$password')");
if($sql === TRUE){
echo "New Regist";
} else {
echo "Error:" . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>
</html>


