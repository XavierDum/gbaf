<?php session_start(); ?>
<?php include 'verification_session.php'; ?>
<?php $title = "Formation & Co"; ?>
<?php include 'connexion_bdd.php'; ?>
<?php include 'header.php'; ?>
<?php $acteur = 3; ?>

	<section>
		<div class="partenaire_contenu">
			<div class="partenaire_logo">
			<?
					$img = $bdd->prepare(" SELECT logo FROM acteur WHERE id_acteur= ? ");
					$img->execute(array
						($acteur
					));
					$logo = $img->fetch();
				?>
				<?php echo '<img src= "' .  $logo['logo'] . '">' ; ?>
			</div>
			<div class="partenaire_texte">
				Formation&co est une association française présente sur tout le territoire.
				Nous proposons à des personnes issues de tout milieu de devenir entrepreneur grâce à un crédit et un accompagnement professionnel et personnalisé.
				Notre proposition : 
				<p>un financement jusqu’à 30 000€ ;</p>
				<p>un suivi personnalisé et gratuit ;</p>
				<p>une lutte acharnée contre les freins sociétaux et les stéréotypes.</p>

				Le financement est possible, peu importe le métier : coiffeur, banquier, éleveur de chèvres… . Nous collaborons avec des personnes talentueuses et motivées.
				Vous n’avez pas de diplômes ? Ce n’est pas un problème pour nous ! Nos financements s’adressent à tous.
			</div>
			<div class="partenaire_boutons">
				<?php include 'compteur.php'; ?>		
			</div>
		</div>
		<div class="formulaire_vote">
		<?php
			$req_vote = $bdd->prepare('SELECT id_user FROM vote WHERE id_user= ? AND id_acteur= ?');
			$req_vote->execute(array
				($_SESSION['user']['id_user'],
				$acteur
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
			$resultat_com['id_acteur'] = 0;
			$req_com = $bdd->prepare('SELECT id_user, id_acteur FROM post WHERE id_user= ? AND id_acteur= ? ');
			$req_com->execute(array
				($_SESSION['user']['id_user'],
				$acteur
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