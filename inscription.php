<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css" />
		<title>Inscription</title>
	</head>

	<body>
		<div id="bloc_page">

		<?php
			include 'en_tete_bis.php';
		?>

			<section>
				<h1>Inscription</h1>

				<form method="post" action="traitement.php">

					<p id='formulaire'><label> Nom </label></p>
					<input type="text" name="nom"/>

					<p id='formulaire'><label> Prenom </label></p>
					<input type="text" name="prenom"/>
					
					<p id='formulaire'><label> Nom d'utilisateur </label></p>
					<input type="text" name="pseudonyme"/>
					
					<p id='formulaire'><label> Mot de passe </label></p>
					<input type="password" name="mot_de_passe"/>
					
					<p id='formulaire'><label> Confirmation du mot de passe </label></p>
					<input type="password" name="mot_de_passe_check"/>
								
					<p id='formulaire'><label> Question secrète </label></p>
					<input type="text" name="question_secrete"/>
								
					<p id='formulaire'><label> Réponse à la question </label></p>
					<input type="text" name="reponse_question"/>
					
					<p id='formulaire'><input type="submit" value="Valider"/></p>
				</form>

			</section>
			<?php
			include 'pied_de_page.php';
			?>
		</div>
	</body>

</html>