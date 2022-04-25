<?php
if($_GET){
require_once 'config.php';
require_once 'include/header.php';
$movieID = $_GET["id"];

?>


 <div class="container">
<?php 
$qry = "SELECT * FROM movie WHERE id='$movieID' ";
$res = mysqli_query($db, $qry);
$row = $res->fetch_assoc();

?>
Filmin : <?= $row["name"]?> 

<?php


?>
    </div>
<?php
    require_once 'include/footer.php';
}
?>