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
        <div class="navbar navbar-inverse navbar-fixed-top">    
            <div class="container">      
                <div class="navbar-header">          
                    <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">          
                        <span class="icon-bar"></span>            
                        <span class="icon-bar"></span>             
                        <span class="icon-bar"></span>                            
                    </button>       
                    <a class="navbar-brand" href="index.php">Lifestyle Store</a>       
                </div>         <div class="collapse navbar-collapse" id="myNavbar">     
                    <ul class="nav navbar-nav navbar-right">             
    <?php                 if (isset($_SESSION['email'])) {                     ?>               
                        <li><a href = "cart.php"><span class = "glyphicon glyphicon-shoppingcart"></span> Cart </a></li>        
                        <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>         
                        <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-login"></span> Logout</a></li>    
                                             <?php 
                                             } else {        
                                                 ?>         
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>      
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>       
                  <?php                   
                  }             
                  ?>         
                    </ul>        
                </div>     
            </div> 
        </div>
    </body>
</html>