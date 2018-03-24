<?php
require 'includes/common.php';
$item_id=$_GET['id'];
$user_id= $_SESSION['id'];
$del_query="Delete from users_items where users_id='$user_id' and items_id='$item_id'";
$del_query_res=mysqli_query($con,$del_query) or die(mysqli_error($con));
header('Location: cart.php');
?>
