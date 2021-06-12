<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css" />
		<title>Connexion</title>
	</head>

	<body>
		<div id="bloc_page">
			<?php
				include 'en_tete_bis.php';
			?>

			<section>
				<h1>Connexion</h1>
					<form method="post" action="connexion_traitement.php">
						<p class="formulaire">
							<label for="username"> Nom d'utilisateur </label>							
							<input type="text" id="username" name="username" />				
							<label for="password"> Mot de passe </label>							
							<input type="text" id="password" name="password" />
						</p>
						<p class="formulaire">
							<input type="submit" value="Valider" />
						</p>
					</form>
			</section>

			<div id="options">
				<p> Pas encore de compte? <a href="inscription.php"> Inscrivez-vous </a> </p>
				<p> Mot de passe oublié? Créer un nouveau mot de passe </p>
			</div>

			<?php
			include 'pied_de_page.php';
			?>
		</div>
	</body>
</html>