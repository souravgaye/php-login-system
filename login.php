<?php 
include('db_connect.php');

//  login system php coding
if(isset($_POST['login'])){
    $query="SELECT * FROM `register_user` WHERE `username`='$_POST[username]'AND `password`='$_POST[password]'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1){
        header('Location:wellcome.php');
        exit;
    }
    else{
        echo "<script>alert('Login faild!')</script>";
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
            <button type="button"  class="nav-btn" onclick="popup('login-popup')">LOGIN</button>
            <!-- <button type="button"  class="nav-btn" onclick="popup('register-popup')">REGISTER</button> -->
        </div>
    </header>
<!-- end header pard -->
 <div class="popup-container" id="login-popup">
        <div class="popup">
            <form action="" method="POST">
                <h2>
                    <span>USER LOGIN</span>
                    <BUtton type=""onclick="popup('login-popup')">x</BUtton>
                </h2>
                <input type="text"name="username"  placeholder="E-mail or Username" require>
                <input type="password" name="password" placeholder="password" require>
                <button type="submit" name="login" class="login-btn">LOGIN</button>
                <br><span> You are a New user? <a href="register.php">Register Now.</a></span>

            </form>
        </div>
    </div>
          <!-- login btn use only -->
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