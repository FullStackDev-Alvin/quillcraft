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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="shortcut icon" href="./images/icon.png" type="image/x-icon" />
    <title>QuillCraft</title>
  </head>
  <body>
    <div class="container">
      <section class="landing sec">
        <div class="navbar">
          <nav>
            <div class="logo">
              <img src="./images/light_logo.png" alt="" />
            </div>
            <ul>
              <li><a href="./index.php">Home</a></li>
              <li><a href="./templates.php" >Templates</a></li>
              <li><a href="#" style="border-bottom: 2px solid var(--light);">About us</a></li>
              <li><a href="./dashboard/index.php?link=1">My DashBoard</a></li>
            </ul>
          </nav>
        </div>
        <div class="ad">
          <h1>
            Get Creativ<span class="one">e and create your blog to</span
            ><span class="two">day</span>
          </h1>
          <!-- <a href="#">Create your blog</a> -->
        </div>
      </section>
      <section class="section2 sec">
        <div class="left">
          <img src="./images/section2.png" alt="" />
        </div>
        <div class="right">
          <p>
            Welcome to QuillCraft, where creativity meets simplicity. Our blog
            engine is designed to be your sanctuary for self-expression, a
            digital haven where your thoughts are nurtured and your voice is
            amplified
          </p>
        </div>
      </section>
      <section class="section3 sec">
        <img src="./images/logo.png" alt="" />
      </section>
      <section class="section4 sec">
        <img
          src="./images/Unlock Your Writing Potential with Quill Craft.png"
          alt=""
          id="img"
        />
        <div class="div">
          <div class="text">
            Are you ready to elevate your blogging experience to new heights?
            Sign up for Quill Craft today and join a community of passionate
            writers, bloggers, and content creators who are shaping the future
            of online publishing.
          </div>
          <div class="img">
            <img src="./images/signup.png" alt="" />
          </div>
        </div>
      </section>
      <section class="section5 sec">
        <h1>Why QuillCraft you may ask?</h1>
        <div class="div">
          <div class="img">
            <img src="./images/sectiion5.png" alt="" />
          </div>
          <div class="text">
            <h1>Customizable Templates:</h1>
            Stand out from the crowd with beautifully designed templates that
            reflect your unique style and personality. Whether you're a
            fashionista, foodie, or tech guru, we have the perfect template to
            showcase your content
          </div>
        </div>
      </section>
      <section class="section6 sec">
        <div class="div">
          <div class="text">
            <h1>SEO Optimization :</h1>
            Get noticed by search engines and attract more readers to your blog
            with our built-in SEO optimization tools. From meta tags to keyword
            suggestions, we'll help you climb the ranks and reach your target
            audience.
          </div>
          <div class="img">
            <img src="./images/section6.png " alt="" />
          </div>
        </div>
      </section>
      <section class="section7 sec">
        <div class="div">
          <div class="img">
            <img src="./images/section7.png" alt="" />
          </div>
          <div class="text">
            <h1>Analytics Dashboard:</h1>
            Track your blog's performance in real-time with our comprehensive
            analytics dashboard. Gain valuable insights into your audience
            demographics, traffic sources, and popular content, so you can make
            informed decisions and grow your following.
          </div>
        </div>
      </section>
      <section class="section8 sec">
        <a href="./dashboard/index.php?link=4">
          Get started today
          <img src="./images/Arrow 1.png" alt="" />
        </a>
      </section>
      <div class="ai" style="display: none;">
        <img src="/images/download (1).jpg" alt="" />
      </div>
    </div>
    <script>
      ScrollReveal().reveal(".sec", { reset: true, interval: 200 });
    </script>
  </body>
</html>
