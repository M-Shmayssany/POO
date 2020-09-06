<?php
include 'database.php';
include 'user.php';

$db = new Database('localhost');
$conn = $db->connect();
$user = new User($conn);
//Logout 
// open the session.
session_start();
$user->session($_SESSION['id'], '0');
// destroy the session variables.
session_unset();
// destroy the session.
session_destroy();
// redirect ot login page.
header("Location: index.php");

?>
