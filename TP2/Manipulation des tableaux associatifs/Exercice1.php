<?php
$ages = ['sami' => 19, 'mehdi'=>26, 'sara'=>13];
foreach($ages as $key => $val){
    echo $key.' a '.$val.' ans <br>';
}
echo "<table id='table'><tr><td>name</td><td>age</td><tr>";
foreach ($ages as $key => $val) {
    echo "<tr><td>$key</td><td>$val</td></tr>";
}
echo "</table>";
?>