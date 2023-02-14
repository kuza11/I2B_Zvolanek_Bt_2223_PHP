<?php
require 'passwords.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./styles.css">
  </head>
  <body>
    <div id="frm">
      <form method="post">
        
        <label for="username">username</label><br/>
        <input type="text" name="username"><br/><br/>
        <label for="password">password</label><br/>
        <input type="password" name="password"><br/><br/>
        <label for="password_agin">password agin</label><br/>
        <input type="password" name="password_agin"></br><br/>
        <button type="submit">sign up</button>
      </form>
      <?php
          if(!isset($_POST))return;
          $username = $_POST['username'];
          $password = $_POST['password'];
          $pwdAgin = $_POST['password_agin'];
          if(empty($username) || empty($password) || empty($pwdAgin))return;
          if($password != $pwdAgin){
            echo "hesla se neschodují";
          } else {
            echo "hesla se schodují";
            if(isValid($password)){
              echo "<br/>heslo je platné";
            } else {
              echo "<br/>heslo není platné";
            }
          }
        ?>
    </div>
  </body>
</html>