<?php
include '../libs/load.php';
$value = array_values(User::getMaterialData());

print_r($value[2]);

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
		<script src="js/navbar.js" defer>
		</script>
	</head>

	<body>
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
										<span>Bootstrap </span>
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
									<a class="nav-link text-white" id="notifications" href="#" data-bs-toggle="dropdown" aria-expanded="false">
										<svg class="svg-icon svg-icon-xs svg-icon-heavy">
											<use xlink:href="#chart-1"> </use>
										</svg>
										<span class="badge bg-red badge-corner fw-normal">12</span>
									</a>
									<ul class="dropdown-menu dropdown-menu-end mt-3 shadow-sm" aria-labelledby="notifications">
										<li>
											<a class="dropdown-item py-3" href="#">
												<div class="d-flex">
													<div class="icon icon-sm bg-blue">
														<svg class="svg-icon svg-icon-xs svg-icon-heavy">
															<use xlink:href="#envelope-1"> </use>
														</svg>
													</div>
													<div class="ms-3">
														<span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">You have 6 new messages </span>
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
														<span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">New 2 WhatsApp messages</span>
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
														<span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">Server Rebooted
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
														<span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">New 2 WhatsApp messages</span>
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
									<a class="nav-link text-white" id="messages" rel="nofollow" href="#" data-bs-toggle="dropdown" aria-expanded="false">
										<svg class="svg-icon svg-icon-xs svg-icon-heavy">
											<use xlink:href="#envelope-1"> </use>
										</svg>
										<span class="badge bg-orange badge-corner fw-normal">10</span>
									</a>
									<ul class="dropdown-menu dropdown-menu-end mt-3 shadow-sm" aria-labelledby="messages">
										<li>
											<a class="dropdown-item d-flex py-3" href="#">
												<img class="img-fluid rounded-circle" src="img/avatar-1.jpg" alt="..." width="45">
												<div class="ms-3">
													<span class="h6 d-block fw-normal mb-1 text-sm text-gray-600">Jason Doe
													</span>
													<small class="small text-gray-600"> Sent You Message</small>
												</div>
											</a>
										</li>
										<li>
											<a class="dropdown-item d-flex py-3" href="#">
												<img class="img-fluid rounded-circle" src="img/avatar-2.jpg" alt="..." width="45">
												<div class="ms-3">
													<span class="h6 d-block fw-normal mb-1 text-sm text-gray-600">Jason Doe
													</span>
													<small class="small text-gray-600"> Sent You Message</small>
												</div>
											</a>
										</li>
										<li>
											<a class="dropdown-item d-flex py-3" href="#">
												<img class="img-fluid rounded-circle" src="img/avatar-3.jpg" alt="..." width="45">
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
									<a class="nav-link text-white dropdown-toggle d-flex align-items-center" id="languages" href="#" data-bs-toggle="dropdown"
									 aria-expanded="false">
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
							<h2 class="mb-0 p-1">Product Price</h2>
						</div>
					</header>
					<!-- Breadcrumb-->
					<div class="bg-white">
						<div class="container-fluid">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 py-3">
									<li class="breadcrumb-item">
										<a class="fw-light" href="index.html">Home</a>
									</li>
									<li class="breadcrumb-item active fw-light" aria-current="page">Product Price</li>
								</ol>
							</nav>
						</div>
					</div>
					<!-- Forms Section-->
					<section class="forms">
						<div class="container-fluid">
							<div class="row">
								<!-- PRICE Form-->
								<div class="col-lg-6">
									<div class="card">
										<div class="card-header">
											<div class="card-close">
												<div class="dropdown">
													<button class="dropdown-toggle text-sm" type="button" id="closeCard1" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fas fa-ellipsis-v"></i>
													</button>
													<div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1">
														<a class="dropdown-item py-1 px-3 remove" href="#">
															<i class="fas fa-times"></i>Close</a>
														<a class="dropdown-item py-1 px-3 edit" href="#">
															<i class="fas fa-cog"></i>Edit</a>
													</div>
												</div>
											</div>
											<h3 class="h4 mb-0">Concerate Road</h3>
										</div>
										<div class="card-body">
											<p class="text-sm">Upadate to the latest price for best estimation</p>
											<form action="priceUpdated.php" method="post">
												<label class="form-label" for="exampleInputPassword1">Cement Price per Kg
												</label>
												<div class="input-group mb-3">
													<span class="input-group-text">
														<?php  echo "₹ ". $value[1];   ?>
													</span>
													<input class="form-control" type="text" aria-label="Dollar amount (with dot and two decimal places)" name="cement" id="cement">
												</div>

												<label class="form-label" for="exampleInputPassword1">Mcent Price per Kg
												</label>
												<div class="input-group mb-3">
													<span class="input-group-text">
														<?php  echo "₹ ". $value[2];   ?>
													</span>
													<input class="form-control" type="text" aria-label="Dollar amount (with dot and two decimal places)" name="mcent" id="mcent">
												</div>



												<label class="form-label" for="exampleInputPassword1">Labour Charge per person
												</label>
												<div class="input-group mb-3">
													<span class="input-group-text">
														<?php  echo "₹ ". $value[3];   ?>
													</span>
													<input class="form-control" type="text" aria-label="Dollar amount (with dot and two decimal places)" name="labourcharge"
													 id="labourcharge">
												</div>


												<label class="form-label" for="exampleInputPassword1">Agrigator Price
												</label>
												<div class="input-group mb-3">
													<span class="input-group-text">
														<?php  echo "₹ ". $value[4];   ?>
													</span>
													<input class="form-control" type="text" aria-label="Dollar amount (with dot and two decimal places)" name="agrigator" id="agrigator">
												</div>

												<label class="form-label" for="exampleInputPassword1">Bitumin Price</label>
												<div class="input-group mb-3">
													<span class="input-group-text">
														<?php  echo "₹ ". $value[5];   ?>
													</span>
													<input class="form-control" type="text" aria-label="Dollar amount (with dot and two decimal places)" name="bitumin" id="bitumin">
												</div>

												<label class="form-label" for="exampleInputPassword1">Laying Charge</label>
												<div class="input-group mb-3">
													<span class="input-group-text">
														<?php  echo "₹ ". $value[6];   ?>
													</span>
													<input class="form-control" type="text" aria-label="Dollar amount (with dot and two decimal places)" name="layingCharge"
													 id="layingCharge">
												</div>

												<label class="form-label" for="exampleInputPassword1">Mixing Charge</label>
												<div class="input-group mb-3">
													<span class="input-group-text">
														<?php  echo "₹ ". $value[7];   ?>
													</span>
													<input class="form-control" type="text" aria-label="Dollar amount (with dot and two decimal places)" name="mixingCharge"
													 id="mixingCharge">
												</div>


												<button class="btn btn-primary" type="submit">Upadte Price</button>
											</form>
										</div>
									</div>
								</div>

							</div>
						</div>
					</section>
					<!-- Page Footer-->
					<footer class="position-absolute bottom-0 bg-darkBlue text-white text-center py-3 w-100 text-xs" id="footer">
						<div class="container-fluid">
							<div class="row gy-2">
								<div class="col-sm-6 text-sm-start">
									<p class="mb-0" id="stains>Your company &copy; 2017-2021</p>
							</div>
							<div class=" col-sm-6 text-sm-end ">
								<p class=" mb-0 ">Design by
									<a href=" https://bootstrapious.com/p/admin-template "
										class=" text-white text-decoration-none ">Bootstrapious</a>
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
	<script src=" vendor/bootstrap/js/bootstrap.bundle.min.js "></script>
	<script src=" vendor/chart.js/Chart.min.js "></script>
	<script src=" vendor/just-validate/js/just-validate.min.js "></script>
	<script src=" vendor/choices.js/public/assets/scripts/choices.min.js "></script>
	<!-- Main File-->
	<script src=" js/front.js "></script>
	<script>
		// ------------------------------------------------------- //
		//   Inject SVG Sprite - 
		//   see more here 
		//   https://css-tricks.com/ajaxing-svg-sprite/
		// ------------------------------------------------------ //
		function injectSvgSprite(path) {

			var ajax = new XMLHttpRequest();
			ajax.open(" GET ", path, true);
			ajax.send();
			ajax.onload = function(e) {
				var div = document.createElement(" div ");
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
	<link rel=" stylesheet " href=" https://use.fontawesome.com/releases/v5.7.1/css/all.css "
		integrity=" sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr " crossorigin=" anonymous ">

      <!-- price updater for concerent road  -->

      <!-- <script> 
	  
        var users = <?php // json_encode($value); ?>;
        document.getElementById(" cement ").value = users[0]; 
        document.getElementById(" mcent ").value = users[1];
        document.getElementById(" labourcharge ").value = users[3];
		document.getElementById(" agrigator ").value = users[2];
        document.getElementById(" bitumin ").value = users[4];
        document.getElementById(" layingCharge ").value = users[5];
        document.getElementById(" mixingCharge ").value = users[6];

      </script> -->


</body>

</html>