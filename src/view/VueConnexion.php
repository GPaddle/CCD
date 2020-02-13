<?php
	echo <<<END
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Connexion</title>
	</head>
	<body>
		<h1>Connexion</h1>
		<form method="post">
			<label>Identifiant</label>
			<input type="text">
			<label>Mot de passe</label>
			<input type="password">
			<input type="submit" value="Valider">
		</form>
	</body>
</html>
END;
?>