<?php 

require_once 'config.php';

if($_POST){

$username = $_POST["username"];
$password = $_POST["pass"];


$qry = "SELECT * FROM admins WHERE username='".$username."' AND password = '".$password."' ";
$res = mysqli_query($db, $qry);

if(mysqli_num_rows($res) > 0){
    $_SESSION["admin"] = $username
?>
    <script>
    localStorage.failedLogin = 0;
    window.location.pathname = "/egeOdev/admin/inside.php";
    </script>
<?php
}else{
    ?>
    <script>
    localStorage.failedLogin = 1;
    window.location.pathname = "/egeOdev/admin/index.php";
    </script>
    <?php
}
}