<!DOCTYPE html>
<html lang="en">
<head>
<title>Rooms</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Marimar Hotel template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
<link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/rooms.css">
<link rel="stylesheet" type="text/css" href="styles/rooms_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_content d-flex flex-column align-items-center justify-content-lg-end justify-content-center">
			
			<!-- Logo -->
			<div class="logo"><a href="#"><img class="logo_1" src="images/logo.png" alt=""><img class="logo_2" src="images/logo_2.png" alt=""><img class="logo_3" src="images/logo_3.png" alt=""></a></div>

			<!-- Main Nav -->
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About us</a></li>
					<li class="active"><a href="rooms.php">Rooms</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="food form.php">Order Food</a></li>
					<li><a href="feedbackform.php">Feed Back</a></li>
				</ul>
			</nav>

			<!-- Social -->
			<div class="social header_social">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li> <a href="https://www.instagram.com/zainsadiqeen/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				</ul>
			</div>

			<!-- Header Right -->
			<div class="header_right d-flex flex-row align-items-center justify-content-start">
				
				<!-- Search Activation Button -->

				<!-- Header Link -->
				<div class="header_link"><a href="form.php">Book Your Room Now</a></div>

				<!-- Hamburger Button -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>

			</div>

			<!-- Search Panel -->
			<div class="search_panel">
				<div class="search_panel_content d-flex flex-row align-items-center justify-content-start">
					<img src="images/search.png" alt="">
					<form action="#" class="search_form">
						<input type="text" class="search_input" placeholder="Type your search here" required="required">
					</form>
					<div class="search_close ml-auto d-flex flex-column align-items-center justify-content-center"><div></div></div>
				</div>
			</div>
		</div>
			
	</header>

	<!-- Logo Overlay -->

	<div class="logo_overlay">
		<div class="logo_overlay_content d-flex flex-column align-items-center justify-content-center">
			<div class="logo"><a href="#"><img src="images/logo_3.png" alt=""></a></div>
		</div>
	</div>

	<!-- Menu Overlay -->

	<div class="menu_overlay">
		<div class="menu_overlay_content d-flex flex-row align-items-center justify-content-center">
			
			<!-- Hamburger Button -->
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>

		</div>
	</div>

	<!-- Menu -->

	<div class="menu">
		<div class="menu_container d-flex flex-column align-items-center justify-content-center">

			<!-- Menu Navigation -->
			<nav class="menu_nav text-center">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About us</a></li>
					<li><a href="rooms.php">Rooms</a></li>
					<li><a href="blog.php">News</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
			<div class="button menu_button"><a href="form.html">book now</a></div>

			<!-- Menu Social -->
			<div class="social menu_social">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				</ul>
			</div>

		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/rooms.jpg" data-speed="0.8"></div>
		<div class="home_container d-flex flex-column align-items-center justify-content-center">
			<div class="home_title"><h1>Rooms</h1></div>
		</div>
	</div>

	<!-- Booking -->

	<div class="booking">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="booking_container d-flex flex-row align-items-end justify-content-start">
						<form action="#" class="booking_form">
							<div class="booking_form_container d-flex flex-lg-row flex-column align-items-start justify-content-start flex-wrap">
								<div class="booking_form_inputs d-flex flex-row align-items-start justify-content-between flex-wrap">
									<div class="booking_dropdown"><input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Check in" required="required"></div>
									<div class="booking_dropdown"><input type="text" class="datepicker booking_input booking_input_a booking_out" placeholder="Check out" required="required"></div>
									<div class="custom-select">
										<select>
											<option value="0">Adults</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="custom-select">
										<select>
											<option value="0">Children</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
								</div>
								<button class="booking_form_button ml-lg-auto">book now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Rooms -->

	<div class="rooms">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="card-columns">
						
						<!-- Room -->
						<div class="card">
							<img class="card-img-top" src="images/room_1.jpg" alt="Room image description">
							<div class="card-body">
								<div class="rooms_title"><h2>Luxury Single Suite</h2></div>
								<div class="rooms_text">
									<p>Superior luxury suite offers well designed spaces with block printed furnishings. The air conditioned living rooms are fitted with double sofa. All suites have balcony and a well equiped open kitchenette
								</div>
								<div class="rooms_list">
									<ul>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/check.png" alt="">
											<span>Beautiful view</span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/check.png" alt="">
											<span>Attached bathroom</span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/check.png" alt="">
											<span>Best services</span>
										</li>
									</ul>
								</div>
								<div class="rooms_price">Rs.1200/<span>Night</span></div>
								<div class="button rooms_button"><a href="form.html">book now</a></div>
							</div>
						</div>

						<!-- Room -->
						<div class="card">
							<img class="card-img-top" src="images/room_2.jpg" alt="Room image description">
							<div class="card-body">
								<div class="rooms_title"><h2>Luxury Double Suite</h2></div>
								<div class="rooms_text">
									<p>Ideal for two people, luxurious double rooms at Noor Palace overlook either courtyard or street. All rooms have double gazing, ensuring a calm and relaxing, luxurious environment for our guests. Double rooms have a double bed, an en-suite bathroom with bath, and seperate toilet.</p>
								</div>
								<div class="rooms_list">
									<ul>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/check.png" alt="">
											<span>Beautiful view</span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/check.png" alt="">
											<span>Attached bathroom</span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/check.png" alt="">
											<span>Best services</span>
										</li>
									</ul>
								</div>
								<div class="rooms_price">Rs.1500/<span>Night</span></div>
								<div class="button rooms_button"><a href="form.html">book now</a></div>
							</div>
						</div>

						<!-- Room -->
						<div class="card">
							<img class="card-img-top" src="images/room_3.jpg" alt="Room image description">
							<div class="card-body">
								<div class="rooms_title"><h2>Luxury Double Room</h2></div>
								<div class="rooms_text">
									<p>Ideal for 1 one or two people, double rooms at Noor Palace overlook either courtyard or street. All rooms have double gazing, ensuring a calm and relaxing environment for our guests. Double rooms have a double bed, an en-suite bathroom with bath, and seperate toilet.</p>
								</div>
								<div class="rooms_list">
									<ul>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/check.png" alt="">
											<span>Beautiful view.</span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/check.png" alt="">
											<span>Attached bathroom</span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/check.png" alt="">
											<span>Best services</span>
										</li>
									</ul>
								</div>
								<div class="rooms_price">Rs.1700/<span>Night</span></div>
								<div class="button rooms_button"><a href="form.html">book now</a></div>
							</div>
						</div>

						<!-- Room -->
						<div class="card card-special">
							<img class="card-img-top" src="images/room_4.jpg" alt="Room image description">
							<div class="card-special-panel">special offer</div>
							<div class="card-body">
								<div class="rooms_title"><h2>Budget Suite</h2></div>
								<div class="rooms_text">
									<p>Budget room which is smaller than our standard rooms and on an higher floor up to the 4th floor. Tasteful interior with a relaxing color scheme and atmosphere.</p>
								</div>
								<div class="rooms_list">
									<ul>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/check.png" alt="">
											<span>Beautiful view</span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/check.png" alt="">
											<span>Best services</span>
										</li>
										
									</ul>
								</div>
								<div class="rooms_price">Rs.1000/<span>Night</span></div>
								<div class="button rooms_button"><a href="form.html">book now</a></div>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>		
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_logo text-center">
						<a href="#"><img src="images/logo.png" alt=""></a>
					</div>
					<div class="footer_content">
						<div class="row">
							<div class="col-lg-4 footer_col">
								<div class="footer_info d-flex flex-column align-items-lg-end align-items-center justify-content-start">
									<div class="text-center">
										<div>Phone:</div>
										<div>+92-335-2486562</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 footer_col">
								<div class="footer_info d-flex flex-column align-items-center justify-content-start">
									<div class="text-center">
										<div>Address:</div>
										<div>Main Road, Kalam, Swat</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 footer_col">
								<div class="footer_info d-flex flex-column align-items-lg-start align-items-center justify-content-start">
									<div class="text-center">
										<div>Mail:</div>
										<div>khizartanveer1998@gmail.com</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="js/rooms.js"></script>
</body>
</html>
