<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add Client</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

</head>
<body>
<div class="container">
	<div class="add-client">
		<h2>Add Client :</h2>
		<form action="form-client.php" method="post">
			<P>
            <label for="company-name">Company Name :</label>
            <input type="text" class="form-control" id="company-name" name="company-name" placeholder="company-name" required>           
            <label for="description">Description :</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="description" required>            
            <label for="contact-name">Contact :</label>
            <input type="text" class="form-control" id="contact-name" name="contact-name" placeholder="name" required><br>
            <input type="text" class="form-control" id="contact-surname" name="contact-surname" placeholder="surname" required>
            <label for="contact-name">Mail :</label>
            <input type="text" class="form-control" id="mail" name="mail" placeholder="mail" required><br>          
			<label for="phone">Phone Number :</label>
			<input id="phone" name="phone" type="tel" class="form-control" pattern="^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$" placeholder="0122334455"required ><br>
			<input type="submit" value="Add Client">
			</P>
		</form>
	</div>
</div>
</body>
</html>
