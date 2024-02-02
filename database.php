<?php
$hostname="localhost";
$username="root";
$password="";
$db="login_register";
$conn=mysqli_connect($hostname,$username,$password,$db);
if(!$conn){
    die("something wrong");
}
?>