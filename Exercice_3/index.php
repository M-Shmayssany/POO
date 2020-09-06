<?php
include 'database.php';
include 'user.php';
session_start();

if (isset($_SESSION['username'])){
    echo "<h1> Willcome " . $_SESSION['username'] . " you are logged in.</h1>";
    echo "<a href='register.php'>Register</a><br />";
    echo "<a href='change.php'>Change</a><br />";
    echo "<a href='logout.php'>Logout</a>";
}else{
    echo "<h1> Willcome you are not logged in.</h1>";
    echo "<a href='register.php'>Register</a><br />";
    echo "<a href='login.php'>Login</a>";
}

?>
