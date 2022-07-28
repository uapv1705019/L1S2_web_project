<html>
	<head>
	    <meta charset="utf-8" />
		<title>Signin</title>
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
			<h1>Page d'inscription</h1>
			<?php include '../includes/form_signin.php';?>
		</div>
		
		<div class="w3-quarter">
		</div>
	</div>
	<?php include '../includes/pied.php';?>
	<?php include '../includes/haut_de_page.php';?>
	<!-- les fonctions JavaScript ne marchent pas, j'ai du utiliser autre chose pour la vérification-->
	<script>
    function VerifMail()
    {
        var mail = document.getElementsById("inscription_mail").value;
        var filtre = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (filtre.test(mail))
        {
            return true
        }
        else 
		{
            alert("Adresse mail non valide");
            return false;
        }
    }
	
	function VerifPassword() //inutile vu que je ne demande qu'une fois le password
	{
		var password1 = document.getElementById("inscription_password").value;
		var password2 = document.getElementById("inscription_confirm_password").value;
		if (password1 != password2)
		{
			alert("Les mots de passes ne sont pas équivalents";
			return false;
		}
		else
		{
			return true;
		}
	}
	
	function verifFormulaire(event) 
	{
		var valid = true;
		var password=VerifPassword();
		var mail=VerifMail();
			if (password ==false || mail==false)
			{
				valid = false;
			}
			if (valid == false) 
			{
				event.preventDefault(); // Empêche la soumission du formulaire
			}
		}
	</script>
	
	</body>
</html>
