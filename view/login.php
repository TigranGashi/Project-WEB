<?php

  include_once './header.php';

?>

<!DOCTYPE html>
<html>
    <head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="../Pages/./CSS/./Login.css">
    </head>
    <body>
      <div class="overlay">
        <div class="overlay-background"></div>
        <div class="overlay-content">
          <h1 class="main-heading" style="color: white";>Enter your Login information!</h1>
          <form class="login-form"></form>
          <label >Email Address:</label> 
                <input id="emailL" class="emailL" placeholder="Email" type="email" /><br>
                <label>Password:</label>
                <input id="passwordL" class="passwordL" placeholder="Password" type="password" />


                <input class="btn btn-outline login-btn" onclick="validateL()" value="Log In">
              </form>
            </div>
          </div>

          <center> 
            <div id="footer">
            <a href="https://www.facebook.com/"><img src="../Pages/./Images/./facebook.png" class="facebook"></a>
            <a href="https://www.instagram.com//"><img src="../Pages/./Images/./instagram.png" class="instagram"></a>
            <a href="https://www.tiktok.com/foryou?is_copy_url=1&is_from_webapp=v1"><img src="../Pages/./Images/./tiktok.png" class="copyright"></a>
            </div>
         </center>

          <script src="../JS/./Validimi.js"></script>
        </body>
</html>