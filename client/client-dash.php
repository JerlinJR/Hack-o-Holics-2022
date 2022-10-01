<?php

include '../libs/load.php';


print_r($_POST);

$arr = array_values($_POST);



if (!empty(isset($arr[0])) and !empty(isset($arr[1])) and !empty(isset($arr[2])) and !empty(isset($arr[3]))) {
    $id = $arr[0];
    $roadType = $arr[1];
    $roadName = $arr[2];
    $depth = $arr[3];

    
    print(User::roadUpdate($id, $roadType, $roadName, $depth));
} else {
    print("Please fill the form");
}





// $result = User::roadUpdate($id)

// $result = false;

// if (!empty(isset($_POST['id'])) and !empty(isset($_POST['password']))) {
//     $id = $_POST['id'];
//     $password = $_POST['password'];

//     $result = User::userLogin($id, $password);
// }

// if ($result) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>XCoders</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body style="background-image:url(../images/client.jpg); background-size: cover; repeat:no-repeat;">

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
						<option selected="true" disabled="disabled">Choose Tagging</option>
						<option value="SH1">SH1</option>
						<option value="SH2">SH2</option>
						<option value="SH3">SH3</option>
						<option value="SH4">SH4</option>
					</select>
				</div>


				<!-- District -->

				<div id="district">
					<select id="team" name="districtRoads">
						<option selected="true" disabled="disabled">Choose Tagging</option>
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
						<option selected="true" disabled="disabled">Choose Tagging</option>
						<option value="VR1">VR1</option>
						<option value="VR2">VR2</option>
						<option value="VR3">VR3</option>
						<option value="VR4">VR4</option>
					</select>
				</div>

				<input type="number" name="damageDepth" id="damage" placeholder="Damage Depth in meter" required />
				<br>
				<br>
				<input type="submit" class="btn">
				
			</form>
		</div>
	</div>


</body>
<script src="script.js"></script>

</html>