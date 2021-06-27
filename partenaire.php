<?php session_start(); ?>
<?php include 'verification_session.php'; ?>
<?php $title = "Partenaire"; ?>
<?php include 'connexion_bdd.php'; ?>
<?php include 'header.php'; ?>

	<section>
		<div class="partenaire_contenu">
			<div class="partenaire_logo">
                <?php
					// requete sql pour recupérer les donnée du partenaire
					$req = $bdd->prepare(" SELECT id_acteur, description, logo FROM acteur WHERE id_acteur= ? ");
					$req->execute(array(
						filter_var($_GET['acteur'], FILTER_VALIDATE_INT)
					));
					$donnees = $req->fetch();
				?>
				<?php
					// affichage des champs de l'acteur correspondant à l'id_acteur récupéré grâce au GET
					echo '<img src= "' .  $donnees['logo'] . '">' ; ?>
			</div>
			<div class="partenaire_texte">
                <?php echo $donnees['description']; ?>
			</div>
			<div class="partenaire_boutons">
				<?php include 'compteur.php'; ?>		
			</div>
		</div>
		<div class="formulaire_vote">
		<?php
			// verification que l'utilisateur n'a pas déjà voté
			//si non affichage du formulaire
			$req_vote = $bdd->prepare('SELECT id_user FROM vote WHERE id_user= ? AND id_acteur= ?');
			$req_vote->execute(array
				($_SESSION['user']['id_user'],
				$donnees['id_acteur']
			));
			$resultat_vote = $req_vote->fetch();

			if ($resultat_vote) {
				echo 'déjà voté';
			} else {
				include 'vote_formulaire.php';
			} 
			?>
		</div>
		<div class="formulaire_com">
		<?php
			// verification que l'utilisateur n'a pas déjà commenté
			//si non affichage du formulaire
			$req_com = $bdd->prepare('SELECT id_user FROM post WHERE id_user= ? AND id_acteur= ?');
			$req_com->execute(array
				($_SESSION['user']['id_user'],
				$donnees['id_acteur']
			));
			$resultat_com = $req_com->fetch();

			if ($resultat_com) {
				echo 'déjà commenté';
			} else {
				include 'com_formulaire.php';
			} 
			?>
		</div>
		<div class="affichage_commentaire">
		<?php include 'com_affichage.php'; ?>
		</div>
		<p><a href="index.php"> Revenir à la page des partenaires </a></p>
	</section>

<?php include 'footer.php'; ?>		