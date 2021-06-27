<form method="post" action="com_formulaire_traitement.php">
	<p class="formulaire">
		<label for="post"> Ecrire un commentaire </label>
		<input type="text" id="post" name="post" />
		<input id="acteur" name="acteur" type="hidden" value= <? echo $donnees['id_acteur']; ?>>
	</p>
	<p class="formulaire">
		<input type="submit" value="Valider" />
	</p>
</form>