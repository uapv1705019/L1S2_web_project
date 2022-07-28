<html>
	<head>
		<title>Accueil</title>
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
		<h1>Bienvenue sur mon blog destiné à Persona 5</h1>
		<p>Ce blog aura pour but de discuter du jeu Persona 5 ainsi que de ses différentes mécaniques de gameplay.<br>
		Je préviens à l'avance : ce blog est réservé à ceux qui ont bien avancés, voire fini le jeu au moins une fois, il risque fortement d'y avoir des spoilers. Entrez ici à vos risques et périls ;)<br>
		Veuillez choisir dans le menu ci-dessus quel thème vous voulez aborder afin de vous rendre sur la page correspondante<br>
		ou cliquez sur un élément de la liste ci-dessous : </p>
		<ul class="w3-ul w3-border">
			<li><a href="palaces.php">Les Palaces</a></li>
			<li><a href="daily_life.php">La vie quotidienne</a></li>
			<li><a href="confidents.php">Les Confidents</a></li>
			<li><a href="relations.php">Les Relations amoureuses</a></li>
			<li><a href="personas.php">Les Personas</a></li>
		</ul>
		<p>Vous pouvez aussi, si vous avez déjà connaissance du site et de ses différents sujets de discussion, poster directement un message sur la page correcpondante à l'aide du formulaire ci-dessous :</p>
		<?php include '../includes/form_all_messages.php';?>
		<p>Bonne visite !</p>
		</div>
		
		<div class="w3-quarter">
		</div>
	</div>
	<?php include '../includes/pied.php';?>
	<?php include '../includes/haut_de_page.php';?>
	</body>
</html>