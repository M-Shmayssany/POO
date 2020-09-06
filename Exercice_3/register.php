<?php
session_start();
if (isset($_SESSION['username'])){
    echo "<h2>" . $_SESSION['username'] . ".</h2>";
}else{
    header("Location: login.php");
}
include './database.php';
include './user.php';
$sName = $_SESSION['username'];
$sEmail = $_SESSION['email'];
$sPassword = $_SESSION['password'];
$db = new Database('localhost');
$conn = $db->connect();
if(isset($_POST['button'])){
	if(filter_var( $_POST['email'],FILTER_VALIDATE_EMAIL)){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$add = new User($conn);
		$add->insert($name, $email, $password);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter un utilisateur</title>
</head>
<body>
	<a href="index.php">Home</a>
	<a href="logout.php">Logout</a>
	<h1>Ajouter</h1>

	<form action="" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="">
		</div>
		<div>
			<label for="email">Email</label>
			<input type="email" name="email" value="">
		</div>
		<div>
			<label for="password">Password</label>
			<input type="password" name="password" value="">
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>

</body>
</html>
