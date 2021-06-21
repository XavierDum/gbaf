<?php session_start(); ?>
<?php $title = "Modification du mot de passe"; ?>
<?php include 'header.php'; ?>

	<section>
		<h2>Entrez le nouveau mot de passe</h2>
		<form method="post" action="modification_mdp_etape3_traitement.php">				
		<p class="formulaire">
			<label for="password"> Mot de passe </label>
			<br />
			<input type="text" id="password" name="password" required />
		</p>	
		<p class="formulaire">
			<input type="submit" value="Valider" />
		</p>
		</form>
	</section>

<?php include 'footer.php'; ?>