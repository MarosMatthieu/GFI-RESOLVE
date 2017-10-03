
<html>
<head>
<title>Test</title>
</head>

<body>
	<div class="change-pwd">
		<h2>Change Password :</h2>
		<form action="/action_page.php" method="post">
			New Password: <br> <input type="password" name="password"><br>
			Confirm New Password: <br> <input type="password" name="password"><br>
			<br> <input type="submit" value="Submit">
		</form>
	</div>
	<br>
	<br>
	<div class="add-user">
		<h2>Add User :</h2>
		<form action="admin.php" method="post">
			<P>
				Name : <br> <input type="text" name="name"><br> Surname : <br> <input
					type="text" name="surname"><br> Password : <br> <input
					type="password" name="password"><br> Confirm Password : <br> <input
					type="password" name="password"><br> Status : <br> <input
					type="text" name="status"><br> Email : <br> <input type="text"
					name="email"><br> <br> <input type="submit" value="Submit">
			</P>
		</form>
	</div>
	<br>
	<div class="add-client">
		<h2>Add Client :</h2>
		<form action="admin.php" method="post">
			<P>
				Company Name :<br> 
				<input type="text" id="" name="company-name"><br>
				Description :<br> 
				<input type="text" name="description"><br> 
				Contact Name :<br> 
				<input type="text" name="contact-name"><br> 
				Phone :<br> 
				<input type="text" name="phone"><br> <br> 
				<input type="submit" value="Submit">
			</P>
		</form>
	</div>
</body>
<?php
 $phone = $_POST['phone'];
 
 //fonction pour vérifier la conformité d'un numéro de tel Français
 function VerifTelFr($phone){
     $regex = "#^0[1-68]([-. ]?[0-9]{2}){4}$#";
     if (preg_match($regex,$phone)){
         echo 'Ce numéro est correct.';
     } else {
         echo 'Ce numéro est incorrect.';
     }
 }
 echo VerifTelFr($phone)
?> 

    </html>