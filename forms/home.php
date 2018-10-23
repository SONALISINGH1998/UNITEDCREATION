<?php

session_start();

if(!isset($_SESSION['username']))
{
	header('location:login.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Medicare</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<body>
	<div class="container">

	<h1 class="text-center text-success">Hi ! <?php echo $_SESSION['username']; ?> &nbsp;Welcome to Medicare </h1>

	<a href="logout.php"> LOGOUT </a>

</div>
</body>
</html>