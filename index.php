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
  <title>LOGIN</title>
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
      <a class="navbar-brand" href="index.html">BOOKSTORE</a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
      
          
          
      <h3 class="text-danger " style="font:1.5em;"><b>Login to make a purchase</b></h3>
      <div>
              <form method="post" action="login_submit.php" >
              <div class="form-group">
                  <label for="email" class="control-label col-xs-2">Email</label>
                  <input type="email" class="form-control" id="email" name="email" />
                  <label for="pwd" class="control-label col-xs-2">Password</label>
                  <input type="password" class="form-control" id="pwd" name="password" />
                  <br />
                  <button  type="submit" class="btn btn-warning">Submit</button>
              </div>
              </form>
      </div>
         <br />
         <div >
              <h3 class="text-danger">Don't have an account?<a href='signup.html'> Register here</a></h3>
         
         </div>
        
             <footer>
            <div class="container">
                <p style="text-align: center;">Copyright BOOKSTORE. All Rights Reserved | Contact Us: +91 9000000000</p> 
            </div>
        </footer>
        
  </body>
</html>