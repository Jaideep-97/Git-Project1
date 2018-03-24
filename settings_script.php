<?php
require 'includes/common.php';
$new_pwd=$_POST['new'];
$re_pwd=$_POST['reenter'];
$old_pwd=$_POST['old'];
if(($new_pwd)==($re_pwd))
{
    //echo "<h3>Passwords Match</h3><br/>";
    $email=$_SESSION['email'];
    $select_query="Select password from users where email='$email'";
    $select_query_res=mysqli_query($con,$select_query) or die(mysqli_error($con));
    $row= mysqli_fetch_array($select_query_res);
    $num_rows= mysqli_num_rows($select_query_res);
    $oldpassdb=$row['password'];
    if($oldpassdb==$old_pwd){
    $update_query="Update users SET password='$new_pwd' where email='$email'";
$update_query_res=mysqli_query($con,$update_query) or die(mysqli_error($con));
    echo "<h3 class='text-danger'>Password changed</h3>";
    }
 else {
         echo "<h3 class='text-danger'>Passwords dont match</h3>";
    // header('Location:index1.php');
    }
}
 else {
     echo "<h3 class='text-danger'>Passwords dont match</h3>";
    // header('Location:index1.php');
}
?>


