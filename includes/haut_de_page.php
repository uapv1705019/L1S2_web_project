<html>
	<head>
	    <meta charset="utf-8" />
		<title>Bouton haut de page</title>
		<style>
		#haut_de_page 
			{
				display: none;
				position: fixed;
				bottom: 20px;
				right: 30px;
				font-size: 18px;
				border: none;
				outline: none;
				background-color: gray;
				color: white;
				cursor: pointer;
				padding: 15px;
				border-radius: 4px;
			}
		</style>
	</head>
	<body>
	<!--bouton de haut de page-->
	<button onclick="topFunction()" id="haut_de_page" title="haut de page">haut de page</button>
	
	<script>
//bouton haut de page
// affiche le bouton dès que l'utilisateur scroll la page de 20px
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("haut_de_page").style.display = "block";
    } else {
        document.getElementById("haut_de_page").style.display = "none";
    }
}

// le clic sur le bouton ramène la page tout en haut
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

</script>
	</body>
</html>
