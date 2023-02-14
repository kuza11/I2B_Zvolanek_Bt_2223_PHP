 <?php
  function isValid(string $password): bool
  {
    $numCnt = 0;
    if(strlen($password) < 8)return false;
    for($i = 0; $i < strlen($password); $i++){
      if(is_numeric($password[$i]))$numCnt++;
      if($numCnt > 1)return true;
    }
    return true;
  }
 ?>