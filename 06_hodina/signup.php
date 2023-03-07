<?php

require_once('config.php');

$db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_USERNAME, DB_USERNAME, DB_PASSWORD);

$username = $_POST['username'];
$password = $_POST['password'];
$passwordRepeat = $_POST['passwordRepeat'];

if(isValid($username, $password, $passwordRepeat) == '1'){
  $stmt = $db->prepare("insert into users (username, password) values (?, ?);");
  $stmt->execute([$username, md5($password)]);
}else{
  echo isValid($username, $password, $passwordRepeat);
}


function isValid(string $username, string $password, string $passwordRepeat): string
{
  $numCnt = 0;
  if(empty($password) || empty($username) || empty($passwordRepeat))return 'empty';
  if(strlen($password) < 6)return 'password too short';
  if($password != $passwordRepeat) return 'passwords do not match';
  for($i = 0; $i < strlen($password); $i++){
    if(is_numeric($password[$i]))$numCnt++;
    if($numCnt > 1)return '1';
  }
  return 'password must contain at least 2 numbers';
}


?>