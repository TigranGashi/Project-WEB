<?php

  include_once './header.php';

?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" type="text/css" href="../Pages/./CSS/./Login.css">
    </head>
    <body>
        <div class="overlay">
            <div class="overlay-background"></div>
            <div class="overlay-content">
              <h1 class="main-heading" style="color: white;">Enter your Register information!</h1>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                  <form class="signup-form">
                    <input id="name" name="name" placeholder="Name" type="text"/><br><br>
                    <input id="surname" name="surname" placeholder="Surname" type="text"/><br><br>
                    <input id="email" name="email" placeholder="Email" type="email"/><br><br>
                    <input id="username" name="username" placeholder="Username" type="text"/><br><br>
                    <input id="password" name="password" placeholder="Password" type="password"/><br>

                    <input class="btn btn-outline submit-btn" name="registerBtn" 
                                          onclick="validate()" value="Register"><br>
                  </form>
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

        <?php
            include_once '../Controllers/registerController.php';
        ?>
    </body>
</html>