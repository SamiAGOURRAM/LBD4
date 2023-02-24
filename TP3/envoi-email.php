<!DOCTYPE html>
<html>
<head>
	<title>Informations saisies</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Informations saisies :</h1>
		<p><strong>Nom :</strong> <?php echo $_POST["nom"]; ?></p>
		<p><strong>Prénom :</strong> <?php echo $_POST["prenom"]; ?></p>
		<p><strong>Email :</strong> <?php echo $_POST["email"]; ?></p>
		<p><strong>Objet :</strong> <?php echo $_POST["objet"]; ?></p>
		<p><strong>Service :</strong> <?php echo $_POST["service"]; ?></p>
		<p><strong>Message :</strong> <?php echo $_POST["message"]; ?></p>
	</div>
</body>
</html>
