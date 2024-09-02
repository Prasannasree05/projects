<?php
$server_name="localhost";
$username="sree";
$password="sree@2005";
$db="sree";
$conn=mysqli_connect($server_name,$username,$password,$db);
if($conn){
    echo"connected success";
}
else{
    echo"connnection Error ";
}
?>