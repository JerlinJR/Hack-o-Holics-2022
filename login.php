<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../Hack-o-Holics-2022/css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

	<!-- Login Area -->
	<div class="login">

		<!-- client login -->

		<div class="client">
			<h2>Client Login</h2>
			<form method="post" action="client/client-dash.php">
				<input name="username" type="text" class="email" placeholder="Enter Your Email">
				<br>
				<br>
				<input name="password" class="password-client" type="password" placeholder="Enter Your Password">
				<br>
				<br>
				<input type="submit" class="btn btn-primary">
			</form>
		</div>

		<!-- client login ends -->

		<!-- higher authorities login -->

		<!-- <div class="mod-auth">
			<h2>Moderator Login</h2>
			<form method="post" action="moderator/moderator.php">
				<input name="id" type="text" class="id-mod" placeholder="Enter Login Id">
				<br>
				<br>
				<input name="password" class="password-mod" type="password" placeholder="Enter Your Password">
				<br>
				<br>
				<input type="submit" class="btn btn-primary">
			</form>
		</div> -->

		<!-- higher authorities login ends -->

	</div>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>

</html>