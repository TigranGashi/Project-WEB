<?php
    include_once './header.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ContactUs</title>
        <link rel="stylesheet" type="text/css" href="../Pages/./CSS/./ContactUs.css">
    </head>

    <body>
        <fieldset class="fieldset">
        <legend>Contact form for any questions</legend>
        <form name="formContact" method="POST" action="">
        <p>
        <label for="Name">Name</label>
        <input class="tparat" type="text" name="kontaktiEmri" id="txtName">
        </p>
        <p>
        <label for="mbiemri">Surname</label>
        <input class="tparat" type="text" name="kontaktiMbiemri" id="txtMbiemri">
        </p>
        <p>
        <label for="email">Email</label>
        <input class="tparat" type="text" name="kontaktiEmail" id="txtEmail" required ="required">
        </p>
        <p>
        <label for="phone">Phone</label>
        <input class="tparat" type="text" name="kontaktiTelefoni" id="txtPhone">
        </p>
        <p>
        <label for="message">Message</label><br>
        <textarea class="tparat" name="kontaktiMesazhi" id="txtMessage"></textarea>
        </p>
        <p>
        <input class="btn" type="submit" name="kontakti" id="Submit" value="Submit">
        </p>
        </form>
        </fieldset>

        <center> 
            <div id="footer">
            <a href="https://www.facebook.com/"><img src="../Pages/./Images/./facebook.png" class="facebook"></a>
            <a href="https://www.instagram.com//"><img src="../Pages/./Images/./instagram.png" class="instagram"></a>
            <a href="https://www.tiktok.com/foryou?is_copy_url=1&is_from_webapp=v1"><img src="../Pages/./Images/./tiktok.png" class="instagram"></a>
            </div>
      </center>
      
    </body>
</html>