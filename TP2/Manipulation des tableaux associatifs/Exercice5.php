<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
    <link rel="stylesheet" href="exercice4.css">
</head>
<body>
    <?php
    $capitales = array(
        "Maroc" => "Rabat",
        "Allemagne" => "Berlin",
        "Serbie" => "Belgrade",
        "Brésil" => "Brasilia",
        "Slovaquie" => "Bratislava",
        "Italie" => "Rome",
        "Venezuela" => "Caracas",
        "Moldavie" => "Chisinau",
        "Guyana" => "Georgetown",
        "Viêt Nam" => "Hanoï",
        "Zimbabwe" => "Harare",
        "Cuba" => "La Havane",
        "Pays-Bas" => "La Haye",
        "Finlande" => "Helsinki"
    );

    echo 'Pays    |    Capitale<br>';
    foreach($capitales as $pays=>$cap){
        echo $pays.'    |    '.$cap.'<br>';
    }

    echo '<table><tr><th>Pays</th><th>Capitale</th></tr>';
    foreach($capitales as $pays=>$cap){
        echo '<tr><td>'.$pays.'</td><td>'.$cap.'</td></tr>';
    }
    echo '</table>';
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <label for="country">Enter the name of the country :</label>
    <input type="text" name='country'>
</form>

<?php
if(isset($_POST['country'])){
    if(in_array(isset($_POST['country']), $capitales)){
        echo $_POST['country'].' is in the table <br>';
    }
}
?>
    
</body>
</html>