<?php
$modules = array(
    "Et1777611991981" => array(
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
    "Et&&87871871871" => array(
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
    "Et1981989177181" => array(
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
    "Et1981981__ç18989" => array(
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

function get_min_max($grades, $type) {
    
    if ($type == 0) {
        $min_max = ["", 20];
        foreach ($grades as $course => $grade) {
            if ($grade < $min_max[1]) {
                $min_max = [$course, $grade];
            }
        }
    } elseif ($type == 1) {
        $min_max = ["", 0];
        foreach ($grades as $course => $grade) {
            if ($grade > $min_max[1]) {
                $min_max = [$course, $grade];
            }
        }
    }
    return $min_max;
}

foreach ($modules as $k => $v){
    echo "<br>Student  ",$v["Nom"];
    echo "<br>module avec la note la plus elevée: ",get_min_max($v["Notes"],1)[0]," note  : ",get_min_max($v["Notes"],1)[1] ;
    echo "<br>module avec la note la moins elevée: ",get_min_max($v["Notes"],0)[0]," note : ",get_min_max($v["Notes"],0)[1] ;
}



?>
