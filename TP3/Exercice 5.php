<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Exercice 5</title>
</head>
<body>
<div class="container mt-5">
		<h1>Calculatrice</h1>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			<div class="form-group">
				<label for="operande1">Opérande 1 :</label>
				<input type="number" class="form-control" id="operande1" name="operande1">
			</div>
			<div class="form-group">
				<label for="operande2">Opérande 2 :</label>
				<input type="number" class="form-control" id="operande2" name="operande2">
			</div>
			<div class="form-group">
				<label>Opération :</label><br>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="operation" id="addition" value="addition" checked>
					<label class="form-check-label" for="addition">+</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="operation" id="soustraction" value="soustraction">
					<label class="form-check-label" for="soustraction">-</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="operation" id="multiplication" value="multiplication">
					<label class="form-check-label" for="multiplication">*</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="operation" id="division" value="division">
					<label class="form-check-label" for="division">/</label>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Calculer</button>
		</form>
		<?php if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $operande1 = $_POST["operande1"];
            $operande2 = $_POST["operande2"];
            $operation = $_POST["operation"];
            switch ($operation) {
                case "addition":
                    $resultat = $operande1 + $operande2;
                    break;
                case "soustraction":
                    $resultat = $operande1 - $operande2;
                    break;
                case "multiplication":
                    $resultat = $operande1 * $operande2;
                    break;
                case "division":
                    if ($operande2 == 0) {
                        $resultat = "Erreur : division par zéro";
                    } else {
                        $resultat = $operande1 / $operande2;
                    }
                    break;
                default:
                    $resultat = "Opération non reconnue";
            }
            echo "<div class='mt-3'>";
            echo "Résultat : " . $resultat;
        }
				
                ?>
</body>
</html>