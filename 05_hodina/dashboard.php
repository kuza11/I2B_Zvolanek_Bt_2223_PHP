<?php


require_once 'config.php';

session_start();

$db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_USERNAME, DB_USERNAME, DB_PASSWORD);

if(!isset($_COOKIE['count'])){
  setcookie('count', 0, time() + 3600 * 24 * 30, '/');
}
if(isset($_POST['username']) && isset($_POST['password'])){


  $username = $_POST['username'];
  $password = $_POST['password'];

  function login(string $username, string $password, $db): bool{
    //return $username == USERNAME && $password == PASSWORD;
    $query = $db->query('select * from users;');
    $users = $query->fetchAll();

    

    foreach($users as $user){
      echo $user['id'];
      if($username == $user['username'] && $password == md5($user['password']))return true;
    }
    return false;
  }

  if(login($username, $password)){
    $_SESSION['user'] = $username;
    $_SESSION['count'] = 0;
  }
  else{
    echo "ne";
    header('Location: index.php');
    die();
  }
}
if(empty($_SESSION['user'])){
  header('Location: index.php');
  die();
}
$_SESSION['count']++;
setcookie('count', $_COOKIE['count'] + 1, time() + 3600 * 24 * 30, '/');
?>

<h1>vitej, <?= $_SESSION['user'] ?></h1>
<p>pocet navstev: <?= $_SESSION['count'] ?></p>
<p>pocet navstev celkem: <?= $_COOKIE['count'] ?></p>
<a href="logout.php">sign out</a>