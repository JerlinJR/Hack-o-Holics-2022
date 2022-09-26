<?php

include '../libs/load.php';

print_r($_POST);

// if (!empty(isset($_POST['id'])) and !empty(isset($_POST['password']))) {
//     $id = $_POST['id'];
//     $password = $_POST['password'];

//     $result = true;
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>XCoders</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>

	<div class="c-dash">
		<div style="text-align:center" class="road-type">
			<h2 id="heading-text">Select the type of Road</h2>
			<form method="post" action="client-dash.php">
				<input type="text" name="id" id="id" placeholder="Your ID" required />
				<br>

				<select name="roads" id="roads" required>
					<option value="">None</option>
					<option value="stateHighway">State Highway</option>
					<option value="district">District Roads</option>
					<option value="villageRoad">Village Roads</option>
				</select>
				<br>
				<!-- state highway -->

				<div id="stateHighway">
					<select id="exp" name="stateHighwayRoads">
						<option value="SH1">SH1</option>
						<option value="SH2">SH2</option>
						<option value="SH3">SH3</option>
						<option value="SH4">SH4</option>
					</select>
				</div>


				<!-- District -->

				<div id="district">
					<select id="team" name="districtRoads">
						<option value="DR1">DR1</option>
						<option value="DR2">DR2</option>
						<option value="DR3">DR3</option>
						<option value="DR4">DR4</option>
						<option value="DR5">DR5</option>
						<option value="DR6">DR6</option>
					</select>
				</div>


				<!-- Village Road -->

				<div id="villageRoad">
					<select id="age" name="villageRoad">
						<option value="VR1">VR1</option>
						<option value="VR2">VR2</option>
						<option value="VR3">VR3</option>
						<option value="VR4">VR4</option>
					</select>
				</div>

				<input type="number" name="damageDepth" id="damage" placeholder="Damage Depth in feet" required />
				<br>
				<br>
				<input type="submit" class="btn btn-primary">
			</form>
		</div>
	</div>


</body>
<script src="script.js"></script>

</html>

<!-- Array ( [id] => 1 [roads] => stateHighway [exp] => 1 [team] => 1 [age] => 1 [damageDepth] => 2 )
 -->