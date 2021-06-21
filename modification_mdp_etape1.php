<?php $title = "Modification du mot de passe"; ?>
<?php include 'header.php'; ?>

	<section>
		<h2>Entrez votre pseudo</h2>
		<form method="post" action="modification_mdp_etape1_traitement.php">				
		<p class="formulaire">
			<label for="username"> Username </label>
			<br />
			<input type="text" id="username" name="username" required />
		</p>	
		<p class="formulaire">
			<input type="submit" value="Valider" />
		</p>
		</form>
	</section>

<?php include 'footer.php'; ?>