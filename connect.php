<?php
$connect = mysqli_connect("localhost", "root", "", "voting" ) or die("connection fauled!");

if($connect){
    echo"connected successfully!";
}
else{
    echo"connection failed!";
}
?>