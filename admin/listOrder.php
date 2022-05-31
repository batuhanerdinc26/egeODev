<?php
if($_GET){
require_once 'config.php';
require_once 'include/header.php';

?>


 <div class="container">
<?php 
$qry = "SELECT * FROM orders";
$res = mysqli_query($db, $qry);

if(mysqli_num_rows($res) > 0)   // checking if there is any row in the resultset
{
    while($row = mysqli_fetch_assoc($res))  // Iterate for each rows
    {
        echo $row["name"] . "<br>";
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