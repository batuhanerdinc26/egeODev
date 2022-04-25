<!DOCTYPE html>
<html>

<head>
    <title>Egemen Movie Rent</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
</head>

<body>
    <ul>
        <li><a href="/">Anasayfa</a></li>
        <li><a href="getRandomMovie.php">Kendimi Şanslı Hissediyorum</a></li>
        <?php 
$qry = "SELECT * FROM genres WHERE parentID = 0";
$res = mysqli_query($db, $qry);

if(mysqli_num_rows($res) > 0)   // checking if there is any row in the resultset
{
    while($row = mysqli_fetch_assoc($res))  // Iterate for each rows
    {
    ?>
        <li class="dropdown">
            <a href="category.php?id=<?= $row['id']?>" class="dropbtn"> <?= ($row['name']); ?></a>
            <?php 


$query = "SELECT * FROM genres WHERE parentID = '".$row["id"]."'";

$result = mysqli_query($db, $query);

if(mysqli_num_rows($result) > 0)  {
 ?>
 <div class="dropdown-content">
 <?php
    while($row = $result->fetch_assoc()) {
        ?>
        <a href="category.php?id=<?= $row['id']?>"><?= $row["name"] ?></a>
        <?php
    }
    ?>
    </div>
    <?php
}

            ?>
           
            </div>
        </li>




        <?php
    }
}

?>




        <li class="header-user">
            <?php 
                if($userID==='0'){
                    ?>
            <a href="#news">Giriş Yap</a>
            <?php
                }
            ?>
        </li>
        <li class="header-user">
            <?php 
                if($userID==='0'){
                    ?>
            <a href="uyeol.php">Uye Ol</a>
            <?php
                }else{
                    ?>
            <a href="#news">Uye Name</a>
            <?php
                }
            ?>
        </li>

        <li class="header-search">
            <input type="text" placeholder="Search..">
        </li>
    </ul>

   



  