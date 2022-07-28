<html>
	<head>
	<title>Form Login</title>
	</head>
	<body>
		<form method="GET" action="../pages/login_confirm.php">
			<table border="0" class="w3-table w3-border w3-text-white">
			<tr>
				<td><label for="connexion_mail">Adresse mail :</label></td>
				<td><input name="email" class="w3-imput" required type="email" id="connexion_mail" value="<?php if (isset($_GET['email'])){echo $_GET['email'];} ?>"></td>
			</tr>
			<tr>
				<td><label for="connexion_password">Mot de passe :</label></td>
				<td><input name="password" class="w3-imput" required type="password" id="connexion_password" value="<?php if (isset($_GET['password'])){echo $_GET['password'];} ?>"></td>
			</tr>
			<tr>
			<td colspan="2"><input type="submit" name="submit_login" class="w3-button" value="Connexion"></td>
			</tr>
			</table>
		</form>
	</body>
</html>