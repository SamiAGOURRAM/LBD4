<?php

$list_colors = ['yellow', 'blue', 'red', 'purple', 
'black', 'orange', 'cian', 'aqua', 'bisque', 'blue-Violet'];
$color = strtolower($_GET['color']);
echo 'method in_array() ---------'.'<br>';
if (in_array($color, $list_colors)){
   echo $color.' is in the table '.'<br>';
}
else{
    echo $color.' is not in the table '.'<br>';
}
echo 'method array_search() -------'.'<br>';
if (array_search($color, $list_colors)){
    echo $color.' is in the table '.'<br>';
 }
 else{
     echo $color.' is not in the table '.'<br>';
 }

?>