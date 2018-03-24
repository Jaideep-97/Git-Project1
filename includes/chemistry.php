<?php

require 'includes/common.php';
?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 <html>
    <head>
        
        <title>chemistry</title>
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
        <div>
        <?php
       include '/includes/header.php';
       include 'if_added.php';
       ?>
        </div>
 <div class="container">
            <div class="jumbotron">
                <h3>WELCOME TO PHYSICS SECTION!</h3>
                
            </div>
            <div class="row ">
                <div class="col-md-4 col-sm-6">
                    <img src="chemistry1.jpg" class="thumbnail" />
                </div>
                <div class="col-md-8 col-sm-6">
                    <h3 class="text-danger">A textbook of Physical Chemistry<br />Price: Rs 250/-<br /> </h3>
                    <br />
                    <h3 class="text-danger">Author: OP Tandon</h3>
                     <button class="btn btn-warning" value="Add to Cart" onclick="location.href='cart-add.php?id=4'">Add to Cart</button>
                    
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <img src="chemistry2.jpeg" class="thumbnail" />
                    
                </div>
                <div class="col-md-8 col-sm-6">
                    <h3 class="text-danger">Organic Chemistry for IITJEE<br />Price: Rs 300/-<br /> </h3>
                    <br />
                    <h3 class="text-danger">Author: Solomons and Fryhle's</h3>
                    <button class="btn btn-warning" value="Add to Cart" onclick="location.href='cart-add.php?id=5'">Add to Cart</button>

                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <img src="chemistry3.jpg" class="thumbnail" />
                    
                </div>
                <div class="col-md-8 col-sm-6">
                    <h3 class="text-danger">Modern Approach to Chemical Calculations <br />Price: Rs 150/-<br /> </h3>
                    <br />
                    <h3 class="text-danger">Author: RC Mukherjee</h3>
                    <button class="btn btn-warning" value="Add to Cart" onclick="location.href='cart-add.php?id=6'">Add to Cart</button>
                </div>
            </div>
        
        </div>
    <?php
include 'footer.php'
?>    
    </body>
</html>

