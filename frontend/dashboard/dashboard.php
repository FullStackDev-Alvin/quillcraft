<?php
    // session_start();
    include '../logics/db_connect.php';
    if(empty($_SESSION['count'])){
        $count = 0;
    }
    else{
        $count = $_SESSION['count'];
    }
        $me = $_SESSION['user'];

        $sql = "SELECT * FROM `users` WHERE `email` = '$me'";
        $result = mysqli_query($connect,$sql);

        $rec = mysqli_fetch_assoc($result);
        $lik = $rec['likes'];
    
    
    echo"<div class='blocks'><h1>Posts</h1><p><a href='?link=0' style='position: relative; left:-40px ;'>Posts</a></p></div><div class='blocks'><h1>Comments</h1><p><a href='?link=5' style='position: relative; left:-40px ;'>Comments</a></p></div><div class='blocks'><h1>Likes</h1><p>$lik</p></div>";
?>