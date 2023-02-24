<?php
echo 'initial array : ';

$test = [1, 6, 0, -5, -10, 5, 4, 10, -1];
print_r($test);
echo '<br>';
for($i=0; $i<count($test); $i++){
    for($j=$i+1; $j<count($test); $j++){
        if($test[$i]>$test[$j]){
            $temp = $test[$i];
            $test[$i] = $test[$j];
            $test[$j] = $temp;
        }
    }
}
echo 'ordered array : ';
print_r($test);
?>