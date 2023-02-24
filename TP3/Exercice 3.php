<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'envoi de courriels</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Formulaire d'envoi de courriels</h1>
		<form action="envoi-email.php" method="post">
			<div class="form-group">
				<label for="nom">Nom :</label>
				<input type="text" class="form-control" id="nom" name="nom" required>
			</div>
			<div class="form-group">
				<label for="prenom">Prénom :</label>
				<input type="text" class="form-control" id="prenom" name="prenom" required>
			</div>
			<div class="form-group">
				<label for="email">Email :</label>
				<input type="email" class="form-control" id="email" name="email" required>
			</div>
			<div class="form-group">
				<label for="objet">Objet :</label>
				<input type="text" class="form-control" id="objet" name="objet" required>
			</div>
			<div class="form-group">
				<label for="service">Service :</label>
				<select class="form-control" id="service" name="service">
					<option value="SAV">Service après-vente</option>
					<option value="TECH">Service techniques</option>
				</select>
			</div>
			<div class="form-group">
				<label for="message">Message :</label>
				<textarea class="form-control" id="message" name="message" rows="5" required></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Envoyer</button>
		</form>
	</div>
</body>
</html>
