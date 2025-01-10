<?php
include '../../.././connect.php';
if(isset($_POST["submit"])){
    $like = $_POST['like'];
    $comment = $_POST['comment'];
    
    if(empty($like)) {
        header("location:.././index.php?error= Please place a like or dislike");
    }
    elseif(empty($comment)) {
        header("location:.././index.php?error= Please place a comment");
    }
    else{
        $jsonData = file_get_contents('.././data.json');
        $data = json_decode($jsonData, true);
        $to = $data["Author"];
        $sql = "SELECT * FROM `users` WHERE `email` = '$to'";
        $result = mysqli_query($connect,$sql);

        $rec = mysqli_fetch_assoc($result);
        $lik = $rec['likes'];

        $dislik = $rec['dislikes'];
        $lik1 = intval($like);

        $lik2 = $lik1 + 1;

        $dislik1 = intval($dislik);
        $dislik2 = $dislik1 + 1;

        if($like == 1){
                $sql = "UPDATE `users` SET `likes` = '$lik2' WHERE `email` = '$to'"; 
                $result = mysqli_query($connect,$sql);
                if ($result) {
                    # code...
                    header("location:.././index.php?error = Form submited succesfully");
                }
                else{
                    echo $to;
                }

                
            }
        elseif($like == -1){
                $sql = "UPDATE `users` SET `dislikes` = '$dislik2' WHERE `email` = '$to'"; 
                $update_likes = mysqli_query($connect,$sql);
            header("location:.././index.php?error = Form submited succesfully");
            }
        session_start();
        $from = $_SESSION['user'];
        
        $dirPath = "../../.././{$to}/";  
        
        $file = "../../../.././posts/{$to}/data.json";
        if (!is_dir($dirPath)) {
            mkdir($dirPath, 0777, true);
        }
        // Function to read and return the data from JSON file
        function loadJson($file) {
            if (!file_exists($file)) {
                return [];
            }
            $jsonData = file_get_contents($file);
            return json_decode($jsonData, true);
        }

        // Function to write data to JSON file
        function saveJson($file, $data) {
            $jsonData = json_encode($data, JSON_PRETTY_PRINT);
            file_put_contents($file, $jsonData);
        }

        $data = loadJson($file);

        // Append new data
        $data[] = [
            'from' => $from,
            'message' => $comment
        ];

        // Save back to file
        saveJson($file, $data);

        
        header("location:.././index.php?error = Form submited succesfully");
    }
}

?>