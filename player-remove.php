<?php
require 'includes/common.php';
$player_id=$_GET['id'];
$user_id= $_SESSION['id'];
$del_query="Delete from players_users where userid='$user_id' and itemid='$player_id'";
$del_query_res=mysqli_query($con,$del_query) or die(mysqli_error($con));
header('Location: addedlist.php');
?>
