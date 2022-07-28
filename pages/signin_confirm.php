<html>
	<head>
	    <meta charset="utf-8" />
		<title>Signin Confirmation</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<!--<link rel="stylesheet" type="text/css" href="style.css">-->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<body background="../images/Persona Background.jpg" class="w3-image" style="background-attachment:fixed">
	<?php include '../includes/log_sign.php';?>
	<?php include '../includes/header.php';?>
	<?php include '../includes/menu.php';?>
	<div class="w3-container w3-row-padding">
		<div class="w3-quarter">
		<p></p>
		</div>
		
		<div class="w3-half w3-black w3-text-white w3-opacity-min">
				<?php
				if (isset($_GET['submit_signin'])) //permet de vérifier si le bouton d'inscription a bien été cliqué
				{
					$file = fopen("../base_de_donnees/users.txt", "r+");
					$user = $_GET['pseudo']."|".$_GET['email']."|".$_GET['password'];
					fseek($file,0,SEEK_END); // permet de positionner le curseur à la fin du fichier
					fputs($file, $user."\r\n"); // \r\n permet d'aller à la ligne dans le fichier texte
					fclose($file);
					echo "<h1 align=\"center\">Bienvenue ".$_GET['pseudo'].".</h1>
					<p>Votre inscription a bien été enregistrée. Vous pouvez dès à présent profiter entièrement du site.</p>
					<p>Vous allez être redirigé vers l'accueil dans 5 secondes.</p>
					<p>Cliquez <a href=\"accueil.php\">ici</a> si la redirection a échouée.</p>";
					header( "refresh:5;url=accueil.php" );
				}
				?>
		</div>
		
		<div class="w3-quarter">
		</div>
	</div>
	<?php include '../includes/pied.php';?>
	<?php include '../includes/haut_de_page.php';?>
	</body>
</html>
