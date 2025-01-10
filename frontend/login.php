
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
    <link rel="shortcut icon" href="./images/icon.png" type="image/x-icon" />
    <title>Login/Sign up</title>
  </head>
  <body>
    <div class="login_container">
      <div class="form1">
        <div class="img">
          <img src="./images/Group 14.png" alt="" />
        </div>
        <div class="main">
          <input type="checkbox" id="chk" aria-hidden="true" />

          <div class="login">
            <form class="form" action="./logics/auth.php" method="post" style="position: relative; top:0px;">
              <label for="chk" aria-hidden="true">Log in</label>
              <?php if(isset($_GET['error'])) {?>
              <div class="alert" style="color: var(--main); background-color: var(--light); text-align:center; padding: 10px;">
                <?php echo $_GET['error']?>
              </div>
              <?php }?>
              <input
                class="input"
                type="email"
                name="email"
                placeholder="Email"
                
              />
              <input
                class="input"
                type="password"
                name="password"
                placeholder="Password"
                
              />
              <button type="submit" name="login">Log in</button>
              <a href="./signup.php">Dont have an account? Sign up here</a>
            </form>

          </div>

      </div>
    </div>
  </body>
</html>
