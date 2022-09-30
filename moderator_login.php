<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Road Care</title>
	<link rel="stylesheet" type="text/css" href="css/modCss.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>

<body style="background-image:url(images/signin.jpg); background-size: cover; repeat:no-repeat;">
	<div class="moderator">
		<div class="mod-card">
			<h3 class="main-text">Moderator Login</h3>
			<form method="post" action="moderator/moderator.php">
				<p class="username">Username</p>
				<br>
				<input name="id" class="signin-in" type="text" />
				<br>
				<label class="password">Password</label>
				<br>
				<input name="password" class="signin-in" type="password">
				<br>
				<input type="submit" class="submit-button">
			</form>
		</div>
	</div>
</body>

</html>