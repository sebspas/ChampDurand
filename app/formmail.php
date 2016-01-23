<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width">
	<!--<meta http-equiv="refresh" content="3;contact.html" />-->
	<title>Le Moulin de Champdurand, Validation Formulaire de contact</title>
	<link rel="shortcut icon" type="image/x-icon" href="image/iconev2.png"/>
	<link rel="stylesheet" href="css/style.css" title="css"/>
</head>

<!-- Corp du site -->
<body>
	<header>
	<script type="text/javascript">
		setInterval('window.close()', 4000);
	</script>
		<!-- Fin menu du site Web -->
	</header> 
	<div style="float: center;">
					<?php
						/*--------- Header ---------*/
						$TO = "crodis@free.fr";
						$head = "From : " . ($email = $_POST['email']);
						/*--------- Categories ---------*/
						$tel = $_POST['telephone'];					
						$no_email = $_POST['no_email'];
						$prenom = $_POST['prenom'];
						$objet = $_POST['objet'];	
						$nom = $_POST['nom'];
						$message = $_POST['message'];
						$subject = "[Formulaire site Chambre d'hote] ";
						/*--------- Contenu Mis en Forme ---------*/
						$erreurs = 0; 
						if ($prenom == "" || $prenom == "Prénom")
						{
							echo "Merci d'indiquer votre prenom !";
							$erreurs = $erreurs + 1;
						}
						else if ($no_email != "")
						{
							$erreurs = $erreurs +1;
						}
						else if ($objet == "" || $objet == "Objet")
						{
							echo "Veuillez indiquer l'objet de votre message.";
							$erreurs = $erreurs + 1;
						}
						else if ($nom == "" || $nom == "Nom")
						{
							echo "Merci d'indiquer votre nom !";
							$erreurs = $erreurs + 1;
						}
						else if ($email == "" || $email == "votre@mail.fr")
						{
							echo "Merci d'indiquer votre e-mail' !";
							$erreurs = $erreurs + 1;
						}
						else if ($message == "")
						{
							echo "Veuillez ecrire un message !";
							$erreurs = $erreurs + 1;
						}
						if ($erreurs == 0)
						{
							$content =  'Objet : ' . $objet . "\n\n" . 'Nom : ' . $nom . "\n" . 'Prenom : ' . $prenom . "\n\n" . 'Tel : ' . $tel . "\n" . 'Message : ' . $message . "\n\n" ;
							mail($TO, $subject, $content, $head);
							echo "Votre message a bien ete envoye !";
						}
						else
						{
						
						}
						?>
					</div>
</body>

</html>