<?php

  include_once './header.php';
  
?>

<!DOCTYPE html>
<html>
    <head>
      <title>Home</title>
      <link rel="stylesheet" type="text/css" href="../Pages/./CSS/./Home.css">
    </head>

    <body>

        <div class="slideshow-container">
        <p>Latest Products ⇩</p><br>

        
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <a href="./products.php">
          <img src="../Pages/./Images/./iphone14.jpg" style="width:100%"></a>
          <div class="text">Brand: Apple<br>
                           <br> Phone:iPhone 14 128GB,Purple<br>
                           <br> Price: $1,299 <br>
                           <br> Click in the photo for more info ⓘ 
            </div>
        </div>
          
            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <a href="./products.php">
              <img src="../Pages/./Images/./applewatch.jpg" style="width:100%"></a>
              <div class="text">Brand:Apple <br>
                                <br>Model: Apple Watch S8 GPS 45mm<br>
                                <br>Price: $600.95<br>
                                <br> Click in the photo for more info ⓘ 
              </div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <a href="./products.php">
              <img src="../Pages/./Images/./LlaptopApple.jpg" style="width:100%"></a>
              <div class="text">Brand: Apple <br>
                               <br>PC: Apple MacBook Air 13.3", M1 8-core <br>
                               <br>Price: 	$2,499<br>
                               <br> Click in the photo for more info ⓘ 
            </div>
            </div>
        
          
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <br>
          
          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div>
  
          <center> 
            <div id="footer">
            <a href="https://www.facebook.com/"><img src="../Pages/./Images/./facebook.png" class="facebook"></a>
            <a href="https://www.instagram.com//"><img src="../Pages/./Images/./instagram.png" class="instagram"></a>
            <a href="https://www.tiktok.com/foryou?is_copy_url=1&is_from_webapp=v1"><img src="../Pages/./Images/./tiktok.png" class="instagram"></a>
            </div>
         </center>

         

          <script src="../JS/./Validimi.js"></script>
          <script src="../JS/./SlideShow.js"></script>

          
    </body>

   
    
</html>