<?php

require_once 'config.php';
require_once 'include/header.php';

?>


 <div class="container">
<?php 
$qry = "SELECT * FROM movie ORDER BY RAND() LIMIT 1";
$res = mysqli_query($db, $qry);
$row = $res->fetch_assoc();

?>
Şanslı Filmin : <?= $row["name"]?> 
<a href="movie.php?id=<?= $row["id"] ?>">Film Sayfasını Ziyaret et</a>
<?php


?>
    </div>
<?php
    require_once 'include/footer.php';
?>