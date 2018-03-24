<?php

require 'includes/common.php';
//$con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
$item_id=$_GET['id'];
$user_id= $_SESSION['id'];
$ins_query="Insert into users_items(users_id,items_id,status)values('$user_id','$item_id','Added to Cart')";
$query_res=mysqli_query($con,$ins_query) or die(mysqli_error($con));
header('Location:index1.php');
?>