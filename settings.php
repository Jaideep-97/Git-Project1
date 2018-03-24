<?php
require 'includes/common.php';
 if(!isset($_SESSION['email']))
{
    header('Location:index1.php');
    
}
 
?>
<html>
    <head>
        
        <title>settings</title>
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
<br />
<br />
<br />
<br />
        <form class="form-group" method="post" action="settings_script.php">
            <label for="oldpwd" class="control-label col-xs-2">Old Password</label>
            <input type="password" id="oldpwd" class="form-control" name='old' />
            <label for="newpwd" class="control-label col-xs-2">New Password</label>
            <input type="password" id="newpwd" class="form-control" name='new'/>
            <label for="repwd" class="control-label col-xs-2">Re-enter Password</label>
            <input type="password" id="repwd" class="form-control" name='reenter'/>
            <br />
            <button class="btn btn-primary" >Change</button>
        </form>
        <?php
       include '/includes/footer.php';
       ?>
    </body>
</html>