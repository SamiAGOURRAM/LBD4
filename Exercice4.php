<?php
$test = [1, 6, 0, -5, -10, 5, 4, 10, -1];
for($i=0; $i<count($test); $i++){
    echo 'yes';
    for($j=$i+1; $j<count($test); $j++){
        echo 'n';
        if($test[$i]>$test[$j]){
            echo 'L';
            $temp = $test[$i];
            $test[$i] = $test[$j];
            $test[$j] = $temp;
        }
    }
}

print_r($test);
?>