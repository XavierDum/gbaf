<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css" />
		<title>Index</title>
	</head>

	<body>
		<section>
			<?php
				include 'en_tete.php';
			?>
			<div class="presentation_gbaf">
			<h1>Bienvenue sur GBAF</h1>

			<p>L'Union européenne a adopté une série de directives en vue d’harmoniser les conditions d’exercice des activités bancaires dans les différents États membres. Parmi celles-ci, figure la directive MIF (directive relative aux marchés d’instruments financiers). Outre l’ouverture et la facilité d’accès aux marchés financiers, la directive MIF a pour objectif de renforcer les exigences réglementaires opposables aux prestataires d’investissement. Ceux-ci ont notamment l’obligation de classifier et d’informer leurs clients en fonction de leur nature et de leur connaissance des marchés financiers. Ils doivent ensuite s’assurer que les opérations qu’ils réalisent pour le compte de leur client correspondent bien à leur classification. Autant d’exigences qui nécessitent également de disposer d’une fonction de contrôle dédiée.</p>

			<img src="images/illustration.jpg">
			</div>

			<h2>Présentation des acteurs</h2>
			<p>L’exercice des activités bancaires, des services d’investissement et des services de paiement est réservé aux entreprises bénéficiant d’un agrément et soumis à une surveillance particulière par l’Autorité de Contrôle Prudentiel et de Résolution (ACPR). Globalement au 1er janvier 2012, on comptait 655 établissements de crédit agréés en France par l’Autorité de Contrôle Prudentiel et de Résolution.
			</p>
			
			<div class="contenu">
				<div class="logo">
					<img src="images/CDE.png">
				</div>
				<div class="texte">
					La CDE (Chambre Des Entrepreneurs) accompagne les entreprises dans leurs démarches de formation. 
					Son président est élu pour 3 ans par ses pairs, chefs d’entreprises et présidents des CDE.
				</div>
				<div class="boutons">
					<a href="partenaire.php"> Plus de détails </a>
				</div>
			</div>
			<div class="contenu">
				<div class="logo">
					<img src="images/Dsa_france.png">
				</div>
				<div class="texte">
					Dsa France accélère la croissance du territoire et s’engage avec les collectivités territoriales.
					Nous accompagnons les entreprises dans les étapes clés de leur évolution.
					Notre philosophie : s’adapter à chaque entreprise.
					Nous les accompagnons pour voir plus grand et plus loin et proposons des solutions de financement adaptées à chaque étape de la vie des entreprises
				</div>
				<div class="boutons">
					interaction
				</div>		
			</div>		
			<div class="contenu">
				<div class="logo">
					<img src="images/protectpeople.png">
				</div>
				<div class="texte">
					Protectpeople finance la solidarité nationale.
					Nous appliquons le principe édifié par la Sécurité sociale française en 1945 : permettre à chacun de bénéficier d’une protection sociale.

					Chez Protectpeople, chacun cotise selon ses moyens et reçoit selon ses besoins.
					Proectecpeople est ouvert à tous, sans considération d’âge ou d’état de santé.
					Nous garantissons un accès aux soins et une retraite.
					Chaque année, nous collectons et répartissons 300 milliards d’euros.
					Notre mission est double :
					sociale : nous garantissons la fiabilité des données sociales ;
					économique : nous apportons une contribution aux activités économiques.
				</div>
				<div class="boutons">
					interaction
				</div>
			</div><div class="contenu">
				<div class="logo">
					<img src="images/formation_co.png">
				</div>
				<div class="texte">
					Formation&co est une association française présente sur tout le territoire.
					Nous proposons à des personnes issues de tout milieu de devenir entrepreneur grâce à un crédit et un accompagnement professionnel et personnalisé.
					Notre proposition : 
					un financement jusqu’à 30 000€ ;
					un suivi personnalisé et gratuit ;
					une lutte acharnée contre les freins sociétaux et les stéréotypes.

					Le financement est possible, peu importe le métier : coiffeur, banquier, éleveur de chèvres… . Nous collaborons avec des personnes talentueuses et motivées.
					Vous n’avez pas de diplômes ? Ce n’est pas un problème pour nous ! Nos financements s’adressent à tous.
				</div>
				<div class="boutons">
					interaction
				</div>
			</div>		
			
			<?php
				include 'pied_de_page.php';
			?>
		</section>
	</body>



</html>