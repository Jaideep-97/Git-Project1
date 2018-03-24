<?php

$con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
session_start();
$email=$_POST['email'];
$pwd=$_POST['password'];
$select_element="Select id,email from users where email='$email' and password='$pwd'";
$select_query_res=mysqli_query($con,$select_element) or die(mysqli_error($con));
$no_of_rows= mysqli_num_rows($select_query_res);
$arr=mysqli_fetch_array($select_query_res);

if($no_of_rows>0)
{
    header("Location:index1.php");
    $_SESSION['email']=$email;
    $_SESSION['id']=$arr[0];
}
else
{
    echo "<h3>Email or password incorrect</h3>";
}

?>


