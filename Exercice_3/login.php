<?php
include 'database.php';
include 'user.php';
$message = "";

if (isset($_POST['username'])){
  $name = $_POST['username'];
  
  $db = new Database('localhost');
  $conn =  $db->connect();
  $user = new User($conn);
  $data = $user->get('username', $name);
  if($data){
    if (isset($_POST['password'])){
      $pwd = sha1($_POST['password']);
      if($data['password'] == $pwd){
        session_start();
        echo $data['id'];
        $_SESSION['id'] = $data['id'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['email'] = $data['email'];
        //$_SESSION['password'] = $data['password'];
        $user->session($_SESSION['id'], 1);
        header("Location: index.php");
      }else{
        $message = "Incorrect password";
      }
    }else{
      $message = "please enter your password";
    }
  }else{
    $message = "the username does not exist.";
  }
}else{
    $message = "please enter your user name.";
}



?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
  <h1>Login</h1>
<?php echo "<h4>$message</h4>"; ?>
    <form action="" method="post">
      <div>
        <label for="username">Identifiant</label>
        <input type="text" name="username">
      </div>
      <div>
        <label for="password">Mot de passe </label>
        <input type="password" name="password">
      </div>
      <div>
        <button type="submit" name="button">Se connecter</button>
      </div>
    </form>
  </body>
</html>
