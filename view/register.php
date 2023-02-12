<?php

  include_once './header.php';

?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" type="text/css" href="../Pages/./CSS/./Regiister.css">
    </head>
    <body>
            <div class="overlay-background"></div>
            <div class="overlay-content">
              <h1 class="main-heading" style="color: white;">Enter your Register information!</h1>
              <form method="post">
                  <input type="text" name="name" placeholder="Name..."><br><br>
                  <input type="text" name="surname" placeholder="Surname..."><br><br>
                  <input type="text" name="username" placeholder="Username..."><br><br>
                  <input type="email" name="email" placeholder="Email..."><br><br>
                  <input type="password" name="password" placeholder="Password..."><br><br>
                  <input type="submit" name="submit" value="Register">
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


