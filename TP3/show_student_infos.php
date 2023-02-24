<?php
$modules = array(
    "ET121" => array(
        "Nom" => "agourram",
        "Prenom" => "sami",
        "Notes" => array(
            "maths" => 16.5,
            "physics" => 9.0,
            "chemistry" => 18.0,
            "history" => 15.0,
            "geography" => 14.5,
            "english" => 10.0,
            "french" => 19.0,
            "art" => 18.0,
            "music" => 15.5
        )
    ),
    "ET122" => array(
        "Nom" => "tijani",
        "Prenom" => "hamid",
        "Notes" => array(
            "maths" => 15.0,
            "physics" => 12.3,
            "chemistry" => 15.6,
            "history" => 9.75,
            "geography" => 9.75,
            "english" => 14.0,
            "french" => 13.0,
            "art" => 12.7,
            "music" => 19.0
        )
    ),
    "ET123" => array(
        "Nom" => "yassir",
        "Prenom" => "hamadat",
        "Notes" => array(
            "maths" => 12.75,
            "physics" => 12.3,
            "chemistry" => 15.9,
            "history" => 17.0,
            "geography" => 12.0,
            "english" => 14.5,
            "french" => 15.0,
            "art" => 10.0,
            "music" => 13.0
        )
    ),
    "ET124" => array(
        "Nom" => "aglou",
        "Prenom" => "raja",
        "Notes" => array(
            "maths" => 16.0,
            "physics" => 12.3,
            "chemistry" => 18.9,
            "history" => 19.5,
            "geography" => 6.75,
            "english" => 11.0,
            "french" => 13.5,
            "art" => 12.0,
            "music" => 0.9
        )
    )
);

// display the data in an HTML table
if(isset($_GET['code'])){
echo "<table>";
echo "<thead><tr><th>ID</th><th>Nom</th><th>Prénom</th><th>Maths</th><th>Physics</th><th>Chemistry</th><th>History</th><th>Geography</th><th>English</th><th>French</th><th>Art</th><th>Music</th></tr></thead>";
echo "<tbody>";
echo "<tr>";
echo '<td>'.$_GET['code'].'</td>';
echo '<td>'.$modules[$_GET['code']]['Nom'].'</td>';
echo '<td>'.$modules[$_GET['code']]['Prenom'].'</td>';;
foreach ($modules[$_GET['code']]['Notes'] as $note) {
        echo "<td>$note</td>";
    }
echo "</tr>";
echo "</tbody>";
echo "</table>";
}
?>
