<?php
require 'includes/common.php';
if(!isset($_SESSION['email']))
{
    header('Location:index1.php');
}

session_unset();
session_destroy();
header('Location:index1.php');
?>

