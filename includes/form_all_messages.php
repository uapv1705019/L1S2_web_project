<html>
	<head>
	<title>Formulaire message</title>
	</head>
	<body>

	<form method="GET" action="../pages/form_all_messages_confirm.php">
			<table class="w3-table w3-text-white w3-border w3-bordered">
				<tr>
					<td><label for="pseudo">Pseudo : *</label></td>
					<td><input class="w3-input" name="pseudo" id="pseudo" type="text" required placeholder="Votre pseudo"></td>
				</tr>
				<tr>
					<td><label for="theme">Thème : *</label></td>
					<td><select size="1" required id="theme" name="theme">
						<option value="palaces">Palaces</option>
						<option value="daily_life">Vie quotidienne</option>
						<option value="confidents">Confidents</option>
						<option value="relations">Relations amoureuses</option>
						<option value="personas">Personas</option>
					</select>
					</td>
				</tr>
				<tr>
					<td><label for="message">Message : *</label></td>
					<td><textarea name="message" rows = "5" id="message" required placeholder="Entrez votre message"></textarea></td>
				</tr>
				<tr>
					<td><label for="keywords">Mots-clés :</label></td>
					<td><input class="w3-input" name="keywords" id="keywords" type="text" placeholder="Entrez les mots-clés séparés par des virgules"></td>
				</tr>
				<tr>
					<td><label for="image">Image :</label></td>
					<td><input class="w3-input" name="image" id="image" type="text" placeholder="Entrez l'URL de l'image"></td>
				</tr>
				<tr>
					<td colspan="2"><p>Les cases avec un * sont obligatoires</p></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="submit_message" class="w3-button w3-white" value="Poster le message"></td>
				</tr>
			</table>
		</form>

	</body>
</html>