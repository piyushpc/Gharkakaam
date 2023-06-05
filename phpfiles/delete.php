<?php

include "conn.php";
echo $_GET['id'];
$del="DELETE FROM `user` WHERE id='".$_GET['id']."'";

$actual_link = "http://$_SERVER[HTTP_HOST]"."/make it easy/mastertable.php";
$query=mysqli_query($con,$del);
if($query){
    // echo "Inserted";
    echo"<script language='JavaScript'>
         window.location.href='$actual_link';
       </script>";

}