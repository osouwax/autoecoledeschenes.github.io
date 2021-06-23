<?php 
$nom=$HTTP_POST_VARS['Nom']; 
$mail=$HTTP_POST_VARS['Email']; 
$message=$HTTP_POST_VARS['Message']; 
 
/////voici la version Mine 
$headers = "MIME-Version: 1.0\r\n"; 
 
//////ici on détermine le mail en format texte 
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n"; 
 
////ici on détermine l'expediteur et l'adresse de réponse 
$headers .= "From: $nom <$mail>\r\nReply-to : $nom <$mail>\nX-Mailer:PHP"; 


$destinataire=" wallydibombepro@gmail.com, hackersgame95@gmail.com"; 
$body="$message"; 
if (mail($destinataire,$body,$headers)) { 
echo "Votre mail a été envoyé"; 
} else { 
echo "Une erreur s'est produite"; 
} 
?>

<!DOCTYPE html public "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-trasitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum=1, maximum-scale=1,user-scalable=no">
	<title>Contact</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/contact.css" type="text/css"/>
</head>
<body>
	
	  <!-- Header -->
	  <section id="header">
		<div class="header container">
		  <div class="nav-bar">
			<div class="brand">
			  <a href="./index.php"><img src="./logo.png" class = "img2"alt="logo"></a>
			</div>
			<div class="nav-list">
			  <div class="hamburger"><div class="bar"></div></div>
			  <ul>
				<li><a href ="./login"data-after="projets">Connexion</a></li>
				<li><a href="./formation" data-after="About">Formation</a></li>
				<li><a href="./index.html" data-after="Contact">Contact</a></li>
			  </ul>
			</div>
		  </div>
		</div>
	  </section>
	  <!-- fin Header -->
	<div class="contact-in">
		<div class="contact-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3110.1438734662493!2d2.073196203233246!3d49.042751205806915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6f522262073e9%3A0xd4e07a16cea0796b!2s205%20Rue%20d
			es%20Ch%C3%AAnes%20Bruns%2C%2095000
			%20Cergy!5e0!3m2!1sfr!2sfr!4v16242013
			31688!5m2!1sfr!2sfr" width="100%" height="auto" frameborder ="0"style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
		
		<div class="contact-form">
			<h1>CONTACTEZ NOUS</h1>
			
			
			<form method="post">
				<input type="text" placeholder="Nom" name = "Nom" class="contact-form-txt"/>
				<input type="text" placeholder="Email" name = "Email" class="contact-form-txt">
				<textarea placeholder="Message" name = "Message" class="contact-form-textarea"></textarea>
				<input type="submit" name="Submit" class="contact-form-btn"/>
			</form>
	</div>
	
<!-- Footer -->
 
	  <script src="./app2.js"></script>
	  <!-- fin Footer -->
</body>

</html>