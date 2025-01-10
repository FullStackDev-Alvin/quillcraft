<?php
    $uname = $_SESSION['user'];
    $dir = "../.././posts/{$uname}/";
// Path to the JSON file
    $filePath = "{$dir}data.json";

// Check if the file exists
if (file_exists($filePath)) {
    // Get the contents of the JSON file
    $jsonString = file_get_contents($filePath);

    // Decode the JSON string into an array
    $data = json_decode($jsonString, true);
    
    
    // Check if the data is an array and not empty
    if (is_array($data) && !empty($data)) {
        echo "<div class='comments'><h1>Comments</h1>";
        echo "<ul>";
        $count = count($data);
        $_SESSION['comments'] = $count;
        // Loop through the array of users
        foreach ($data as $user) {
            echo "<li>";
            echo "<h4>From:</h4> " . htmlspecialchars($user['from']) . "<br>";
            echo "<h4>Comment:</h4> " . htmlspecialchars($user['message']) . "<br>";
            echo "</li>";
        }

        echo "</ul></div>";
    } else {
        echo "No Comments yet";
    }
} else {
    echo "There are no comments for you ";
}
?>
