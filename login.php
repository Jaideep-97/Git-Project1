<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>login</title>
   <style>
         body
         {
             background: url(wallpaper10.jpg) no-repeat center;
             background-size: cover;
         }
        </style>
  <link href="style.css" rel="stylesheet" type="text/css"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
  <body>
        
         <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index1.php">BOOKSTORE</a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
      
          
          
      <h3 class="text-danger " style="font:1.5em;"><b>Login to make a purchase</b></h3>
      <div>
          <form method="POST" action="login_submit.php">
              <div class="form-group">
                  <label for="email" class="control-label-col-xs-2">Email</label>
                  <input type="text" class="form-control" name="email" id="email" />
                  <label for="pwd" class="control-label-col-xs-2">PASSWORD</label>
                  <input type="text" class="form-control" name="password" id="pwd" />
                  <br />
                  <button type="Submit" class="btn btn-primary" value="Submit" >SUBMIT</button>
              </div>
          </form>
      </div>
         <br />
         <div >
              <h3 class="text-danger">Don't have an account?<a href='signup.php'> Register here</a></h3>
         
         </div>
        
             <footer>
            <div class="container">
                <p style="text-align: center;">Copyright BOOKSTORE. All Rights Reserved | Contact Us: +91 9000000000</p> 
            </div>
        </footer>
        
  </body>
</html>