<?php
session_start();
require "./logics/db_connect.php";

if(empty($_SESSION['user'])){
  header("location:./login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="./images/icon.png" type="image/x-icon" />
    <!-- <script src="./index.js" defer></script> -->
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="landing">
          <div class="navbar">
          <nav>
            <div class="logo">
              <img src="./images/light_logo.png" alt="" />
            </div>
            <ul>
              <li><a href="index.php"  >Home</a></li>
              <li><a href="#"  style="border-bottom: 2px solid var(--light);">Templates</a></li>
              <li><a href="./about.php" >About us</a></li>
              <li><a href="./dashboard/index.php?link=1">My DashBoard</a></li>
            </ul>
            </nav>
        </div>          
            <div class="images">
              <div class="gallery">
                <div class="cards">
                  <img src="./images/1 (1)-min.jpg">
                </div>
                <div class="cards">
                  <img src="./images/1 (2)-min.jpg">
                </div>
                <div class="cards">
                  <img src="./images/1 (4)-min.jpg">
                </div>
                <div class="cards">
                  <img src="./images/1 (5)-min.jpg">
                </div>
                <div class="cards">
                  <img src="./images/1 (6)-min.jpg">
                </div>
              </div>
            </div>
        <div class="content_cat">
          <div class="categories">
            <h1>Filter By category</h1>
            <div class="categ">
              <input type="checkbox" name="food" id="food">
              <label for="food">Food</label>
            </div>
            <div class="categ">
              <input type="checkbox" name="fashion" id="fashion">
              <label for="fashion">Fashion</label>
            </div>
            <div class="categ">
              <input type="checkbox" name="travel" id="travel">
              <label for="travel">Tour and Travel</label>
            </div>
            <div class="categ">
              <input type="checkbox" name="art" id="art">
              <label for="art">Art</label>
            </div>
            <div class="categ">
              <input type="checkbox" name="music" id="music">
              <label for="music">Music</label>
            </div>
            <div class="search_bar">
              <h1>Type here to search</h1>
                <div class="search">
                    <input type="text" name="" id="" placeholder="Search by Category eg food, fashion, tourism">
                    <button>Search</button>
                </div>
            </div>
          </div>
          <div id="block_list">
            <div id="template-list" class="blog_blocks" >
              <?php
              $uname = $_SESSION['user'];
              $dir = "../templates/";
              $folders = scandir($dir);

              foreach ($folders as $folder) {
                  if ($folder == '.' || $folder == '..') continue;
                  if (is_dir($dir . $folder)) {
                      $jsonData = file_get_contents($dir . $folder . '/template.json');
                      $data = json_decode($jsonData, true);
                      $imagePath = $dir . $folder . '/image.jpg';

                      echo '<div class="template">';
                      echo '<img src="' . $imagePath . '" alt="Template Image" class="image" >';
                      echo '<p>Description: ' . htmlspecialchars($data['description']) . '</p>';
                      echo '<a href="../edit_template.php?id=' . $folder . '">Edit</a>';
                      echo '</div>';
                  }
              }
              ?>
          </div>

          </div> 
        </div>
      
      </div>
    </div>
   
  </div>
  <script>
 // Function to load templates
      function loadTemplate(id) {
        // Optionally, redirect to an editor page with the template ID as a query parameter
        window.location.href = './editor.php?id=' + id;
    }
    // Load templates on page load
    window.onload = loadTemplates;
  </script>
</body>
</html>