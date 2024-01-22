<?php
session_start();

if (!isset($_SESSION["UserID"])) {
    echo "<script>window.location.href='Login/Logout';</script>";
}

$page = basename($_SERVER['PHP_SELF']);

if ($_SESSION["UserAccess"] == 2 && ($page != 'blog.php' && $page != 'blogaddedit.php')) {
 
    echo "<script>alert('You dont have access!!!')</script><script>window.location.href='Login/logout.php';</script>"; // Replace with the appropriate redirect URL
}

$ImagePath = $_SESSION['ImagePath'];    
$UserName = $_SESSION['UserName'];
$UserID = $_SESSION['UserID'];
?>
