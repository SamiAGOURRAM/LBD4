<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice3</title>
    <link rel="stylesheet" href="exercice3.css">
</head>
<body>
    <?php

$notes = array(
    "ahmed" => 14, 
    "joudia" => 19, 
    "samir"=> 14 , 
    "yassir" => 14.5 , 
    "aya" => 12, 
    "liham" => 16 , 
    "yassine"=> 17
);
foreach($notes as $key => $val){
    echo 'Nom : '.$key.', Note = '.$val.' <br>';
}


echo "<table class='table'><tr><td>Name</td><td>Age</td>";
foreach($notes as $key => $val){
    echo '<tr>';
    echo '<td>'.$key.'</td>';
    echo '<td>'.$val.'</td>';
    echo '</tr>';
}

    echo 'searching for the student with the highest mark : <br>';
    echo array_search(max(array_values($notes)), $notes);
    echo '<br>searching for the student with the highest mark : <br>';
    echo array_search(min(array_values($notes)), $notes);

echo '<br>mean of marks in the class : <br>';
echo array_sum($notes)/count($notes);
    ?>
</body>
</html>