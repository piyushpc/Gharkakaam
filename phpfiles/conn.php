<?php

$host="localhost";
$username="root";
$pass="";
$db="ghar_ka_kaam";
$con=mysqli_connect($host,$username,$pass,$db);
if(!$con){
    
    echo "database connection error";
} ?>
