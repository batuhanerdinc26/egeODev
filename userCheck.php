<?php 

require_once 'config.php';

if($_POST){

$username = $_POST["username"];
$password = $_POST["password"];

print_r($_POST);

$qry = "SELECT * FROM users WHERE username='user' AND password = 'user' ";
$res = mysqli_query($db, $qry);

if(mysqli_num_rows($res) > 0){
    $_SESSION["user"] = $username
?>
    <script>
    localStorage.failedLogin = 0;
    window.location.pathname = "/egeOdev/index.php";
    </script>
<?php
}else{
    ?>
    <script>
      
    localStorage.failedLogin = 1;
    window.location.pathname = "/egeOdev/uyeGirisi.php";
    </script>
    <?php
}
}