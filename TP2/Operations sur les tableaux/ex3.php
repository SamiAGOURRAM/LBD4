<?php
$notes = [6.2, 8.0, 10, 15, 17, 18, 12, 16, 14, 13, 19, 20, 20];
print_r($notes);
echo '<br>';
echo 'mean : ';

print_r(array_sum($notes)/count($notes));
echo '<br>';
$counter = 0;
$counter20 = 0;
for($i=0; $i<count($notes); $i++){
    if($notes[$i]>10){
        $counter++;
    }
    if($notes[$i] == 20){
        $counter20++;

    }
}
echo 'number of marks above 10 are : ' . $counter;
echo '<br>';
echo 'number of marks equal to 20 : ' . $counter20;
echo '<br>';

for($i=0; $i<count($notes); $i++){
    for($j=$i+1; $j<count($notes)-1; $j++){
        if($notes[$i]>$notes[$j]){
            $temp = $notes[$i];
            $notes[$i] = $notes[$j];
            $notes[$j] = $temp;
        }
    }
}

echo 'sorted notes :';
echo '<br>';
print_r($notes);

?>
