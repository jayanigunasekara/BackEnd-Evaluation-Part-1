<?php
$connect = new mysqli("localhost", "root", "123", "myshop","3306");
if(!$connect){
    die(mysqli_error($connect));
}




?>