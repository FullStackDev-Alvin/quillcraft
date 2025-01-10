<?php
              $uname = $_SESSION['user'];
              $dir = "../.././posts/$uname/";
              if (!is_dir($dir)) {
                die("You dont have any posts yet");
              }
              $folders = scandir($dir);
              $post_length = count($folders);
            //   $length =  print_r($post_length);
              if(empty($post_length)){
                $_SESSION['count'] = 0;
              }
              elseif(!empty($post_length)){
                $_SESSION['count'] = $post_length;
              }
              echo "<div class='blog_blocks'>";
              
              foreach ($folders as $folder) {
                  if ($folder == '.' || $folder == '..') continue;
                  if (is_dir($dir . $folder)) {
                      $jsondata = file_get_contents($dir . $folder . '/data.json');
                      $data = json_decode($jsondata, true);
                      $htmlFilePath = $dir . $folder . '/index.php';
                      $category = $data["category"];
                      
                        if($category === 'food'){
                        $Author = $data['Author'];
                        $image = '.././images/custom/food.jpg';  
                        $imag2 = '.././images/custom/food1.jpg'; 
                        echo "<div class='card'><div class='card-content'><div class='card-front' style='background-image: url({$image});'><p class='sub-title'>{$data['category']}</p><h1 class='title'>{$data['title']}</h1></div><div class='card-back' style='background-image: url({$imag2});'><div class='back-title'>{$data['title']}</div><div class='blog-description'>    <span>Description: </span>{$data['description']}</div><div class='release-date'>    <span>Author: </span>{$data['Author']}</div><a href='$htmlFilePath' class='btn'>View</a></div></div></div>";
                        }
                        elseif($category === 'fashion'){
                        $Author = $data['Author'];
                        $image = '.././images/custom/fashion.jpg';
                        $imag2 = '.././images/custom/fashion1.jpg'; 
                            echo "<div class='card'><div class='card-content'><div class='card-front' style='background-image: url({$image});'><p class='sub-title'>{$data['category']}</p><h1 class='title'>{$data['title']}</h1></div><div class='card-back' style='background-image: url({$imag2});'><div class='back-title'>{$data['title']}</div><div class='blog-description'>    <span>Description: </span>{$data['description']}</div><div class='release-date'>    <span>Author: </span>{$data['Author']}</div><a href='$htmlFilePath' class='btn'>View</a></div></div></div>";
                        }
                        elseif($category === 'tour'){
                        $Author = $data['Author'];
                        $image = '.././images/custom/tour.jpg';
                        $imag2 = '.././images/custom/tour1.png'; 
                            echo "<div class='card'><div class='card-content'><div class='card-front' style='background-image: url({$image});'><p class='sub-title'>{$data['category']}</p><h1 class='title'>{$data['title']}</h1></div><div class='card-back' style='background-image: url({$imag2});'><div class='back-title'>{$data['title']}</div><div class='blog-description'>    <span>Description: </span>{$data['description']}</div><div class='release-date'>    <span>Author: </span>{$data['Author']}</div><a href='$htmlFilePath' class='btn'>View</a></div></div></div>";
                        }
                        elseif($category === 'music'){
                        $Author = $data['Author'];
                        $image = '.././images/custom/music.jpg';
                        $imag2 = '.././images/custom/music1.jpg';
                            echo "<div class='card'><div class='card-content'><div class='card-front' style='background-image: url({$image});'><p class='sub-title'>{$data['category']}</p><h1 class='title'>{$data['title']}</h1></div><div class='card-back' style='background-image: url({$imag2});'><div class='back-title'>{$data['title']}</div><div class='blog-description'>    <span>Description: </span>{$data['description']}</div><div class='release-date'>    <span>Author: </span>{$data['Author']}</div><a href='$htmlFilePath' class='btn'>View</a></div></div></div>";
                        }
                        elseif($category === 'art'){
                        $Author = $data['Author'];
                        $image = '.././images/custom/art.jpg'; 
                        $imag2 = '.././images/custom/art1.jpg';   
                        echo "<div class='card'><div class='card-content'><div class='card-front' style='background-image: url({$image});'><p class='sub-title'>{$data['category']}.</p><h1 class='title'>{$data['title']}</h1></div><div class='card-back' style='background-image: url({$imag2});'><div class='back-title'>{$data['title']}</div><div class='blog-description'>    <span>Description: </span>{$data['description']}</div><div class='release-date'>    <span>Author: </span>{$data['Author']}</div><a href='$htmlFilePath' class='btn'>View</a></div></div></div>";
                        }

                  }
              }
              echo "</div>";
              ?>
                