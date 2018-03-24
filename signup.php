<?php
require 'includes/common.php';
?>
<html>
    <head>
        
        <title>signup</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <style>
            body{
                width: 100%;
                height: 100%;
                margin: 0;
                background: url(wallpaper10.jpg) no-repeat center;
                background-size: cover;
            }
            a{
                text-decoration: none;
                background-color: transparent;
                color: #ededed
            }
            
        </style>
         <style>
         body
         {
             background: url(wallpaper10.jpg) no-repeat center;
             background-size: cover;
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
<h3 class="text-danger">SIGN-UP</h3>
<form method="post" action="signup_script.php">
            <div class="form-group">
                <label for='name' class="control-label col-xs-2">Name</label>
                <input type='text' id='name' class="form-control" name="name" />
                <label for="email" class="control-label col-xs-2">Email</label>
                <input type="text" id="email" class="form-control" name="email" />
                <label for='pwd' class='control-label col-xs-2'>Password</label>
                <input type='password', id='pwd', class='form-control' name="password" />
                <br />
                <button class="btn btn-warning" value="Submit">Submit</button>
        </form>
               <?php
       include 'includes/footer.php';
       ?>
    </body>
</html>

