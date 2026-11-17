<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laprak pertemuan 7</title>
</head>
<body>
    <?php 
        echo "Arya php pertemuan 7<br><br>";

        echo "no 1 perulangan 1-10 genap<br>";
        for($i=1;$i<=10;$i++){
            if($i%2== 0){
                echo "$i ";
            }
        }
        echo "<br><br>no 2 tabel perkalian matrix<br><br>";
        echo "<table border=3px><tr>";
         echo "<td>bilangan</td>";
        for($i= 1;$i<= 10;$i++){
            echo "<td>$i</td>";
        }
        echo "</tr>";
        for($i=1;$i<11;$i++){
            echo "<tr><td>$i</td>";
            for($j= 1;$j< 11;$j++){
                $k=$i*$j;
                echo "<td>$k</td>";
            }echo "</tr>";
        }
        echo "</table>"
    ?>
</body>
</html>