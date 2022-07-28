<html>
	<head>
		<title>Les Personas</title>
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
		<h1>Les Personas</h1>
		
		<?php
			$coms = 0;
			$file = fopen("../base_de_donnees/personas.txt", "r");
			while(! feof($file))
			{
				$donnees = fgets($file); //obtient la valeur d'une ligne
					if($donnees == "")
					{
						break;
					}
				$coms +=1;
			}
			fclose($file);
			echo "<h3>Commentaires (".$coms.")</h3>";
		?>
		
		
		<?php
			//affichage du commentaire
			$file = fopen("../base_de_donnees/personas.txt", "r");
			$filename = "../base_de_donnees/personas.txt";
			//echo filesize($filename);
			//if(0 == filesize($filename))
			$content = file_get_contents($filename);
			if(empty($content))
			{
				echo "<br>Soyez le premier à poster un commentaire !<br>";
			}
			else
			{
				while(! feof($file)) //permet de boucler sur toute la longueur du fichier
				{
					$donnees = fgets($file); //obtient la valeur d'une ligne
					if($donnees == "")
					{
						break; // comme je demande de créer un retour à la ligne dans le fichier texte, cette boucle if permet d'arrêter la boucle while si la ligne est vide
					}
					list($pseudo, $theme, $date, $keywords, $image, $message) = explode("|", $donnees); // découpe la ligne selon le délimiteur
					echo "
					<div class=\"w3-card w3-border\">
						<h3>$pseudo</h3>
						<p>$date</p>
						<p>Thème : $theme</p>";
						if ($keywords != "")
						{
							echo "<p>Mots clés : $keywords</p>";
						}
						if ($image != "")
						{
							echo "<img src=\"$image\" width=\"200px\" height=\"200px\">";
						}
						echo "<p>$message</p>
				
					</div>
					<br>";
				}
			}
			fclose($file);
		?>
		<br>
		<!-- récupération du formulaire-->
		<?php include '../includes/form_messages.php';?>
		
		<!--écriture des informations du formulaire dans le fichier-->
		
		<?php
		if (isset($_GET['submit_message'])) //permet de vérifier si le bouton d'inscription a bien été cliqué
		{
			//$adresse = $_SERVER['PHP_SELF'];  permet de récupérer l'URL de la page sans les paramètres supplémentaires (visibles grâce au GET) (inutile pour le moment)
			$jour = date("d m Y");
			$heure = date("H:i:s");
			$date = "le ".$jour." à ".$heure;
			$theme="personas";
			$message = $_GET['message'];
			$message=str_replace(array("\r\n","\n"),'<br />',$message);
			
			$file = fopen("../base_de_donnees/personas.txt", "r+");
			$donnees = $_GET['pseudo']."|".$theme."|".$date."|".$_GET['keywords']."|".$_GET['image']."|".$message;
			fseek($file,0,SEEK_END); // permet de positionner le curseur à la fin du fichier
			fputs($file, $donnees."\r\n"); // \r\n permet d'aller à la ligne dans le fichier texte
			fclose($file);
			echo "
			<html> 
			<head> 
			<meta http-equiv=\"refresh\" content=\"0; url=personas.php\"> 
			</head> 
			</html>"; 
			//tout ce bloc permet de refresh instantanément la page après l'inscription dans le formulaire, car après inscription, affichage non immédiat, 
			//obligé de refresh la page, mais ça écrivait plusieurs fois le même message.			
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