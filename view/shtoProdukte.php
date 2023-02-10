<!DOCTYPE html>
<html>
<head>
<title>Shto Produkte</title>
<link rel="stylesheet" type="text/css" href="../Pages/./CSS/./Homee.css">
</head>

<body> 
<?php 
include_once './header.php';
?>

<div class="container-fluid p-4">
<form method="POST">

    <fieldset class="fieldset">

    <legend>Shto Produktin</legend>
            <div >
                <label  for="emri">Emri:</label>  
                <div >
                    <input  name="emri" type="text" placeholder="Emri..."  required="">                 
                </div>
            </div><br>
           
            <div class="form-group">
            <label for="pershkrimi">Pershkrimi:</label>  
            <div class="col-md-5">
            <input  name="pershkrimi" type="text" placeholder="Pershkrimi..." required="">
                
            </div>
            </div><br>

            
            <div >
            <label for="cmimi">Cmimi:</label>  
            <div class="col-md-5">
            <input  name="cmimi" type="text" placeholder="Cmimi..."  required="">
                
            </div>
            </div><br>

            
            <div>
            <label  for="foto">Foto:</label>
            <div >
                <input id="file" name="foto"  type="file">
            </div>
            </div><br><br>

            
            <div >
            <label for="submit"></label>
            <div>
                <button name="submit">Shto Produktin</button>
            </div>
            </div>
    </fieldset>

    <?php
        include_once('../Controllers/registerProductController.php');
    ?>
</form>
</div>
</body>
</html>