<?php 

require_once 'config.php';

if($_POST){

$name = $_POST["name"];

$qry = "INSERT INTO genres (name)VALUES ('".$name."')";
$res = mysqli_query($db, $qry);
print_r($res);
if(($res) == 1){
?>
    <script>
    localStorage.addedMovie = 0;
    //window.location.pathname = "/egeOdev/admin/inside.php";
    </script>
<?php
}else{
    ?>
    <script>
    localStorage.failedLogin = 1;
    //window.location.pathname = "/egeOdev/admin/index.php";
    </script>
    <?php
}
}