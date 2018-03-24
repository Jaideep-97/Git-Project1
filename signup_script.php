<?php
require 'includes/common.php';
$con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
session_start();

$email = mysqli_real_escape_string($con, $_POST['email']);
$name = mysqli_real_escape_string($con, $_POST['name']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$select_query="Select id from users where email='$email'";
$select_query_res=mysqli_query($con,$select_query) or die(mysqli_error($con));
$no_of_rows=mysqli_num_rows($select_query_res);
if($no_of_rows>0)
{
    echo "<h2>Email id already exists. Try a different one</h2>";
}
else
{
    $insert="Insert into users(email,name,password) values ('$email','$name','$password')";
    $registered=mysqli_query($con,$insert) or die(mysqli_error($con));
    echo "user successfully registered";
    $id= mysqli_insert_id($con);
    $row= mysqli_fetch_array($select_query_res);
    $_SESSION['id']=$row[0];
    $_SESSION['email']=$email;
     if(isset($_SESSION['email']))
{
     header('Location:index1.php');
}
}

?>
    
