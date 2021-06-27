<?php $title = "Inscription"; ?>
<?php include 'header.php'; ?>

		<section>
<?// formulaire d'insccription avec obligation de remplir tous les champs pour envoyer ?>
			<h1>Inscription</h1>
			<form method="post" action="inscription_traitement.php">
				<p class="formulaire">
					<label for="nom"> Nom </label>
					<br />
					<input type="text" id="nom" name="nom" required />
				</p>					
				<p class="formulaire">
					<label for="prenom"> Prénom </label>
					<br />
					<input type="text" id="prenom" name="prenom" required />
				</p>	
				<p class="formulaire">
					<label for="username"> Nom d'utilisateur </label>
					<br />
					<input type="text" id="username" name="username" required />
				</p>	
				<p class="formulaire">
					<label for="password"> Mot de passe </label>
					<br />
					<input type="text" id="password" name="password" required />
				</p>	
				<p class="formulaire">
					<label for="password_check"> Confirmation du mot de passe </label>
					<br />
					<input type="text" id="password_check" name="password_check" required />
				</p>	
				<p class="formulaire">
					<label for="question"> Question secrète </label>
					<br />
					<input type="text" id="question" name="question" required />
				</p>						
				<p class="formulaire">
					<label for="reponse"> Réponse à la question </label>
					<br />
					<input type="text" id="reponse" name="reponse" required />
				</p>	
				<p class="formulaire">
					<input type="submit" value="Valider" />
				</p>
			</form>
		</section>

<?php include 'footer.php'; ?>		
