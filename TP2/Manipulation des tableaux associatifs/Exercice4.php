<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice4</title>
    <link rel="stylesheet" href="exercice4.css">
</head>
<body>
    <table>
        <?php
        for($i=1; $i<= 10; $i++){
           echo "<tr>";
           for($j=1; $j<=10; $j++){
            if($i == 1 || $j ==1){
                echo "<td class = 'red'>" . $i * $j . "</td>";
            }
           
           else{
            if($i % 2 == 0){
                echo "<td class = 'yellow'>" . $i * $j . "</td>";
            }
            else{
                echo "<td class = 'orange'>" . $i * $j . "</td>";
            }
           }
        }
        echo "</tr>";
        }
        ?>

    </table>
    
</body>
</html>