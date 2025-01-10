<?php

$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "QuillCraft";

$connect = mysqli_connect($sName,$uName,$pass,$db_name);

if(!$connect){
    echo"there is an error";
}
?>