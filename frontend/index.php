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
              <li><a href="#"  style="border-bottom: 2px solid var(--light);">Home</a></li>
              <li><a href="./templates.php"  >Templates</a></li>
              <li><a href="./about.php" >About us</a></li>
              <li><a href="./dashboard/index.php?link=1">My DashBoard</a></li>
            </ul>
            </nav>
        </div>          
        <section>
            <div class="rt-container">
                <div class="col-rt-12">
                    <div class="Scriptcontent">
                    
                    <!-- 3D Image Slideshow HTML -->
                    <div class="slideshow">
                    <div class="content">
                        <div class="slider-content">
                        <figure class="shadow"> 
                    <img src="./images/1 (1).jpg">
                        </figure>
                        <figure class="shadow"><img src="./images/1 (1)-min.jpg"></figure>
                        <figure class="shadow"><img src="./images/1 (2)-min.jpg"></figure>
                        <figure class="shadow"><img src="./images/1 (3)-min.jpg"></figure>
                        <figure class="shadow"><img src="./images/1 (4)-min.jpg"></figure>
                        <figure class="shadow"><img src="./images/1 (5)-min.jpg"></figure>
                        <figure class="shadow"><img src="./images/1 (6)-min.jpg"></figure>
                        <figure class="shadow"><img src="./images/1 (7)-min.jpg"></figure>
                        <figure class="shadow"><img src="./images/1 (8)-min.jpg"></figure>
                        <figure class="shadow"><img src="./images/logo.png"></figure>
                        </div>
                    </div>
                </div>
        <!-- End 3D Image Slideshow HTML -->
                
                    </div>
                </div>
            </div>
        </section>
        <div class="content_cat">
          <div class="categories">
            <h1>Blogs: Hover over a blog </h1>
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
            <form action="" method="get">
                <div class="search_bar">
                <h1>Type here to search</h1>
                    <div class="search">
                        <input type="text" name="" id="" placeholder="Search by Category eg food, fashion, tourism">
                        <button>Search</button>
                    </div>
                </div>
            </form>
          </div>
          <div class="blog_blocks">
<?php



$baseDir = '../posts/'; // Base directory containing all user folders

// Check if the base directory exists
if (!is_dir($baseDir)) {
    die("User directory not found!");
}

// Start HTML output
echo "<div class='blog_blocks'>";

// Loop through each user directory in the base directory
foreach (new DirectoryIterator($baseDir) as $userDir) {
    if ($userDir->isDot() || !$userDir->isDir()) {
        continue; // Skip non-directories and dot (.) and double dot (..) directories
    }

    $email = $userDir->getFilename(); // This assumes directory names are sanitized email addresses

    // Loop through each template directory within the user's directory
    foreach (new DirectoryIterator($userDir->getPathname()) as $templateDir) {
        if ($templateDir->isDot() || !$templateDir->isDir()) {
            continue; // Skip non-directories and dot directories
        }

        $templateId = $templateDir->getFilename();
        $templatePath = $templateDir->getPathname();
        
        // Look for an HTML file in the template directory
        foreach (new DirectoryIterator($templatePath) as $file) {
            if ($file->isDot() || $file->isDir()) {
                continue; // Skip directories and dot files
            }

            if (strtolower($file->getExtension()) == 'php') {
                // Construct a relative link to the HTML file
                $htmlFilePath = $file->getPathname();
                $jsondata = json_decode(file_get_contents("$templatePath/data.json"), true);         
                $category =  $jsondata['category'];
                if($category === 'food'){
                  $image = './images/custom/food.jpg';  
                  $imag2 = './images/custom/food1.jpg'; 
                  echo "<div class='card'><div class='card-content'><div class='card-front' style='background-image: url({$image});'><p class='sub-title'>{$jsondata['category']}</p><h1 class='title'>{$jsondata['title']}</h1></div><div class='card-back' style='background-image: url({$imag2});'><div class='back-title'>{$jsondata['title']}</div><div class='blog-description'>    <span>Description: </span>{$jsondata['description']}</div><div class='release-date'>    <span>Author: </span>{$jsondata['Author']}</div><a href='$htmlFilePath' class='btn'>View</a></div></div></div>";
                }
                elseif($category === 'fashion'){
                  $image = './images/custom/fashion.jpg';
                  $imag2 = './images/custom/fashion1.jpg'; 
                    echo "<div class='card'><div class='card-content'><div class='card-front' style='background-image: url({$image});'><p class='sub-title'>{$jsondata['category']}</p><h1 class='title'>{$jsondata['title']}</h1></div><div class='card-back' style='background-image: url({$imag2});'><div class='back-title'>{$jsondata['title']}</div><div class='blog-description'>    <span>Description: </span>{$jsondata['description']}</div><div class='release-date'>    <span>Author: </span>{$jsondata['Author']}</div><a href='$htmlFilePath' class='btn'>View</a></div></div></div>";
                }
                elseif($category === 'tour'){
                  $image = './images/custom/tour.jpg';
                  $imag2 = './images/custom/tour1.png'; 
                    echo "<div class='card'><div class='card-content'><div class='card-front' style='background-image: url({$image});'><p class='sub-title'>{$jsondata['category']}</p><h1 class='title'>{$jsondata['title']}</h1></div><div class='card-back' style='background-image: url({$imag2});'><div class='back-title'>{$jsondata['title']}</div><div class='blog-description'>    <span>Description: </span>{$jsondata['description']}</div><div class='release-date'>    <span>Author: </span>{$jsondata['Author']}</div><a href='$htmlFilePath' class='btn'>View</a></div></div></div>";
                }
                elseif($category === 'music'){
                  $image = './images/custom/music.jpg';
                  $imag2 = './images/custom/music1.jpg';
                    echo "<div class='card'><div class='card-content'><div class='card-front' style='background-image: url({$image});'><p class='sub-title'>{$jsondata['category']}</p><h1 class='title'>{$jsondata['title']}</h1></div><div class='card-back' style='background-image: url({$imag2});'><div class='back-title'>{$jsondata['title']}</div><div class='blog-description'>    <span>Description: </span>{$jsondata['description']}</div><div class='release-date'>    <span>Author: </span>{$jsondata['Author']}</div><a href='$htmlFilePath' class='btn'>View</a></div></div></div>";
                }
                elseif($category === 'art'){
                  $image = './images/custom/art.jpg'; 
                  $imag2 = './images/custom/art1.jpg';   
                  echo "<div class='card'><div class='card-content'><div class='card-front' style='background-image: url({$image});'><p class='sub-title'>{$jsondata['category']}.</p><h1 class='title'>{$jsondata['title']}</h1></div><div class='card-back' style='background-image: url({$imag2});'><div class='back-title'>{$jsondata['title']}</div><div class='blog-description'>    <span>Description: </span>{$jsondata['description']}</div><div class='release-date'>    <span>Author: </span>{$jsondata['Author']}</div><a href='$htmlFilePath' class='btn'>View</a></div></div></div>";
                }
            }
        }
    }
}

echo "</div>";
?>


                       
          </div>  
        </div>
      
      </div>
        
    </div>
    
</body>
</html>