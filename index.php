<?php require('db_connect.php');?>
      <!-- header part -->
 <?php include('header.php');?>
      <!-- end header part -->
        <!-- login part -->
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
        // echo "<script>alert('Login faild!')</script>";
        header('Location:login.php');
        exit;
    }
}
?>
<!-- register part -->
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
  exit;
}
else{
  echo "<script>alert('register feild!')</script>";
}
}
    ?>
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
        <!-- end login part -->
        <!-- register part -->
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