<form method="post" action="vote_formulaire_traitement.php">
	<p class="formulaire">
		<input type="radio" name="vote" value= 1 id="oui" checked="checked" /> <label for="oui">j'aime</label>
		<input type="radio" name="vote" value= 0 id="non" /> <label for="non">je n'aime pas</label>
		<input id="acteur" name="acteur" type="hidden" value= <? echo $acteur ?>>
	</p>
	<p class="formulaire">
		<input type="submit" value="Valider" />
	</p>
</form>