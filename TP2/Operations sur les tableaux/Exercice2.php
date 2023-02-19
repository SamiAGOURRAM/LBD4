<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <?php
$moisFr = array(1=>'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre',
'Octobre', 'Novembre', 'Décembre');

for($i = 1; $i<=count($moisFr); $i++){
    echo $i.'-'.$moisFr[$i];
        echo '<br>';
    
}
    echo '--------------'.'<br>';

foreach($moisFr as $key => $val){
    echo $key.'-'.$val.'<br>';
}

    echo 'Current month : '.$moisFr[intval(date("m"))];
    echo '<br>';

    $mois = [];

    foreach($moisFr as $key => $val){
        if($val === 'Juillet'){
            $mois[13] = $val;
        }
        else{
            $mois[$key] = $val;
        }
    }
    echo '-------';
    echo '<br>';

    for($i=1; $i<=count($mois); $i++ ){
        echo $i.'-'.$mois[$i];
        echo '<br>';
    }

    echo '----------';
    echo '<br>';
    foreach($mois as $key => $val){
        if($key != 13){
            echo $key . '-' . $val;
            echo '<br>';
        }
        else{
            echo '7' . '-' . $val;
            echo '<br>';
        }

    }
?>


        
        <script src="" async defer></script>
    </body>
</html>