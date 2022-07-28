<html>
	<head>
	<title>Form Signin</title>
	</head>
	<body>
		<form method="GET" action="../pages/signin_confirm.php">
			<table border="0" class="w3-table w3-border w3-text-white">
			<tr>
				<td><label for="inscription_mail">Adresse mail :</label></td>
				<td><input name="email" class="w3-imput" required type="email" id="inscription_mail"></td>
			</tr>
			<tr>
				<td><label for="inscription_pseudo">Pseudo :</label></td>
				<td><input name="pseudo" class="w3-imput" required type="text" id="inscription_pseudo"></td>
			</tr>
			<tr>
				<td><label for="inscription_password">Mot de passe :</label></td>
				<td><input name="password" class="w3-imput" required type="password" id="inscription_password"></td>
			</tr>
			<!--<tr>
				<td><label for="inscription_confirm_password">Confirmez votre mot de passe :</label></td>
				<td><input name="confirm_password" class="w3-imput" required type="password" id="inscription_confirm_password"></td>
			</tr>-->
			<tr>
				<td colspan="2"><input type="submit" name="submit_signin" class="w3-button" value="S'inscrire" onClick="verifFormulaire()"></td>
			</tr>
			</table>
		</form>
	</body>
</html>