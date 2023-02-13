<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./styles.css">
  </head>
  <body>
    <div id="in">
      <form>
        <div class="prompt">
          <div class="txt">šířka domečku:</div>
          <div><input type="number" name="hw"></div>
        </div> 
        <div class="prompt">
          <div class="txt">výška domečku:</div>
          <div><input type="number" name="hh"></div>
        </div>
        <div class="prompt">
          <div class="txt">výška plotu:</div>
          <div><input type="number" name="fh"></div>
        </div>
        <button type="submit">submit</button>
      </form>
      </div>
    <div id="php">
      <?php
        $hw = $_GET['hw'];
        $hh = $_GET['hh'];
        $fh = $_GET['fh'];
        if($hw % 2 == 0){
          echo "jenom lichá čísla pro šířku domku";
          return;
        }
        if($fh >= $hh){
          echo "plot je většinou nižší než domek";
          return;
        }
        if($hh < 2 || $hw < 3){
          echo "tam se nikdo nevejde";
          return;
        }
        for($i = 0; $i < ($hw / 2); $i++){
          echo str_repeat('&nbsp;', (($hw / 2) - $i));
          echo 'X';
          if($i != 0) echo str_repeat('&nbsp;', $i*2-1) . "X";
          echo '<br/>';
        }
        echo str_repeat('X', $hw);
        ?>
        <br/>
        <?php
        for($i = 1; $i < $hh - 1; $i++){
          echo 'X';
          echo $i % 2 == 1 ? 'o' . str_repeat("*o", ($hw - 3) / 2) : '*' . str_repeat("o*", ($hw - 3) / 2);
          echo 'X';
          if($hh - $i == $fh){
            echo '-|-|-|';
          }
          elseif($hh - $i < $fh){
            echo ' | | |';
          }
          echo '<br/>';
        }
        echo str_repeat('X', $hw);
      ?>-|-|-|
    </div>
  </body>
</html>