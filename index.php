<?	//ouverture de la session pour récupérer les données de l'utilisateur 
	//verification qu'un utilisateur est bien connecter avant d'afficher la page 
	//affichage du header 
	//connexion à la base de données ?>
<?php session_start(); ?>
<?php include 'verification_session.php'; ?>
<?php $title = "Index"; ?>
<?php include 'header.php'; ?>
<?php include 'connexion_bdd.php'; ?>

<section>
	<div class="presentation_gbaf">
		<h1>Bienvenue sur GBAF</h1>
		<p>L'Union européenne a adopté une série de directives en vue d’harmoniser les conditions d’exercice des activités bancaires dans les différents États membres. Parmi celles-ci, figure la directive MIF (directive relative aux marchés d’instruments financiers). Outre l’ouverture et la facilité d’accès aux marchés financiers, la directive MIF a pour objectif de renforcer les exigences réglementaires opposables aux prestataires d’investissement. Ceux-ci ont notamment l’obligation de classifier et d’informer leurs clients en fonction de leur nature et de leur connaissance des marchés financiers. Ils doivent ensuite s’assurer que les opérations qu’ils réalisent pour le compte de leur client correspondent bien à leur classification. Autant d’exigences qui nécessitent également de disposer d’une fonction de contrôle dédiée.</p>
		<img src="images/illustration.jpg">
	</div>

	<h2>Présentation des acteurs</h2>
	<p>L’exercice des activités bancaires, des services d’investissement et des services de paiement est réservé aux entreprises bénéficiant d’un agrément et soumis à une surveillance particulière par l’Autorité de Contrôle Prudentiel et de Résolution (ACPR). Globalement au 1er janvier 2012, on comptait 655 établissements de crédit agréés en France par l’Autorité de Contrôle Prudentiel et de Résolution.</p>

	<?php
	//requete sql pour selectionner toute la table acteur
	//affichage des champs pour chaque acteur
	//la partie compteur affiche le nombre de like pour chaque partenaire
	$req=$bdd->prepare('SELECT * FROM acteur');
	$req->execute();
	$data= $req->fetchAll();
	foreach($data as $donnees ) { ?>
		<div class="contenu">
			<div class="logo">
				<?php echo '<img src= "' .  $donnees['logo'] . '">' ; ?>
			</div>
			<div class="texte">
				<?php echo $donnees['description']; ?>
			</div>
			<div class="boutons">
				<?php include 'compteur.php'; ?>
				<?php 
				//ici on transmet l'id_acteur sur la page suivante
				echo '<a href="partenaire.php?acteur=' . $donnees['id_acteur'] . '">Plus de détails</a>' 
				?>
			</div> 
		</div> 
	<? } ?>
<?php include 'footer.php';  ?>