<html>
	<head>
		<title>Message posté</title>
		<meta charset="utf-8" />
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
		
		<!-- écriture des informations sous le format "pseudo|theme|date|mots clés|URL image|message"-->
		<?php
		if (isset($_GET['submit_message'])) //permet de vérifier si le bouton de post de message a bien été cliqué
		{
			$jour = date("d m Y");
			$heure = date("H:i:s");
			$date = "le ".$jour." à ".$heure;
			$message = $_GET['message'];
			$message=str_replace(array("\r\n","\n"),'<br />',$message);
			
			if($_GET['theme']=='palaces')
			{
				$file = fopen("../base_de_donnees/palaces.txt", "r+");
				$donnees = $_GET['pseudo']."|".$_GET['theme']."|".$date."|".$_GET['keywords']."|".$_GET['image']."|".$message;
				fseek($file,0,SEEK_END); // permet de positionner le curseur à la fin du fichier
				fputs($file, $donnees."\r\n"); // \r\n permet d'aller à la ligne dans le fichier texte
				fclose($file);
				echo "<h1>Votre message a bien été posté dans la session Palaces.</h1>
				<p>Vous allez être redirigé vers la page correspondante dans 5 secondes.</p>
				<p>Cliquez <a href=\"palaces.php\">ici</a> si la redirection a échouée.</p>";
				header( "refresh:5;url=palaces.php" );
			}
			
			else if($_GET['theme']=='daily_life')
			{
				$file = fopen("../base_de_donnees/daily_life.txt", "r+");
				$donnees = $_GET['pseudo']."|".$_GET['theme']."|".$date."|".$_GET['keywords']."|".$_GET['image']."|".$message;
				fseek($file,0,SEEK_END); // permet de positionner le curseur à la fin du fichier
				fputs($file, $donnees."\r\n"); // \r\n permet d'aller à la ligne dans le fichier texte
				fclose($file);
				echo "<h1>Votre message a bien été posté dans la session Vie Quotidienne.</h1>
				<p>Vous allez être redirigé vers la page correspondante dans 5 secondes.</p>
				<p>Cliquez <a href=\"daily_life.php\">ici</a> si la redirection a échouée.</p>";
				header( "refresh:5;url=daily_life.php" );
			}
			
			else if($_GET['theme']=='confidents')
			{
				$file = fopen("../base_de_donnees/confidents.txt", "r+");
				$donnees = $_GET['pseudo']."|".$_GET['theme']."|".$date."|".$_GET['keywords']."|".$_GET['image']."|".$message;
				fseek($file,0,SEEK_END); // permet de positionner le curseur à la fin du fichier
				fputs($file, $donnees."\r\n"); // \r\n permet d'aller à la ligne dans le fichier texte
				fclose($file);
				echo "<h1>Votre message a bien été posté dans la session Confidents.</h1>
				<p>Vous allez être redirigé vers la page correspondante dans 5 secondes.</p>
				<p>Cliquez <a href=\"confidents.php\">ici</a> si la redirection a échouée.</p>";
				header( "refresh:5;url=confidents.php" );
			}
			
			else if($_GET['theme']=='relations')
			{
				$file = fopen("../base_de_donnees/relations.txt", "r+");
				$donnees = $_GET['pseudo']."|".$_GET['theme']."|".$date."|".$_GET['keywords']."|".$_GET['image']."|".$message;
				fseek($file,0,SEEK_END); // permet de positionner le curseur à la fin du fichier
				fputs($file, $donnees."\r\n"); // \r\n permet d'aller à la ligne dans le fichier texte
				fclose($file);
				echo "<h1>Votre message a bien été posté dans la session Relations amoureuses.</h1>
				<p>Vous allez être redirigé vers la page correspondante dans 5 secondes.</p>
				<p>Cliquez <a href=\"relations.php\">ici</a> si la redirection a échouée.</p>";
				header( "refresh:5;url=relations.php");
			}
			
			else if($_GET['theme']=='personas')
			{
				$file = fopen("../base_de_donnees/personas.txt", "r+");
				$donnees = $_GET['pseudo']."|".$_GET['theme']."|".$date."|".$_GET['keywords']."|".$_GET['image']."|".$message;
				fseek($file,0,SEEK_END); // permet de positionner le curseur à la fin du fichier
				fputs($file, $donnees."\r\n"); // \r\n permet d'aller à la ligne dans le fichier texte
				fclose($file);
				echo "<h1>Votre message a bien été posté dans la session Personas.</h1>
				<p>Vous allez être redirigé vers la page correspondante dans 5 secondes.</p>
				<p>Cliquez <a href=\"personas.php\">ici</a> si la redirection a échouée.</p>";
				header( "refresh:5;url=personas.php");
			}
			
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