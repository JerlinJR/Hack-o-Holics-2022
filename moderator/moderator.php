<?php

include "../libs/load.php";


$id = $_POST['id'];
$pass = $_POST['password'];

$result = User::moderatorLogin($id, $pass);
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>XCoders</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="robots" content="all,follow">
	<!-- Google fonts - Poppins -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
	<!-- Choices CSS-->
	<link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
	<!-- theme stylesheet-->
	<link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
	<!-- Custom stylesheet - for your changes-->
	<link rel="stylesheet" href="css/custom.css">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- Tweaks for older IEs-->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
	<script src="js/navbar.js" defer> </script>
</head>

<body>

	<?php
if ($result) {
    ?>

	<div class="page">
		<!-- Main Navbar-->
		<header class="header z-index-50">
			<nav class="navbar py-3 px-0 shadow-sm text-white position-relative">
				<!-- Search Box-->
				<div class="search-box shadow-sm">
					<button class="dismiss d-flex align-items-center">
						<svg class="svg-icon svg-icon-heavy">
							<use xlink:href="#close-1"> </use>
						</svg>
					</button>
					<form id="searchForm" action="#" role="search">
						<input class="form-control shadow-0" type="text" placeholder="What are you looking for...">
					</form>
				</div>
				<div class="container-fluid w-100">
					<div class="navbar-holder d-flex align-items-center justify-content-between w-100">
						<!-- Navbar Header-->
						<div class="navbar-header">
							<!-- Navbar Brand -->
							<a class="navbar-brand d-none d-sm-inline-block" href="index.html">
								<div class="brand-text d-none d-lg-inline-block">
									<span>Road Care</span>
									<strong>Dashboard</strong>
								</div>
								<div class="brand-text d-none d-sm-inline-block d-lg-none">
									<strong>BD</strong>
								</div>
							</a>
							<!-- Toggle Button-->
							<a class="menu-btn active" id="toggle-btn" href="#">
								<span></span>
								<span></span>
								<span></span>
							</a>
						</div>
						<!-- Navbar Menu -->
						<ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
							<!-- Search-->
							<li class="nav-item d-flex align-items-center">
								<a id="search" href="#">
									<svg class="svg-icon svg-icon-xs svg-icon-heavy">
										<use xlink:href="#find-1"> </use>
									</svg>
								</a>
							</li>
							<!-- Notifications-->
							<li class="nav-item dropdown">
								<a class="nav-link text-white" id="notifications" href="#" data-bs-toggle="dropdown"
									aria-expanded="false">
									<svg class="svg-icon svg-icon-xs svg-icon-heavy">
										<use xlink:href="#chart-1"> </use>
									</svg>
									<span class="badge bg-red badge-corner fw-normal">12</span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end mt-3 shadow-sm"
									aria-labelledby="notifications">
									<li>
										<a class="dropdown-item py-3" href="#">
											<div class="d-flex">
												<div class="icon icon-sm bg-blue">
													<svg class="svg-icon svg-icon-xs svg-icon-heavy">
														<use xlink:href="#envelope-1"> </use>
													</svg>
												</div>
												<div class="ms-3">
													<span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">You
														have 6 new messages </span>
													<small class="small text-gray-600">4 minutes ago</small>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a class="dropdown-item py-3" href="#">
											<div class="d-flex">
												<div class="icon icon-sm bg-green">
													<svg class="svg-icon svg-icon-xs svg-icon-heavy">
														<use xlink:href="#chats-1"> </use>
													</svg>
												</div>
												<div class="ms-3">
													<span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">New 2
														WhatsApp messages</span>
													<small class="small text-gray-600">4 minutes ago</small>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a class="dropdown-item py-3" href="#">
											<div class="d-flex">
												<div class="icon icon-sm bg-orange">
													<svg class="svg-icon svg-icon-xs svg-icon-heavy">
														<use xlink:href="#checked-window-1"> </use>
													</svg>
												</div>
												<div class="ms-3">
													<span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">Server
														Rebooted
													</span>
													<small class="small text-gray-600">8 minutes ago</small>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a class="dropdown-item py-3" href="#">
											<div class="d-flex">
												<div class="icon icon-sm bg-green">
													<svg class="svg-icon svg-icon-xs svg-icon-heavy">
														<use xlink:href="#chats-1"> </use>
													</svg>
												</div>
												<div class="ms-3">
													<span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">New 2
														WhatsApp messages</span>
													<small class="small text-gray-600">10 minutes ago</small>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a class="dropdown-item all-notifications text-center" href="#">
											<strong class="text-xs text-gray-600">view all notifications </strong>
										</a>
									</li>
								</ul>
							</li>
							<!-- Messages                        -->
							<li class="nav-item dropdown">
								<a class="nav-link text-white" id="messages" rel="nofollow" href="#"
									data-bs-toggle="dropdown" aria-expanded="false">
									<svg class="svg-icon svg-icon-xs svg-icon-heavy">
										<use xlink:href="#envelope-1"> </use>
									</svg>
									<span class="badge bg-orange badge-corner fw-normal">10</span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end mt-3 shadow-sm" aria-labelledby="messages">
									<li>
										<a class="dropdown-item d-flex py-3" href="#">
											<img class="img-fluid rounded-circle" src="img/avatar-1.jpg" alt="..."
												width="45">
											<div class="ms-3">
												<span class="h6 d-block fw-normal mb-1 text-sm text-gray-600">Jason Doe
												</span>
												<small class="small text-gray-600"> Sent You Message</small>
											</div>
										</a>
									</li>
									<li>
										<a class="dropdown-item d-flex py-3" href="#">
											<img class="img-fluid rounded-circle" src="img/avatar-2.jpg" alt="..."
												width="45">
											<div class="ms-3">
												<span class="h6 d-block fw-normal mb-1 text-sm text-gray-600">Jason Doe
												</span>
												<small class="small text-gray-600"> Sent You Message</small>
											</div>
										</a>
									</li>
									<li>
										<a class="dropdown-item d-flex py-3" href="#">
											<img class="img-fluid rounded-circle" src="img/avatar-3.jpg" alt="..."
												width="45">
											<div class="ms-3">
												<span class="h6 d-block fw-normal mb-1 text-sm text-gray-600">Jason Doe
												</span>
												<small class="small text-gray-600"> Sent You Message</small>
											</div>
										</a>
									</li>
									<li>
										<a class="dropdown-item text-center" href="#">
											<strong class="text-xs text-gray-600">Read all messages </strong>
										</a>
									</li>
								</ul>
							</li>
							<!-- Languages dropdown    -->
							<li class="nav-item dropdown">
								<a class="nav-link text-white dropdown-toggle d-flex align-items-center" id="languages"
									href="#" data-bs-toggle="dropdown" aria-expanded="false">
									<img class="me-2" src="img/flags/16/GB.png" alt="English">
									<span class="d-none d-sm-inline-block">English</span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end mt-3 shadow-sm" aria-labelledby="languages">
									<li>
										<a class="dropdown-item" rel="nofollow" href="#">
											<img class="me-2" src="img/flags/16/DE.png" alt="English">
											<span class="text-xs text-gray-700">German</span>
										</a>
									</li>
									<li>
										<a class="dropdown-item" rel="nofollow" href="#">
											<img class="me-2" src="img/flags/16/FR.png" alt="English">
											<span class="text-xs text-gray-700">French </span>
										</a>
									</li>
								</ul>
							</li>
							<!-- Logout    -->
							<li class="nav-item">
								<a class="nav-link text-white" href="login.html">
									<span class="d-none d-sm-inline">Logout</span>
									<svg class="svg-icon svg-icon-xs svg-icon-heavy">
										<use xlink:href="#security-1"> </use>
									</svg>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<div class="page-content d-flex align-items-stretch">
			<!-- Side Navbar -->
			
			<div id="template-road"></div>


			<div class="content-inner w-100">
				<!-- Page Header-->
				<header class="bg-white shadow-sm px-4 py-3 z-index-20">
					<div class="container-fluid px-0">
						<h2 class="mb-0 p-1">Dashboard</h2>
					</div>
				</header>
				
				<!-- Dashboard Header Section    -->
				<section class="pb-0">
					<div class="container-fluid">
						<div class="row align-items-stretch">
							<!-- Statistics -->
							<div class="col-lg-3 col-12">
								<div class="card mb-3">
									<div class="card-body">
										<div class="d-flex align-items-center">
											<div class="icon flex-shrink-0 bg-red">
												<i class="fas fa-tasks"></i>
											</div>
											<div class="ms-3">
												<strong class="text-lg d-block lh-1 mb-1">234</strong>
												<small
													class="text-uppercase text-gray-500 small d-block lh-1">Applications</small>
											</div>
										</div>
									</div>
								</div>
								<div class="card mb-3">
									<div class="card-body">
										<div class="d-flex align-items-center">
											<div class="icon flex-shrink-0 bg-green">
												<i class="far fa-calendar"></i>
											</div>
											<div class="ms-3">
												<strong class="text-lg d-block lh-1 mb-1">152</strong>
												<small
													class="text-uppercase text-gray-500 small d-block lh-1">Interviews</small>
											</div>
										</div>
									</div>
								</div>
								<div class="card mb-0">
									<div class="card-body">
										<div class="d-flex align-items-center">
											<div class="icon flex-shrink-0 bg-orange">
												<i class="far fa-paper-plane"></i>
											</div>
											<div class="ms-3">
												<strong class="text-lg d-block lh-1 mb-1">147</strong>
												<small
													class="text-uppercase text-gray-500 small d-block lh-1">Forwards</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Line Chart            -->
							<div class="col-lg-6 col-12">
								<div class="card mb-0 h-100">
									<div class="card-body">
										<canvas id="lineCahrt"></canvas>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-12">
								<!-- Bar Chart   -->
								<div class="card">
									<div class="card-body">
										<strong class="h2 mb-0 d-block text-violet">95%</strong>
										<small class="text-gray-500 small text-uppercase d-block mb-3">Current Server
											Uptime
										</small>
										<canvas id="barChartHome"></canvas>
									</div>
								</div>
								<!-- Numbers-->
								<div class="card mb-0">
									<div class="card-body">
										<div class="d-flex align-items-center">
											<div class="icon flex-shrink-0 bg-green">
												<i class="fas fa-chart-area"></i>
											</div>
											<div class="ms-3">
												<strong class="text-lg mb-0 d-block lh-1">99.9%</strong>
												<small class="text-gray-500 small text-uppercase">Success Rate</small>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>


				<!-- Page Footer-->
				<footer class="position-absolute bottom-0 bg-darkBlue text-white text-center py-3 w-100 text-xs"
					id="footer">
					<div class="container-fluid">
						<div class="row gy-2">
							<div class="col-sm-6 text-sm-start">
								<p class="mb-0">Your company &copy; 2017-2021</p>
							</div>
							<div class="col-sm-6 text-sm-end">
								<p class="mb-0">Design by
									<a href="https://bootstrapious.com/p/admin-template"
										class="text-white text-decoration-none">Bootstrapious</a>
								</p>
								<!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
	</div>


	<!-- JavaScript files-->
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/chart.js/Chart.min.js"></script>
	<script src="vendor/just-validate/js/just-validate.min.js"></script>
	<script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
	<script src="js/charts-home.js"></script>
	<!-- Main File-->
	<script src="js/front.js"></script>
	<script>
		// ------------------------------------------------------- //
		//   Inject SVG Sprite - 
		//   see more here 
		//   https://css-tricks.com/ajaxing-svg-sprite/
		// ------------------------------------------------------ //
		function injectSvgSprite(path) {

			var ajax = new XMLHttpRequest();
			ajax.open("GET", path, true);
			ajax.send();
			ajax.onload = function(e) {
				var div = document.createElement("div");
				div.className = 'd-none';
				div.innerHTML = ajax.responseText;
				document.body.insertBefore(div, document.body.childNodes[0]);
			}
		}
		// this is set to BootstrapTemple website as you cannot 
		// inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
		// while using file:// protocol
		// pls don't forget to change to your domain :)
		injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
	</script>
	<!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<?php
} else {
    ?>
	<h1>Login Failed</h1>

	<?php
}
?>

</body>


</html>