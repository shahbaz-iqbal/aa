<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png" />

	<!-- loader-->
	<link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
	<title>Dashtreme - Multipurpose Bootstrap5 Admin Template</title>
</head>

<body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="wrapper">
		<header class="login-header shadow">
			<nav class="navbar navbar-expand-lg navbar-light bg-dark rounded fixed-top rounded-0 shadow-sm">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">
						<img src="{{ asset('assets/images/logo-img.png') }}" width="140" alt="" />
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent1">
						<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
							<li class="nav-item"> <a class="nav-link text-white" aria-current="page" href="#"><i class='bx bx-home-alt me-1'></i>Home</a>
							</li>
							<li class="nav-item"> <a class="nav-link text-white" href="#"><i class='bx bx-user me-1'></i>About</a>
							</li>
							<li class="nav-item"> <a class="nav-link text-white" href="#"><i class='bx bx-category-alt me-1'></i>Features</a>
							</li>
							<li class="nav-item"> <a class="nav-link text-white" href="#"><i class='bx bx-microphone me-1'></i>Contact</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<div class="d-flex align-items-center justify-content-center my-5">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
					<div class="col mx-auto">
						<div class="card mt-5">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="">Sign Up</h3>
										<p>Already have an account? <a href="{{ url('authentication-signin-with-header-footer') }}">Sign in here</a>
										</p>
									</div>
									<div class="d-grid">
										<a class="btn my-4 shadow-sm btn-light" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
                          <img class="me-2" src="{{ asset('assets/images/icons/search.svg') }}" width="16" alt="Image Description">
                          <span>Sign Up with Google</span>
											</span>
										</a> <a href="javascript:;" class="btn btn-light"><i class="bx bxl-facebook"></i>Sign Up with Facebook</a>
									</div>
									<div class="login-separater text-center mb-4"> <span>OR SIGN UP WITH EMAIL</span>
										<hr/>
									</div>
									<div class="form-body">
										<form class="row g-3">
											<div class="col-sm-6">
												<label for="inputFirstName" class="form-label">First Name</label>
												<input type="email" class="form-control" id="inputFirstName" placeholder="Jhon">
											</div>
											<div class="col-sm-6">
												<label for="inputLastName" class="form-label">Last Name</label>
												<input type="email" class="form-control" id="inputLastName" placeholder="Deo">
											</div>
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email Address</label>
												<input type="email" class="form-control" id="inputEmailAddress" placeholder="example@user.com">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text"><i class='bx bx-hide'></i></a>
												</div>
											</div>
											<div class="col-12">
												<label for="inputSelectCountry" class="form-label">Country</label>
												<select class="form-select" id="inputSelectCountry" aria-label="Default select example">
													<option selected>India</option>
													<option value="1">United Kingdom</option>
													<option value="2">America</option>
													<option value="3">Dubai</option>
												</select>
											</div>
											<div class="col-12">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms & Conditions</label>
												</div>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-light"><i class='bx bx-user'></i>Sign up</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
		<footer class="bg-dark shadow-sm p-2 text-center fixed-bottom">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<p class="mb-0">Gaussian Texture</p>
			<hr>
			<ul class="switcher">
				<li id="theme1"></li>
				<li id="theme2"></li>
				<li id="theme3"></li>
				<li id="theme4"></li>
				<li id="theme5"></li>
				<li id="theme6"></li>
			</ul>
			<hr>
			<p class="mb-0">Gradient Background</p>
			<hr>
			<ul class="switcher">
				<li id="theme7"></li>
				<li id="theme8"></li>
				<li id="theme9"></li>
				<li id="theme10"></li>
				<li id="theme11"></li>
				<li id="theme12"></li>
				<li id="theme13"></li>
				<li id="theme14"></li>
				<li id="theme15"></li>
			  </ul>
		</div>
	</div>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<script>
	$(".switcher-btn").on("click", function() {
	$(".switcher-wrapper").toggleClass("switcher-toggled")
	}), $(".close-switcher").on("click", function() {
		$(".switcher-wrapper").removeClass("switcher-toggled")
	}),


	$('#theme1').click(theme1);
	$('#theme2').click(theme2);
	$('#theme3').click(theme3);
	$('#theme4').click(theme4);
	$('#theme5').click(theme5);
	$('#theme6').click(theme6);
	$('#theme7').click(theme7);
	$('#theme8').click(theme8);
	$('#theme9').click(theme9);
	$('#theme10').click(theme10);
	$('#theme11').click(theme11);
	$('#theme12').click(theme12);
	$('#theme13').click(theme13);
	$('#theme14').click(theme14);
	$('#theme15').click(theme15);


	function theme1() {
	  $('body').attr('class', 'bg-theme bg-theme1');
	}

	function theme2() {
	  $('body').attr('class', 'bg-theme bg-theme2');
	}

	function theme3() {
	  $('body').attr('class', 'bg-theme bg-theme3');
	}

	function theme4() {
	  $('body').attr('class', 'bg-theme bg-theme4');
	}

	function theme5() {
	  $('body').attr('class', 'bg-theme bg-theme5');
	}

	function theme6() {
	  $('body').attr('class', 'bg-theme bg-theme6');
	}

	function theme7() {
	  $('body').attr('class', 'bg-theme bg-theme7');
	}

	function theme8() {
	  $('body').attr('class', 'bg-theme bg-theme8');
	}

	function theme9() {
	  $('body').attr('class', 'bg-theme bg-theme9');
	}

	function theme10() {
	  $('body').attr('class', 'bg-theme bg-theme10');
	}

	function theme11() {
	  $('body').attr('class', 'bg-theme bg-theme11');
	}

	function theme12() {
	  $('body').attr('class', 'bg-theme bg-theme12');
	}

	function theme13() {
	  $('body').attr('class', 'bg-theme bg-theme13');
	}

	function theme14() {
	  $('body').attr('class', 'bg-theme bg-theme14');
	}

	function theme15() {
	  $('body').attr('class', 'bg-theme bg-theme15');
	}
	</script>
</body>

</html>