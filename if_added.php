<?php

require 'includes/common.php';
function check_if_added_to_cart($item_id)
{
    $con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
    $user_id= $_SESSION['id'];
    $select_query="Select * from users_items where items_id='$item_id' and users_id='$user_id'";
    $select_query_res=mysqli_query($con,$select_query) or die(mysqli_error($con));
    $no_of_rows= mysqli_num_rows($select_query_res);
    if($no_of_rows>0)
    {
        return 1;
    }
 else {
     return 0;
    }
    
}

