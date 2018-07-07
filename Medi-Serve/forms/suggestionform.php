
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Medicare</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h2>Suggestion Form</h2>

				<form action="suggest.php" method="post" style="background-color: lightgray;">

				<div class="form-group">
					<label>User Name</label><input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
					<label>Email</label><input type="email" name="email" class="form-control">
			</div>
			<div class="form-group">
					<label>Message</label><input type="text" name="message" class="form-control">
			</div>
			
			<button class="btn btn-primary" type="submit">LogIn</button>
		</form>
		</div>
	</div>
</div>
		
	
	<script src="js/bootstrap.min.js"></script>

</body>
</html>