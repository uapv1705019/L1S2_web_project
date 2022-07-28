	<html>
	<head>
	    <meta charset="utf-8" />
		<title>Login Confirmation</title>
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
				if (isset($_GET['submit_login'])) //permet de vérifier si le bouton d'inscription a bien été cliqué
				{
					//initialisation des variables
					$mail_get = $_GET['email']; //récupère l'information du formulaire de la case email
					$password_get = $_GET['password']; //récupère l'information du formulaire de la case password
					$file = fopen("../base_de_donnees/users.txt", "r"); //ouverture du fichier
					
					//première récupération des données du fichier
					$donnees = fgets($file); //obtient la valeur d'une ligne
					list($pseudo_file, $mail_file, $password_file) = explode("|", $donnees); // découpe la ligne selon le délimiteur	
					
					//boucle de récupération des données du fichier
					while(! feof($file) && $mail_get != $mail_file && $password_get != $password_file) // tant que la fin du fichier n'a pas été atteinte ET que $mail_get est différent de $mail ET que $password_get est différent de $password : on boucle
					{
						$donnees = fgets($file); //obtient la valeur d'une ligne
						if($donnees == "") //si il n'y a pas de données disponibles sur la ligne
						{
							break; //empêche une erreur de type "undefined offset"
						}
						list($pseudo_file, $mail_file, $password_file) = explode("|", $donnees); // découpe la ligne selon le délimiteur
					}
					
					if($mail_get == $mail_file && $password_get == $password_file) //si le mail reçu correspond au mail entré (idem pour le password)
					{
						echo "<h1 align=\"center\">Re-bonjour ".$pseudo."</h1>
						<p>La connexion a été effectuée avec succès.</p>
						<p>Vous allez être redirigé vers la page correspondante dans 5 secondes.</p>
						<p>Cliquez <a href=\"accueil.php\">ici</a> si la redirection a échouée.</p>";
						header( "refresh:5;url=accueil.php" );
					}
					else
					{
						echo "<h1 align=\"center\">La connexion a échouée.</h1>
						<p>Veuillez vérifier votre adresse mail ou votre mot de passe.</p>";
						include '../includes/form_login.php';
					}
					fclose($file);
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
