<?php
    include 'db_connect.php';
    
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(empty($email)){
            header("location:../login.php?error=Email is required");
        }
        else if(empty($password)){
            header("location:../login.php?error=Password is required");
        }
        else{
            session_start();
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($connect,$sql);
            $rows = mysqli_num_rows($result);
            if ($rows==0) {
                
                header("location:../login.php?error=Wrong Email");
            }
            else{
                while($data = mysqli_fetch_assoc($result)){
                    $username = $data['username'];
                    $pword = $data['password'];
                    if($password === $pword){
                        $_SESSION['user'] = $email;
                        header("location:../dashboard/index.php?link=1");
                    }
                    else{
                        header("location:../login.php?error=Wrong Password");
                    }
                }
            }
        }

    }

    if(isset($_POST['signup'])){
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $username = $_POST['username'];

        $file = $_FILES['image']['name'];

        $file_loc = $_FILES['image']['tmp_name'];

        $folder = '../profiles';
        $new_file_name = uniqid('QuillCraft', true).$file;


        if(empty($email)){
            header("location:../signup.php?error1=Email is required");
        }
        else if(empty($password)){
            header("location:../signup.php?error1=Password is required");
        }
        else if(empty($file)){
            header("location:../signup.php?error1=Please choose an image");
        }
        else if(empty($cpassword)){
            header("location:../signup.php?error1=Please Confirm your password");
        }
        else if(empty($username)){
            header("location:../signup.php?error1=Username is required");
        }
        else{
            if($password===$cpassword){
                
                $sql = "SELECT `email` FROM `users`";
                $result = mysqli_query($connect,$sql);
                if($result){
                    while($data = mysqli_fetch_assoc($result)){
                        $email_exists = $data['email'];
                        if($email == $email_exists){
                            header("location:../signup.php?error1=Email already exists");
                        }
                        else{
                            session_start();
                            $sql_query = "INSERT INTO `users` (email,password,img_src,username) values('$email','$password','$new_file_name','$username')";
                            $result1 = mysqli_query($connect,$sql_query);
                            if($result1){
                                move_uploaded_file($file_loc, $folder.'/'.$new_file_name);
                                $_SESSION['user'] = $email;

                                
                                header("location:../dashboard/index.php?link=1");

                            }
                            else{
                                echo"there was an error entering the data";
                            }
                        }
                    }
                }
            }
            else{
                header("location:../signup.php?error1=Password dont match");
            }
        }
    }

?>