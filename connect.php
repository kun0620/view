<?php
$cfHost = "localhost";
$cfUser = "root";
$cfPassword = "12345678";
$cfDatabase = "mydatabase";
$con = mysqli_connect($cfHost,$cfUser,$cfPassword) or die("Eror connection mysql...");
$meDatabase = mysqli_select_db($con,$cfDatabase);
mysqli_query($con,"set names utf8");
?>
