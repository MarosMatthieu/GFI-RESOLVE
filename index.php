<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<title> LOGIN PAGE</title>
	</head>
	<body>
		<section class="logo">
		<img src="images/logo.jpg" />
		</section>
		
		<section class="formulaire">
			<form method="post" action="traitement.php">
				<a href="admin.php" type="text" name="Adresse mail" placeholder="login"> </a>
			</form>
			<br/>
			<form method="post" action="traitement.php">
				<input type="password" name="Mot de Passe" placeholder="Password"/>
			</form>
			<br/>
		
			<input class="envoyer" type="submit" value="Envoyer"> 
		</section>
		
		<footer>
		<p> </p>
		</footer>
	
	</body>
	
	
	
</html>