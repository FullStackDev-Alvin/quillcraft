
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
      <div class="form1" > 
        <div class="img">
          <img src="./images/Group 14.png" alt="" />
        </div>
        <div class="main">
          <input type="checkbox" id="chk" aria-hidden="true" />

          <div class="register" style="position: relative; top: 10px;">
            <form class="form" id="myform" action="./logics/auth.php" method="post" enctype="multipart/form-data"  style="position: relative; top: -0px;">
              <label for="chk" aria-hidden="true">Sign up</label>
              <?php if(isset($_GET['error1'])) {?>
              <div class="alert" id="error" style="color: var(--main); background-color: var(--light); text-align:center; padding: 10px;">
                <?php echo $_GET['error1']?>
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
                type="text"
                name="username"
                placeholder="Username"
                
              />
              <input
                class="input"
                type="password"
                name="password"
                placeholder="Password"
                
              />
              <input
                class="input"
                type="password"
                name="cpassword"
                placeholder="Confirm Password"
                
              />
              <input
                class="input"
                type="file"
                name="image"
                accept="image/*"  
                id="image"
              />
              <button type="submit" name="signup">Sign up</button>
              <a href="./login.php" style="position: relative; top: -50px;">Already have an account? Login here</a>
            </form>
          </div>
        </div>
        <!-- <form action="">
          <h1>Login here</h1>
          <div class="input">
            <label for="">Email</label>
            <input type="email" name="" id="" placeholder="someone@gmail.com" />
          </div>
          <div class="input">
            <label for=""> Password </label>
            <input type="password" name="" id="" placeholder="..........." />
          </div>
          <div class="submit">
            <input type="submit" value="Login" />
            <a href="#">Dont have an account? Sign up here</a>
          </div>
        </form> -->
      </div>
    </div>
      <script>
        document.getElementById('image').addEventListener('change', function(event) {
          var file = this.files[0];  // Get the first file (if multiple are allowed, you need additional handling)
          var errorElement = document.getElementById('error');

          // Clear previous error messages
          errorElement.textContent = '';

          // Check if the file is an image
          if (file && file.type.startsWith('image/')) {
              // Valid image file
              console.log("An image has been selected: ", file.name);
          } else {
              // Not an image file or no file selected
              errorElement.textContent = 'Please select a valid image file.';
              // Reset the file input
              this.value = '';
          }
      });

      // Optional: Prevent form submission if the validation fails
      document.getElementById('myform').addEventListener('submit', function(event) {
          var fileInput = document.getElementById('imageInput');
          var errorElement = document.getElementById('error');

          if (!fileInput.value || errorElement.textContent !== '') {
              event.preventDefault(); // Stop the form from submitting
              errorElement.textContent ='Please correct the errors before submitting.';
          }
      });
      </script>
  </body>
</html>
