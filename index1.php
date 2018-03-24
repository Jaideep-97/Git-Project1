<?php

require 'includes/common.php';
?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <title>index</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <style>
            body{
                width: 100%;
                height: 100%;
                margin: 0;
            }
            a{
                text-decoration: none;
                background-color: transparent;
                color: #ededed
            }
            
            
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
       include '/includes/header.php';
       ?>
        <div class="main">
            <div class="banner-image">
                <div class="inner-banner-image">
                    <div class="banner-content">
                        <h1 style="color: white;">We sell Books!</h1>
                        <p style="color:white;">HURRY UP! DISCOUNTS WORTH 40%</p>
                        <div class="btn-group">
                            <button class="btn btn-warning"  onclick="location.href='physics.php'" value="Physics">Physics</button>
                            <button class="btn btn-warning" onclick="location.href='chemistry.php'" value="Chemistry">Chemistry</button>
                            <button class="btn btn-warning" onclick="location.href='maths.php'" value="Maths">Mathematics</button>
                        </div>
                        
                </div>
            </div>
        </div>
        <div class="container">
            <div class="items">
                <a href="physics.php">
                    <img src="physics.jpg" class="thumbnail" width="100%" />
                    <div class="caption">
                        <h2>PHYSICS</h2>
                    </div>
                    
                    
                    
                </a>  
            </div>
            <div class="items">
                <a href="chemistry.php">
                    <img src="physics.jpg" class="thumbnail" width="100%" />
                    <div class="caption">
                        <h2>CHEMISTRY</h2>
                    </div>
                    
                    
                    
                </a>  
            </div>
            <div class="items">
                <a href="maths.php">
                    <img src="physics.jpg" class="thumbnail" width="100%" />
                    <div class="caption">
                        <h2>MATHEMATICS</h2>
                    </div>
                    
                    
                    
                </a>  
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
        
        
