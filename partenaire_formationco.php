<?php session_start(); ?>
<?php $title = "Formation & Co"; ?>
<?php include 'header.php'; ?>

	<section>
		<div class="partenaire_contenu">
			<div class="partenaire_logo">
				<img src="images/formation_co.png">
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
				<?php include 'compteur_formationco.php'; ?>		
			</div>
		</div>
		<div class="formulaire_vote">
			<?php include 'vote_formationco.php'; ?>
		</div>
		<div class="affichage_commentaire">
		</div>
	</section>

<?php include 'footer.php'; ?>		