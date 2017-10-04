<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<title> LOGIN PAGE</title>
	</head>
	<body>
		<section class="logo">
		<img src="logo.png" />
		</section>
		
		<section class="formulaire">
			<div class="form">
			<form method="post" action="traitement.php">
				<input type="text" name="Adresse mail" placeholder="login"/>
			</form>
			<br/>
			<form method="post" action="traitement.php">
				<input type="password" name="Mot de Passe" placeholder="Password"/>
			</form>
			<br/>
		
			<input class="envoyer" type="submit" value="Envoyer"> 
			</div>
		</section>
		
		<footer>
		<p> </p>
		</footer>
	
	</body>
	
	
	
</html>