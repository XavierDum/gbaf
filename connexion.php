<! affichage du header  -->
<?php $title = "Connexion"; ?>
<?php include 'header.php'; ?>

<! formulaire de connexion -->
	<section>
		<h1>Connexion</h1>
		<form method="post" action="connexion_traitement.php">
			<p class="formulaire">
				<label for="username"> Nom d'utilisateur </label>							
				<input type="text" id="username" name="username" />				
				<label for="password"> Mot de passe </label>							
				<input type="password" id="password" name="password" />
			</p>
			<p class="formulaire">
				<input type="submit" value="Valider" />
			</p>
		</form>

<! lien vers la page d'inscription -->
<! liens pour modifier le mot de passe -->
		<div>
			<p> 
				Pas encore de compte? <a href="inscription.php"> Inscrivez-vous </a>
			</p>
			<p>
				Mot de passe oublié? <a href="modification_mdp_sessionoff.php">Créer un nouveau mot de passe</a> 
			</p>
		</div>
	</section>

<! affichage du footer -->
<?php include 'footer.php'; ?>