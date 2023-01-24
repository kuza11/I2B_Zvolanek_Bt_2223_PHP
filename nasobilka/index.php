<!DOCTYPE html>
<html lang="en">
  <head>
      <title></title>
      <meta charset="UTF-8">
      <style>
        table, tr, td{
          border: 1px solid black
        }
        tr :first-child, tr:first-child{
          background: green;
        }
      </style>
  </head>
  <body>
    <table>
      <?php
        $rows = 100;
        $cols = 100;

        for ($i = 0; $i <= $rows; $i++) { 
          echo "<tr>";
          for ($j=0; $j <= $cols ; $j++) { 
            if($i == 0){
              $res = $j;
            }elseif($j == 0){
              $res = $i;
            }else{
              $res = $i * $j;
            }
            
            echo "<td>$res</td>";
          }
          echo "</tr>";
        }
      ?>
    </table>
  </body>
</html>