<!DOCTYPE html>
<html lang="en">
  <head>
      <title></title>
      <meta charset="UTF-8">
  </head>
  <body>
    <form>
      <label for="number1id">cislo jedna</label>
      <input type="number" name="number1name" id="number1id">
      <label for="number2id">cislo jedna</label>
      <input type="number" name="number2name" id="number2id">
      <label for="opId">operace</label>
      <input type="text" name="opName" id="opId">
      <button type="submit">odeslat</button>
    </form>
    <?php
    $input1 = $_GET['number1name'];
    $input2 = $_GET['number2name'];
    $op = $_GET['opName'];

    //echo "<h1>$input1</br>$input2<h1>";
    if(empty($input1) || empty($input2)){echo "<h1>error</h1>"; return;}
    switch ($op) {
      case '+':
        echo sprintf("<h1>%lf<h1>", $input1 + $input2);
        break;
      case '-':
        echo sprintf("<h1>%lf<h1>", $input1 - $input2);
        break;
      case '*':
        echo sprintf("<h1>%lf<h1>", $input1 * $input2);
        break;
      case '/':
        if($input2 == 0){echo "<h1>tvl</h1>"; break;}
        echo sprintf("<h1>%lf<h1>", $input1 / $input2);
        break;
      default:
        echo "<h1>error<h1>";
        break;
    }
    ?>
  </body>
</html>