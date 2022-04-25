<?php
if($_GET){
require_once 'config.php';
require_once 'include/header.php';
$categoryID= $_GET["id"];

?>


 <div class="container">
<?php 
$qry = "SELECT * FROM movie_re_genre WHERE genreID='$categoryID' ";
$res = mysqli_query($db, $qry);

if(mysqli_num_rows($res) > 0)   // checking if there is any row in the resultset
{
    while($row = mysqli_fetch_assoc($res))  // Iterate for each rows
    {
        $movieID = $row["movieID"];
        $qry2 = "SELECT * FROM movie WHERE id='$movieID' ";
    
$res2= mysqli_query($db, $qry2);
$row2 = $res2->fetch_assoc();

echo $row2["name"] . "<br>";
    }
}
?>


<?php


?>
    </div>
<?php
    require_once 'include/footer.php';
}
?>