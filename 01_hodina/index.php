<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>1</h1>
        <?php
            $a = 123;
            $b = "text";
            $dny = ['pondeli', 'utery', 'streda', 'ctvrtek', 'patek', 'sobota'];
            $dny[] = 'nedele';
            $size = sizeof($dny);

            echo "velikost pole: " . sizeof($dny) . "<br><br>";
            echo "<ul>";

            foreach ($dny as $key => $value) {
                
                echo "<li>$value - ";
                if ($value == 'patek') {
                    echo "o ano</li>";
                }
                else {
                    echo "kezby byl patek</li>";
                }
            }
            echo "</ul>";
        ?>
        <ul>
        <?php
            
            for ($i=0; $i < $size; $i++) { 
                echo "<li> {$dny[$i]} </li>";
            }
            
        ?>
        </ul>
    <h2>Dnes je <?= $dny[1]?></h2>
    </body>
</html>