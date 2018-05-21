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
        
        <title>PHYSICS</title>
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
                    <img src="physics1.jpg" class="thumbnail" />
                </div>
                <div class="col-md-8 col-sm-6">
                    <h3 class="text-danger">Understanding Physics for JEE Main and Advanced Part-1<br />Price: Rs 150/-<br /> </h3>
                    <br />
                    <h3 class="text-danger">Author: DC Pandey</h3>
                     <?php if (!isset($_SESSION['email']))
                         { ?>                             
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                 
                <?php             
                } else {              
                    //We have created a function to check whether this particular product is added to cart or not.                      
                               if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)                     
                                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';        
                                                                        } else {                            
                                                                                 ?>                          
                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>        
                             <?php                          
                             }                        
                             }                        
                             ?> 
                   
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <img src="physics2.jpg" class="thumbnail" />
                    
                </div>
                <div class="col-md-8 col-sm-6">
                    <h3 class="text-danger">Understanding Physics for JEE Main and Advanced Part-2<br />Price: Rs 150/-<br /> </h3>
                    <br />
                    <h3 class="text-danger">Author: DC Pandey</h3>
                     <?php if (!isset($_SESSION['email']))
                         { ?>                             
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                 
                <?php             
                } else {              
                    //We have created a function to check whether this particular product is added to cart or not.                      
                               if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)                     
                                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';        
                                                                        } else {                            
                                                                                 ?>                          
                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>          
                    <?php
                    } 
                    
                       } ?>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <img src="physics3.jpg" class="thumbnail" />
                    
                </div>
                <div class="col-md-8 col-sm-6">
                    <h3 class="text-danger">New Pattern Physics for JEE Main and Advanced <br />Price: Rs 150/-<br /> </h3>
                    <br />
                    <h3 class="text-danger">Author: DC Pandey</h3>
                     <?php if (!isset($_SESSION['email']))
                         { ?>                             
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                 
                <?php             
                } else {              
                    //We have created a function to check whether this particular product is added to cart or not.                      
                               if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)                     
                                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';        
                                                                        } else {                            
                                                                                 ?>                          
                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>          
                <?php
                    } 
                    
                       } ?>
                </div>
            </div>
        
        </div>
    <?php
include 'footer.php'
?>    
    </body>
</html>

