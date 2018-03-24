
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
        
        <title>cart</title>
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
    </head>
    <body>
        <?php
       include '/includes/header.php';
       ?>
        <?php
         ?>
        <table class="table table-hover">
                <tr>
                    <td class="text-danger"><b>Item Number</b></td>
                    <td class="text-danger"><b>Item Name</b></td>
                    <td class="text-danger"><b>Price</b></td>
                <td></td>
                </tr>
  <?php
        if(!isset($_SESSION['email']))
{
    header('Location:index.php');
    
}

else
{
    $user_id=$_SESSION['id'];
    $select_query="Select * from users_items where users_id='$user_id'";
    $select_query_1="Select * from items i inner join users_items ui on i.id=ui.items_id where users_id='$user_id'";
    $select_query_2="Select *from users u inner join users_items ui on u.id=ui.users_id";
    $select_query_res=mysqli_query($con,$select_query_1) or die(mysqli_error($con));
    $no_of_rows= mysqli_num_rows($select_query_res);
    if($no_of_rows==0)
    {
        ?>
        <br />
        <br />
        <?php
        echo "<h3>Add items to Cart first</h3>";
    }
    else{
        $sum=0;
        $c=0;
       
        while($row= mysqli_fetch_array($select_query_res))
    {
        $sum=$sum+$row[2];
        $id="$id"."$row[0]".",";
        $c+=1;
        ?>

                <tr>
                    <td><?php echo $c; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2];   ?></td>
    <td> <a href='cart-remove.php?id=<?php echo $row[0]?>' class='remove_item_link'> Remove</a><?php } ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Total</td>
                <td><?php echo $sum; } } ?></td>
                    <td><input type="button" class="btn btn-primary" onclick="location.href='success.php'" value="Confirm Order"></button></td>
                    
                </tr>
            </table>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
 </html>
 