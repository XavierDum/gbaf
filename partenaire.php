<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css" />
		<title>Partenaire</title>
	</head>

	<body>
		<section>
			<?php
				include 'en_tete.php';
			?>
			
			<div class="partenaire_contenu">
				<div class="partenaire_logo">
					<img src="images/CDE.png">
				</div>
				<div class="partenaire_texte">
					La CDE (Chambre Des Entrepreneurs) accompagne les entreprises dans leurs démarches de formation. 
					Son président est élu pour 3 ans par ses pairs, chefs d’entreprises et présidents des CDE.
				</div>
				<div class="partenaire_boutons">
					interaction
				</div>
			</div>

			<div class="formulaire_vote"></div>
			<div class="formulaire_commentaire"></div>
			<div class="affichage_commentaire"></div>
			<?php
				include 'pied_de_page.php';
			?>
		</section>
	</body>



</html>