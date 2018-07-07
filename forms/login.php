
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
				<h2>Log In Form</h2>

				<form action="validation.php" method="post" style="background-color: lightgray;">

				<div class="form-group">
					<label>User Name</label><input type="text" name="user" class="form-control">
			</div>
			<div class="form-group">
					<label>Password</label><input type="password" name="password" class="form-control">
			</div>
			
			<button class="btn btn-primary" type="submit">LogIn</button>
		</form>
		</div>
		
			<div class="col-lg-6">
				<h2>Sign UP Form</h2>

				<form action="registration.php" method="post" style="background-color: lightgray;" onsubmit="return valid();">

				<div class="form-group">
					<label>User Name</label><input type="text" name="user" class="form-control">
			</div>

			<div class="form-group">
					<label>E-mail(Optional)</label><input type="email" name="email" class="form-control">
			</div>
			<div class="form-group">
					<label>Mobile</label><input type="number" name="mobile" class="form-control">
			</div>
			<div class="form-group">
					<label>Address</label><input type="text" name="address" class="form-control">
			</div>
					<div class="form-group">
					<label>Password</label><input type="password" name="password" class="form-control">
			</div>
					<div class="form-group">
					<label>Aadhar Card No.</label><input type="number" name="aadhar" class="form-control">
			</div>
					<div class="form-group">
					<label>Income Certificate No.</label><input type="number" name="income" class="form-control" placeholder="Income should be less than One Lac">
			</div>
				<div class="form-group">
					<label>Income Certificate Application No.</label><input type="number" name="incomeapp" class="form-control" placeholder="Income should be less than One Lac">
			</div>



			<div class="form-group">
					<label>Problem</label><input type="text" name="problem" class="form-control">
			</div>

			<input type="submit" class="btn btn-primary" value="Sign UP">
		</form>
		</div>
	</div>
</div>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>