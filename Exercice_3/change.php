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
if(isset($_POST['submit'])){
    $type = $_POST['type'];
    $change = $_POST['change'];
    $db = new Database('localhost');
    $conn = $db->connect();
    $user = new User($conn);
    $user->change($_SESSION['id'], $type, $change);
    $_SESSION[$type] = $change;
    $message= 'Session ID ' . $_SESSION['id'] . ' name ' . $_SESSION['username'] . ' and email is ' . $_SESSION['email'] . '.'; 
}else{
    $message= 'Session ID ' . $_SESSION['id'] . ' name ' . $_SESSION['username'] . ' and email is ' . $_SESSION['email'] . '.'; 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change</title>
</head>
<body>
<h2>Change</h2>
<?php echo $message; ?>
    <form method="post" action="">
    <label for="type">Change by : </label>
    <select name="type" id="type">
    <option value="username">User name</option>
    <option value="email">Email</option>
    </select>
    <label for="change">Change to : </label>
    <input type="text" name="change">
    <button type="submit" name="submit" value="change">Change</button>
    </form>
</body>
</html>