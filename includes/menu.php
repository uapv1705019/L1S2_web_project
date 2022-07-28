<html>
	<head>
	<title>Menu</title>	
	</head>
	<body>
	<div class="w3-bar w3-white w3-opacity-min">
		<a href="accueil.php" class="w3-bar-item w3-button">Accueil</a>
		<div class="w3-dropdown-click">
			<button class="w3-button" onclick="affiche()">Thèmes <i class="fa fa-caret-down"></i></button>
			
			<div id="themes" class="w3-dropdown-content w3-bar-block w3-card">
				<a href="palaces.php" class="w3-bar-item w3-button">Les Palaces</a>
				<a href="daily_life.php" class="w3-bar-item w3-button">La vie quotidienne</a>
				<a href="confidents.php" class="w3-bar-item w3-button">Les Confidents</a>
				<a href="relations.php" class="w3-bar-item w3-button">Les Relations amoureuses</a>
				<a href="personas.php" class="w3-bar-item w3-button">Les Personas</a>
			</div>
		</div>
			<div class="w3-right">
			<input type="text" class="w3-bar-item w3-input w3-border" placeholder="Recherche...">
			<button class="w3-bar-item w3-button"><i class="fa fa-search"></i></button>
			</div>
	</div>
	
	<script>
	function affiche() 
	{
		var x = document.getElementById("themes");
		if (x.className.indexOf("w3-show") == -1) 
		{
			x.className += " w3-show";
		} 
		else 
		{ 
			x.className = x.className.replace(" w3-show", "");
		}
	}
</script>
	</body>
</html>