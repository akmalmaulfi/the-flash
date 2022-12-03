<!DOCTYPE html>
<html class="no-js">

<head>

	<title>Member List | The Flash | E-sport Team</title>

	<!-- Smartphone Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{!! asset('img/logo/logo.png') !!}">
	<!-- Fontawesome Icon -->
	<link rel="stylesheet" href="{!! asset('library/themefisher-font/style.css') !!}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{!! asset('library/bootstrap/dist/css/bootstrap.min.css') !!}">
	<!-- Animate css -->
	<link rel="stylesheet" href="{!! asset('library/animate-css/animate.css') !!}">
	<!-- Magnific popup css -->
	<link rel="stylesheet" href="{!! asset('library/magnific-popup/dist/magnific-popup.css') !!}">
	<!-- Slick Carousel -->
	<link rel="stylesheet" href="{!! asset('library/slick-carousel/slick/slick.css') !!}">
	<link rel="stylesheet" href="{!! asset('library/slick-carousel/slick/slick-theme.css') !!}">
	<!-- css -->
	<link rel="stylesheet" href="{!! asset('css/landing/style.css') !!}">


</head>

<body id="home" data-spy="scroll" data-target=".navbar" data-offset="50">

	<!-- Loading -->
	<div id="preloader">
		<div class="preloader">
			<div class="sk-cube-grid">
				<div class="sk-cube sk-cube1"></div>
				<div class="sk-cube sk-cube2"></div>
				<div class="sk-cube sk-cube3"></div>
				<div class="sk-cube sk-cube4"></div>
				<div class="sk-cube sk-cube5"></div>
				<div class="sk-cube sk-cube6"></div>
				<div class="sk-cube sk-cube7"></div>
				<div class="sk-cube sk-cube8"></div>
				<div class="sk-cube sk-cube9"></div>
			</div>
		</div>
	</div>
	<!-- //Loading -->

	<!-- Welcome -->
	<section class="hero-area">
		<div class="block">

			<div>
					<img src="img/logo/logo.png" style=" width: auto; height: 150px;" alt="The Flash Logo"/>
			</div>

			<h1>Flash Esport</h1>
			<p>TheFlash eSport is an Indonesian Leading professional gaming organisation.<br>
				</p>
			<a href="{{ url('/logout') }}" class="btn btn-transparent">Sign out</a>
		</div>
	</section>
	<!-- //Welcome -->

	<!-- Fixed Navbar -->
	<header id="navigation" class="navbar navigation">
		<div class="container">
			<div class="navbar-header">

				<!-- Navbar button -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- //Navbar button -->

				<!-- logo -->
				<a class="navbar-brand logo" href="#home">
					<img src="img/logo/logo2.png" style="width: auto; height: 50px;" alt="The Flash Logo"/>
				</a>
				<!-- //logo -->
			</div>

			<!-- main nav -->
			<nav class="collapse navbar-collapse navbar-right" role="Navigation">
				<ul id="nav" class="nav navbar-nav navigation-menu">
					<li><a data-scroll href="{{ url('/member')}}">Home</a></li>
					<li><a href="{{ url('/listmember')}}">Member List</a></li>
				</ul>
			</nav>
			<!-- //main nav -->

		</div>
	</header>
	<!-- //Fixed Navbar -->

	<section class="portfolio section" id="merchandise">
		<div class="container">

			<!-- row -->
			<div class="row ">
				<div class="col-lg-12">

					<!-- title -->
					<div class="title text-center">
						<h2>Our Member <span class="color">Division</span></h2>
						<div class="border"></div>
					</div>
					<!-- //title -->

				</div>
			</div>
			<!-- //row -->

			<div class="row">
				<div class="col-md-12">
					<div class="portfolio-filter">
						<button type="button" data-filter="all">All</button>
						<button type="button" data-filter=".FreeFire">FreeFire</button>
						<button type="button" data-filter=".PUBG">PUBG</button>
						<button type="button" data-filter=".MobileLegends">Mobile Legend</button>
					</div>
				</div>
			</div>
			<div class="row portfolio-items-wrapper">

                @foreach($members as $member)
				<div class="mix col-md-4 {{ $member->game }}">
					<div class="portfolio-block">
						<img class="img-responsive" src="{{ asset('file/'.$member->foto) }}" alt="">
						<div class="caption">

							<a class="search-icon image-popup" data-effect="mfp-with-zoom"
								href="{{ asset('file/'.$member->foto) }}" data-lightbox="image-1">
								<i class="tf-ion-search"></i>
							</a>
							<h4><a href="">{{ $member->nama }}</a></h4>
							<p>
								<b>Nick : </b>{{ $member->ign }} <br>
								<b>Divisi : </b> {{ $member->game }} <br>
								<b>Role : </b> {{ $member->role }}

							</p>
						</div>
					</div>
                </div>
                @endforeach

			</div>

		</div>
		<!-- //container -->
	</section>
	<!-- //section -->

	<section id="contact-us" class="contact-us section-bg">
		<div class="container">
			<div class="row">

				<!-- title -->
				<div class="title text-center wow fadeIn" data-wow-duration="500ms">
					<h2>More <span class="color">Info</span></h2>
					<div class="border"></div>
				</div>
				<!-- //title -->

				<!-- Contact info -->
				<div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
					<h3>Contact Details</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi
						blanditiis ex explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel
						fugiat dicta laboriosam labore adipisci.</p>
					<div class="contact-details">
						<div class="con-info clearfix">
							<i class="tf-map-pin"></i>
							<span>Jl. Rawa Bebek rt 2 rw 18</span>
						</div>

						<div class="con-info clearfix">
							<i class="tf-ion-ios-telephone-outline"></i>
							<span>Phone: +62 8787 - 9981 - 7102</span>
						</div>

						<div class="con-info clearfix">
							<i class="tf-ion-ios-email-outline"></i>
							<span>Email: theflash@gmail.com</span>
						</div>

						<div class="con-info clearfix">
							<span style="color: #ff5275;">
								want to scream or turney please fill out the form on the side<br>
								<i class="tf-ion-arrow-right-a"></i>
							</span>
						</div>

					</div>
				</div>
				<!-- //Contact info -->

				<!-- Form -->
				<div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
					<form id="contact-form" method="post" action="sendmail.php" role="form">

						<div class="form-group">
							<input type="text" placeholder="Your Team" class="form-control" name="name" id="name">
						</div>

						<div class="form-group">
							<input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
						</div>

						<div class="form-group">
							<input type="date" class="form-control" name="subject" id="subject">
						</div>

						<div class="form-group">
							<textarea rows="6" placeholder="Description" class="form-control" name="description"
								id="description"></textarea>
						</div>

						<div id="mail-success" class="success">
							Thank you. Your email has been sent :)
						</div>

						<div id="mail-fail" class="error">
							Sorry, don't know what happened. Try later :(
						</div>

						<div id="cf-submit">
							<input type="submit" id="contact-submit" class="btn btn-transparent" value="Send">
						</div>

					</form>
				</div>
				<!-- //Form -->

			</div>
			<!-- //row -->
		</div>
		<!-- //container -->

	</section>
	<!-- //section -->


	<footer id="footer" class="bg-one">
		<div class="container">
			<div class="row wow fadeInUp" data-wow-duration="500ms">
				<div class="col-lg-12">

					<!-- Footer Social -->
					<div class="social-icon">
						<ul class="list-inline">
							<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-youtube"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-instagram"></i></a></li>
						</ul>
					</div>
					<!-- //Footer Social -->

					<!-- copyright -->
					<div class="copyright text-center">
						<a href="index.html">
							<img src="img/logo/logo.png" style=" width: auto; height: 60px;" alt="The Flash Logo"/>
						</a>
						<br />

						<p>Design And Developed by <a href="http://www.theflash.com"> The Flash Team.</a>
							<br>
							Copyright
							&copy; <script>
								document.write(new Date().getFullYear())
							</script>. All Rights Reserved.
						</p>
					</div>
					<!-- //copyright -->

				</div>
			</div>
			<!-- //row -->
		</div>
		<!-- //container -->
	</footer>
	<!-- //footer -->

	<!-- Main jQuery -->
	<script type="text/javascript" src="{!! asset('library/jquery/dist/jquery.min.js') !!}"></script>
	<!-- Bootstrap 3.1 -->
	<script type="text/javascript" src="{!! asset('library/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
	<!-- Slick Carousel -->
	<script type="text/javascript" src="{!! asset('library/slick-carousel/slick/slick.min.js') !!}"></script>
	<!-- Portfolio Filtering -->
	<script type="text/javascript" src="{!! asset('library/mixitup/dist/mixitup.min.js') !!}"></script>
	<!-- Smooth Scroll -->
	<script type="text/javascript" src="{!! asset('library/smooth-scroll/dist/js/smooth-scroll.min.js') !!}"></script>
	<!-- Magnific popup -->
	<script type="text/javascript" src="{!! asset('library/magnific-popup/dist/jquery.magnific-popup.min.js') !!}"></script>
	<!-- Sticky Nav -->
	<script type="text/javascript" src="{!! asset('library/Sticky/jquery.sticky.js') !!}"></script>
	<!-- Number Counter Script -->
	<script type="text/javascript" src="{!! asset('library/count-to/jquery.countTo.js') !!}"></script>
	<!-- wow.min Script -->
	<script type="text/javascript" src="{!! asset('library/wow/dist/wow.min.js') !!}"></script>
	<!-- Custom js -->
	<script type="text/javascript" src="{!! asset('js/script.js') !!}"></script>

</body>

</html>
