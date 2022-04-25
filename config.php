<?php 

ob_start();
session_start();

$db = mysqli_connect("localhost", "root", "" , "egemen_rental");
 
// Check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

if(@!$_SESSION["userID"]){
    $userID = '0';
}else{
    $userID = $_SESSION["userID"];
}




  





?>