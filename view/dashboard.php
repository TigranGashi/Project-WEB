<?php

  include_once './header.php';
  
?>

<!DOCTYPE html>
<html>
    <head>
      <title>Home</title>
      <link rel="stylesheet" type="text/css" href="../Pages/./CSS/./Homme.css">
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

        <div class="mapouter">
        <div class="gmap_canvas">
          <iframe width="1200" height="400" id="gmap_canvas" 
            src="https://maps.google.com/maps?q=Rahovec&t=k&z=13&ie=UTF8&iwloc=&output=embed"
            frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
          </iframe><a href="https://2yu.co">2yu</a><br>
            <style>.mapouter{position:relative;text-align:right;height:400px;width:1200px;}</style>
            <a href="https://embedgooglemap.2yu.co">html embed google map</a>
            <style>.gmap_canvas {overflow:hidden;background:none!important;height: 400px;;width:1200px;}</style>
        </div>
      </div>
      <style>.gmap_canvas {overflow: hidden;background: none !important;height: 400px;width: 1200px;border-radius: 10px;box-shadow: 0px 0px 20px #888;border: 3px solid black;}</style>

    </body>    
</html>