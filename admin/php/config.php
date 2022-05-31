<?php 

ob_start();
session_start();

$db = mysqli_connect("localhost", "root", "root" , "egemen_rental");
 
// Check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

if(@!$_SESSION["admin"]){
    $userID = '0';
}else{
    $admin = $_SESSION["admin"];
}



?>