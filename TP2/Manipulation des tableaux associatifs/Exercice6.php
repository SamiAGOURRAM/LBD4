<!DOCTYPE html>
<html>
<body>

<?php

$tab = array("WEB" => array(array("nom" =>"php","lien" => "https://www.php.net/ ","avis"=>"***" ),array("nom" =>"html","lien" => "https://www.w3schools.com/html/default.asp","avis"=>"****" ),array("nom" =>"JavaScript","lien" => "https://www.javascript.com/ ","avis"=>"*" ),array("nom" =>"css","lien" => "https://www.w3schools.com/css/ ","avis"=>"*" )),"DB"=>array(array("nom" =>"mysql","lien" => "https://www.mysql.com/ ","avis"=>"**" ),array("nom" =>"PostgreSQL","lien" => "https://www.postgresql.org/ ","avis"=>"**" ),array("nom" =>"oracle","lien" => "https://www.oracle.com/","avis"=>"****" ),array("nom" =>"db2","lien" => "https://www.ibm.com/products/db2 ","avis"=>"**" )));
echo "<h3>Q1</h3>";
echo "Tableau declaré";
echo "<h3>Q2</h3>";
foreach($tab as $key => $val){
    echo $key." :"."<br>";
    for($i=0;$i<4;$i++){
        echo "----".$val[$i]["lien"]."<br>";
    }
}
echo "<h3>Q3</h3>";

?>

</body>
</html>