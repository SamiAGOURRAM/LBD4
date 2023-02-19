<?php
    $multi_dim_arr = [
        ["Et676", "AB", "AC", 17],
        ["Et123", "BC", "BD", 12],
        ["Et723", "CD", "CE", 9],
        ["Et764", "DE", "DF", 16.5]
    ];

    // Displaying information about each student
    echo "1. Displaying information about each student: <br>";
    foreach ($multi_dim_arr as $pos => $student) {
        echo "<br>" . ($pos+1) . "-th student :<br>";
        echo "Code : " . $student[0] . "<br>";
        echo "Nom : " . $student[1] . "<br>";
        echo "Prénom : " . $student[2] . "<br>";
        echo "Moyenne : " . $student[3] . "<br>";
    }

    // Find majorant and minorant
    $n_mx = 0;
    $n_mn = $multi_dim_arr[0][3];
    $majorant = "";
    $minorant = "";
    $n_mnValid = $multi_dim_arr[0][3];
    $minorantValid = "";
    $non_validee = [];

    foreach ($multi_dim_arr as $pos => $student) {
        if ($student[3] > $n_mx) {
            $n_mx = $student[3];
            $majorant = $student[1];
        }

        if ($student[3] < $n_mn) {
            $n_mn = $student[3];
            $minorant = $student[1];
        }

        if ($student[3] < $n_mnValid && $student[3] >= 10) {
            $n_mnValid = $student[3];
            $minorantValid = $student[1];
        }

        if ($student[3] < 10) {
            array_push($non_validee, $student[1]); 
        }
    }

    // Display majorant, minorant, and students who did not pass
    echo "<br> <br> 2. Le majorant est : " . $majorant;
    echo "<br>3. Etudiant minorant mais validé est : " . $minorantValid;
    echo "<br>4. Les élèves qui n'ont pas validé sont : ";
    echo implode(", ", $non_validee);
?>
