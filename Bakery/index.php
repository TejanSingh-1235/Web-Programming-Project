<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/Bakery.jpg" />
        <title>Online Bakery Management System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Online Bakery Management System</h1>
                       <p>We Bake. You Eat.</p>
                       <a href="products.php" class="btn btn-danger">Start Eating</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/cake&pastry.jpg" alt="Cake & Pastries">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Cake & Pastries</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/cupcakes.jpg" alt="Muffins & Cupcakes">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Muffins & Cupcakes</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/sweets.jpg" alt="Bakery Sweets">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Bakery Sweets</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy . All Rights Reserved.</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>