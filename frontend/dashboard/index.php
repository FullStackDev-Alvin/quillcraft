<?php
session_start();
require "../logics/db_connect.php";
session_regenerate_id(true);  // Pass true to delete the old session

if(empty($_SESSION['user'])){
  header("location:../login.php");
}

$email = $_SESSION['user'];
$query = "SELECT * FROM `users` WHERE email = '$email'";
$out = mysqli_query($connect, $query);
$data = mysqli_fetch_assoc($out);

$uname= $data['username'];
$img= $data['img_src'];




?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Part 02</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./styles.css">
    <link rel="shortcut icon" href="./images/icon.png" type="image/x-icon" />
    <script src="./script.js" defer></script>
    <style>
      
.card {
  width: 400px;
}

.card-content {
  position: relative;
  padding: 8rem 5rem;
  transform-style: preserve-3d;
  transition: transform 3s;
}
.card:hover .card-content {
  transform: rotateY(180deg);
  cursor: pointer;
}

.card-front,
.card-back {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 2rem;
  display: flex;
  flex-direction: column;
  justify-content: center;
  backface-visibility: hidden;
  transform-style: preserve-3d;
}

.card-front,
.card-back {
  background-size: cover;
  background-repeat: no-repeat;
  background-blend-mode: overlay;
  color: white;
}
.card-front {
  background-image: url("./images/food.jpg");
  background-color: rgba(255, 163, 42, 0.2);
  align-items: center;
}
.card-front::before {
  content: "";
  position: absolute;
  inset: 1rem;
  border: 3px solid var(--main);
  transform: translateZ(2rem);
}
.title {
  font-family: "Teko", sans-serif;
  font-size: 4.5rem;
  text-transform: uppercase;
  line-height: 120%;
  transform: translateZ(4.4rem);
}
.sub-title {
  font-size: 0.75rem;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 3px;
  transform: translateZ(3rem);
}

.card-back {
  /* background-image: url("./images/1\ \(9\).jpg"); */
  background-size: contain;
  transform: rotateY(180deg);
  gap: 0.5rem;
}
.back-title {
  font-family: "Teko", sans-serif;
  font-size: 2.4rem;
  font-weight: 600;
  color: var(--light);
  text-transform: uppercase;
  align-self: center;
  transform: translateZ(2rem);
}

.card-back span {
  font-weight: 600;
  color: var(--main);
  background-color: rgba(255, 255, 255, 0.425);
  padding: 4px;
  border-radius: 10px;
}
.btn {
  text-decoration: none;
  font-weight: 500;
  padding: 0.5rem 2.2rem;
  color: var(--light);
  border: 2px solid white;
  border-radius: 100px;
  text-align: center;
  align-self: center;
  background-color: var(--main);
  margin-top: 1rem;
  transform: translateZ(2rem);
  transition: 0.3s ease;
}
.btn:hover {
  background-color: var(--light);
  color: var(--main);
  border: 2px solid var(--light);
}
.blog-description {
  background-color: rgba(255, 255, 255, 0.219);
  padding: 20px;
}
.blog_blocks {
  width: 100vw;
  max-height: 500px;
  display: flex;
  overflow-x: scroll;
  flex-direction: column;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  gap: 20px;
  padding: 40px;
}

.content .middle .tab   {
  width: 80%;
  height: 300px;
  background-color: var(--main);
  border-radius: 20px;
}

.content .middle .tab h1{
  text-align: center;
  padding: 8px;
  color: var(--light);
}

.content .middle .tab .options {
  
  padding: 10px;
  border-radius: 20px;
  margin: auto;
  display: flex;
  flex-direction: row;
  gap: 10px;
  justify-content: center;
  align-items: center;
}

.tab .options .choose {
  width: 40%;
  height: 200px;
  padding: 20px;
  display: flex;
  background-color: var(--light);
  justify-content: center;
  align-items: center;
}

.tab .choose a {
  text-decoration: none;
  color: var(--light);
  background-color: var(--main);
  width: 100px;
  height: 50px;
  padding: 10px;
  border-radius: 10px;
  text-align: center;
  transition: 0.7s;
}

.tab .choose a:hover {
  color: var(--main);
  background-color: var(--light);
  box-shadow: 0px 6px 6px var(--main);
}


.comments {
  background-color: var(--light);
  display: flex;
  flex-direction: column;
  gap: 20px;
  width: 50%;
  padding:20px;
  border: 2px solid var(--main);
}

.comments li{
  list-style:none;  
  background-color: var(--main);
  padding:10px ;
  color:var(--light);
}


.comments li h4{
  color: var(--light);
  font-size: 20px;
  display:inline;
  padding: 20px;
  font-weight: 10px;
}

    </style>
  </head>
  <body>
    <nav>
      <div class="sideb ar-header">
        <a class="logo-wrapper">
          <img src="./assets/logo.jpg" alt="Logo">
          <h2 class="hidden">QuillCraft</h2>
        </a>
        <button class="toggle-btn">
          <img src="./assets/expand.svg" alt="expand button">
        </button>
      </div>


      <div class="sidebar-links">
        <a class="link " href="../index.php">
          <img src="./assets/home.svg" alt="">
          <span class="hidden">Home</span>
        </a>
        <a class="link" href="?link=0">
          <img src="./assets/projects.svg" alt="">
          <span class="hidden" >Posts</span>
        </a>
        <a class="link" href="?link=1">
          <img src="./assets/dashboard.svg" alt="">
          <span class="hidden">My blog life</span>
        </a>
        </li>
        <a class="link" href="?link=4">
          <img src="./assets/icon.png"  alt="">
          <span class="hidden">Create</span>
        </a>
        <a class="link" href="?link=5">
          <img src="./assets/expand.svg"  alt="">
          <span class="hidden">Comments</span>
        </a>
      </div>


      <div class="sidebar-bottom">
        <div class="sidebar-links">
          <a class="link" href="../logout.php">
            <img src="./assets/logout.svg" alt="">
            <span class="hidden">Logout</span>
          </a>
        </div>

        <div class="user-profile">
          <div class="user-avatar">
            <img src="../profiles/<?php echo $img;?>" alt="">
          </div>
          <div class="user-details hidden">
            <p class="username"><?php echo $uname;?></p>
            <p class="user-email"><?php echo $email;?></p>
          </div>
        </div>
      </div>
    </nav>

    <div class="content">
      <div class="top">
        <div class="logo">
          <img src="./assets/logo.png" alt="">
        </div>
        <div class="title">
          <h1 style="font-size: 20px;">Dashboard</h1>
        </div>
      </div>
      <div class="middle">
        <?php
            if(isset($_GET['link'])){
              $link = $_GET['link'];
            if($link == 0){
              include("posts.php");
            }
            elseif($link == 1){
              include("dashboard.php");
            }
            elseif($link == 4){
              include("choose.php");
            }
            elseif($link == 5){
              include('landing.php');
            }     
          }
            
        ?>
      </div>
      <div class="bottom">

      </div>
    </div>
    <script>
    </script>
  </body>
</html>