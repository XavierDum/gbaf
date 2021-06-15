<?php $title = "Inscription"; ?>
<?php include 'header.php'; ?>

		<section>
			<h1>Inscription</h1>
			<form method="post" action="inscription_traitement.php">
				<p class="formulaire">
					<label for="nom"> Nom </label>
					<br />
					<input type="text" id="nom" name="nom" />
				</p>					
				<p class="formulaire">
					<label for="prenom"> Prénom </label>
					<br />
					<input type="text" id="prenom" name="prenom" />
				</p>	
				<p class="formulaire">
					<label for="username"> Nom d'utilisateur </label>
					<br />
					<input type="text" id="username" name="username" />
				</p>	
				<p class="formulaire">
					<label for="password"> Mot de passe </label>
					<br />
					<input type="text" id="password" name="password" />
				</p>	
				<p class="formulaire">
					<label for="password_check"> Confirmation du mot de passe </label>
					<br />
					<input type="text" id="password_check" name="password_check" />
				</p>	
				<p class="formulaire">
					<label for="question"> Question secrète </label>
					<br />
					<input type="text" id="question" name="question" />
				</p>						
				<p class="formulaire">
					<label for="reponse"> Réponse à la question </label>
					<br />
					<input type="text" id="reponse" name="reponse" />
				</p>	
				<p class="formulaire">
					<input type="submit" value="Valider" />
				</p>
			</form>
		</section>

<?php include 'footer.php'; ?>		
