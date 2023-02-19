<?php
$tab=array("PHP"=>"http://www.php.net","MySQL"=>"http://www.mysql.org","SQLite"=>"http://www.sqlite.org","HTML"=>"https://www.w3schools.com/html/default.asp","CSS"=>"https://www.w3schools.com/css/default.asp");

echo 'getting a random link ... <br>';
echo $tab[array_rand($tab)];
echo '<br> refresh the page to get another random link'
?>