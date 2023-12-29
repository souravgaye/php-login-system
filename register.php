
<?php
require('db_connect.php');
if(isset($_POST['register'])){
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$query="INSERT INTO `register_user` (`full_name`, `username`, `email`, `password`) VALUES ('$fullname', '$username', '$email', '$password')";
$result = mysqli_query($conn,$query);
if(($result)==1){
    header('Location:login.php');
    echo "<script>alert('register feild!')</script>";
    exit;
  }
  else{
    echo "<script>alert('register feild!')</script>";
  }
}
    ?>

    <!-- header part -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <h2>logo</h2>
        <div class="sing-in-up">
            <!-- <button type="button"  class="nav-btn" onclick="popup('login-popup')">LOGIN</button> -->
            <button type="button"  class="nav-btn" onclick="popup('register-popup')">REGISTER</button>
        </div>
    </header>
    <!-- end header part -->
    
<div class="popup-container" id="register-popup">
        <div class="popup register">
            <form action="" method="POST">
                <h2>
                    <span>REGISTER</span>
                    <BUtton type="" onclick="popup('register-popup')">x</BUtton>
                </h2>
                <input type="text" placeholder="FULL NAME" name="fullname">
                <input type="text" placeholder="USER NAME" name="username">
                <input type="text" placeholder="e-mail" name="email">
                <input type="password" placeholder="password" name="password">
                <button type="submit" class="register-btn" name="register">REGISTER</button>
                 <br><span class="span">You are a Old User? <a href="login.php">Login Now.</a></span>
            </form>
        </div>
    </div>
    <!-- javascript part btn -->
         <!-- popup  javascript system index page button  -->
            <script>
               function popup(popup_name)
               {
                get_popup=document.getElementById(popup_name);
                if(get_popup.style.display=="flex")
                {
                   get_popup.style.display=="none";
                 }else{
                   get_popup.style.display="flex";
                 }
                }
            </script>
</body>
</html>