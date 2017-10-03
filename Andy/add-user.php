<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Example of Bootstrap 3 Vertical Form Layout</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

</head>
<body>
<div class="container">
	<div class="add-user">
		<h2>Add User :</h2>
		<form action="admin.php" method="post">
			<P>
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="name" required>
            <label for="surname">Surname</label>
            <input type="text" class="form-control" id="surname" placeholder="surname" required>
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
            <label for="inputPassword">Confirm Password</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Password" required >
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" placeholder="status" required>
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="email" required>           
            <br>
			<input type="submit" value="Add user">
			</P>
		</form>
	</div>
</div>
</body>
</html>
