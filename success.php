<?php
require 'includes/common.php';
?>
<html>
    <head>
        
        <title>success</title>
       
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
            td{
                text-align: center;
            }
            th{
                text-align: center;
            }
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
       include '/includes/header.php';
       ?>
        <br />
        <br />
        
        <?php
        if(!isset($_SESSION['email']))
    header('Location:index1.php');
    else {
        $user_id=$_SESSION['id'];
        $select_query="Select * from items i inner join users_items ui on i.id=ui.items_id where ui.users_id='$user_id'";
        $select_element=mysqli_query($con,$select_query);
     //   $row= mysqli_fetch_array($select_element);
        $c=0;
        $sum=0;
    ?>    
    
    <table class="table table-hover">
        <tr>
             <td class="text-danger"><b>Item Number</b></td>
                    <td class="text-danger"><b>Item Name</b></td>
                    <td class="text-danger"><b>Price</b></td>
                    <td class="text-danger"><b>Order Status</b></td>
        </tr>
        </tr>
    <?php
    while($row=mysqli_fetch_array($select_element))
    {
        
        $sum=$sum+$row[2];
        $c+=1;
        ?>
        <tr>
            <td><?php echo $c?></td>
            <td><?php echo $row[1]?></td>
            <td><?php echo $row[2]?></td>
            <td><p class="text-danger"><b>CONFIRMED</b></p></td>
        </tr>
    <?php   
    }?>
        <tr>
            <td></td>
            <td><b>TOTAL</b></td>
            <td><b>Rs <?php echo $sum?>/-</b></td>
            <?php
    }
    ?>
        </tr>
    </table>
     <div class="container">
            <div class="jumbotron">
                <h3>Success!</h3>
                <p>Your order is confirmed. Thank You for shopping with us.</p><p> <a href="index1.php">Click here</a> to go back to Home Page</p>
            </div>
        </div>
   <?php
       include 'includes/footer.php';
       ?>
    </body>
</html>