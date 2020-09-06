<?php
include './database.php';
include './user.php';
$message = " ";
session_start();
if (isset($_SESSION['username'])){
    echo "<a href='index.php'>Home</a><br />";
    echo "<a href='logout.php'>Logout</a>";
}else{
    header("Location: login.php");
}
if(isset($_POST['action'])){
    $db = new Database('localhost');
    $conn =  $db->connect();
    $user = new User($conn);
    $user->deleteRecord($_SESSION['id']);
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
<h2 style="color:red;">Delete</h2>
<h2>Are you sure you want to delete your account?</h2>
<form action="" method="post">
<button type="submit" name="action" value="action">Delete</button>
</form>
</body>
</html>